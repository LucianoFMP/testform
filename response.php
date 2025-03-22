<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas do Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        body { background-image: url('fundo2.jpg'); }
        .container { max-width: 600px; margin: 50px auto; padding: 20px; background: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { text-align: center; }
        p { font-size: 18px; }
    </style>

    <div class="container">
        <h1>Respostas Enviadas</h1>
        <ul>
            <li><b>Nome:</b> <?php echo htmlspecialchars($_POST["name"]); ?></li>
            <li><b>Email:</b> <?php echo htmlspecialchars($_POST["email"]); ?></li>
            <li><b>Telefone:</b> <?php echo htmlspecialchars($_POST["telefone"]); ?></li>
            <li><b>Data:</b> <?php echo htmlspecialchars($_POST["data"]); ?></li>
            <li><b>Mensagem:</b> <?php echo nl2br(htmlspecialchars($_POST["message"])); ?></li>
        </ul>
        <br>
        <a href="form.html">Voltar ao formulário</a>
    </div>
</body>
</html>
