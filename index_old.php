<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="setscentral ltd. team - Moses, Chime, & Ayo">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>MAU-EEE</title>
</head>
<body>
    <div class="container-fluid border-bottom border-top border-2 py-2 border-dark">
        <div class="row text-light">
            <div class="col-lg-6 py-2">
                <!-- <img src="images/logo.png" alt="school logo" style="width: 40px; height: 40px;"> -->
                <a href="index.php" class="border border-3 border-danger rounded-pill p-1 text-decoration-none text-dark">
                    <strong>EEE</strong>
                </a>
                <span id="dpt-name" class="text-muted px-2 font-size">Department of Electrical and Electronics Engineering</span>
            </div>
            <div class="btn col-lg-2 dropdown">
                <button type="button" class="btn border-danger px-4 btn-md rounded-pill text-dark dropdown-toggle" data-bs-toggle="dropdown">For Staffs </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm rounded-pill  dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button> -->
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">1</a>
                    <a href="#" class="dropdown-item">2</a>
                    <a href="#" class="dropdown-item">3</a>
                    <a href="project.php" class="dropdown-item">upload Projects</a>
                </div>
            </div>
            <div class="btn col-lg-2">
                <button type="button" class="btn border-danger px-4 btn-md rounded-pill text-dark dropdown-toggle" data-bs-toggle="dropdown">
                    For Students 
                </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm rounded-pill dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button> -->
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item text-muted">1</a>
                    <a href="#" class="dropdown-item text-muted">2</a>
                    <a href="#" class="dropdown-item text-muted">3</a>
                </div>
            </div>
            <div class="btn col-lg-2">
                <button type="button" class="btn border-danger px-4 btn-md rounded-pill text-dark dropdown-toggle" data-bs-toggle="dropdown">
                    Past Projects
                </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm rounded-pill dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button> -->
                <div class="dropdown-menu">
                    <a href="2019.php" class="dropdown-item text-muted">2019 Projects</a>
                    <a href="2020.php" class="dropdown-item text-muted">2020 Projects</a>
                    <a href="2021.php" class="dropdown-item text-muted">2021 Projects</a>
                    <a href="all_files.php" class="dropdown-item text-muted">All Projects</a>
                </div>
            </div>
        </div>
    </div>
    
     <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- slideshow images-->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/ai.jpg" alt="Artificial intelligence" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to<br>Electrical and Electronics Engineering</h3>
                    <p>We step up we transform</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/telecom.jpg" alt="telecommunication" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to<br>Electrical and Electronics Engineering</h3>
                    <p>We step up we transform</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/practical.jpg" alt="practical" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to<br>Electrical and Electronics Engineering</h3>
                    <p>We step up we transform</p>
                </div>
            </div>
            </div>

            <!-- Left and right controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
    </div>

</body>
</html>
