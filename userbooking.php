<?php
    include_once "scripts/providerchecklogin.php";
    include_once "scripts/DB.php";
    include_once "include/userheader.php";

    if (check("user")) {
       header('Location: logout.php');
       exit();
    }

    $contact = $_SESSION['user']->contact;

    $sql = "SELECT p.*, b.date AS booking_date
            FROM providers p
            INNER JOIN bookings b ON p.id = b.provider_id
            WHERE b.contact = ?
            ORDER BY b.date DESC";
    
    $providers = DB::query($sql, [$contact])->fetchAll(PDO::FETCH_OBJ);

    include_once "msg/admin.php";
?>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <h2 class="text-center"> Bookings </h2>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Descreption</th>
                <th>City</th>
                <th>Profession</th>
                <th>Booking Date</th>
            </tr>
            <?php foreach ($providers as $provider): ?>
            <tr>
                <td><?= $provider->name; ?></td>
                <td><?= $provider->contact; ?></td>
                <td><?= $provider->adder1; ?></td>
                <td><?= $provider->descr; ?></td>
                <td><?= $provider->city; ?></td>
                <td><?= $provider->profession; ?></td>
                <td><?= $provider->booking_date; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
