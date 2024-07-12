<?php

require_once 'session.php';
require_once 'DB.php';
require_once 'helpers.php';

if (isset($_POST['review11'])) {
    $input = clean($_POST);

    $name = $input['name11'];
    $review = $input['rani'];
    


    $review = DB::query("INSERT INTO review (name,review) values(?, ?)", [
            $name,$review
        ]);

    if ($review) {
        header('Location: ../review.php?msg=success');
        exit();
    } else {
        header('Location: ../review.php?msg=failed');
        exit();
    }
}
