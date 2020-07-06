<div class="row page-title-header">
    <div class="col-12">
    <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
        <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
            <li><a href="#"><?= $title ?></a></li>
        </ul>
        </div>
    </div>
    </div>
</div>

<?php 
if(isset($_GET['error'])){
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Something wrong, check your input field.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
}
?>

<?php 
if(isset($_GET['success'])){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your transaction have done.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
}
?>