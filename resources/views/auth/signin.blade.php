@extends('auth.app')

@section('content')
    <main class="cotainer mt-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <h3 class="card-header text-center">Signin /   <a href="{{ route('register') }}">
                        <h3 class="card-header text-center">Signup</h3>
                    </a></h3>
                   
                    <div class="card-body">
                        <form method="POST" action="{{ route('signin.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="login" placeholder="Login" id="login" class="form-control">
                                @if ($errors->has('login'))
                                    <span class="text-danger">{{ $errors->first('login') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">


                                <div class="form-group mb-3">
                                    <input type="password" name="password" placeholder="Password" id="password"
                                        class="form-control" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-success">Login</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
