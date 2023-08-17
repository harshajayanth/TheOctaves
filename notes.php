<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="notes.css">
    <link rel="icon" type="image/x-icon" href="images/logocrop.png">
    <title>The Octaves - Notes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <a class="navbar-brand text-decoration-none" href="http://localhost/theoctaves/#home">
        <span class="img-fluid" data-toggle="tooltip" data-placement="bottom" title="Home"><img
                    src="images/logocrop.png" width="40" height="40"></span>
    </a>
    <div class="navbar-header">
        <a href="#" id="brand" class="text-decoration-none"><h1 class="h2 bg-violet">NOTES</h1></a>
    </div>
</nav>
<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <div class="jumbotron bg-dark">
                <div class="row">
                <div class="col-10" id="pianoimg">
                    <img src="images/Piano.png" class="img-thumbnail">
                </div>
                <div class="mb-1 col-10" id="pianokeys">
                    <div class="ml-4">
                        <button class="ml-1 fade-in-btn rounded btn btn-sm btn-outline-secondary" data-target="Db" data-key="w">C#</button>
                        <button class="ml-3 fade-in-btn rounded btn btn-sm btn-outline-secondary" data-target="Eb" data-key="e">D#</button>
                        <button class="ml-5 fade-in-btn rounded btn btn-sm btn-outline-secondary" data-target="Gb" data-key="t">F#</button>
                        <button class="ml-3 fade-in-btn rounded btn btn-sm btn-outline-secondary" data-target="Ab" data-key="y">G#</button>
                        <button class="ml-3 fade-in-btn rounded btn btn-sm btn-outline-secondary" data-target="Bb" data-key="u">A#</button>
                    </div>
                    <div class="pt-1">
                        <button class="fade-in-btn1 rounded btn btn-lg btn-outline-primary" data-target="C" data-key="a">C</button>
                        <button class="fade-in-btn1 rounded btn btn-lg btn-outline-primary" data-target="D" data-key="s">D</button>
                        <button class="fade-in-btn1 rounded btn btn-lg btn-outline-primary" data-target="E" data-key="d">E</button>
                        <button class="fade-in-btn1 rounded btn btn-lg btn-outline-primary" data-target="F" data-key="f">F</button>
                        <button class="fade-in-btn1 rounded btn btn-lg btn-outline-primary" data-target="G" data-key="g">G</button>
                        <button class="fade-in-btn1 rounded btn btn-lg btn-outline-primary" data-target="A" data-key="h">A</button>
                        <button class="fade-in-btn1 rounded btn btn-lg btn-outline-primary" data-target="B" data-key="j">B</button>
                    </div>
                    <div class="pt-3 text-center text-secondary"><p>Virtual Piano</p></div>
                </div>
                    <div class="col-2 pt-3">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item mr-2">
                                <a class="nav-link active" data-toggle="tab" id="imgbtn" type="button" aria-selected="true"><h6
                                            class="text-center text-white"><span class="material-icons">piano</span></h6></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" id="keysbtn" type="button" aria-selected="false"><h6
                                            class="text-center text-white"><span class="material-icons">music_note</span></h6></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 fade-in-text">
            <h6 class="mt-4 h5 text-black"><span class="bg-violet">An octave</span> refers to a specific range of notes spanning eight letter names on the piano keyboard. As shown in picture from C note to next C note denoted with red mark.</h6>
            <h6 class="pt-2 h5 text-success">An Octave consists of :</h6>
            <h6 class="pt-2 h5 text-black">White Keys :&nbsp;<span class="text-primary">C D E F G A B</span></h6>
            <h6 class="h5 text-black">Black Keys :&nbsp;<span class="text-primary">C# D# F# G# A#</span></h6>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
        <div class="jumbotron bg-dark">
            <div class="row">
                <div class="col-4">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item" id="content1">
                            <a class="nav-link active" data-toggle="tab" href="#handpos" type="button" aria-selected="true">
                                <p class="text-center text-white">Hand Positions</p></a>
                        </li>
                        <li class="nav-item" id="content2">
                            <a class="nav-link" data-toggle="tab" href="#pianopos" type="button" aria-selected="false">
                                <p class="text-center text-white">Piano Poisture</p></a>
                        </li>
                        <li class="nav-item" id="content3">
                            <a class="nav-link" data-toggle="tab" href="#bodypos" type="button" aria-selected="false">
                                <p class="text-center text-white">Body Position</p></a>
                        </li>
                    </ul>
                </div>
                <div class="col-8 tab-content">
                    <div class="tab-pane fade show active" id="handpos" role="tabpanel">
                        <img src="images/handposition.jpg" width="300" class="img-thumbnail">
                    </div>
                    <div class="tab-pane fade" id="pianopos" role="tabpanel">
                        <img src="images/Pianopoisture.jpeg" height="300" class="img-thumbnail">
                    </div>
                    <div class="tab-pane fade" id="bodypos" role="tabpanel">
                        <img src="images/Bodyposition.png" height="300" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-6 tab-content">
            <h5 class="mt-4" id="content"></h5>
        </div>
    </div>
</div>
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
<script src="js/notes.js"></script>
</html>