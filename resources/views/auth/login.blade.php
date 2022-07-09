@extends('layout.app')

@section('css')
    <link href="{{ url('/css/signin.css') }}" rel="stylesheet"/>
@endsection

@section('bodyclass', 'text-center')
@section('content')

    <main class="form-signin">

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <img class="mb-4" src="images/logo.svg" alt="" width="72" height="57"/>
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="name@example.com"
                />
                <label for="floatingInput">Email address</label>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-floating">
                <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="Password"
                />
                <label for="floatingPassword">Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" value="remember"/> Remember me
                </label>
            </div>
            <button type="submit" id="login" class="w-100 btn btn-lg btn-primary">Sign in</button>
        </form>
        <button type="button" id="registration" class="w-100 btn btn-lg btn-primary"
                onclick="window.location='{{ url("registration") }}'">To registration
        </button>

        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </main>
@endsection
