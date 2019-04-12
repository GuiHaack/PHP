<div>
<h1>Lista de Produtos</h1>
<table class='table'>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Quantidade</th>
        <th></th>
        <th></th>
    </tr>

    <?php
    foreach ($arrayClients as $client) {
    ?>   
        <tr>
            <td><?=$client["idProduto"]?></td>
            <td><?=$client["nome"]?></td>
            <td><?=$client["quantidade"]?></td>
            <td><a class="btn btn-warning" href="?c=c&a=uc&id=<?= $client 
            ["idProduto"] ?>">Editar</td>
            <td><a class="btn btn-danger" href="?c=c&a=dc&id=<?= $client 
            ["idProduto"] ?>">Deletar</td>
        </tr>
    <?php
    }
    ?>
</table>
</div>