<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_emailadmin', language 'pt_br', version '4.1'.
 *
 * @package     auth_emailadmin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadminconfirmation'] = 'Olá Administrador do Moodle,

Uma nova conta foi solicitada em \'{$a->sitename}\' com os seguintes dados:

Qualquer exemplo de campo específico de usuário:
user->lastname: {$a->lastname}

Todos os campos personalizados:
{$a->customfields}

Todos os campos de usuário + campos personalizados:
{$a->userdata}

Para confirmar a nova conta, por favor vá para o seguinte endereço web:

{$a->link}

Na maioria dos programas de email, isto deve aparecer como um link azul no qual você pode apenas clicá-lo. Se isso não funcionar, então corte e cole o endereço na linha de endereço no topo da janela de seu navegador.

Você também pode confirmar contas pelo Moodle indo em
Administração do Site -> Usuários';
$string['auth_emailadminconfirmationsubject'] = '{$a}: confirmação de conta';
$string['auth_emailadminconfirmsent'] = '<p>Sua conta foi registrada e está pendente de confirmação pelo administrador.
Você pode tanto receber uma confirmação quanto ser contactado para maiores esclarecimentos.</p>';
$string['auth_emailadmindescription'] = '<p>A autoinscriçao por email com confirmação do Admininistrador permite que um usuário crie sua própria conta pelo botão "Criar uma conta", na página de login. Os administradores do site então recebem um email contendo um link seguro para uma página onde eles podem confirmar a conta. Logins Futuros apenas verificarão o nome de usuário e senha em comparação com os valores armazenados no banco de dados do Moodle.</p><p>Nota: Além de habilitar o plugin, também deverá ser escolhida a opção "Autoinscriçao por email com confirmação do Admininistrador" no menu de seleção da página "Gerenciar Autenticação".</p>';
$string['auth_emailadminnoadmin'] = 'Nenhum administrador foi encontrado com base na estratégia de notificação. Por favor cheque a configuração do auth_emailadmin';
$string['auth_emailadminnoemail'] = 'Houve uma tentativa de te enviar um email, mas ela falhou!';
$string['auth_emailadminnotif_failed'] = 'Não foi possível enviar a notificação de registro para:';
$string['auth_emailadminnotif_strategy'] = 'Define a estratégia para enviar notificações de registro. As opções disponíveis são "first" para o primeiro usuário admin, "all" para todos os usuários admin ou um usuário admin específico.';
$string['auth_emailadminnotif_strategy_all'] = 'Todos os usuários administradores';
$string['auth_emailadminnotif_strategy_allupdate'] = 'Todos os administradores e usuários com capacidade de atualizar usuário.';
$string['auth_emailadminnotif_strategy_first'] = 'Primeiro usuário administrador';
$string['auth_emailadminnotif_strategy_key'] = 'Estratégia de notificação:';
$string['auth_emailadminrecaptcha'] = 'Adiciona um elemento de formulário para confirmação visual/áudio na página de inscrição para usuários com autoinscrição por email. Isto protege seu site contra spammers e contribui para uma causa válida. Veja em http://www.google.com/recaptcha/learnmore para mais detalhes.<br /><em>a extensão PHP cURL é requerida.</em>';
$string['auth_emailadminrecaptcha_key'] = 'Habilita o elemento reCAPTCHA';
$string['auth_emailadminsettings'] = 'Configurações';
$string['auth_emailadminuserconfirmation'] = 'Esta é uma mensagem de exemplo. Seu administrador pode personalizá-la fazendo login no Moodle e indo para Administração do Site 》 Customização de Idioma e modificando as entradas relacionadas a auth/auth_emailadmin.php, especialmente auth_emailadminconfirmation e auth_emailadminuserconfirmation.

Nesta mensagem, o administrador encontrará exemplos de inclusão de dados do usuário usando espaços reservados entre { e }. Ele encontrará uma lista de campos possíveis na lista gerada em sua própria notificação.

--
Olá {$a->firstname},

Bem-vindo ao (Minha Organização)! Sua conta foi aprovada. Se ainda não o fez, por favor, nos diga como descobriu (Minha Organização).

Para contas de estudantes, informe-nos sobre o projeto em que você gostaria de participar, e criaremos sua conta de professor. As informações para criar contas de estudantes estão em http://www.my.org/student-accounts <a href=http://www.my.org/student-accounts>aqui</a>.

O primeiro nome deve ser o "primeiro nome" do estudante e a "inicial do sobrenome". O sobrenome do estudante será o nome da escola. As senhas precisam ter pelo menos 8 caracteres.

Estamos felizes por você ter se juntado a nós e esperamos vê-lo e seus estudantes participando de alguns de nossos projetos. Você agora faz parte de uma comunidade em rápido crescimento de educadores e estudantes que usam (Minha Organização) para compartilhar projetos, trabalhos e conhecimentos. Se precisar de ajuda, não hesite em escrever para nós em myorg@gmail.com <a href=mailto:myorg@gmail.com>aqui</a>. Tentaremos responder a quaisquer perguntas, comentários ou preocupações que você possa ter em relação ao (Minha Organização) com Recursos, Serviços e Ferramentas do Google. Confira nossas páginas da web em http://www.my.org <a href=http://www.my.org/>aqui</a>

* * *

O que é (Minha Organização)?

(Minha Organização) é um ambiente colaborativo baseado na Internet, fácil de usar, que permite aos educadores desenvolver e gerenciar projetos curriculares baseados na web, compartilhar informações e colaborar internacionalmente. (Minha Organização) oferece uma variedade de ferramentas e gadgets do Google, incluindo mensagens integradas, conferências e calendários, para apoiar a colaboração entre professores e estudantes dentro do (Minha Organização).

(Minha Organização) recebe seus projetos e espera compartilhar uma variedade rica de projetos e atividades com seus estudantes participantes. Ao fazer login, uma lista de categorias populares aparece. Clique em uma das categorias para navegar pelos projetos especificados por ela. Ao explorar esses projetos (clicar nos títulos), eles podem ajudá-lo a gerar uma ideia ou duas para você usar no desenvolvimento de um projeto próprio em (Minha Organização) ou ajudá-lo a identificar projetos nos quais
você gostaria de colaborar com outros professores e seus estudantes.

* * *

Porque (Minha Organização) é orientada por projetos e administrada por voluntários, gostaríamos que você considerasse criar um projeto em (Minha Organização) ou se voluntariar para ajudar em um. Se decidir que gostaria de criar um projeto ou se voluntariar para ajudar ou apoiar outros projetos, por favor, envie-nos um e-mail em myorg@gmail.com <a href=mailto:myorg@gmail.com>aqui</a>. Líderes e voluntários do (Minha Organização) estão aqui para apoiar suas necessidades.

Lembre-se, o suporte online para todos os participantes do (Minha Organização) é fornecido por voluntários do (Minha Organização). Por favor, leve o que aprendeu conosco e ajude outros professores a aprenderem também! Estamos ansiosos para trabalhar com você e ver seus novos projetos!

Obrigado,

Meu Nome, Diretor

--
Equipe (Minha Organização)
<a href=http://www.my.org/>http://www.my.org</a>
<a href=mailto:myorg@gmail.com>myorg@gmail.com</a>
<a href=tel:123%20555%205555>123 555 5555</a>';
$string['pluginname'] = 'Autoinscrição por email com confirmação do administrador';
