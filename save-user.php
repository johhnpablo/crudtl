<?php

switch ($_REQUEST['action']){
    case 'register':
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $data_entrada = $_POST["data_entrada"];

        $sql = "INSERT INTO usuarios (
                      nome, 
                      email, 
                      senha,
                      data_entrada
                      ) 
        VALUES ('{$name}','{$email}', '{$password}', '{$data_entrada}')";
        $res = $conn ->query($sql);
        if ($res== true){
            print "<script>alert('Cadastado com sucesso!');</script>";
            print "<script>location.href='?page=list';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='?page=list';</script>";
        }
        break;
    case 'edit':
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $data_entrada = $_POST["data_entrada"];

        $sql = "UPDATE usuarios SET 
                    nome='{$name}',
                    email='{$email}',
                    senha='{$password}',
                    data_entrada='{$data_entrada}'
                WHERE
                    id=".$_REQUEST['id'];


        $res = $conn ->query($sql);
        if ($res== true){
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=list';</script>";
        } else {
            print "<script>alert('Não foi possível editar!');</script>";
            print "<script>location.href='?page=list';</script>";
        }
        break;
    case 'delete':
        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        if ($res== true){
            print "<script>alert('Excluido com sucesso!');</script>";
            print "<script>location.href='?page=list';</script>";
        } else {
            print "<script>alert('Não foi possível excluir!');</script>";
            print "<script>location.href='?page=list';</script>";
        }
        break;

}