<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envios</title>
    <link rel="stylesheet" href="Cadastro.css">
    <script>
        function togglePassword() {
            var passwordField = document.getElementById('senha_acesso');
            var passwordToggle = document.getElementById('show-password');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordToggle.innerText = "Ocultar senha";
            } else {
                passwordField.type = "password";
                passwordToggle.innerText = "Mostrar senha";
            }
        }
    </script>
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
    
    $senha_acesso = "1234";
    $senha_valida = false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $senha_digitada = $_POST['senha_acesso'] ?? '';

        if ($senha_digitada === $senha_acesso) {
            $senha_valida = true;

            $nome = htmlspecialchars($_POST['nome'] ?? 'Não informado');
            $email = htmlspecialchars($_POST['email'] ?? 'Não informado');
            $senha_usuario = htmlspecialchars($_POST['senha'] ?? 'Não informado');
            $nascimento = htmlspecialchars($_POST['nascimento'] ?? 'Não informado');
            $telefone = htmlspecialchars($_POST['telefone'] ?? 'Não informado');
            $endereco = htmlspecialchars($_POST['endereco'] ?? 'Não informado');
            $cor = htmlspecialchars($_POST['cor'] ?? 'Não informado');
            $site = htmlspecialchars($_POST['site'] ?? 'Não informado');
            $genero = htmlspecialchars($_POST['genero'] ?? 'Não informado');
            $hora_disponivel = htmlspecialchars($_POST['hora_disponivel'] ?? 'Não informado');
            $comentarios = htmlspecialchars($_POST['comentarios'] ?? 'Não informado');
            $termo = isset($_POST['termo']) ? 'Aceito' : 'Não aceito';

            echo "<div class='result-container'>";
            echo "<h2>Dados Enviados:</h2>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Senha do formulário:</strong> $senha_usuario</p>";
            echo "<p><strong>Data de Nascimento:</strong> $nascimento</p>";
            echo "<p><strong>Telefone:</strong> $telefone</p>";
            echo "<p><strong>Endereço:</strong> $endereco</p>";
            echo "<p><strong>Cor favorita:</strong> $cor</p>";
            echo "<p><strong>Site ou rede social:</strong> $site</p>";
            echo "<p><strong>Gênero:</strong> $genero</p>";
            echo "<p><strong>Hora disponível:</strong> $hora_disponivel</p>";
            echo "<p><strong>Comentários:</strong> $comentarios</p>";
            echo "<p><strong>Termos e Condições:</strong> $termo</p>";
            echo "</div>";
        } else {
            echo "<h2>Senha incorreta!</h2>";
            echo "<p>Por favor, leia o <a href='https://github.com/antonny17adryan/ExplorerCraft/blob/main/README.md' target='_blank'>README</a> no site do GitHub para mais informações.</p>";
        }
    }
    ?>

    <?php if (!$senha_valida): ?>
        <form method="POST" action="">
            <label for="senha_acesso">Digite a senha de acesso para visualizar os dados enviados:</label>
            <input type="password" name="senha_acesso" id="senha_acesso" required>
            <button type="submit">Entrar</button>
            <button type="button" id="show-password" onclick="togglePassword()">Mostrar senha</button>
        </form>
    <?php endif; ?>

    <footer>
        <p>IFRN Campus Santa Cruz</p>
        <p>Trabalho de Autoria Web</p>
        <p>Prof. Marcelo Figueiredo Barbosa Júnior</p>
        <p>Grupo: Ana Júlia Feliciano da Silva, Antonny Adryan de Andrade</p>
    </footer>
</body>

</html>
