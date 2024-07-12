<?php
include_once "scripts/checklogin.php";
include_once "include/header.php";
include_once "scripts/DB.php";

if (!check("admin")) {
    header('Location: userlogout.php');
    exit();
}

$stmt = DB::query("SELECT * FROM user");

$user = $stmt->fetchAll(PDO::FETCH_OBJ);

include_once "msg/usermanagehall.php";
?>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <h2 class="text-center"> Users </h2>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $users): ?>
                <tr>
                    <td><?= $users->name ?></td>
                    <td><?= $users->contact ?></td>
                    <td><?= $users->city . "<br>" . $users->address ?></td>
                    <td>
                        <form action="userdeletehall.php" method="post">
                            <input type="hidden" name="id" value="<?= $users->id ?>">
                            <button type="submit" name="remove" class="btn btn-danger btn-block">Remove</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!---END-->