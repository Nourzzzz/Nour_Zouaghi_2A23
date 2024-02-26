<?php

class EmployeC {

    function show($employe) {

        echo '
        <table border="1">
        <tr>
        <td>Lastname</td>
        <td>Firstname</td>
        <td>Password</td>
        <td>Phone</td>
        <td>Date Of Birth</td>
        <td>Email</td>
        
        </tr>
        <tr>
        <td>'. $employe->getLastName() .'</td>
        <td>'. $employe->getFirstName() .'</td>
        <td>'. $employe->getPassword() .'</td>
        <td>'. $employe->getPhone() .'</td>
        <td>'. $employe->getDateOB() .'</td>
        <td>'. $employe->getEmail().'</td>
        </tr>
        </table>
        ';
    }
}



?>