
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";
$conn = new mysqli($servername, $username, 
                $password, $dbname);

// Checking for connections
if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') '. $conn->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM upload WHERE years='2021' ORDER BY id ASC";
$result = $conn->query($sql);
$conn->close(); 
?>

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
<title>2021 project files</title>
</head>
<body>
<header>
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
</header>

<section>
    <div class="container-fluid p-3">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>ID NUMBER</th>
                    <th>TOPIC</th>
                    <th>SUPERVISOR</th>
                    <th>YEAR</th>
                    <th>FILE</th>
                </tr>
                <?php
                    while($rows=$result->fetch_assoc())
                    {
                ?>
                        <tr>
                            <td><?php echo $rows['id'];?></td>
                            <td><?php echo $rows['topic'];?></td>
                            <td><?php echo $rows['supervisor'];?></td>
                            <td><?php echo $rows['years'];?></td>
                            <td><?php echo $rows['title'];?></td>
                        </tr>
                <?php
                    }
                ?>
            </table>
        </div>
</section>
</body>
</html>
