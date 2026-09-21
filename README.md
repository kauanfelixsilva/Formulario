# Formulário

Sistema simples de **cadastro e login de usuários**, feito em PHP com banco de dados MySQL.

## 🎯 Objetivo

Projeto de estudo para praticar o desenvolvimento web com PHP. Ele permite:

- cadastrar um novo usuário com seus dados pessoais;
- fazer login com e-mail e senha;
- acessar uma página restrita, visível somente para quem está logado;
- sair da conta (logoff).

## 🛠️ Tecnologias usadas

- **HTML5** – estrutura das páginas e formulários
- **CSS3** – estilo, layout e responsividade
- **JavaScript** – máscaras de CPF e telefone
- **PHP** – lógica do servidor, sessões e login
- **MySQL** – banco de dados (via `mysqli`)
- **XAMPP** – ambiente local (Apache + MySQL)

## 📄 Páginas criadas

| Arquivo | Descrição |
| --- | --- |
| `index.php` | Tela de login |
| `cadastro.php` | Formulário de cadastro de usuário |
| `testeLogin.php` | Valida e-mail e senha no banco e inicia a sessão |
| `home.php` | Página restrita, exibida só para usuários logados |
| `sair.php` | Encerra a sessão e volta para o login |
| `config.php` | Conexão com o banco de dados |
| `css/style.css` | Estilo das páginas |
| `script/script.js` | Máscaras dos campos do cadastro |

## 🎨 Design

- Fundo com degradê suave de cinza para branco
- Caixas brancas com cantos arredondados e sombra leve
- Cor de destaque azul (`#2f5d8a`) nos botões, links e campos em foco
- Fonte do sistema (`Segoe UI`, `Arial`), sem bibliotecas externas
- Layout responsivo: em telas pequenas (até 520px) o rótulo fica acima do campo
- Feito com CSS puro, sem frameworks

## ⚙️ Funcionalidades

- **Cadastro** de usuário (nome, senha, e-mail, data de nascimento, telefone, sexo, CPF, cidade, estado e endereço) salvo no MySQL
- **Login** com verificação de e-mail e senha no banco de dados
- **Sessão** para manter o usuário logado
- **Proteção de página**: quem não está logado é redirecionado para o login
- **Logoff** que apaga a sessão
- **Validação** dos campos com HTML5 (`required`, `minlength`, `pattern`, tipos `email` e `date`)
- **Máscaras** automáticas de CPF (`000.000.000-00`) e telefone (`(00) 00000-0000`)
- **Navegação** entre login, cadastro e página inicial

## 📚 O que aprendi durante o projeto

- Criar formulários em HTML e enviar dados com o método `POST`
- Conectar o PHP ao MySQL com `mysqli` e executar `INSERT` e `SELECT`
- Trabalhar com sessões (`session_start`, `$_SESSION`) para login e logoff
- Proteger páginas e redirecionar com `header('Location: ...')`
- Evitar que o navegador guarde em cache páginas restritas
- Criar máscaras de campos com JavaScript e expressões regulares
- Estilizar e organizar o layout com CSS, incluindo responsividade
- Versionar o projeto com Git e GitHub

## 🚀 Como executar o projeto

1. Instale o [XAMPP](https://www.apachefriends.org/) e inicie o **Apache** e o **MySQL**.
2. Copie a pasta do projeto para `C:\xampp\htdocs\Formulario`.
3. Abra o **phpMyAdmin** (`http://localhost/phpmyadmin`) e crie o banco `Formulario` com a tabela `usuarios`:

```sql
CREATE DATABASE Formulario;
USE Formulario;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    data_nascimento DATE NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    sexo VARCHAR(10) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    cidade VARCHAR(35) NOT NULL,
    estado VARCHAR(2) NOT NULL,
    endereco VARCHAR(255)
);
```

4. Confira os dados de conexão em `config.php` (por padrão: `localhost`, usuário `root`, sem senha).
5. Acesse no navegador: `http://localhost/Formulario/`

> **Observação:** o PHP precisa de um servidor para rodar, por isso o projeto não funciona no GitHub Pages.

## 👨‍💻 Autor

**Kauan Felix da Silva**

GitHub: [@kauanfelixsilva](https://github.com/kauanfelixsilva)
