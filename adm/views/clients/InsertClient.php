<h1>Insere cliente</h1>
<form action="?c=c&a=ica" method=post enctype='multipart/form-data'>
    <div class="form-group">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div>
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" name="endereco">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div>
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" name="telefone">
        </div>
        <br>

        <br>
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>