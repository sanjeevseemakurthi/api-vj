<?php

namespace App\Repository;
use Doctrine\DBAL\Driver\Connection;

class financeRepository
{
    public function __construct(Connection $connection)
    {
         $this->connection = $connection;
    }
  function peopledata()
  {
    $sql = "SELECT * FROM `people`";
    $users= $this->connection->fetchall($sql);
    return $users;
  }
  function personallfinance($id)
  {
    $sql = "SELECT * FROM `finance` WHERE pid =".$id;
    $users= $this->connection->fetchall($sql);
    return $users;
  }
  function personallbake($id)
  {
    $sql = "SELECT * FROM `bake` WHERE pid =".$id;
    $users= $this->connection->fetchall($sql);
    return $users;
  }
  function person($id)
  {
    $sql = "SELECT * FROM `people` WHERE id =".$id;
    $users= $this->connection->fetchall($sql);
    return $users; 
  }
  function finance($id)
  {
    $sql = "SELECT * FROM `finance` WHERE id =".$id;
    $users= $this->connection->fetchall($sql);
    return $users; 
  }
  function bake($id)
  {
    $sql = "SELECT * FROM `bake` WHERE id =".$id;
    $users= $this->connection->fetchall($sql);
    return $users; 
  }
  function newperson($properties)
  {
   
    $users= $this->connection->insert('people',$properties);
    $sql=" SELECT id FROM people ORDER BY id DESC LIMIT 1"; 
    $users= $this->connection->fetchall($sql);
    return $users; 
  }
  function  updateperson($person,$id)
  {
    unset($person['id']);
    $users= $this->connection->update('people',$person
    ,['id'=>$id]);
    $sql = "SELECT * FROM  `people`  WHERE id =".$id;
    $users= $this->connection->fetchall($sql);
   return $users;
  }
  function  updatefin($person,$id)
  {
    unset($person['id']);
    $users= $this->connection->update('finance',$person
    ,['id'=>$id]);
   
    if($users)
    {
     $users="sucess";
    }
    else
    {
      $users="fail";
    }
   return $users;
  }
  function  updatelen($person,$id)
  {
    unset($person['id']);
    $users= $this->connection->update('bake',$person
    ,['id'=>$id]);
    if($users)
    {
     $users="sucess";
    }
    else
    {
      $users="fail";
    }
   return $users;
  }
  
  function newbake($properties)
  {
   
    $users= $this->connection->insert('bake',$properties);
    $sql=" SELECT id FROM people ORDER BY id DESC LIMIT 1"; 
    $users= $this->connection->fetchall($sql);
    return $users; 
  }
  function newfinance($properties)
  {
    $users= $this->connection->insert('finance',$properties);
    $sql=" SELECT id FROM people ORDER BY id DESC LIMIT 1"; 
    $users= $this->connection->fetchall($sql);
    return $users; 
  }
  
}

