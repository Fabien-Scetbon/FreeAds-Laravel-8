<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ad;
use App\Models\Category;
use App\Models\User;

// use App\Http\Controllers\AdController;

class IndexController extends Controller
{
    public function index($page = 1)
    {
        $limit = 10;
        $offset = ($page * $limit) - $limit;
        $ads = Ad::all()->skip($offset)->take($limit);
        $count = Ad::all()->count();
        $categories = Category::all();
        $cities = Ad::select('location')->distinct()->get();

        $user = User::find(4); // pour prog crud user

        // dd($user);
        // dd($categories[$ads[6]->category_id]->name); // sans passer par la fonction category() dans modele
        // dd(Ad::find(6)->category->name);             // en passant par ...
        // on n'a pas acces a $ad ici sinon $ad->category->name


        return view('index', [
            'categories' => $categories,
            'ads' => $ads,
            'count' => $count,
            'limit' => $limit,
            'page' => $page,
            'cities' => $cities,
            'user' => $user // pour prog crud user
        ]);
    }

    public function displayad($ad_id)
    {
        $ad = Ad::where('id', $ad_id)->first();
        $user_id = Ad::select('user_id')->where('id', $ad_id)->first();
        $user = User::where('id', $user_id->user_id)->first();
        $nbad = AD::where('user_id', $user_id->user_id)->count();
        return view('ads.ad', [
            'ad' => $ad,
            'user' => $user,
            'nbad' => $nbad,
        ]);
    }

    public function filter(Request $request)
    {
        $page = 1;
        $limit = 10;
        $offset = ($page * $limit) - $limit;
        $ads = Ad::all()->skip($offset)->take($limit);
        $count = Ad::all()->count();
        $categories = Category::all();
        $cities = Ad::select('location')->distinct()->get();
        $user = User::find(4); // pour prog crud user
        $message = null;
       
        //dd($ads);
        //dd($request->input('searchbar'));
        //dd($request->input('category'));

        if ($request->input('searchbar') !== NULL) {

            $search_product = Ad::where('title', 'like', '%' . $request->input('searchbar') . '%')->exists();

            if ($search_product) {

                $ads = Ad::where('title', 'like', '%' . $request->input('searchbar') . '%')->get();
                $count = count($ads);

            } else {

                $message = 'Aucun résultat ne correspond à ta recherche.';
            }
        } elseif ($request->input('category') !== NULL) {

            $search_product = Ad::where('category_id', $request->input('category'))->exists();
            //dd($search_product);

            if ($search_product) {

                $ads = Ad::where('category_id', $request->input('category'))->get();
                $count = count($ads);

                //dd($ads);
            } else {

                $message = 'Aucun résultat ne correspond à ta recherche.';
            }
        } elseif ($request->input('location') !== NULL) {

            $search_product = Ad::where('location', $request->input('location'))->exists();

            if ($search_product) {

                $ads = Ad::where('location', $request->input('location'))->get();
                $count = count($ads);
            } else {

                $message = 'Aucun résultat ne correspond à ta recherche.';
            }
        }

        return view('index', [
            'categories' => $categories,
            'ads' => $ads,
            'count' => $count,
            'limit' => $limit,
            'cities' => $cities,
            'message' => $message,
            'user' => $user,
            'page' => $page,

        ]);
    }

    public function public($nickname)
    {
        $user = User::where('nickname', $nickname)->first();
        $ads = Ad::where('user_id', $user->id)->get();
        $nbad = Ad::where('user_id', $user->id)->count();
        $nbsell = random_int(1, 10);

        return view('user.public-profile', [
            'user' => $user,
            'nbad' => $nbad,
            'nbsell' => $nbsell,
            'ads' => $ads,
        ]);
    }

    public function profile($nickname)
    {
        $user = User::where('nickname', $nickname)->first();
        $nbad = Ad::where('user_id', $user->id)->count();
        $nbsell = random_int(1, 10);

        return view('user.profile', [
            'user' => $user,
            'nbad' => $nbad,
            'nbsell' => $nbsell,
        ]);
    }

    public function displayuser($nickname)
    {
        $user = User::where('nickname', $nickname)->first();
        $ads_user = Ad::where('user_id', $user->id)->get();
        return view('user.user', [
            'user' => $user,
            'ads_user' => $ads_user,
        ]);
    }

    public function create($nickname)
    {
        $categories = Category::all();
        $user = User::where('nickname', $nickname)->first();

        return view('user.add', [
            'user' => $user,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request, $nickname)
    {
        $request->validate([

            'title' => 'bail|required|unique:ads|string|regex:/^[^@"<>$*€£`+=\/#]+$/', // ajouter bail pour message erreur de la 1ere erreur seulement   
            'description' => 'bail|required|string|regex:/^[^@"<>$*€£`+=\/#]+$/',
            'picture' => ['bail', 'required', 'string'],
            'price' => 'bail|required|numeric|gt:0',
            'location' => 'bail|required|string|regex:/^[^@"<>$*€£`+=\/#]+$/',
        ]);

        $user_id = User::select('id')->where('nickname', $nickname)->first();  // ['id']=> 4 }

        Ad::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'picture' => $request->input('picture'),
            'price' => $request->input('price'),
            'location' => $request->input('location'),
            'user_id' => $user_id->id,
            'category_id' => $request->input('category_id')
        ]);

        $message = 'Ton jeu a bien été ajouté !';

        $user = User::where('nickname', $nickname)->first();
        $ads_user = Ad::where('user_id', $user->id)->get();

        return view('user.user', [
            'user' => $user,
            'ads_user' => $ads_user,
            'message' => $message,
        ]);
    }

    public function edit($nickname, $ad_id)
    {
        $ad = Ad::findOrFail($ad_id);
        $categories = Category::all();
        $user = User::where('nickname', $nickname)->first();

        return view('user.update', [
            'ad' => $ad,
            'categories' => $categories,
            'user' => $user,
        ]);
    }

    public function update(Request $request, $nickname, $id)
    {
        $ad = Ad::find($id);

        if ($request->input('title')) { // n'update que les champs modifiés sinon NULL
            $request->validate([

                'title' => 'bail|required|string|regex:/^[^@"<>$*€£`+=\/#]+$/', // ajouter bail pour message erreur de la 1ere erreur seulement   
            ]);

            $ad->title = $request->input('title');
        }
        if ($request->input('description')) {
            $request->validate([
                'description' => 'bail|required|string|regex:/^[^@"<>$*€£`+=\/#]+$/',
            ]);
            $ad->description = $request->input('description');
        }
        if ($request->input('picture')) {
            $request->validate([
                'picture' => ['bail', 'required', 'string'],
            ]);
            $ad->picture = $request->input('picture');
        }
        if ($request->input('price')) {
            $request->validate([
                'price' => 'bail|required|numeric|gt:0',
            ]);
            $ad->price = $request->input('price');
        }
        if ($request->input('location')) {
            $request->validate([
                'location' => 'bail|required|string|regex:/^[^@"<>$*€£`+=\/#]+$/',
            ]);
            $ad->location = $request->input('location');
        }

        if ($request->input('category_id')) {

            $ad->category_id = $request->input('category_id');
        }

        $result = $ad->save();

        $message = $result ? 'Ton jeu a bien été mis à jour !' : 'Un problème est survenu lors de la mise à jour !';

        $user = User::where('nickname', $nickname)->first();
        $ads_user = Ad::where('user_id', $user->id)->get();

        return view('user.user', [
            'user' => $user,
            'ads_user' => $ads_user,
            'message' => $message,
        ]);
    }

    public function destroy($nickname, $id_ad)
    {

        $ad = Ad::find($id_ad);
        $result = $ad->delete();

        $user = User::where('nickname', $nickname)->first();
        $ads_user = Ad::where('user_id', $user->id)->get();

        if ($result) {
            $message = 'Ton jeu a bien été supprimé !';
        } else {
            $message = 'Un problème est survenu lors de la suppression';
        }

        return view('user.user', [
            'user' => $user,
            'ads_user' => $ads_user,
            'message' => $message,
        ]);
    }

    public function privateprofile($nickname)
    {

        $user = User::where('nickname', $nickname)->first();
        $ads = Ad::where('user_id', $user->id)->get();
        $nbad = Ad::where('user_id', $user->id)->count();
        $nbsell = random_int(1, 10);

        return view('user.private-profile', [
            'user' => $user,
            'nbad' => $nbad,
            'nbsell' => $nbsell,
            'ads' => $ads,
        ]);
    }

    public function edituser($nickname)
    {
        $user = User::where('nickname', $nickname)->first();

        return view('user.profile-update', [
            'user' => $user,
        ]);
    }

    public function updateuser(Request $request, $nickname)
    {

        $user = User::where('nickname', $nickname)->first();
        $login_exists = User::where('id', '!=', $user->id)->where('login', $request->input('login'))->first();
        $email_exists = User::where('id', '!=', $user->id)->where('email', $request->input('email'))->first();


        if (isset($login_exists)) {
            $message = 'Ce Login est déja utilisé !';

            return view('user.profile-update', [
                'message' => $message,
                'user' => $user,
            ]);
        } elseif (isset($email_exists)) {
            $message = 'Cet Email est déja utilisé !';
            return view('user.profile-update', [
                'message' => $message,
                'user' => $user,
            ]);
        } else {
            $user->login = $request->input('login');
            $user->email = $request->input('email');
            $user->phone_number = $request->input('phone_number');
            $user->nickname = $request->input('nickname');
            $result = $user->save();
            if ($result) {
                $message = 'Mise à jour réussie !';
            } else {
                $message = 'Un problème est survenu lors de la mise à jour !';
            }

            $ads = Ad::where('user_id', $user->id)->get();
            $nbad = Ad::where('user_id', $user->id)->count();
            $nbsell = random_int(1, 10);

            return view('user.private-profile', [
                'message' => $message,
                'user' => $user,
                'nbad' => $nbad,
                'nbsell' => $nbsell,
                'ads' => $ads,
            ]);
        }
    }
}
