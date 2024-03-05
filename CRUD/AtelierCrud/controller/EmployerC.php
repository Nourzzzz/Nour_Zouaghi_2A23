<?php
include "../config.php";
class EmployeC 
{   
    public function listeEmploye()
    {
        $sql="SELECT * FROM employe";
        $db= config::getConnexion();
        try 
        {
            $Liste = $db ->query($sql);
            return $Liste;

        }
        catch(Exception $e)
        {
            die("Message error".$e->getMessage());
        }
    }

    public function deleteEmployer($id)
    {
        $sql="DELETE FROM employe where id= :id ";
        $db= config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue("id",$id);
        try 
        {
           $req->execute();

        }
        catch(Exception $e)
        {
            die("Message error".$e->getMessage());
        }



    
    }

    public function addEmploye($emp)
    {
        $sql="INSERT INTO employe VALUES(NULL,:firstname,:lastname,:email,:dob)";
        $db= config::getConnexion();
        try 
        {
            $req = $db->prepare($sql);
            $req->execute([
                "firstname"=>$emp->getFirstName(),
                "lastname"=>$emp->getLastName(),
                "email"=>$emp-> getEmail(),
                "dob"=>$emp->getDob()->format('d/m/y')
            ]);

        }
        catch(Exception $e)
        {
            die("erreur d'ajout".$e->getMessage());
        }




    }



}
?>
