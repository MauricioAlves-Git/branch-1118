<?php
require_once("../config.php");

// Forçar login para acessar esse código
require_login();

// Função para conectar ao banco de dados e retornar a conexão ou um erro
function conectar() {
    global $prefix, $dbuser, $dbpass, $dbname;

    $conn = new mysqli($prefix, $dbuser, $dbpass, $dbname);

    if ($conn->connect_error) {
        // Registrar o erro em um log ou enviar um email
        error_log("Erro ao conectar ao banco de dados: " . $conn->connect_error);
        throw new Exception("Falha na conexão com o banco de dados."); // Lançando exceção em vez de die()
    }

    return $conn;
}

// Função para contar usuários
function contarUsuarios() {
    try {
        $conn = conectar();

        $sql = "SELECT COUNT(*) AS total FROM mdl_user";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Erro ao preparar consulta: " . $conn->error);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "Total de usuários: " . $row["total"];
        } else {
            echo "Nenhum usuário encontrado.";
        }

        // Fechar o statement e a conexão
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        error_log($e->getMessage());
        echo "Ocorreu um erro. Por favor, tente novamente mais tarde.";
    }
}

contarUsuarios();
