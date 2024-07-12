<?php
    include_once "scripts/providerchecklogin.php";
    include_once "scripts/DB.php";
    include_once "include/header.php";
   

    if (check("providers")) {
       header('Location: logout.php');
       exit();
    }

    $provider_id = $_SESSION['user']->id;
    $sql = "SELECT b.*, p.name AS provider_name 
    FROM bookings AS b 
    INNER JOIN providers AS p ON b.provider_id = p.id 
    WHERE b.provider_id = ? 
    ORDER BY b.date DESC";

        $bookings = DB::query($sql, [$provider_id])->fetchAll(PDO::FETCH_OBJ);

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
                <th>Date</th>
                <th>Payment Method</th>
                <th>Queries</th>
                
            </tr>
            <?php foreach ($bookings as $booking): ?>
            <tr>
                <td>
                    <?= $booking->fname; ?> <?= $booking->lname; ?>
                </td>
                <td>
                    <?= $booking->contact; ?>
                </td>
                <td>
                    <?= $booking->adder; ?>
                </td>
                <td>
                    <?= $booking->date; ?>
                </td>
                <td>
                    <?= $booking->payment; ?>
                </td>
                <td>
                    <?= $booking->queries; ?>
            </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<!---END-->
