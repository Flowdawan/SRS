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
                    <form action="{{ route('should.post') }}" method="POST">
                        @csrf
                        <h1 class="display-3">Should Requirements</h1>
                        <p>Should requirements:</p>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Should 1:</span>
                            </div>
                            <input value="{{ $project->should_1 ?? '' }}" type="text" name="should_1"
                                   class="form-control" aria-label="Sizing example input"
                                   aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Should 2:</span>
                            </div>
                            <input value="{{ $project->should_2 ?? '' }}" type="text" name="should_2"
                                   class="form-control" aria-label="Sizing example input"
                                   aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Should 3:</span>
                            </div>
                            <input value="{{ $project->should_3 ?? '' }}" type="text" name="should_3"
                                   class="form-control" aria-label="Sizing example input"
                                   aria-describedby="inputGroup-sizing-default">
                        </div>

                        <button type="button" class="btn btn-outline-success btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                            </svg>
                        </button>
                        <button type="submit" class="btn btn-secondary btn-sm">Save changes</button>
                    </form>

                </div>
            </div>

        @endforeach
    </main>
@endsection
