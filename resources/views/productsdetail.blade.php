<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{URL::asset('css/products.css')}}" rel="stylesheet" />
</head>
<body>
<!-- Navigation-->
<header>
    <nav class="navbar navbar-expand-lg navbar-navbar1 bg-navbar">
        <div class="container px-4 px-lg-5-navbar">
            <a class="navbar-brand" href="#!"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                </ul>
                <form class="d-flex-nav">
                    <button class="btn-products btn-outline-white" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Carrinho
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
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
    <div class="bg-nav py-2"></div>
</header>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Item - Start Bootstrap Template</title>
    <!-- Bootstrap icons-->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{URL::asset('css/productdetail.css')}}" rel="stylesheet"/>
</head>

{{--</header>--}}
<!-- Product section-->
{{--<section class="py-5">--}}
<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{URL::asset(\App\Models\Products::where('id', '=', $id)->first()->imgname)}}" alt="..." /></div>
        <div class="col-md-6">
            <div class="small mb-1">SKU: BST-498</div>
            <h1 class="display-5 fw-bolder">{{\App\Models\Products::where('id', '=', $id)->first()->name}}</h1>
            <div class="fs-5 mb-5">
                <span class="text-decoration-line-through">$45.00</span>
                <span>$40.00</span>
            </div>
            <p class="lead">{{\App\Models\Products::where('id', '=', $id)->first()->description}}</p>
            <div class="d-flex" style="margin-top: 220px">
                <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                <button class="btn btn-outline-dark flex-shrink-0" type="button" style="margin-right: 30px">
                    <i class="bi-cart-fill me-1"></i>
                    Adicionar ao carrinho
                </button>
                <button class="btn btn-outline-dark flex-shrink-0" type="button">
                    <i class="bi-cart-fill me-1"></i>
                    Comprar
                </button>
            </div>
        </div>
    </div>
</div>

</section>
<!-- Related items section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Produtos relacionados</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100" style="background-color: #9B5A44">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                    <!-- Product image-->
                    <img src="{{URL::asset('img/batma.jpg')}}" alt="batma" />
                    <!-- Product details-->
                    <div class="card-body-products p-4-product">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Batma</h5>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through">$350.00</span>
                            $250.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4-product pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn-products btn-outline-dark mt-auto" href="#" style="background-color: white">Add ao carrinho</a></div>
                    </div>
                    <div class="card-footer p-4-product pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn-products btn-outline-dark mt-auto" href="#" style="background-color: white">Comprar</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100" style="background-color: #9B5A44">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                    <!-- Product image-->
                    <img  src="{{URL::asset('img/capivara.jpg')}}" alt="capivara" />
                    <!-- Product details-->
                    <div class="card-body-products p-4-product">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Capivara</h5>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through">$350.00</span>
                            $250.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4-product pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn-products btn-outline-dark mt-auto" href="#" style="background-color: white">Add ao carrinho</a></div>
                    </div>
                    <div class="card-footer p-4-product pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn-products btn-outline-dark mt-auto" href="#" style="background-color: white">Comprar</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100" style="background-color: #9B5A44">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                    <!-- Product image-->
                    <img src="{{URL::asset('img/saitama.jpg')}}" alt="batma" />
                    <!-- Product details-->
                    <div class="card-body-products p-4-product">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Saitama</h5>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through">$350.00</span>
                            $250.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4-product pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn-products btn-outline-dark mt-auto" href="#" style="background-color: white">Add ao carrinho</a></div>
                    </div>
                    <div class="card-footer p-4-product pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn-products btn-outline-dark mt-auto" href="#" style="background-color: white">Comprar</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
</html>
