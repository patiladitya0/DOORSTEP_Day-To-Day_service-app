<?php
include_once "session.php";
include_once "checklogin.php";
include_once "DB.php";
include_once "helpers.php";

if (!check()) {
    header('Location: userlogout.php');
    exit();
}

if (isset($_POST['register'])) {
    $input = clean($_POST);

    $name = $input['name1'];
    $contact = $input['contact1'];

    $address = $input['address1'];

    $city = $input['city1'];
    $password = $input['password1'];


    $isProviderCreated = DB::query(
        "UPDATE user SET name=?, contact=?, address=?, city=?, password=? WHERE id=?",
        [$name,$contact,$address ,$city, $password, $_SESSION['user']->id]
    );
    

    if ($isProviderCreated) {
        unlink($_SESSION['user']->photo);
        header('Location: ../userlogout.php');
        exit();
    } else {
        unlink('../storage/'.$file1);
        echo "";
        header('Location: ../userlogout.php');
        exit();
    }
}
