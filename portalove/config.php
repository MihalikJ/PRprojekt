<?php

// initializing variables
$contact_name = "";
$contact_surname = "";
$contact_username = "";
$contact_email = "";
$errors = array();

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "portalove"; /* Database name */

$con = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


//LOGIN
if(isset($_POST['but_login'])){

    $uname = mysqli_real_escape_string($con,$_POST['contact_uname']);
    $password = mysqli_real_escape_string($con,$_POST['contact_psw']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            //header('location: index.php');
        }else{
            echo "<script>alert('Failureeeeeeeeeee.');</script>";
        }

    }

}


//REGISTRACIA
if (isset($_POST['but_register'])) {
    // receive all input values from the form
    $contact_name = mysqli_real_escape_string($con, $_POST['contact_name']);
    $contact_surname = mysqli_real_escape_string($con, $_POST['contact_surname']);
    $contact_username = mysqli_real_escape_string($con, $_POST['contact_username']);
    $contact_pw = mysqli_real_escape_string($con, $_POST['contact_pw']);
    $contact_email = mysqli_real_escape_string($con, $_POST['contact_email']);


    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "select count(*) as cntUser from user where username='".$contact_username."' OR email='".$contact_email."'";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    $count = $user['cntUser'];

    if($count == 0){
        $query = "INSERT INTO `user` (`iduser`, `meno`, `priezvisko`, `username`, `password`, `email`) 
                      VALUES (NULL, '".$contact_name."','".$contact_surname."','".$contact_username."','".$contact_pw."','".$contact_email."')";
        mysqli_query($con, $query);
        $_SESSION['contact_username'] = $contact_username;
        $_SESSION['success'] = "You are now logged in";
    }else{
        echo "<script>alert(':)))))))))))))))).');</script>";
    }

}

?>