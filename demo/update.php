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
        $n_name =  $_REQUEST['n_name'];
       
          
        // Performing insert query execution
        // here our table name is college
        $sql = "UPDATE m_student
        SET s_name='$n_name'
        WHERE s_name='$s_name';";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data updatedtored in a database successfully.</h3>"; 
  
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>