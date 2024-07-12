<?php
include_once "session.php";
include_once "checklogin.php";
include_once "DB.php";
include_once "helpers.php";

if (!check()) {
    header('Location: logout.php');
    exit();
}

if (isset($_POST['register1'])) 
{
    $input = clean($_POST);

    $name = $input['name1'];
    $contact = $input['contact1'];
    $city = $input['city1'];
    $address = $input['address1'];
    $password = $input['password1'];


    $isProviderCreated = DB::query(
        "UPDATE user SET name=?, contact=?, city=?, address=?, password=?, WHERE id=?",
        [$name,$contact,$city,$address,$password,$_SESSION['user']->id]
    );

    if ($isProviderCreated) {
        header('Location: ../userlogout.php');
        exit();
    } 
    else {
        echo "";
        header('Location: ../logout.php');
        exit();
    }
}
