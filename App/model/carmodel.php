<?php
namespace App\model;
use Core\DBPDO;

class carmodel extends DBPDO {
	function getCar(){
		return $this->fetchAll('select * from car');
	}
	function getdetails($id){
		$con = $this->PDO->prepare('select * from car where id='.$id);
        $con->execute();
        return $con->fetchAll();

	}
}
