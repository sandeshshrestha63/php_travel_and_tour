<?php

function getLoginDetail($conn,$data)
{
	$data['password'] = md5($data['password']);
	$stmt = $conn->prepare("SELECT * FROM login WHERE email=:email AND password=:password AND status='active'");
	$stmt->bindParam(':email',$data['email']);
	$stmt->bindParam(':password',$data['password']);
	if($stmt->execute())
	{
		$stmt->setFetchMode(PDO::FETCH_ASSOC); 
		if($stmt->rowCount()>0)
		{
			$info = $stmt->fetch();
			$_SESSION['email'] = $info['email'];
			$_SESSION['role'] = $info['role'];
			$_SESSION['f_name']=$info['f_name'];
			$_SESSION['l_name']=$info['l_name'];
			$_SESSION['image']=$info['image'];
			$_SESSION['contact']=$info['contact'];
			$_SESSION['address']=$info['address'];
			$_SESSION['id']=$info['id'];
		return true;
	
		}
			}

	return false;
}

function checkAdminLogin()
{
	if(isset($_SESSION['email'])&& isset($_SESSION['role']))
		return true;

	return false;
}

function logout(){

	session_destroy();
	return true;
}

function changePassword($conn,$data)
{
	
		$stmt = $conn->prepare("UPDATE login SET password=:password WHERE id=:id");
		$stmt->bindParam(':password',$data['pass']);
}