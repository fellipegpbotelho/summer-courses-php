<?php
session_start();

require '../database.php';

$users = doQuery("SELECT * FROM users", $db);

?>
<?php include 'header.php'; ?>
<div class="container">
    <header>
        <div class="row">
            <div class="col-sm-6">
                <h2>Usuários</h2>
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="create-form.php">Novo Usuário</a>
                <a class="btn btn-default" href="index.php">Atualizar</a>
            </div>
        </div>
    </header>
    <?php if(isset($_SESSION['success'])): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_SESSION['success']; ?>
    </div>
    <?php unset($_SESSION['success']); ?>
    <?php endif; ?>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users['result'] as $user): ?>
            <tr>
                <td><?php echo $user->id; ?></td>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->email; ?></td>
                <td width="250">
                    <a href="view.php?id=<?php echo $user->id; ?>" class="btn btn-warning">Visualizar</a>
                    <a href="edit-form.php?id=<?php echo $user->id; ?>" class="btn btn-success">Editar</a>
                    <a href="delete.php?id=<?php echo $user->id; ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir este usuário?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include 'footer.php'; ?>