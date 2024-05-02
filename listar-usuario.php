<table class='table table-striped table-bordered table-responsive-md'>
    <thead class="thead-dark">
        <th scope="col">#</th>
        <th scope="col">Nome do Pet</th>
        <th scope="col">Nome do Proprietário</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
        <th scope="col">Ações</th>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT proprietarios.id, proprietarios.nome, proprietarios.email, proprietarios.telefone, pets.nome AS nome_pet FROM proprietarios LEFT JOIN pets ON proprietarios.id = pets.proprietario_id";
        $res = $conn->query($sql);

        while ($row = $res->fetch_assoc()) {
            echo "<tr>";
            echo "<th scope='row'>" . $row["id"] . "</th>";
            echo "<td>" . $row["nome_pet"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["telefone"] . "</td>";
            echo "<td>";
            echo "<button onclick=\"location.href='?page=editar&id=" . $row["id"] . "';\" class='btn btn-success'>Editar</button>
            <button onclick=\"if(confirm('Tem certeza que gostaria de excluir este pet?')){location.href='?page=salvar&acao=excluir&id=" . $row["id"] . "';} else{return false;}\" class='btn btn-danger'>Excluir</button>";
            echo "</td>";
            echo "</tr>";
        }
        
        ?>
    </tbody>
    <tfoot class="thead-dark">
        <a href="?page=novo" class="btn btn-success btn-sm mb-2">Novo<sup>+</sup></a>
    </tfoot>
</table>
