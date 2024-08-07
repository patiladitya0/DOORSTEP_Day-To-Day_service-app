<?php

include_once "scripts/checklogin.php";
include_once "scripts/helpers.php";
include_once "scripts/DB.php";

if (!check("admin")) {
    header('Location: userlogout.php');
    exit();
}
if (isset($_POST['remove'])) {
    $input = clean($_POST);
    
    $isRemoved = DB::query("DELETE FROM review WHERE id=?", [$input['id']]);

    if ($isRemoved) {
        header('Location: deletereview.php?msg=success');
        exit();
    } else {
        header('Location: deletereview.php?msg=failed');
        exit();
    }
}
