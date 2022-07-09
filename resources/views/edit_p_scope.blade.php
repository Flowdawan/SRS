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
                    <form action="{{ route('scope.post') }}" method="POST">
                        @csrf
                        <h1 class="display-3">Project scope</h1>
                        <p>What is project scope? Project scope is the part of project planning that involves
                            determining
                            and documenting a list of specific project goals, deliverables, tasks, costs and deadlines.
                            The
                            documentation of a project's scope is called a scope statement or terms of reference. It
                            explains the boundaries of the project, establishes responsibilities for each team member
                            and
                            sets up procedures for how completed work will be verified and approved.</p>
                        <p>Defining project scope requires input from the project stakeholders. They work with project
                            managers to establish the key elements of budget, objectives, quality and timeline.</p>

                        <div class="form-floating">
                        <textarea name="scope" class="form-control" placeholder="Leave a comment here"
                                  id="floatingTextarea2" style="height: 100px">{{ $project->scope ?? '' }}</textarea>
                            <label for="floatingTextarea2">Project scope:</label>
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
