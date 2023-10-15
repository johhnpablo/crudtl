<h1>Listar usuários.</h1>

<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Data cadastrada</th>";
        print "<th>Açoes</th>";
        print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->nome . "</td>";
            print "<td>" .  $row->email . "</td>";
            print "<td>" .  $row->data_entrada . "</td>";
            print "<td > 
                    <button onclick=\" location.href='?page=edit&id=" .$row->id."'; \" class=' btn btn-primary'>Editar</button>
                    <button onclick=\" if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save&action=delete&id=" .$row->id."';}else{false} \" class='mx-3 btn btn-danger'>Excluir</button>
                  </td>";

            print "</tr>";
        }
        print "<table>";
    } else {
        print "<p class='alert alert-danger'>Nenhum usuário encontrado</p>";
    }
?>