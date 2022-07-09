@extends('layout.app')

@section('css')
<link href="{{ url('/css/register.css') }}" rel="stylesheet"/>
@endsection

@section('content')

<main class="form-register">
    <form id="registerform" action="{{ route('register.post') }}" method="POST">
        @csrf
        <img class="mb-4" src="images/logo.svg" alt="" width="72" height="57" />
        <h1 class="h3 mb-3 fw-normal">Registration</h1>
        <div class="form-floating">
            <input
                type="email"
                id="email"
                name="email"
                class="form-control"
                placeholder="name@example.com"
                required
            />
            <label for="floatingInput">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-floating">
            <input
                type="first_name"
                class="form-control"
                id="firstname"
                name="firstname"
                placeholder="name@example.com"
                required
            />
            <label for="floatingInput">First name</label>
            @if ($errors->has('firstname'))
                <span class="text-danger">{{ $errors->first('firstname') }}</span>
            @endif
        </div>
        <div class="form-floating">
            <input
                type="last_name"
                id="lastname"
                name="lastname"
                class="form-control"
                placeholder="name@example.com"
                required
            />
            <label for="floatingInput">Last name</label>
            @if ($errors->has('lastname'))
                <span class="text-danger">{{ $errors->first('lastname') }}</span>
            @endif
        </div>
        <div class="form-floating">
            <input
                type="password"
                id="password"
                name="password"
                class="form-control"
                placeholder="Password"
                minlength="6"
                required
            />
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <button type="submit" class="w-100 btn btn-lg btn-primary" id="register_btn">
            Register
        </button>
    </form>

    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
</main>
@endsection