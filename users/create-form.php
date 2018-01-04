<?php include 'header.php'; ?>
    <div class="container">
        <header>
            <div class="row">
                <div class="col-sm-6">
                    <h2>Cadastrar novo usuário</h2>
                </div>
                <div class="col-sm-6 text-right h2">
                    <a class="btn btn-primary" href="index.php">Voltar</a>
                    <a class="btn btn-default" href="create-form.php">Atualizar</a>
                </div>
            </div>
        </header>
        <form action="store.php" method="POST">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Insira o nome..." required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Insira o e-mail..." required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Insira a senha..." required>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
<?php include 'footer.php'; ?>