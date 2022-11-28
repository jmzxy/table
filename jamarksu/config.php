<?php

    $conn = mysqli_connect("localhost","root","","dbstudent");

    if(!$conn){
        echo "Connection Error! ".mysqli_connect_error();
    }
    


?>