<?php

include_once "./include/header.php";
$cities = ["Ahmednagar", "Akola", "Akot", "Amalner", "Ambejogai", "Amravati", "Anjangaon", "Arvi", "Aurangabad", "Bhiwandi", "Dhule", "Kalyan-Dombivali", "Ichalkaranji", "Kalyan-Dombivali", "Karjat", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur", "Mangalvedhe", "Mangrulpir",
 "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Mira-Bhayandar", "Morshi", "Mukhed", "Mumbai", "Greater Mumbai*", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad", "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", 
"Pandharpur", "Panvel", "Parbhani", "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune", "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner", "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner",
 "Sawantwadi", "Shahade", "Shegaon", "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar", "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur", "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur", "Vadgaon Kasba", 
"Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"];

?>


<h2 class="text-center" style="margin-top: 20px" style="font-family:Raleway">DOORSTEP</h2>
<hr>
<div class="container" style="margin-top:20px; margin-bottom: 60px;">


    <div class="row">
        <div class="form-group col-5">
            <label for="">City</label>
            <select class="form-control" name="city" id="city">
                <option value="none">-- Select City --</option>
                <?php foreach ($cities as $city) : ?>
                <option value="<?= $city ?>"> <?= $city ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group col-5">
    <label for="">Who's Required</label>
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
            </select>
        </div>

        <div class="form-group col-2">
            <label for="">Action</label>
            <button id="search" class="form-control btn btn-success" type="button">Search</button>
        </div>
    </div>

    <div class="table-responsive">
        <table id="providers" class="table">
            <thead>
                <tr>
                    
                    <th>Name</th>
                    <th>Address</th>
                    <th>Discription</th>
                    <th>Profession</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan='5'>Select city and profession..</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="js/jquery.js"></script>
<script>
    $(function() {
        $("#search").click(function() {
            var city = $("#city").val();
            var profession = $("#profession").val();

            if (city == "none" || profession == "none") {
                alert("Don't leave fields empty!");
                tbody = "<tr><td colspan='5'>please </td></tr>";
            } else {
                $.post('scripts/searchproviders.php', {
                    city: city,
                    profession: profession
                }, function(res) {
                    var providers = JSON.parse(res);
                    var tbody = "";

                    if (providers.failed == true) {
                        tbody = "<tr><td colspan='5'>No Service Providers found...</td></tr>";
                    } else {
                        providers.forEach(function(provider, i) {
                            tbody += "<tr>" +
                                "<td>" + provider.name + "</td>" +
                                "<td>" + provider.adder1 +"<br>" +provider.adder2 +"<br>"  +
                                "<br>"+ "</td>"+
                                "<td>" +provider.descr +"<br>"
                            + "</td>" +
                                "<td>" + provider.profession + "</td>" +
                                "<td><a href='userlogin.php?provider=" + provider.id +
                                "' class='btn btn-primary btn-block'>Book</a></td>";
                        });
                    }
                    $("#providers tbody").html(tbody);
                });
            }
            
        });
    });
</script>

<!---END-->
