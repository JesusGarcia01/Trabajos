<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <?php include './navbar/navbar.php'; ?>
    <center>
        <h1>Ratones Gaming</h1>
    </center>
    <div class="container-xxl">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./imagenes/reddragon.jpg" class="d-block mx-auto" style="width: 20%;" alt="Red dragon Impact M908">
                    <div class="">
                        <h5>Red Dragon</h5>
                        <p>Mouse Red Dragon Impact M908.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./imagenes/FANTECH.jpg" class="d-block mx-auto" style="width: 20%;" alt="...">
                    <div class="">
                        <h5>FANTECH</h5>
                        <p>Mouse FANTECH VX7.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./imagenes/viper.jpg" class="d-block mx-auto" style="width: 10%" alt="...">
                    <div class="">
                        <h5>Razer</h5>
                        <p>Mouse Razer Viper Ultimate.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
</html>