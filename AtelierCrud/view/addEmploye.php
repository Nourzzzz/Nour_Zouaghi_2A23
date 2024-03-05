<?php 
    include "../controller/EmployerC.php";
    include "../model/Employe.php";

      if(isset($_POST["fName"])&&
       isset($_POST["lName"])&&
       isset($_POST["email"])&&
       isset($_POST["dob"]))
       {
                if(!empty($_POST["fName"])&&
                !empty($_POST["lName"])&&
                !empty($_POST["email"])&&
                !empty($_POST["dob"]))
                        {
                            $emp = new Employe(null,$_POST["fName"],$_POST["lName"],$_POST["email"],new DateTime($_POST["dob"]));
                            $empC = new EmployeC;
                            $empC->addEmploye($emp);
                            header('Location:listeEmploye.php');
                        }
                
         }
    else 
    {
        $error = "missing info";
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        <table>
            <tr>
                <td><label for="">First Name</label></td>
                <td><input type="text" name="fName" id="fName"></td>
            </tr>
            <tr>
                <td><label for="">Last Name</label></td>
                <td><input type="text" name="lName" id="lName"></td>
            </tr>
          
            <tr>
                <td><label for="">Email</label></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="">Date of Birth</label></td>
                <td><input type="text" name="dob" id="dob"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
                <?php 
                echo $error;
?>
          
           
           
        </table>
    </form>







</body>
</html>