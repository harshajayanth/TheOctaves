<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" type="image/x-icon" href="images/logocrop.png">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="scales.css">
    <title>The Octaves - Scales</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
    .scaleimg:hover{
        opacity: 80%;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-ligh shadow-sm">
    <a class="navbar-brand text-decoration-none" href="http://localhost/theoctaves/#home">
        <span class="img-fluid"data-toggle="tooltip" data-placement="bottom" title="Home"><img src="images/logocrop.png"width="40" height="40"></span>
    </a>
    <div class="navbar-header">
        <a href="#" id="brand" class="text-decoration-none text-success"><h1 class="h2">SCALES</h1></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <!--SEARCH SCALES-->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 text-success font-weight-bold" id="ser" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
</nav>
<!--ViewPhoto-->
<div class="modal fade" id="viewphoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title text-success w-100 font-weight-bold" id="modalheader"></h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body justify-content-center d-flex" id="photobody"></div>
        </div>
    </div>
</div>
<div class="container-fluid mt-4" id="scalesbody"></div>
<div class="container-fluid mt-4" id="scaleserbody"></div>

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
<script src="js/scales.js"></script>
</html>