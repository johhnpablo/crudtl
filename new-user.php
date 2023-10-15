
<h1>Novo usuário.</h1>

<form action="?page=save" method="POST" >
    <input name="action" type="hidden" value="register">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de entrada</label>
        <input type="date" name="data_entrada" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>