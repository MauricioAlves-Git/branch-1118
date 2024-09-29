<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Usuário</title>
</head>
<body>
    <h2>Cadastro Usuário</h2>
    <form method="post" action="user_add.php">
        <label for="firstname">Nome:</label>
        <input type="text" name="firstname" required placeholder="Digite seu primeiro nome"><br><br>

        <label for="lastname">Sobrenome:</label>
        <input type="text" name="lastname" required placeholder="Digite seu sobrenome"><br><br>

        <label for="username">Nome de Usuário:</label>
        <input type="text" name="username" required placeholder="Digite seu nome de usuário"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required placeholder="Digite seu email"><br><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" required placeholder="Digite sua senha"><br><br>
        <input type="checkbox" required> Aceito os <a href="terms.html">Termos de Serviço</a> e <a href="privacy.html">Política de Privacidade</a><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>