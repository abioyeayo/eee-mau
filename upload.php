<?php       
        if(isset($_POST["upload"])){
            $servername = "localhost";
            $username = "u335940528_eee_mau_web";
            $password = "eeeAdmin1";
            $dbname = "u335940528_eee_mau_db";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
        
            //taking inputs from the website
            $i_d = $_REQUEST['id_number'];
            $supervise = $_REQUEST['supervisor'];
            $top = $_REQUEST['topic'];
            $years = $_REQUEST['year'];

            $target_dir = "project_files/";
            $target_file =$target_dir . basename($filename);
            $filename = rand(1000, 10000)."-".$_FILES["uploadfile"]["name"];
            $tmpname = $_FILES["uploadfile"]["tmp_name"];

            move_uploaded_file($tmpname, $target_dir.'/'.$filename);

            $sql = "INSERT INTO upload (id, supervisor, topic, title, years) VALUES ('$i_d', '$supervise', '$top', '$filename', '$years')";

            // $check = filesize($_FILES["uploadfile"]["tmp_name"]);
            
            if ($conn->query($sql) === TRUE) {
                echo "File uploaded successfully " .$i_d;
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error ;
            }
        }
        
        $conn->close();
?>
