<?php

require '../database.php';

$user_id = $_GET['id'];

$users = doQuery("SELECT * FROM users WHERE id = {$user_id}", $db);

?>
<?php include 'header.php'; ?>
    <div class="container">
        <header>
            <div class="row">
                <div class="col-sm-6">
                    <h2>Visualizar usuário: <?php echo $users['result'][0]->name; ?></h2>
                </div>
                <div class="col-sm-6 text-right h2">
                    <a class="btn btn-primary" href="index.php">Voltar</a>
                </div>
            </div>
        </header>
        <div class="form-group">
            <label for="name">Código:</label>
            <input type="text" class="form-control" name="id" id="id" value="<?php echo $users['result'][0]->id; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" id="name" value="<?php echo $users['result'][0]->name; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $users['result'][0]->email; ?>" disabled>
        </div>
    </div>
<?php include 'footer.php'; ?>