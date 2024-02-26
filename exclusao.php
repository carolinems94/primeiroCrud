<?php
$id = $_GET["id"];
$sql = "SELECT * FROM alunos
            WHERE id={$id};";
$resultado = $conexao->query($sql);
$quantidadeLinhas = $resultado->num_rows;

if ($quantidadeLinhas > 0) {
    $aluno = $resultado->fetch_assoc();
    $senhaAsteriscos = str_repeat('*', strlen($aluno['senha'])); //substituir naexibição do html
    echo "<h1>Você realmente deseja deletar este aluno ?</h1>";
    echo
    "<div class=\"card mt-4\">
            <div class=\"card-body\">
                <h3>Matrícula: {$aluno['id']}</h3>
                <h4>Nome completo: {$aluno['nome']} {$aluno['sobrenome']}</h4>                
                <p>Data Nasc.: {$aluno['dataNasc']}</p>
                <p>curso: {$aluno['curso']}</p>
                <p>email: {$aluno['email']}</p>
                <p>senha: $senhaAsteriscos</p>
                
                <form action=\"?page=atuarNoBanco\" method=\"post\">
                <input type=\"hidden\" name=\"acao\" value=\"deletar\">
                <input type=\"hidden\" name=\"id\" value=\"{$aluno['id']}\">
                <button type=\"submit\" class=\"btn btn-success\">Sim</button>
                </form>
                 <button class=\"btn btn-danger mt-2\" onclick=\"location.href='?page=veralunos'\">Não</button>
               
            </div>    
        </div>";
} else {
    echo "<p class=\"alert alert-danger mt-4\">Não foi possível encontrar este aluno.</p>";
}

?>