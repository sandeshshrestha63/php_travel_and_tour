<?php

function updateContactus($conn,$data)
{


		$stmt = $conn->prepare("UPDATE tbl_contactus SET cat_name=:cat_name WHERE id=:id");
		$stmt->bindParam(':cat_name',$data['cat_name']);
		
		$stmt->bindParam(':id',$data['id']);
	

	if($stmt->execute())
		return true;


	return false;
}

function getAllContactus($conn)
{
	$stmt= $conn->prepare("SELECT * FROM tbl_contactus");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getContactusById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM tbl_contactus WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}


function deleteContactus($conn,$id)
{
	$category = getCategoryById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM tbl_contactus WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		return true;
	}	


	return false;
}