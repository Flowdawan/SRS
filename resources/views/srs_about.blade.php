@extends('layout.app')

@section('content')
    <main>

        <!-- NAVBAR STARTS-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url("/dashboard") }}"><img src="images/logo.svg" width="30"
                                                                            height="30"> SRS Manager Tool</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link" href="{{ url("/contactus") }}">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/logout') }}" id="logout">Logout</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- NAVBAR ENDS -->

        <!-- Your about Text -->
        <div class="container-lg">

        </div>

    </main>
@endsection
