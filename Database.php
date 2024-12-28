<html>

<head>
    <title>Insert Page page</title>
<style>
body{
background-image:url("https://img.freepik.com/premium-photo/black-background-with-black-background-with-floral-pattern_994023-358182.jpg?w=900");
border-style:dashed;border-color:#E3BB88;
}
h3{font-size:50;color:#D4AF37;text-decoration:underline;}
</style>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => sst
        $conn = mysqli_connect("localhost", "root","", "sst");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect."
			. mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $fname =  $_POST['first_name'];
        $lname = $_POST['last_name'];
        $message=$_POST['m_essage'];
        $email = $_REQUEST['email'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO contact  VALUES ('$fname','$lname','$email','$message')";
 if(mysqli_query($conn, $sql)){
            echo "<h3>THANK YOU</h3>"; 

                  } 
else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        
        
        
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
