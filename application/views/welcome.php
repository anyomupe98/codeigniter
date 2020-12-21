
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"
        integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link rel="stylesheet" href="./assets/css/index.css">
    <title>TwisterApp</title>
</head>

<body>
    <div class="contenedor-principal">
        <div class="contenedor-video">
            <video src="./assets/img/pexels-edwin-bond-5429585.mp4" autoplay loop muted></video>
        </div>


        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent justify-content-between mb-5">
            <a class="navbar-brand"><img src="./assets/img/logo_blanco.png" width="208px"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ml-auto">

                    <form class="form-inline">
                        <a class="btn btn-link text-white text-decoration-none mr-2" href="/codeigniter">Inicio</a>
                        <a class="btn btn-link text-white text-decoration-none mr-2" href="./index.php/Welcome/registro">Registrate</a>
                        <button class="btn btn-link text-white text-decoration-none mr-2">Categorias</button>
                        <button class="btn btn-success">REGISTRA TU NEGOCIO</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="contenedor-titulo-h1">
            <h1>Pide en restaurantes, supermercados,
            </h1>
            <h1>tiendas y mucho más...</h1>
        </div>

        <div class="row">
            <div class=" col-md-6 m-auto row">
                <div class="col-sm-7">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker"></i></span>
                        </div>
                        <input class="form-control" type="text" placeholder="ingesa tu dirección">
                      </div>
                </div>
                <div class="col-sm-5">
                    <select class="form-control" name="categorias" id="categorias">
                        <option value="1">Restaurantes</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
        </div>

        <p class="text-center text-white mt-3">Las mejores marcas de tu ciudad en un solo lugar, encuentra el producto que buscas cerca de ti.</p>

    </div>

</body>

</html>