<h2>Registrar</h2>
<p style="color:#FF0000;">Dados do proprietário e do pet<sup>*</sup></p>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <input type="text" name="nome" class="form-control" placeholder="Proprietário:" required>
    </div>
    <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="E-mail:" required>
    </div>
    <div class="mb-3">
        <input type="tel" name="telefone" class="form-control" placeholder="Telefone:" required>
    </div>
    <div class="mb-3">
        <input type="text" name="nomePet" class="form-control" placeholder="Nome do pet:" required>
    </div>
    <div class="mb-3">
        <input type="text" name="especie" class="form-control" placeholder="Qual espécie:" required>
    </div>
    <div class="mb-3">
        <input type="text" name="raca" class="form-control" placeholder="Qual raça:" required>
    </div>
    <div class="mb-3">
        <input type="number" name="idadePet" class="form-control" placeholder="Idade do pet:" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Enviar
        </button>
    </div>
</form>