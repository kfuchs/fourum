<?= View::make('meta') ?>
<?= View::make('header') ?>

<div class="row">
    <div class="col-md-12">
        <h3>Users</h3>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <?= View::make('users.sidebar') ?>
    </div>
    <div class="col-mid-9" style="height:1000px;">
    </div>
</div>

<?= View::make('footer') ?>
