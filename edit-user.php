<h1>Editar usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=save" method="POST" >
    <input name="action" type="hidden" value="edit">
    <input name="id" type="hidden" value="<?php print $row->id;  ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" value="<?php print $row->nome;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $row->email;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de entrada</label>
        <input type="date" name="data_entrada" value="<?php print $row->data_entrada;?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>