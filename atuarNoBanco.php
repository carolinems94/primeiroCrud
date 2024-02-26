<?php
$acaoASerFeita = $_POST["acao"];

switch ($acaoASerFeita) {
    case "cadastrar":
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $dataNasc = $_POST["dataNasc"];
        $curso = $_POST["curso"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO alunos(id, nome, sobrenome, dataNasc, curso, email, senha) 
                VALUES('DEFAULT', '{$nome}', '{$sobrenome}', '{$dataNasc}', '{$curso}', '{$email}', '{$senha}');";

        $resultado = $conexao->query($sql);

        if ($resultado) {
            echo "<script>
                alert('Aluno Cadastrado com Sucesso !')     
                </script>";
            echo "<script>
                location.href='?page=veralunos'
                </script>";
        } else {
            echo "<script>
        alert('Houve um erro ao cadastrar esse Aluno !')     
        </script>";
            echo "<script>
        location.href='?page=veralunos'
        </script>";
        }

        break;

    case "editar":
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $dataNasc = $_POST["dataNasc"];
        $curso = $_POST["curso"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $id = $_POST["id"];

        $sql = "UPDATE alunos
                SET nome='{$nome}',
                sobrenome='{$sobrenome}',
                    dataNasc='{$dataNasc}',
                    curso='{$curso}',
                    email='{$email}',
                    senha='{$senha}'
                WHERE id={$id}";

        $resultado = $conexao->query($sql);

        if ($resultado) {
            echo "<script>
                alert(\"Resultado positivo ! Atualizou no banco os valores!\")     
                </script>";
            echo "<script>
                location.href='?page=veralunos'
                </script>";
        } else {
            echo "<script>
        alert('Resultado Negativo ! Tente novamente !')     
        </script>";
            echo "<script>
        location.href='?page=veralunos'
        </script>";
        }


        break;
    case "deletar":
        $id = $_POST["id"];
        $sql = "DELETE FROM alunos
                    WHERE id={$id}";

        $resultado = $conexao->query($sql);
        if ($resultado) {
            echo
            "<script>
                    alert(\"Aluno deletado com sucesso!\");
                </script>";
            echo
            "<script>
                    location.href=\"?page=veralunos\";
                </script>";
        } else {
            "<script>
                    alert(\"Houve um erro ao tentar deletar este aluno. Tente novamente mais tarde.\");
                </script>";
            echo
            "<script>
                    location.href=\"?page=veralunos\";
                </script>";
        }

        break;
}
