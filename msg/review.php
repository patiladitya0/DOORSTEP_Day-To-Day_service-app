<?php if (isset($_GET['msg'])): ?>
<div class="container" style="margin-top: 30px">
    <?php if ($_GET['msg'] == 'success'): ?>
    <div class="alert alert-success">
        <h3>Success</h3>
        <p>review data deleted successfully.</p>
    </div>
    <?php elseif ($_GET['msg'] == 'failed'): ?>
    <div class="alert alert-danger">
        <h3>Failure</h3>
        <p>While deleting Review data! Please try again later!</p>
    </div>
    <?php endif; ?>
</div>
<?php endif;
