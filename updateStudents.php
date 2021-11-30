<?php

include_once('db.php');



$id = $_POST['id'];
$pib = $_POST['pib'];
$gr = $_POST['gr'];

$sql = "UPDATE students SET pib='$pib', grupa_id='$gr' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showStudents.php");
?>
