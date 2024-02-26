<h1>Página de Cadastro: </h1>

<form action="?page=atuarNoBanco" method="post" class="mt-4">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label for="nome" class="mb-2">Nome do Aluno: </label>
        <input type="text" name="nome" class="form-control" placeholder="Digite o nome do aluno ..." required>
    </div>

    <div class="mb-3">
        <label for="sobrenome" class="mb-2">Sobrenome do Aluno: </label>
        <input type="text" name="sobrenome" class="form-control" placeholder="Digite a sobrenome do aluno ..." required>
    </div>

    <div class="mb-3">
        <label for="dataNasc" class="mb-2">Data Nascimento do Aluno: </label>
        <input type="date" name="dataNasc" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="curso" class="mb-2">Curso do Aluno: </label>
        <input type="text" name="curso" class="form-control" placeholder="Digite o curso do aluno ..." required>
    </div>

    <div class="mb-3">
        <label for="email" class="mb-2">E-mail do Aluno: </label>
        <input type="email" name="email" class="form-control" placeholder="Digite o e-mail do aluno ..." required>
    </div>

    <div class="mb-3">
        <label for="senha" class="mb-2">Senha do Aluno: </label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a senha do aluno ..." required>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>