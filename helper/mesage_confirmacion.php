<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php 
            // Limpiar mensaje y tipo de mensaje de la sesión
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        ?>
    <?php endif; ?>
</div>