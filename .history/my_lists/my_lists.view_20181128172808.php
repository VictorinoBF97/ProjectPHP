<?php
    require_once '../setup.php';
    require_once '../includes/header.php'; 
?>

<div class="container">
    <div id="my_lists" class="row">
    <?php while($list = mysqli_fetch_assoc($result_lists)): ?>
        <div class="col-sm">
            <div id="card_list" class="card" style="width: 1rem;">
                <div class="card-body">
                    <h5 class="card-title"><?=$list['name']?></h5>
                    <p class="card-text"><?=$list['description']?></p>
                    <a href="<?=BASE_URL?>recambios/?id=<?=$list['id']?>" class="card-link btn btn-primary">Ver Recambio</a>
                    <a href="<?=BASE_URL?>delete_list/?id=<?=$list['id']?>" class="card-link float-right btn btn-danger">Borrar Recambio</a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>
</div>

<?php require_once '../includes/footer.php'; ?>