<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>

<body>
    <?php
  include '../Model/employe.php';
  include '../Controller/EmployeC.php';
   
  
    $lastname = $_POST["lName"];
    $firstname = $_POST["fName"];
    $password= $_POST["pass1"];
    $dOB= $_POST["dob"];
    $email = $_POST["email"];
    $phone= $_POST["phone"];
    $emp1 = new Employe($firstname, $lastname,$password, $dOB,$email, $phone);
    var_dump($emp1);
    $employeC2 = new EmployeC();
    $employeC2->show($emp1);
    
     ?>
    
 
</body>
 
</html>
