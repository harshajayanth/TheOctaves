<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logocrop.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="index.css">
    <title>The Octaves</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light navbar-light shadow-sm">
    <div class="container-fluid">
        <div class="navbar-header">
            <img src="images/logocrop.png" class="img-fluid" width="60" height="30">&nbsp;
            <a class="navbar-brand" href="#"><h4 class="pt-2 text-success">The Octaves</h4></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav">
                <li class="nav-item active"><a class="nav-link" id="home" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#work" id="work">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact" id="contact">Contact</a></li>
            </ul>
        </div>
        <div class="justify-content-end" id="gallerytabs">
            <ul class="nav nav-pills nav-fill" role="tablist">
                <li class="nav-item mr-2">
                    <a class="nav-link active" data-toggle="tab" href="#covers" type="button" aria-selected="true"><h6
                                class="text-center font-weight-bold">Covers</h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#remix" type="button" aria-selected="false"><h6
                                class="text-center font-weight-bold">Remix</h6></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-3" id="homepage">
    <div class="jumbotron jumbotron1">
        <div class="head">
            <h1 class="text-white">Welcome to Piano Learning</h1>
            <p class="text-white">Learn to play the piano with our comprehensive lessons and resources.</p>
        </div>
    </div>

    <nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link active" data-toggle="tab" role="tab" aria-current="page" href="#bglessons">Beginner
            Lessons</a>
        <a class="nav-item nav-link" data-toggle="tab" role="tab" aria-current="page" href="#genres">Genres</a>
    </nav>

    <div class="tab-content">
        <div class="mt-4 tab-pane fade show active" id="bglessons" role="tabpanel">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-dark border-warning bg-yellow mb-3" style="max-width: 18rem;">
                        <h3 class="card-header">Notes & Octaves</h3>
                        <div class="card-body">
                            <p class="card-text">Piano Octaves and Notes are explained here.</p>
                            <a href="http://localhost/theoctaves/notes.php" target="_self"
                               class="btn btn-sm btn-warning">View Lessons</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-dark border-success bg-green mb-3" style="max-width: 18rem;">
                        <h3 class="card-header">Scales</h3>
                        <div class="card-body">
                            <p class="card-text">Piano Scales are explained here.</p><br>
                            <a href="http://localhost/theoctaves/scales.php" target="_self"
                               class="btn btn-sm btn-success">View Lessons</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-dark border-primary bg-skyblue mb-3" style="max-width: 18rem;">
                        <h3 class="card-header">Chords</h3>
                        <div class="card-body">
                            <p class="card-text">Basic Piano Chords are explained here.</p>
                            <a href="http://localhost/theoctaves/chords.php" target="_self"
                               class="btn btn-sm btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 tab-pane fade show" id="genres" role="tabpanel">
            <div class="mt-4 container">
                <div class="row">
                    <div class="col-3">
                        <div class="jumbotron jumbotron2" href="#indianragas">
                            <h4 class="text-white font-weight-bold text-center shadow-lg">Indian Ragas</h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="jumbotron jumbotron3" href="#jazzpiano">
                            <h4 class="text-white font-weight-bold text-center shadow-lg">Jazz Piano</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="workpage"><?php include "mywork.php"; ?></div>
<div id="contactpage"><?php include "contact.php" ?></div>

</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="DataTables/datatables.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
<script src="scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
<script src="js/index.js"></script>
</html>
