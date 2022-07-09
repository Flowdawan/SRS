@extends('layout.app')

@section('content')
<main>

<!-- NAVBAR STARTS-->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="images/logo.svg" width="30" height="30"> SRS Manager Tool</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <a class="nav-link" href="#">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
<!-- NAVBAR ENDS -->


<!-- SRS DOCUMENT -->
  <div class="container-lg">
    <div class="bg-transparent m-4 p-4">
        <h1 class="display-3">Project description</h1>
        <p>A project description is a high-level overview of why you're doing a project. The document explains a project's objectives and its essential qualities. Think of it as the elevator pitch that focuses on what and why without delving into how.</p>
        <p>The tricky part is figuring out what doesn’t belong in the project description. The description should focus on goals, objectives, and the overall approach, but you don’t need to include lists of tasks, an extensive background, or research analysis. In general, the project description is broad; you’ll include more detail in the project plan.</p>

        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Project description:</label>
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
                <button type="button" class="btn btn-secondary btn-sm">Save changes</button>
              </div>
            </div>
          </div>

    </div>
</div>


</main>
@endsection