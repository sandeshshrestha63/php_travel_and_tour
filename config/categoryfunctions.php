<?php
function insertCategory($conn,$data)
{
	$stmt = $conn->prepare("INSERT INTO tbl_category( `cat_name`) VALUES (:cat_name)");
	$stmt->bindParam(':cat_name',$data['cat_name']);

	if($stmt->execute())
		return true;


	return false;
}

function updateCategory($conn,$data)
{


		$stmt = $conn->prepare("UPDATE tbl_category SET cat_name=:cat_name WHERE id=:id");
		$stmt->bindParam(':cat_name',$data['cat_name']);
		
		$stmt->bindParam(':id',$data['id']);
	

	if($stmt->execute())
		return true;


	return false;
}

function getAllCategorys($conn)
{
	$stmt= $conn->prepare("SELECT * FROM tbl_category");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getCategoryById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM tbl_category WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}


function deleteCategory($conn,$id)
{
	$category = getCategoryById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM tbl_category WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		return true;
	}	


	return false;
}