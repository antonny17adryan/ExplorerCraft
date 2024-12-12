<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envios</title>
    <link rel="stylesheet" href="Cadastro.css">
</head>

<body>
    <header>
        <h1>Envios</h1>
        <nav>
        <a href="index.html" aria-label="Página inicial">Home</a>
            <a href="Cadastro.html">Cadastro</a>
            <a href="desenvolvedor.html" aria-label="Página dos desenvolvedores">Desenvolvedores</a>
            <a href="recebe.php" aria-label="Página de envio de dados">Envios</a>
            <a href="termo.html">Termos e Condições</a>
            <a href="priv.html">Política de Privacidade</a>
        </nav>
    </header>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nome = $_POST['nome'] ?? 'Não informado';
        $email = $_POST['email'] ?? 'Não informado';
        $senha = $_POST['senha'] ?? 'Não informado';
        $nascimento = $_POST['nascimento'] ?? 'Não informado';
        $telefone = $_POST['telefone'] ?? 'Não informado';
        $endereco = $_POST['endereco'] ?? 'Não informado';
        $cor = $_POST['cor'] ?? 'Não informado';
        $site = $_POST['site'] ?? 'Não informado';
        $comentarios = $_POST['comentarios'] ?? 'Não informado';
    
        echo "<div class='result-container'>";
        echo "<h2>Dados Enviados:</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Senha:</strong> $senha</p>";
        echo "<p><strong>Data de Nascimento:</strong> $nascimento</p>";
        echo "<p><strong>Telefone:</strong> $telefone</p>";
        echo "<p><strong>Endereço:</strong> $endereco</p>";
        echo "<p><strong>Cor favorita:</strong> $cor</p>";
        echo "<p><strong>Site ou rede social:</strong> $site</p>";
        echo "<p><strong>Comentários:</strong> $comentarios</p>";
        echo "</div>";
    } else {
        echo "<p>Formulário não enviado corretamente.</p>";
    }
    ?>    
    <footer>
        <p>IFRN Campus Santa Cruz</p>
        <p>Trabalho de Autoria Web</p>
        <p>Prof. Marcelo Figueiredo Barbosa Júnior</p>
        <p>Grupo: Ana Júlia Feliciano da Silva, Antonny Adryan de Andrade</p>
    </footer>
</body>

</html>
