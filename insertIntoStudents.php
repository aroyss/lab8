<?php

include_once('db.php');


$pib = $_POST['pib']; $gr = $_POST['gr'];

$sql = "INSERT INTO students (pib, grupa_id) VALUES ('$pib', '$gr' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showStudents.php");

?>
