<?php require_once 'inc/top.php'; ?>

    <form action="lataa.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
<label for="file">Tiedosto</label>
<input type="file" class="form-control-file" id="file" name="file">
<button type="submit" class="btn btn-secondary">Lähetä</button>
</div>
    </form>
    <?php require_once 'inc/bottom.php'; ?>