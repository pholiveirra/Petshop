<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    
</head>
<body>
    <h1>Faça seu login</h2>
    <form action="?page=listar-usuario" method="POST">
    <div class="mb-3">
        <input type="text" name="cpf" class="form-control" placeholder="CPF" required style="width: 250px;" >
    </div>
    <div class="mb-3">
        <input type="password" name="senha" class="form-control" placeholder="********" required style="width: 250px;">
    </div>
     </div>
     <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Entrar
        </button>
    </div>
</body>
</html>