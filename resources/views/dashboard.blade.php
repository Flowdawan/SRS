@extends('layout.app')

@section('content')

    <main>
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

        <div class="container py-4">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">What is SRS?</h1>
                    <p class="col-md-8 fs-4">A software requirements specification (SRS) is a document that describes
                        what the software will do and how it will be expected to perform. It also describes the
                        functionality the product needs to fulfill all stakeholders (business, users) needs.</p>
                    <button class="btn btn-primary btn-lg" type="button">Learn more</button>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark rounded-3">
                        <h2>Create SRS document</h2>
                        <p>Here you can create your srs document. Our tool guides you through all important points and
                            allows you to review must, should, and could criteria. Your tutor will have access to your
                            SRS document in order to track your progress.</p>
                        <button class="btn btn-outline-light" type="button"
                                onclick="window.location='{{ url("start") }}'">Start
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Edit</h2>
                        <p>This function allows to review and edit your SRS document. After implementing your must,
                            should and could requirements, do not forget to check, so your tutor can follow your
                            progress.</p>
                        <button class="btn btn-outline-secondary" onclick="window.location='{{ url("start") }}'"
                                type="button">Review
                        </button>
                    </div>
                </div>
            </div>

            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; 2022
            </footer>
        </div>
        </div>
    </main>

@endsection
