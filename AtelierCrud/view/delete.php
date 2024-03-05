<?php
include "../controller/EmployerC.php";
$empC = new EmployeC();
$empC->deleteEmployer($_GET['id']);
header('Location:listeEmploye.php');



?>