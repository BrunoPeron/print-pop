<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/products.css" rel="stylesheet" />
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-navbar1 bg-navbar">
    <div class="container px-4 px-lg-5-navbar">
        <a class="navbar-brand" href="#!"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            </ul>
            <form class="d-flex-nav">
            </form>
            <form class="d-flex-nav">
                <button class="btn-products btn-outline-white" type="submit">
                    <i></i>
                    Print&Pop
                </button>
            </form>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-navbar2 bg-navbar1" style="background-color:#5E3D2C; height:50%; padding-top: 0px; padding-bottom: 0px">
    <div class="container px-4 px-lg-5" style="background-color:#5E3D2C;">
        <nav class="navbar navbar-expand-lg navbar-light bg-navbar1" style="background-color:#5E3D2C;">
            <div class="container px-4 px-lg-5" style="background-color:#5E3D2C;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4" style="background-color:#5E3D2C;">
                    <li class="nav-item"><a class="nav-link" href="#!" style="color:#D3BDAF">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!" style="color:#D3BDAF">Envie um modelo</a></li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-navbar1">
            <div class="container px-4 px-lg-5">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" href="#!" style="color:#D3BDAF">Conheça mais</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!" style="color:#D3BDAF">Equipe</a></li>
                </ul>
            </div>
        </nav>
    </div>
    </div>
</nav>
<header class="bg-nav py-2"></header>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Print&Pop</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-login-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="name"
                                           placeholder="Primeiro nome" name="name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="lastname"
                                           placeholder="Ultimo nome">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="email"
                                       placeholder="Endereço de email" name="email">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                           id="passord" placeholder="Senha" name="password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                           id="password_confirmation" placeholder="Repetir a senha" name="password_confirmation">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Registrar-se">
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Registrar com Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Registrar com Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Esqueceu sua senha?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="login.html">Ja tem uma conta? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
