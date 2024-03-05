<?php

include "../controller/EmployerC.php";

$empC = new EmployeC();
$Liste = $empC->listeEmploye();
var_dump($Liste);

?>
<html>

<head></head>

<body>
    <a href="addEmploye.php">AddEmploye</a>

    <center>
        <h1>List of employes</h1>
        
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Employe</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($Liste as $employe) {

        ?>
        <tr>

        <td><?php echo $employe['id']?></td>
                <td><?= $employe['firstname'];?></td>
                <td><?= $employe['lastname'];?></td>
                <td><?= $employe['email'];?></td>
                <td><?= $employe['dob'];?></td>
                <td><input type="submit" value="update"></td>
                <td><a href="delete.php ?id=<?php echo $employe['id'];?>"> Delete </a></td>

        </tr>
            
        <?php
        }
        ?>
    </table>
</body>

</html>