<?php
require_once '../config.php';
require_login(); // Exige que o usuário esteja logado

// Verifica se os IDs do usuário e do curso foram passados via GET
if (isset($_GET['userid']) && is_numeric($_GET['userid']) && isset($_GET['courseid']) && is_numeric($_GET['courseid'])) {
    $userid = intval($_GET['userid']);
    $courseid = intval($_GET['courseid']);

    // Obtém os dados do usuário
    $user = $DB->get_record('user', array('id' => $userid), '*', MUST_EXIST);

    if (!$user) {
        echo '<div class="alert alert-danger">Usuário não encontrado.</div>';
        exit();
    }
} else {
    echo '<div class="alert alert-danger">ID do usuário ou do curso não fornecido ou inválido.</div>';
    exit();
}
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .invalid-feedback {
            display: none;
            color: red;
        }
        .is-invalid {
            border-color: red;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Editar Usuário: <?php echo htmlspecialchars($user->firstname . ' ' . $user->lastname); ?>
    <a href="javascript:history.back()" class="btn btn-primary float-end">
        <i class="fas fa-arrow-left"></i> Voltar
    </a>
</h4>
                    </div>
                    <div class="card-body">
                        <form action="update.php?userid=<?php echo $userid; ?>&courseid=<?php echo $courseid; ?>" method="POST">
                            <!-- Campos do formulário -->
                            <div class="mb-3">
                                <label>Nome</label>
                                <input type="text" name="firstname" required placeholder="Digite seu primeiro nome" class="form-control" value="<?php echo htmlspecialchars($user->firstname); ?>">
                            </div>
                            <div class="mb-3">
                                <label>Sobrenome</label>
                                <input type="text" name="lastname" required placeholder="Digite seu sobrenome" class="form-control" value="<?php echo htmlspecialchars($user->lastname); ?>">
                            </div>
                            <div class="mb-3">
                                <label>Nome de Usuário</label>
                                <input type="text" id="username" name="username" required placeholder="Digite seu nome de usuário" class="form-control" value="<?php echo htmlspecialchars($user->username); ?>">
                                <div class="invalid-feedback">O nome de usuário deve conter apenas letras minúsculas.</div>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" required placeholder="Digite seu email" class="form-control" value="<?php echo htmlspecialchars($user->email); ?>">
                            </div>
                            <div class="mb-3">
                                <label>Senha (Deixe em branco para não alterar)</label>
                                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" class="form-control">
                                <div class="invalid-feedback">A senha deve conter pelo menos 8 caracteres, incluindo maiúsculas, minúsculas, números e caracteres especiais.</div>
                            </div>
                            <div class="mb-3">
                            <button type="submit" name="update_usuario" class="btn btn-success">
    <i class="fas fa-save"></i> Salvar
</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Validação do nome de usuário para conter apenas letras minúsculas
        document.getElementById('username').addEventListener('input', function() {
            var usernameField = this;
            var regex = /^[a-z]+$/;
            if (!regex.test(usernameField.value)) {
                usernameField.classList.add('is-invalid');
                usernameField.nextElementSibling.style.display = 'block';
            } else {
                usernameField.classList.remove('is-invalid');
                usernameField.nextElementSibling.style.display = 'none';
            }
        });

        // Validação da força da senha
        document.getElementById('senha').addEventListener('input', function() {
            var passwordField = this;
            var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
            if (!regex.test(passwordField.value)) {
                passwordField.classList.add('is-invalid');
                passwordField.nextElementSibling.style.display = 'block';
            } else {
                passwordField.classList.remove('is-invalid');
                passwordField.nextElementSibling.style.display = 'none';
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
