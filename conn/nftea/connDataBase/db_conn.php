<?php

    $conn = mysqli_connect('localhost:3307','root','','nftea');
    if(!$conn){
        echo "connection failed";
    }