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
                    <h2>Editar usuário: <?php echo $users['result'][0]->name; ?></h2>
                </div>
                <div class="col-sm-6 text-right h2">
                    <a class="btn btn-primary" href="index.php">Voltar</a>
                </div>
            </div>
        </header>
        <form action="update.php" method="POST">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Insira o nome..." required value="<?php echo $users['result'][0]->name; ?>">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Insira o e-mail..." required value="<?php echo $users['result'][0]->email; ?>">
            </div>
            <input type="hidden" name="user_id" value="<?php echo $users['result'][0]->id; ?>">
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
<?php include 'footer.php'; ?>