# **Teste Técnico – CRUD de Produtos + Autenticação em Laravel**

## **Descrição**

Este repositório contém dois projetos independentes:

1.  **php-crud/** – CRUD de produtos desenvolvido em PHP procedural, conforme solicitado no teste técnico. O projeto inclui:
    
    -   Cadastro de produtos
        
    -   Edição
        
    -   Exclusão
        
    -   Listagem
        
    -   Exportação da lista em PDF
        
    -   Script SQL para criação do banco de dados
        
2.  **laravel-auth/** – Projeto desenvolvido em Laravel contendo um fluxo de autenticação básico, que pode ser integrado ao CRUD caso desejado.
    

O funcionamento do CRUD **não depende** do projeto Laravel.

* * *

# **1\. Como Executar o Projeto PHP (php-crud/)**

O projeto funciona em **qualquer servidor com suporte a PHP e MySQL**, incluindo XAMPP, WAMP, Laragon, MAMP, LAMP ou servidor real.

### **Passo 1 – Criar o banco de dados**

1.  Crie um banco chamado **teste\_entrevista**.
    
2.  Importe o arquivo incluído no repositório:
    

`php-crud/teste_entrevista.sql`

Isso criará a tabela `produtos` e inserirá alguns registros de exemplo.

### **Passo 2 – Configurar o servidor PHP**

Coloque a pasta **php-crud/** na raiz pública do seu servidor PHP:

Exemplos:

-   XAMPP: `htdocs/php-crud`
    
-   WAMP/Laragon: `www/php-crud`
    
-   Linux Apache: `/var/www/html/php-crud`
    
-   Hosting compartilhado: `public_html/php-crud`
    

### **Passo 3 – Acessar o sistema**

Abra no navegador:

`http://localhost/php-crud/index.php`

O sistema estará pronto para uso.

* * *

# **2\. Como Executar o Projeto Laravel (laravel-auth/)**

Este projeto é opcional e não é necessário para testar o CRUD.

### **Passo 1 – Instalar dependências**

Dentro da pasta `laravel-auth/`:

`composer install`

### **Passo 2 – Criar o arquivo .env**

Crie um arquivo `.env` baseado no `.env.example`:

`cp .env.example .env`

Configure a conexão com o MySQL de acordo com seu ambiente.

### **Passo 3 – configurar as credenciais do banco de dados no arquivo .env**

Ajuste as seguintes variáveis conforme o seu ambiente:

```DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=teste_entrevista
DB_USERNAME=root
DB_PASSWORD=
```

O esquema de usuários compartilha o mesmo banco de dados do CRUD.

### **Passo 4 – Gerar a key**

`php artisan key:generate`

### **Passo 5 – Rodar as Migrations do Laravel**

`php artisan migrate`

Esse comando criará automaticamente a estrutura padrão de autenticação utilizada pelo Laravel, incluindo as tabelas de usuários, resets de senha e demais estruturas necessárias para o funcionamento da aplicação.

### **Passo 6 – Iniciar o servidor Laravel**

`php artisan serve`

A aplicação estará disponível em:

`http://localhost:8000`
