<?php
function insertPackage($conn,$data)
{
	
	$stmt = $conn->prepare("INSERT INTO tbl_package(`package_name`, `price`, `detail` ,`image`, `cat_id`) VALUES (:package_name, :price,:detail,:image, :cat_id)");
	$stmt->bindParam(':package_name',$data['package_name']);
	$stmt->bindParam(':price',$data['price']);
	$stmt->bindParam(':detail',$data['detail']);
	$stmt->bindParam(':image',$data['image']);
	$stmt->bindParam(':cat_id',$data['cat_id']);
	if($stmt->execute())
		return true;


	return false;
}

function updatePackage($conn,$data)
{
	
	if(isset($data['image']))
	{

		$stmt = $conn->prepare("UPDATE tbl_package SET package_name=:package_name, price=:price, image=:image, detail=:detail, cat_id=:cat_id WHERE id=:id");
		$stmt->bindParam(':package_name',$data['package_name']);
		$stmt->bindParam(':price',$data['price']);
		$stmt->bindParam(':image',$data['image']);
		$stmt->bindParam(':detail',$data['detail']);
		$stmt->bindParam(':cat_id',$data['cat_id']);
		$stmt->bindParam(':id',$data['id']);
	}
	else
	{
		$stmt = $conn->prepare("UPDATE tbl_package SET package_name=:package_name, price=:price, detail=:detail, image=:image, cat_id=:cat_id WHERE id=:id");
		$stmt->bindParam(':package_name',$data['package_name']);
		$stmt->bindParam(':price',$data['price']);
		$stmt->bindParam(':image',$data['image']);
		$stmt->bindParam(':detail',$data['detail']);
		$stmt->bindParam(':cat_id',$data['cat_id']);
		$stmt->bindParam(':id',$data['id']);	
	}
	

	if($stmt->execute())
		return true;


	return false;
}

function getAllPackages($conn)
{
	$stmt= $conn->prepare("SELECT * FROM tbl_package");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getPackageById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM tbl_package WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}


function deletePackage($conn,$id)
{
	$advertisment = getPackageById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM tbl_package WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		return true;
	}	


	return false;
}