<?php

$con = mysqli_connect("localhost","root","","forum");
if(mysqli_connect_error()){
    echo "failed to connect to mysqli: ".mysqli_connect_error();
}

?>