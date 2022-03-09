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
       
          
        // Performing insert query execution
        // here our table name is college
        $emparray = array();
        $sql = "select * from m_student";
        $result=mysqli_query($conn,$sql);
        
        //print_r($result);
        
        while($row=mysqli_fetch_assoc($result)){
            //echo "<tr><td>{$row['s_name']}</td><td>{$row['s_add']}</td></tr>";
            $emparray[] = $row;

        }
        //print_r($emparray);
        echo json_encode($emparray);
        
        // Close connection
        mysqli_close($conn);
        ?>