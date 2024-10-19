require("dotenv").config();
const express = require("express");

const app = express();

// Middleware para processar JSON
app.use(express.json());

// Endpoint para receber o webhook do Moodle
app.post('/webhook', (req, res) => {
    console.log("Webhook recebido!");
    console.log("URL:", req.originalUrl);
    console.log("Headers:", req.headers);
    console.log("Body:", req.body);

    // Aqui você pode adicionar lógica para tratar os diferentes eventos do Moodle.
    // Exemplo: verificar o tipo de evento e tomar decisões com base nisso.
    if (req.body.eventname) {
        const event = req.body.eventname;
        
        if (event === 'core_user_created') {
            console.log("Novo usuário criado no Moodle.");
            // Adicione a lógica que você deseja para tratar esse evento
        } else if (event === 'core_course_created') {
            console.log("Novo curso criado no Moodle.");
            // Lógica para tratar criação de curso
        } else {
            console.log("Evento desconhecido:", event);
        }
    }

    // Enviar resposta de sucesso para o Moodle
    res.status(200).send('Webhook recebido com sucesso');
});

// Rota padrão
app.use('/', (req, res) => {
    console.log("Hello World");
    res.send('Hello World');
});

// Iniciar o servidor
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log("Servidor iniciado na porta " + PORT);
});
