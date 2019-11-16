<?php
/*
 * Start a new session when server.php has loaded
 */
session_start();
$_SESSION['message'] = '';

/*
 * Initializing variables
 */
$name = "";
$email = "";
$errors = array(); 

/*
 * Connecting to database server
 */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'reg_admin');
define('DB_PASSWORD', 'edaGi0wjOgfOKUk5');
define('DB_DATABASE', 'users');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

/*
 * Check if the user clicks Sign In button, then start register data on database
 */
if (isset($_POST['req_user'])) {
    /*
     * Receive all input values from the form
     */
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    /*
     * Register user if there are no errors in the form and load index.php page
     */
    if (count($errors) == 0) {
        $password = md5($password);//encrypt the password before saving in the database

        $query = "INSERT INTO users (name, email, password) 
                  VALUES('$name', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['name'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}

/*
 * Check if the user clicks Log In button, then start register data on database
 */
if (isset($_POST['log_user'])) {
    /*
     * Receive all input values from the form
     */
    $myusername = mysqli_real_escape_string($db,$_POST['name']);
    $mypassword = md5($_POST['psw']);

    /*
     * Retrieve matched data from database and save into array
     */
    $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    /*
     * If result matched $myusername and $mypassword, table row must be 1 row
     */
    if($count == 1) {
        session_register("myusername");
        $_SESSION['login_user'] = $myusername;
    /*
     * When $myusername and $mypasswords matches, then load the index.php page. If not, then show error notification.
     */
    header("location: index.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}