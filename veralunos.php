<h1>Todos os alunos cadastrados: </h1>

<?php
$sql = "SELECT * FROM alunos";

$resultado = $conexao->query($sql);

$qtdLinhas = $resultado->num_rows;

if ($qtdLinhas > 0) {

    while($produto = $resultado->fetch_assoc()){
        echo 
        "<div class='card mt-4'>
            <div class='card-body'>
                <h3>Matrícula: {$produto['id']}</h3>
                <h5>Nome completo: {$produto['nome']} {$produto['sobrenome']} </h5>
                <p>Data Nasc.: {$produto['dataNasc']}</p> 
                <p>Curso: {$produto['curso']}</p>
                <p>Email: {$produto['email']}</p>
                
                <button class='btn btn-success' onclick=\"location.href='?page=edicao&id={$produto['id']}'\">Editar</button>
                <button class='btn btn-danger' onclick=\"location.href='?page=exclusao&id={$produto['id']}'\">Deletar</button>
            </div>
        </div>";
    }
} else {
    echo "<p class='alert alert-danger' mt-4>Não há nenhum produto cadastrado no sistema.</p>";
}
?>