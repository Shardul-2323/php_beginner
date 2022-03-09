<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','demo') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM m_student WHERE s_name='" . $_POST["username"] . "' and mobile = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);

        
        if(is_array($row)) {
        $_SESSION["id"] = $row['s_id'];
        $_SESSION["name"] = $row['s_name'];
        //$_SESSION["add"] = $row['s_add'];
        } else {
            $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:index.php");
    }
?>