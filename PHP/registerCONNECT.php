<?php

    $full_name = filter_input(INPUT_POST, 'full_name');
    $email = filter_input(INPUT_POST, 'email');
    $password1 = filter_input(INPUT_POST, 'password1');
    $password2 = filter_input(INPUT_POST, 'password2');

    // Ensure that form fields are filled properly
    if (!empty($full_name)){
    if (!empty($email)) {
    if (!empty($password1)) {
	
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
        else {
        //Create the SQL query          
        $sql = "INSERT INTO login_details (full_name, email, password1, password2)
        VALUES ('$full_name', '$email', '$password1', '$password2')";
        if ($conn->query($sql)){
            echo "You have now been registered:$full_name $email $password";
        }
        else{
            echo "Error: ". $sql ."<br>". $conn->error;
        }
        $conn->close();
        }

	}
    }
    } else {
	echo "All fields are required";
	die(); //Echo error message if fields are empty
    }        

?>
