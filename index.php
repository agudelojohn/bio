<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="navBar/navBar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 
</head>
<body>
<?php
include("navBar/navbar.html");
?>    
<!-- logo y descripción -->
<style>
#logo-descripcion{
    margin-top:20px;
    padding: 5px;
}
#logo{
    width:100%;
    margin-top:5%;
}
</style>
<div class="container" id="logo-descripcion" >
    <div class="row justify-content-md-center">
        <div class="col col-lg-5" style="align-items: center;">
        <!-- logo -->
            <img src="imgs/Internas/logo_bivlab.png" alt="logoBIVLAB" id=logo>    
        </div>
        <div class="col col-lg-7">
        <!-- descrip -->
            <div class="card" style="width:100%; height:100%;">
                <div class="card-body">
                    <h5 class="card-title">Grupo de investigación y extensión GIV2LAB</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- News -->
<div class="row justify-content-md-center">
    <div class="col col-lg-11" style="border:2px solid red;height:1000px;">
    

    </div>
</div>


<!-- footer -->
<?php
include("navBar/footer.html");
?>
</body>
</html>