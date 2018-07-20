<?php
session_start();

function getUsers()
{
    $data = file_get_contents('login.json');
    $users = json_decode($data, true);
    if (!$users) {
    	return [];
    }
    return $users;
}

function getUser($login)
{
    $users = getUsers();
    foreach ($users as $user) {
    	if ($user['login'] == $login) {
    		return $user;
    	}
    }
    header("Location: list.php");
}

function login($login, $password)
{
    $user = getUser($login);
    if ($user && $user['password'] == $password) {
    	$_SESSION['user'] = $user;
    	return true;
    }
    return false;
}

function isGuest()
{
	return empty($_SESSION);
}

function isAdmin()
{
    return !empty($_SESSION['user']['is_admin']);
}