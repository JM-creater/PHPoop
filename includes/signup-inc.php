<?php

    if(isset($_POST["submit"]))
    {
        //Calling the data
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $pwdRequest = $_POST["pwdRequest"];
        $email = $_POST["email"];
    }

    //Instantiate Sign Up Control Class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRequest, $email);

    //Running error handlers
    $signup->signupUser();

    //Going to back to front page
    header("location: ../index.php?error=none");

?>