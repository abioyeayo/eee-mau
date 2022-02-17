<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEE-MAU</title>
    <link rel="stylesheet" type="text/css" href="styles/style1.css">
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" id="top_nav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand text-muted border border-2 border-dark my-2 p-2 rounded-pill" id="department"><strong>EEE</strong></a>
                    <span class="text-muted navbar-brand" id="department">Department of Electrical and Electronics Engineering</span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                        <span class="navbar-toggler-icon justify-content-right"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse ms-auto" id="myNavbar">
                    <form class="navbar-form" action="#">
                        <div  class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-default btn-outline-danger">Search</button>
                        </div>
                    </form>
                    <ul class="nav navbar-nav px-3">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-dark" role="button" data-bs-toggle="dropdown">
                                staffs <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu my-2">
                                <li><a class="dropdown-item" href="#">one</a></li>
                                <li><a class="dropdown-item" href="#">one</a></li>
                                <li><a class="dropdown-item" href="#">one</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-dark" role="button" data-bs-toggle="dropdown">
                                students <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu my-2">
                                <li><a class="dropdown-item" href="#">one</a></li>
                                <li><a class="dropdown-item" href="#">one</a></li>
                                <li><a class="dropdown-item" href="#">one</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-dark" role="button" data-bs-toggle="dropdown">
                                project <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu my-2">
                                <li><a class="dropdown-item" href="#">one</a></li>
                                <li><a class="dropdown-item" href="#">one</a></li>
                                <li><a class="dropdown-item" href="#">one</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
        </div>
        </nav>
    </header>
    <section>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <!-- <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button> -->
            </div>
            
            <!-- The slideshow images-->
            <div class="carousel-inner">
            <!-- first item -->
            <div class="carousel-item active">
                <img src="images/ai.jpg" alt="artificial intelligence" class="d-block img-fluid" style="width:100%">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to<br>Electrical and Electronics Engineering</h3>
                    <p>We step up-we transform</p>
                </div>
            </div>
            <!-- second item -->
            <div class="carousel-item">
                <img src="images/electronics2.jpg" alt="electronics engineering" class="d-block img-fluid" style="width:100%">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to<br>Electrical and Electronics Engineering</h3>
                    <p>We step up we transform</p>
                </div>
            </div>
            <!-- third item -->
            <div class="carousel-item">
                <img src="images/mobile_robot1.jpg" alt="mobile robot" class="d-block img-fluid" style="width:100%">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to<br>Electrical and Electronics Engineering</h3>
                    <p>We step up we transform</p>
                </div>
            </div>
            </div>
            
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </section>
    <main>
        <div class="container-fluid row mt-5">
            <div class="col-lg-7 p-3 text-center">
                <h3 class="text-danger">Undergraduate studies</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nunc nisi, euismod eget consectetur et, volutpat a purus.
                     Vivamus tincidunt neque non auctor fringilla. Curabitur non venenatis risus.
                      Sed at eros lectus. In imperdiet erat enim, et scelerisque mauris varius quis.
                       Aliquam faucibus elementum lorem non molestie. Nullam semper dui tortor, non dictum erat consectetur at. 
                </p>
                <button class="btn btn-md btn-outline-danger">view courses</button>
            </div>
            <div class="col-lg-5">
                <img class="img-thumbnail img-fluid border-dark" src="images/practical.jpg" alt="image">
            </div>
            <hr class="my-5 bg-danger">
        </div>
        <div class="container-fluid row mt-4">
            <div class="col-lg-5">
                <img class="img-thumbnail img-fluid border-dark" src="images/mobile_robot1.jpg" alt="image">
            </div>
            <div class="col-lg-7 text-center">
                <h3 class="text-dange py-3">Postgraduate studies</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nunc nisi, euismod eget consectetur et, volutpat a purus.
                     Vivamus tincidunt neque non auctor fringilla. Curabitur non venenatis risus.
                      Sed at eros lectus. In imperdiet erat enim, et scelerisque mauris varius quis.
                       Aliquam faucibus elementum lorem non molestie. Nullam semper dui tortor, non dictum erat consectetur at. 
                </p>
                <button class="btn btn-md btn-outline-danger">view courses</button>
            </div>
            <hr class="my-5 bg-danger">
        </div>
    </main>
</body>
</html>
