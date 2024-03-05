<?php
class Employe
{
private ?int $id=null;
private ?string $firstname=null;
private ?string $lastname=null;
private ?string $email=null;
private ?DateTime $dob=null;


public function __construct($a=null,$b,$c,$d,$e)
{

$this->id=$a;
$this->firstname=$b;
$this->lastname=$c;
$this->email=$d;
$this->dob=$e;

}

public function getID()
{
    return $this->id;
}
public function getFirstName()
{
    return $this->firstname;
}
public function getLastName()
{
    return $this->lastname;
}
public function getDob()
{
    return $this->dob;
}

public function getEmail()
{
    return $this->email;
}


public function setFirstName($a)
{
    $this->firstname=$a;
}

public function setLastName($b)
{
    $this->lastname=$b;
}
public function setDob($c)
{
    $this->dob=$c;
}
public function setEmail($d)
{
    $this->email=$d;
}








}



?>