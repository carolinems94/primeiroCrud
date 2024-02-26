
<?php 
    $id = $_GET["id"];

    echo "<h1>Editar o aluno de matrícula - $id</h1>";
    $sql = "SELECT * FROM alunos WHERE id={$id}";
    $resultado = $conexao->query($sql);
    $aluno = $resultado->fetch_object();

    $nomeAluno = $aluno->nome;
    $sobrenomeAluno = $aluno->sobrenome;
    $dataNascAluno = $aluno->dataNasc;
    $cursoAluno = $aluno->curso;
    $emailAluno = $aluno->email;
    $senhaAluno = $aluno->senha;
?>

<form action="?page=atuarNoBanco" method="post" class="mt-4">
    <input type="hidden" name="acao" value=editar>
    <input type="hidden" name="id" value="<?php echo $id ?>">

    <label for="nome">Nome do Aluno: </label>
    <input type="text" name="nome" placeholder="Digite o nome do aluno..." class="form-control mt-2 mb-3" value="<?php echo $nomeAluno ?>"required>

    <label for="sobrenome">Nome da Sobrenome: </label>
    <input type="text" name="sobrenome" placeholder="Digite a sobrenome do aluno..." class="form-control mt-2 mb-3" value="<?php echo $sobrenomeAluno ?>" required>

    <label for="dataNasc">Data Nascimento do Aluno: </label>
    <input type="date" name="dataNasc" class="form-control mt-2 mb-3" value="<?php echo $dataNascAluno ?>" required>

    <label for="curso">Curso do Aluno: </label>
    <input type="text" name="curso" placeholder="Digite o curso do aluno..." class="form-control mt-2 mb-3" value="<?php echo $cursoAluno ?>" required>

    <label for="email">E-mail do Aluno: </label>
    <input type="email" name="email" placeholder="Digite o e-mail do aluno..." class="form-control mt-2 mb-3" value="<?php echo $emailAluno ?>" required>

    <label for="senha">Senha do Aluno: </label>
    <input type="password" name="senha" placeholder="Digite novamente a senha do aluno..." class="form-control mt-2 mb-3" required>

    <button type="submit" class="btn btn-success">Editar</button>
</form>