<h1>Altera Cliente</h1>
<form action="?c=c&a=uca" method=POST enctype='multipart/form-data'>
    <div class="form-group">
        <div>
            <label for="idProduto">ID</label>
            <input type="text" class="form-control" name="idProduto" value="<?= $arrayClient['idProduto']?>"
            readonly="readonly">
        </div>
        <div>
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?= $arrayClient['nome']?>">
        </div>
        <div>
            <label for="quantidade">Quantidade</label>
            <input type="text" class="form-control" name="quantidade" value="<?= $arrayClient['quantidade']?>">
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>