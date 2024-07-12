
<?php
    include_once "scripts/checklogin.php";
    include_once "include/userheader.php";
    include_once "scripts/DB.php";

    $stmt = DB::query("SELECT * FROM review");

    $review = $stmt->fetchAll(PDO::FETCH_OBJ);


?>
<div class="container" style="margin-top: 30px; max-width: 600px;margin-bottom: 30px;">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Add Your Review</h3>
            </div>
            <hr>


            <form action="scripts/review.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name *</label>
                    <input id="name11" name="name11" type="text" class="form-control" placeholder="Name"   placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <label for="">Add Description *</label>
                    <textarea name="rani" id="rani" class="form-control" cols="30" rows="5"
                        placeholder="Tell me something I don't know" required></textarea>
                </div>


                <button style="margin-top: 30px;" class="btn btn-block btn-primary" type="submit" name="review11"
                    id="review11">Post</button>
            </form>

        </div>
    </div>
</div>

<?php
    include_once "scripts/checklogin.php";
   
    include_once "scripts/DB.php";

    $stmt = DB::query("SELECT * FROM review");

    $review = $stmt->fetchAll(PDO::FETCH_OBJ);


?>
<div class="container col-8" style="margin-top: 50px ; max-width: 100.00% ";>
        <br><h2 class="section-heading" style="text-align:center";>Review</h2>
            <div class="card">
</div>
                
            

            
            </div>
        </div>

        <div class="container" style="margin-top: 30px; margin-bottom: 60px;">

    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Review</th>
                
            </tr>
            <?php foreach ($review as $review): ?>
            <tr>
                
                <td><?= $review->name; ?>
                </td>
                <td><?= $review->review; ?>
                </td>
            
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<!---END-->
