<?php if (isset($_GET['msg'])): ?>
<div class="container" style="margin-top: 30px">

    <?php if ($_GET['msg'] == 'success'): ?>
    <div class="alert alert-success">
        <h4>Registering</h4>
        <p>User registered.</p>
    </div>

    <?php elseif ($_GET['msg'] == 'failed'): ?>
    <div class="alert alert-danger">
        <h4>Failed</h4>
        <p>Problem while Registering! Please try again later!</p>
    </div>
    <?php endif; ?>

</div>
<?php endif;

