# Sistema de Cadastro de Enfermeiros e Funções

Este projeto é um sistema de gerenciamento de enfermeiros e suas funções, desenvolvido como parte de uma aula ministrada pela professora Andrea Casare, com foco em banco de dados e PHP. O sistema foi projetado para gerenciar informações sobre enfermeiros e suas respectivas funções, permitindo operações básicas de CRUD (criar, ler, atualizar e excluir).

O sistema foi implementado utilizando o ambiente de desenvolvimento XAMPP, que inclui um servidor Apache, MySQL e PHP, facilitando o desenvolvimento e a execução local do projeto.

## Estrutura de Diretórios

A estrutura de diretórios do projeto é organizada da seguinte forma:

- **/assets/**: Contém todos os arquivos estáticos do projeto, como folhas de estilo CSS, scripts JavaScript e imagens.
  - **/css/**: Arquivos de estilo que incluem o Bootstrap e estilos personalizados para a aplicação.
  - **/js/**: Scripts JavaScript, incluindo a biblioteca jQuery e outros scripts necessários para a funcionalidade da interface.
  - **/images/**: Diretório para armazenar imagens utilizadas na aplicação.

- **/db/**: Scripts relacionados ao banco de dados.
  - **create_tables.sql**: Script SQL para a criação das tabelas necessárias no banco de dados.

- **/functions/**: Contém funções PHP reutilizáveis em diferentes partes do projeto.
  - **db_connect.php**: Script responsável pela conexão com o banco de dados MySQL.

- **/includes/**: Arquivos PHP reutilizáveis, como cabeçalhos e rodapés, para garantir a consistência do layout em diferentes páginas.
  - **header.php**: Arquivo que inclui o cabeçalho da página, com a integração do Bootstrap.
  - **footer.php**: Arquivo que inclui o rodapé da página.

- **/enfermeiros/**: Diretório para operações CRUD (Create, Read, Update, Delete) relacionadas a enfermeiros.
  - **create.php**: Página com formulário para criar um novo enfermeiro.
  - **edit.php**: Página com formulário para editar informações de um enfermeiro existente.
  - **delete.php**: Script para excluir um enfermeiro do banco de dados.

- **/funcoes/**: Diretório para operações CRUD relacionadas às funções.
  - **create.php**: Página com formulário para criar uma nova função.
  - **edit.php**: Página com formulário para editar informações de uma função existente.
  - **delete.php**: Script para excluir uma função do banco de dados.

- **/templates/**: Contém layouts HTML reutilizáveis para formulários e outras seções da aplicação.

- **index.php**: Página inicial do sistema, servindo como ponto de entrada para a aplicação.

- **config.php**: Arquivo de configuração global, incluindo as definições de conexão com o banco de dados e outros caminhos importantes para o sistema.

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação principal utilizada para o desenvolvimento do sistema.
- **jQuery**: Biblioteca JavaScript para facilitar a manipulação do DOM e a implementação de funcionalidades interativas.
- **Bootstrap**: Framework de front-end utilizado para estilizar e estruturar a interface do usuário.
- **MySQL**: Sistema de gerenciamento de banco de dados utilizado para armazenar e gerenciar as informações do sistema.
- **XAMPP**: Ambiente de desenvolvimento local que inclui Apache, MySQL e PHP, utilizado para o desenvolvimento e testes do sistema.

Este projeto foi desenvolvido para fornecer uma base sólida para o gerenciamento de informações de enfermeiros e funções, com foco em práticas recomendadas de desenvolvimento web e banco de dados.
