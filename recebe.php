<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envios</title>
    <link rel="stylesheet" href="Cadastro.css">
    <script>
        function togglePassword() {
            var passwordField = document.getElementById('senha_d');
            var passwordToggle = document.getElementById('show-password');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordToggle.innerText = "Ocultar Senha";
            } else {
                passwordField.type = "password";
                passwordToggle.innerText = "Mostrar Senha";
            }
        }
    </script>
</head>

<body>
    <header>
        <h1>Formulário de Cadastro</h1>
        <nav>
        <a href="index.html" aria-label="Página inicial">Home</a>
            <a href="Cadastro.html">Cadastro</a>
            <a href="desenvolvedor.html" aria-label="Página dos desenvolvedores">Desenvolvedores</a>
            <a href="recebe.php" aria-label="Página de envio de dados">Envios</a>
            <a href="avisos.html">Avisos</a>  
            <a href="termo.html">Termos e Condições</a>
            <a href="priv.html">Política de Privacidade</a>
            <a href="quiz.html">Quiz</a>
        </nav>
    </header>

    <form method="POST" action="">
        <h2>Digite a senha para acessar os dados:</h2>
        <label for="senha_d">Senha:</label>
        <input type="password" id="senha_d" name="senha_d" required>
        <button type="button" id="show-password" onclick="togglePassword()">Mostrar Senha</button>
        <br><br>
        <input type="submit" value="Acessar Dados">
    </form>

    <form>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $senha_informada = $_POST['senha_d'] ?? '';

    $senha_dados = '1234'; 
    if ($senha_informada === $senha_dados) {

        echo "<script>hidePasswordField();</script>"; 
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $nascimento = $_POST['nascimento'] ?? '';
        $telefone = $_POST['telefone'] ?? '';
        $endereco = $_POST['endereco'] ?? '';
        $cor = $_POST['cor'] ?? '';
        $site = $_POST['site'] ?? '';
        $genero = $_POST['genero'] ?? '';
        $hora_disponivel = $_POST['hora_disponivel'] ?? '';
        $comentarios = $_POST['comentarios'] ?? '';
        $termo = isset($_POST['termo']) ? true : false;

        echo "<div class='dados'>";
        echo "<h2>Dados Enviados:</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Data de Nascimento:</strong> $nascimento</p>";
        echo "<p><strong>Telefone:</strong> $telefone</p>";
        echo "<p><strong>Endereço:</strong> $endereco</p>";
        echo "<p><strong>Cor Favorita:</strong> $cor</p>";
        echo "<p><strong>Site ou Rede Social:</strong> $site</p>";
        echo "<p><strong>Gênero:</strong> $genero</p>";
        echo "<p><strong>Horário Disponível:</strong> $hora_disponivel</p>";
        echo "<p><strong>Comentários:</strong> $comentarios</p>";
        echo "</div>";
    } else {
        echo "<p>Senha incorreta. Por favor, consulte o <a href='https://github.com/antonny17adryan/ExplorerCraft?tab=readme-ov-file#readme' target='_blank'>README</a> do site para mais informações.</p>";
    }
}
?>
    </form>

    <footer>
        <p>IFRN Campus Santa Cruz</p>
        <p>Trabalho de Autoria Web</p>
        <p>Prof. Marcelo Figueiredo Barbosa Júnior</p>
        <p>Grupo: Ana Júlia Feliciano da Silva, Antonny Adryan de Andrade</p>
    </footer>
</body>

</html>
