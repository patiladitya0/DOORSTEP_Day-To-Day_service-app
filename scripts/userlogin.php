<?php

require_once 'session.php';
require_once 'DB.php';
require_once 'helpers.php';

if (isset($_POST['login1'])) {
    $input = clean($_POST);

    $contact = $input['contact1'];
    $password = $input['password1'];

    if ($contact == "9898989898" && $password == "admin123") {
        $s = new stdClass();
        $s->name = "admin";
        $_SESSION['user'] = $s;

        header('Location: ../admin.php');
        exit();
    } 
    else {
        $stmt = DB::query(
            "SELECT * FROM user WHERE contact=? AND password=?",
            [$contact , $password]
        );
        $user = $stmt->fetch(PDO::FETCH_OBJ);

        if (isset($user->name)) {
            $_SESSION['user'] = $user;
            header('Location: ../userhome.php');
            exit();
        } else {
            header('Location: ../userlogin.php?msg=failed');
            exit();
        }
    }
}
