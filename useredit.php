<?php
include_once "scripts/checklogin.php";
include_once "include/header.php";

if (!check()) {
    header('Location: logout.php');
    exit();
}

$provider = $_SESSION['user'];

$cities = ["Ahmednagar", "Akola", "Akot", "Amalner", "Ambejogai", "Amravati", "Anjangaon", "Arvi", "Aurangabad", "Bhiwandi", "Dhule", "Kalyan-Dombivali", "Ichalkaranji", "Kalyan-Dombivali", "Karjat", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur", "Mangalvedhe", "Mangrulpir", "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Mira-Bhayandar", "Morshi", "Mukhed", "Mul", "Greater Mumbai*", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad", "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", "Pandharpur", "Panvel", "Parbhani", "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune", "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner", "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner", "Sawantwadi", "Shahade", "Shegaon", "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar", "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur", "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur", "Vadgaon Kasba", "Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"];
?>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Update your Personal Information</h3>
            </div>
            <hr>

            <form action="scripts/useredit.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input value="<?= $provider->name; ?>" id="name1"
                        name="name1" type="text" class="form-control" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for="">Contact No.</label>
                    <input value="<?= $provider->contact; ?>"
                        id="contact1" name="contact1" type="text" class="form-control" placeholder="Contact"
                        minlength="10" maxlength="10" required>
                </div>


                <div class="form-group">
                    <label for="">City</label>
                    <select value="<?= $provider->city; ?>"
                        class="form-control" name="city1" id="city1">
                        <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city ?>"> <?= $city ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Address</label>
                    <input value="<?= $provider->address; ?>"
                        id="address1" name="address1" type="text" class="form-control" placeholder="Enter Address line-1"
                        required>
                </div>


                <div class="form-group">
                    <label for="">Password</label>
                    <input value="<?= $provider->password; ?>"
                        id="password1" name="password1" type="password" class="form-control"
                        placeholder="Enter 6 Charectar Password" minlength="4" required>
                </div>

                <button style="margin-top: 20px;" class="btn btn-success btn-block" type="submit" name="register1"
                    id="register1">Update</button>
            </form>

        </div>
    </div>
</div>

<!---END-->
