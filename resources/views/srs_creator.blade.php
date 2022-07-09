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

    @foreach($project as $project)

        <!-- SRS DOCUMENT -->
            <div class="container-lg">
                <div class="bg-transparent m-4 p-4">
                    <h1 class="display-3">Your SRS document</h1>
                    <p>Here you can create your own SRS document.
                        <mark>It is easy!</mark>
                        Just choose between functional and non-functional requirements. You can save your document and
                        edit it later. Have fun!
                    </p>

                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                    Project Name #1
                                </button>
                            </h2>
                            <div onclick="window.location='{{ url("editname") }}'" id="panelsStayOpen-collapseOne"
                                 class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    @if(!empty($project->name))
                                        <strong>
                                            {{ $project->name }}
                                        </strong>
                                    @else
                                        <strong>You don't have a project name yet. </strong>Once you add one, it will be
                                        displayed here.
                                    @endif
                                    <p></p>
                                    <button type="button" class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                    Project Description #2
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                 aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">

                                    @if(!empty($project->description))
                                        <strong>
                                            {{ $project->description }}
                                        </strong>
                                    @else
                                        <strong>You don't have a project description yet.</strong> Once you add one, it
                                        will be displayed here.
                                    @endif
                                    <p></p>
                                    <button onclick="window.location='{{ url("editdescription") }}'" type="button"
                                            class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                    Team #3
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                 aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    @if(!empty($project->team_1) || !empty($project->team_2) || !empty($project->team_3))
                                        <strong>
                                            <ol>
                                                @if(!empty($project->team_1))
                                                    <li>
                                                        {{ $project->team_1 }}
                                                    </li>
                                                @endif
                                                @if(!empty($project->team_2))
                                                    <li>
                                                        {{ $project->team_2 }}
                                                    </li>
                                                @endif
                                                @if(!empty($project->team_3))
                                                    <li>
                                                        {{ $project->team_3 }}
                                                    </li>
                                            @endif
                                        </strong>
                                    @else
                                        <strong>You have not added any team members yet.</strong> Once you do so, it
                                        will be displayed here.
                                    @endif
                                    <p></p>
                                    <button onclick="window.location='{{ url("editteam") }}'" type="button"
                                            class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseFour">
                                    Must requirements #4
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                                 aria-labelledby="panelsStayOpen-headingFour">
                                <div class="accordion-body">
                                    @if(!empty($project->must_1) || !empty($project->must_2) || !empty($project->must_3))
                                        <strong>
                                            <ol>
                                                @if(!empty($project->must_1))
                                                    <li>
                                                        {{ $project->must_1 }}
                                                    </li>
                                                @endif
                                                @if(!empty($project->must_2))
                                                    <li>
                                                        {{ $project->must_2 }}
                                                    </li>
                                                @endif
                                                @if(!empty($project->must_3))
                                                    <li>
                                                        {{ $project->must_3 }}
                                                    </li>
                                            @endif
                                        </strong>
                                    @else
                                        <strong>You have not added any must requirements yet.</strong> Once you add
                                        some, it will be displayed here.
                                    @endif
                                    <button onclick="window.location='{{ url("editmust") }}'" type="button"
                                            class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseFive">
                                    Should requirements #5
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                                 aria-labelledby="panelsStayOpen-headingFive">
                                <div class="accordion-body">
                                    @if(!empty($project->should_1) || !empty($project->should_2) || !empty($project->should_3))
                                        <strong>
                                            <ol>
                                                @if(!empty($project->should_1))
                                                    <li>
                                                        {{ $project->should_1 }}
                                                    </li>
                                                @endif
                                                @if(!empty($project->should_2))
                                                    <li>
                                                        {{ $project->should_2 }}
                                                    </li>
                                                @endif
                                                @if(!empty($project->should_3))
                                                    <li>
                                                        {{ $project->should_3 }}
                                                    </li>
                                            @endif
                                        </strong>
                                    @else
                                        <strong>You have not added any should requirements yet.</strong> Once you add
                                        some, it will be displayed here.
                                    @endif
                                    <button onclick="window.location='{{ url("editshould") }}'" type="button"
                                            class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseSix">
                                    Could requirements #6
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                                 aria-labelledby="panelsStayOpen-headingSix">
                                <div class="accordion-body">
                                    @if(!empty($project->could_1) || !empty($project->could_2) || !empty($project->could_3))
                                        <strong>
                                            <ol>
                                                @if(!empty($project->could_1))
                                                    <li>
                                                        {{ $project->could_1 }}
                                                    </li>
                                                @endif
                                                @if(!empty($project->could_2))
                                                    <li>
                                                        {{ $project->could_2 }}
                                                    </li>
                                                @endif
                                                @if(!empty($project->could_3))
                                                    <li>
                                                        {{ $project->could_3 }}
                                                    </li>
                                            @endif
                                        </strong>
                                    @else
                                        <strong>You have not added any could requirements yet.</strong> Once you add
                                        some, it will be displayed here.
                                    @endif
                                    <p></p>
                                    <button onclick="window.location='{{ url("editcould") }}'" type="button"
                                            class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseSeven">
                                    Won't requirements #7
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse"
                                 aria-labelledby="panelsStayOpen-headingSeven">
                                <div class="accordion-body">
                                    @if(!empty($project->wont_1) || !empty($project->wont_2) || !empty($project->wont_3))
                                        <strong>
                                            <ol>
                                                @if(!empty($project->wont_1))
                                                    <li>
                                                        {{ $project->wont_1 }}
                                                    </li>
                                                @endif
                                                @if(!empty($project->wont_2))
                                                    <li>
                                                        {{ $project->wont_2 }}
                                                    </li>
                                                @endif
                                                @if(!empty($project->wont_3))
                                                    <li>
                                                        {{ $project->wont_3 }}
                                                    </li>
                                            @endif
                                        </strong>
                                    @else
                                        <strong>You have not added any won't requirements yet.</strong> Once you add
                                        some, it will be displayed here.
                                    @endif
                                    <p></p>
                                    <button onclick="window.location='{{ url("editwont") }}'" type="button"
                                            class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                                        </svg>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseEight">
                                    Project scope #8
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse"
                                 aria-labelledby="panelsStayOpen-headingEight">
                                <div class="accordion-body">
                                    @if(!empty($project->scope))
                                        <strong>
                                            {{ $project->scope }}
                                        </strong>
                                    @else
                                        <strong>You have not defined your project scope yet.</strong> Once you do so, it
                                        will be displayed here.
                                    @endif
                                    <p></p>
                                    <button onclick="window.location='{{ url("editscope") }}'" type="button"
                                            class="btn btn-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                                        </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-secondary btn-sm mt-3">Save the document</button>
                    </div>

                </div>
            </div>
            </div>
            </div>
            </div>
        @endforeach
    </main>
@endsection
