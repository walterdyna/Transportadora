Transportadora App Readme

Este é um aplicativo simples de gerenciamento de transportadoras, desenvolvido usando o ecossistema Laravel (PHP), Vue.js com Inertia.js, HTML/CSS/JavaScript e SQLite como banco de dados.

Funcionalidades:
Autenticação de usuário.
Front-end utilizando Vue.js com Inertia.js para renderização dinâmica de páginas.
CRUD (Create, Read, Update, Delete) para o cadastro de transportadoras.
Utilização da API viacep.com.br para buscar endereço pelo CEP.
Estrutura do Projeto:
Back-end (PHP - Laravel):

Controladores, modelos e migrações para gerenciar as transportadoras.
Middleware para autenticação de usuário.
Rotas definidas em routes/web.php.
Configurações de autenticação e banco de dados em .env.
Front-end (Vue.js, HTML, CSS, JavaScript):

Componentes Vue.js para renderizar as páginas.
Arquivos HTML, CSS e JavaScript para estilização e interatividade.
Utilização do Vue Router para navegação entre páginas.
Como Executar:
Certifique-se de ter o PHP, Node.js e o Composer instalados em sua máquina.
Clone o repositório do projeto.
Instale as dependências do Composer e do Node.js:

composer install
npm install

Configure o arquivo .env com suas configurações de banco de dados e outras informações necessárias.
Execute as migrações do banco de dados para criar as tabelas:

php artisan migrate
Compile os assets do front-end:
npm run dev

Inicie o servidor Laravel:
php artisan serve

Acesse o aplicativo em seu navegador: http://localhost:8000
Observações:
Certifique-se de configurar corretamente o arquivo .env com suas informações de banco de dados e outras configurações específicas do ambiente.
Este é um esboço básico do projeto. Sinta-se à vontade para expandi-lo e personalizá-lo de acordo com suas necessidades específicas.
Espero que este readme seja útil para você começar a trabalhar no aplicativo de gerenciamento de transportadoras! Se precisar de mais alguma coisa, não hesite em perguntar.