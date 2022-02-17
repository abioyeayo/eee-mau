<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="setscentral">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
    <form method="post" enctype="multipart/form-data" action="upload.php" class="px-3">
        <div class="row my-3">
            <div class="col">
                <input type="text" placeholder="ID NUMBER" id="txt" name="id_number" class="form-control form-control-sm" aria-label="ID NUMBER" aria-describedby="basic-addon1">
            </div>
            <div class="col">
                <input type="text" name="supervisor" id="supervisor" class="form-control form-control-sm" placeholder="Supervisor" aria-label="supervisor" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                    <input type="text" name="topic" id="topic" class="form-control form-control-sm form-control-sm" placeholder="Project Topic" aria-label="Project Topic" aria-describedby="basic-addon1">
            </div>      
            <div class="col">
                <select class="form-select" name="year">
                    <option selected>Year...</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="file" name="uploadfile" class="form-control form-control-sm" id="inputfile" accept="application/pdf" aria-describedby="file upload">
            <input type="submit" value="upload" name="upload" aria-describedby="submit">
            <!-- <button type="button" class="btn btn-sm btn-outline-danger" name="submit" id="inputfile">Upload</button> -->
        </div>
    </form>
</body>
</html>

