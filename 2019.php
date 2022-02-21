
<?php

include "dbconnect.php";


// SQL query to select data from database
$sql = "SELECT * FROM upload WHERE years='2019' ORDER BY id ASC";
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
<title>2019 project files</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-xl fixed-top navbar-light bg-light" id="top_nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand text-muted border border-2 border-dark my-2 p-2 rounded-pill" id="department">
                    <strong>EEE</strong>
                </a>
                <span class="text-muted navbar-brand" id="department">Department of Electrical and Electronics Engineering</span>                    
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                    <span class="navbar-toggler-icon justify-content-right"></span>
                </button>
            <div class="collapse navbar-collapse" id="myNavbar" style="justify-content: flex-end;">
                <form class="navbar-form" action="#">
                    <div  class="input-group my-2">
                        <input type="text" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-default btn-outline-dark">Search</button>
                    </div>
                </form>
                <ul class="nav navbar-nav px-3">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" role="button" data-bs-toggle="dropdown">
                            Staffs <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu my-2">
                            <li><a href="#" class="dropdown-item text-muted">1</a></li>
                            <li><a href="#" class="dropdown-item text-muted">1</a></li>
                            <li><a href="#" class="dropdown-item text-muted">1</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" role="button" data-bs-toggle="dropdown">
                            Students <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu my-2">
                            <li><a href="#" class="dropdown-item text-muted">1</a></li>
                            <li><a href="#" class="dropdown-item text-muted">1</a></li>
                            <li><a href="#" class="dropdown-item text-muted">1</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" role="button" data-bs-toggle="dropdown">
                            Project <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu my-2">
                            <li><a href="2019.php" class="dropdown-item text-muted">2019 Projects</a></li>
                            <li><a href="2020.php" class="dropdown-item text-muted">2020 Projects</a></li>
                            <li><a href="2021.php" class="dropdown-item text-muted">2021 Projects</a></li>
                            <li><a href="all_files.php" class="dropdown-item text-muted">All Projects</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
    </div>
    </nav>
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
