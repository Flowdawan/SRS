@extends('layout.app')

@php
    $project = DB::table('projects')
        ->get()
        ->where('userid', auth()->user()->id)
@endphp
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

        <!-- SRS DOCUMENT -->
        @foreach($project as $project)

            <div class="container-lg">
                <div class="bg-transparent m-4 p-4">
                    <form action="{{ route('projectname.post') }}" method="POST">
                        @csrf
                        <h1 class="display-3">Project name </h1>
                        <p>“There are only two hard things in Computer Science: cache invalidation and naming things.” –
                            Phil Karlton</p>
                        <p>Names have power. They indicate tone and the intent. They can, if chosen well, inspire and
                            unify
                            action. They’re an important part of a company’s brand and tone of voice. That’s why
                            branding
                            consultants are so highly paid, if not always highly valued.</p>

                        <div class="form-floating">
                        <textarea name="projectname" class="form-control"
                                  placeholder="Leave a comment here"
                                  id="floatingTextarea">{{ $project->name ?? '' }}</textarea>
                            <label for="floatingTextarea">Project name:</label>
                        </div>


                        <div class="container-lg">
                            <div class="row">
                                <div class="col">
                                    <p></p>
                                </div>
                                <div class="col-6">
                                    <p></p>
                                </div>
                                <div class="col">
                                    <p></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p></p>
                                </div>
                                <div class="col-5">
                                    <p></p>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-secondary btn-sm">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach

    </main>
@endsection
