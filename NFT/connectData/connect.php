<?php

    $conn = mysqli_connect('localhost:3307','root','','nftea');//mysqli_connect('server','user','password','database');
    if(!$conn){
        echo "<script>alert(connection failed)</script>";
    }