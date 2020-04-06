<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .wrapper {
            height: 100vh;
        }
        .card-body {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card-body, .btn-container {
            padding: 10px;
        }
        .card-img-top {
            display: block; 
            margin: 0 auto;
            width: 80%; 
        }

        @media (min-width: 320px) and (max-width: 426px) {
            .wrapper, .btn-container {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: center;
            }
            .wrapper .card{
                height: fit-content;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center align-content-md-center wrapper">
            <div class="card" style="width: 20rem;">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <img src="https://scontent-qro1-1.xx.fbcdn.net/v/t1.0-9/22780217_1499083686813633_5742332213106058129_n.jpg?_nc_cat=106&_nc_sid=85a577&_nc_eui2=AeHPapCo_z00n4uQ1z7bjC4KPUoyCspGpWQ9SjIKykalZG2e-cOS38pOtPnBYeR0tEI&_nc_ohc=QWJnkvD8qXUAX_4OQ44&_nc_ht=scontent-qro1-1.xx&oh=7e694a910736111c457bb603ca97a18b&oe=5EAF462B" class="card-img-top" alt="Logo Inteligencia Objetiva">
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="card-body justify-content-md-center align-content-md-center text-center">
                            <h5 class="card-title">¡Todo listo!</h5>
                            <p class="card-text">Tu contraseña ha sido actualizada.</p>
                            <p class="card-text text-justify">Ahora podrás iniciar sesión con tu correo electrónico y tu nueva contraseña.</p>
                        </div>
                    </div>
                </div>
                <div class="row btn-container justify-content-md-center align-content-md-center">
                    <a href="https://inteligenciaobjetiva.com/" class="btn btn-danger">Regresar al sitio web</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>