<?php
function insertAdvertisment($conn,$data)
{
	
	$stmt = $conn->prepare("INSERT INTO tbl_advertisment(`title`, `company_name`, `image`, `detail`, `contact`, `email`) VALUES (:title, :company_name, :image, :detail, :contact, :email)");
	$stmt->bindParam(':title',$data['title']);
	$stmt->bindParam(':company_name',$data['company_name']);
	$stmt->bindParam(':image',$data['image']);
	$stmt->bindParam(':detail',$data['detail']);
	$stmt->bindParam(':contact',$data['contact']);
	$stmt->bindParam(':email',$data['email']);

	if($stmt->execute())
		return true;


	return false;
}

function updateAdvertisment($conn,$data)
{
	//dd($data);
	if(isset($data['image']))
	{

		$stmt = $conn->prepare("UPDATE tbl_advertisment SET title=:title, company_name=:company_name, image=:image, detail=:detail, contact=:contact, email=:email WHERE id=:id");
		$stmt->bindParam(':title',$data['title']);
		$stmt->bindParam(':company_name',$data['company_name']);
		$stmt->bindParam(':image',$data['image']);
		$stmt->bindParam(':detail',$data['detail']);
		$stmt->bindParam(':contact',$data['contact']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':id',$data['id']);
	}
	else
	{
		$stmt = $conn->prepare("UPDATE tbl_advertisment SET title=:title, company_name=:company_name, image=:image, detail=:detail, contact=:contact, email=:email WHERE id=:id");
		$stmt->bindParam(':title',$data['title']);
		$stmt->bindParam(':company_name',$data['company_name']);
		$stmt->bindParam(':image',$data['image']);
		$stmt->bindParam(':detail',$data['detail']);
		$stmt->bindParam(':contact',$data['contact']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':id',$data['id']);	
	}
	

	if($stmt->execute())
		return true;


	return false;
}

function getAllAdvertisments($conn)
{
	$stmt= $conn->prepare("SELECT * FROM tbl_advertisment");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getAdvertismentById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM tbl_advertisment WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}


function deleteAdvertisment($conn,$id)
{
	$advertisment = getAdvertismentById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM tbl_advertisment WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		@unlink('uploads/'.$user['image']);
		return true;
	}	


	return false;
}