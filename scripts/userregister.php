<?php

require_once 'session.php';
require_once 'DB.php';
require_once 'helpers.php';

if (isset($_POST['register1'])) {
    $input = clean($_POST);

    $name = $input['name1'];
    $contact = $input['contact1'];
    $city = $input['city1'];
    $address = $input['adder11'];
    $password = $input['password1'];


    $isProviderCreated = DB::query("INSERT INTO user values(DEFAULT, ?, ?, ?, ?, ?)", [
            $name,$contact,$city,$address,$password
        ]);

    if ($isProviderCreated) {
        header('Location: ../userlogin.php?msg=success');
        exit();
    } else {
        header('Location: ../userregister.php?msg=failed');
        exit();
    }
}
