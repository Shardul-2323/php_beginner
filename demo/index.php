<?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "demo");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $s_name =  $_REQUEST['s_name'];
        $s_add = $_REQUEST['s_add'];
        $mobile =  $_REQUEST['mobile'];
        $division = $_REQUEST['division'];
        $date_created = $_REQUEST['date_created'];
        $status_id = $_REQUEST['status_id'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO m_student (s_name,s_add,mobile,division,date_created,status_id)  VALUES ('$s_name', 
            '$s_add','$mobile','$division','$date_created','$status_id')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>