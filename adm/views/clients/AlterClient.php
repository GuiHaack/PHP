<h1>Altera Cliente</h1>
<form action="?c=c&a=uca" method=POST enctype='multipart/form-data'>
    <div class="form-group">
        <div>
            <label for="idCliente">ID</label>
            <input type="text" class="form-control" name="idCliente" value="<?= $arrayClient['idCliente']?>"
            readonly="readonly">
        </div>
        <div>
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?= $arrayClient['nome']?>">
        </div>
        <div>
            <label for="endereco">Endereco</label>
            <input type="text" class="form-control" name="endereco" value="<?= $arrayClient['endereco']?>">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="<?= $arrayClient['email']?>">
        </div>
        <div>
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" value="<?= $arrayClient['telefone']?>">
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>