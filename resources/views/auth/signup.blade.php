@extends('auth.app')



@section('content')
<main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Signup /  <a href="{{ route('login') }}">
                        <h3 class="card-header text-center">Signin</h3>
                    </a></h3>
                    <div class="card-body">
                        <form action="{{ route('user.registration') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="nickname" placeholder="Nickname" id="nickname" class="form-control"value="{{ old('nickname') }}">
                                @if ($errors->has('nickname'))
                                <span class="text-danger">{{ $errors->first('nickname') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-2">
                                <input type="text" name="email" placeholder="Email" id="email_address" class="form-control" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-2">
                                <input type="text" name="login" placeholder="Login" id="log_in" class="form-control" value="{{ old('login') }}">
                                @if ($errors->has('login'))
                                <span class="text-danger">{{ $errors->first('login') }}</span>
                                 @endif
                            </div>

                            <div class="form-group mb-2">
                                <input type="text" name="phone_number" placeholder="Phone number" id="phone" class="form-control"value="{{ old('phone_number') }}">
                                @if ($errors->has('phone_number'))
                                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-2">
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>


                            <div class="form-group mb-2">
                                <input type="password" name="password_confirmation" placeholder="Password Confirmation" id="passwordConf" class="form-control">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>


                            <div class="form-group mb-2">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember</label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection