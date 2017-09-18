<?php
    session_start();
    $errors = array();
       
    if (isset($_POST['login_user'])){
            $errors = checkUsernamePw($errors);
    }
   
    function checkUsernamePw ($errors){
        $conn = openDB();
        $username = mysqli_real_escape_string($conn, $_POST['uname']);
	    $password = mysqli_real_escape_string($conn, $_POST['psw']);
        
        if (empty($username)) {
		array_push($errors, "Username is required");
	    }
        
	    if (empty($password)) {
		array_push($errors, "Password is required");
	    }

        if (count($errors) == 0){
            
            //$password = md5($password);
            $query = "SELECT * FROM employee WHERE EMP_FNAME='$username' AND EMP_PW='$password'";
            $result = mysqli_query($conn, $query);
            //$row = mysqli_fetch_assoc($result);
            
            if (mysqli_num_rows($result) == 1) {
                echo "This is new: ".mysqli_num_rows($result);
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: branchSelect.php');
            }
            else {
                array_push($errors, "Wrong username/password combination");
            }
        }
        return $errors;
    }
           
    function openDB(){
        $servername = "localhost";
        $username = "root";
        $password = "team7";
        $dbname = "sunday_friends_prototypedb";
        

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection 
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

?>
