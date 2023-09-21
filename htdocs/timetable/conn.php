<?php

$conn = new mysqli("localhost", "root", "", "timetable");

if($conn->error){
    echo "Error in DB connection".$conn->error;
}

?>