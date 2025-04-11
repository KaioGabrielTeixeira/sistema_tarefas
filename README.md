# 📝 Sistema de Gerenciamento de Tarefas

Este é um projeto de teste prático para uma vaga de estágio com foco em PHP. Ele consiste em um sistema simples de gerenciamento de tarefas com funcionalidades básicas de CRUD (Create, Read, Update, Delete).

---

## ✅ Pré-requisitos

- PHP 8.3 instalado
- MySQL instalado
- Servidor local (ex.: **WAMP**)

---

## 🛠️ Configuração do Banco de Dados

1. O banco de dados já foi fornecido pela empresa com o nome **`sistema_tarefas`**.
2. Abra o (http://localhost/phpmyadmin/), (user: root sem senha por padrão.) e selecione o banco de dados chamado `sistema_tarefas`. Em seguida, clique na aba "Importar" e selecione o arquivo SQL fornecido pela empresa. Clique em "Importar" para importar as tabelas e dados necessários.

3. Caso necessário, ajuste as credenciais de conexão no arquivo `/src/connect.php`:
   ```php
   private $host = 'localhost';
   private $db_name = 'sistema_tarefas';
   private $username = 'root';
   private $password = '';
   ```

---

## 📁 Instalação do Projeto

1. Copie a pasta `sistema_tarefas` para o diretório raiz do seu servidor WAMP (geralmente `C:/wamp64/www/`).
2. Certifique-se de que os serviços do Apache e MySQL estão ativos pelo painel do WAMP.

---

## 🌐 Como Acessar

Abra o navegador e acesse:  
👉 **http://localhost/sistema_tarefas/**

---

## 🔧 Funcionalidades

- Adicionar novas tarefas com título e descrição
- Visualizar todas as tarefas cadastradas
- Marcar tarefas como concluídas
- Reabrir tarefas concluídas
- Excluir tarefas

---

## 🧩 Observações Técnicas

- Desenvolvido em **PHP 8.3**
- Conexão com MySQL via **PDO**
- Organização do projeto em camadas: `controllers/`, `src/`.
- Estilo visual com **Bootstrap 5.3**
- Utilização de **POO (Programação Orientada a Objetos)** para organização do código

---

## 📂 Estrutura de Pastas

```
SISTEMAS_TAREFAS/
│
├── controllers/
│   └── taskController.php
│
├── src/
│   └── connect.php
│   └──task.php
│
├── create.php
├── delete.php
├── index.php
├── README.md
├── task_completed.php
├── task_reopen.php
```

---

## 📫 Contato

Em caso de dúvidas, o projeto pode ser executado diretamente com as instruções acima, e está pronto para avaliação.