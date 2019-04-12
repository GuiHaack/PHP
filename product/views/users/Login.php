<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="constainer-fluid" style="vertical-align:center">

    <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4 p-5">
            <h1>Login do Sistema</h1>
            <form action="?c=u&a=vl" method=POST name="formulario" id="formulario">
                <div class="form-group">
                    <label>Login</label>
                    <input type="text" class="form-control" name="login" placeholder="usuario">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="pass" placeholder="senha">
                </div>
                <input class="btn btn-primary" type="submit" name="Enviar" value="Fazer Login">
            </form>    
        </div>
        <div class="col-md-4"></div>   
    </div>
</div>
</body>
</html>