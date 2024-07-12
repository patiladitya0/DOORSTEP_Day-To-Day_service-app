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
                <h3 class="text-center">Update your Information</h3>
            </div>
            <hr>

            <form action="scripts/updatehall.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name *</label>
                    <input value="<?= $provider->name; ?>" id="name"
                        name="name" type="text" class="form-control" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for="">Contact No *</label>
                    <input value="<?= $provider->contact; ?>"
                        id="contact" name="contact" type="text" class="form-control" placeholder="Contact"
                        minlength="10" maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="">Address Line 1 *</label>
                    <input value="<?= $provider->adder1; ?>"
                        id="adder1" name="adder1" type="text" class="form-control" placeholder="Enter Address line-1"
                        required>
                </div>

                <div class="form-group">
                    <label for="">AddressLine 2 *</label>
                    <input value="<?= $provider->adder2; ?>"
                        id="adder2" name="adder2" type="text" class="form-control" placeholder="Enter Address line-2"
                        required>
                </div>

                <div class="form-group">
                    <label for="">City *</label>
                    <select value="<?= $provider->city; ?>"
                        class="form-control" name="city" id="city">
                        <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city ?>"> <?= $city ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group" style="margin-top: 15px;">
                    <label for="">Description *</label>
                    <textarea name="descr" id="descr" class="form-control" cols="30" rows="5"
                        placeholder="Add Discription About Your Hall"
                        required><?= $provider->descr; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="">Password *</label>
                    <input value="<?= $provider->password; ?>"
                        id="password" name="password" type="password" class="form-control"
                        placeholder="Enter 6 Charectar Password" minlength="4" required>
                </div>

                <div class="form-group">
                    <label for="">Profession</label>
                    <select class="form-control" name="profession" id="profession">
                    <option value="none">Select Profession</option>
                    <option value="Carpentry">Carpentry</option>
                    <option value="Cleaning">Cleaning</option>
                    <option value="Dog walking and pet sitting services">Dog walking and pet sitting services</option>
                    <option value="Electrician">Electrician</option>
                    <option value="Flooring">Flooring</option>
                    <option value="Handyman services">Handyman services</option>
                    <option value="HVAC (Heating, Ventilation, and Air Conditioning)">HVAC (Heating, Ventilation, and Air Conditioning)</option>
                    <option value="House cleaning services">House cleaning services</option>
                    <option value="Interior design services">Interior design services</option>
                    <option value="Landscaping">Landscaping</option>
                    <option value="Lawn and garden care services">Lawn and garden care services</option>
                    <option value="Moving and storage services">Moving and storage services</option>
                    <option value="Personal chef and catering services">Personal chef and catering services</option>
                    <option value="Pest control services">Pest control services</option>
                    <option value="Plumbing">Plumbing</option>
                    <option value="pool_maintenance">Pool Maintenance Services</option>
                    <option value="painting_decorating">Painting and Decorating</option>
                    <option value="roofing">Roofing</option>
                    <option value="home_organization_decluttering">Home Organization and Decluttering Services</option>
                    </select>
                </div>

                <button style="margin-top: 20px;" class="btn btn-success btn-block" type="submit" name="register"
                    id="register">Update</button>
            </form>

        </div>
    </div>
</div>

<!---END-->
