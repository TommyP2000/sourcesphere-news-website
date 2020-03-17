<?php

session_start();

if (isset($_POST['submit'])) {
        
    // Connect to the database
	$host = "sql101.epizy.com";
	$dbUsername = "epiz_23277257";
	$dbPassword	= "sourcesphere";
    $dbname = "epiz_23277257_sourcespherelog";
        
    // Create the connection
    $conn = new mysqli ($host, $dbUsername, $dbPassword, $dbname);
        
        if (mysqli_connect_error()){
            die('Connection Error('.mysqli_connect_errno().') '
                . mysqli_connect_error());
        }
    
    $email = filter_input($conn, INPUT_POST['email']);
    $password2 = filter_input($conn, INPUT_POST['password']); 
        
    
    // Ensure that form fields are filled properly
    if (!empty($email)) {
    if (!empty($password2)) {
        header("Location: ../Index.php?login=error");
            exit();
    } }        
        //Create the SQL query          
        else {
        $sql = "SELECT * FROM login_details WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../Index.php?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
            $hashedPwdCheck = password_verify($password2, $row['password']);
            if ($hashedPwdCheck == false) {
                header("Location: ../Index.php?login=error");
            exit();
            } elseif ($hashedPwdCheck == true) {
                //Login the user here
                $_SESSION['full_name'] = $row['full_name'];                
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password2'];
                header("Location: ../Index.php?login=success");
                exit();
            }
        }
    }
} else{
        header("Location: ../Index.php?login=error");
        exit();
        }
}
$conn->close(); 
     

?>
