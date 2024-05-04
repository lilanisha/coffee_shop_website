<?php


    $sever = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test1_db";

    $con = mysqli_connect($sever, $username, $password, $dbname);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    echo "Connected successfully";

    $name =$_POST['name'];
    $email =$_POST['email'];
    $address =$_POST['address'];
    $pnumber =$_POST['pnumber'];
    $password =$_POST['password'];
    

    $sql=" INSERT INTO `users`(`name`, `email`, `address`, `pnumber`, `password`) VALUES ('[$name]','[$email]','[$address]','[$pnumber]','[$password]')";

    if ($con->query($sql) === TRUE) {
        header('Location: index.php?registered=true');
        exit();
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        
            $con->close();
    
   
?>