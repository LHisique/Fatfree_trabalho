# Instalação e Configuração Inicial: Fat-Free Framework (F3)

Este documento detalha o processo passo a passo para a instalação e configuração inicial do micro-framework **Fat-Free (F3)** em um ambiente de desenvolvimento.

---

## 1. Pré-requisitos

Antes de iniciar a instalação do Fat-Free, certifique-se de que seu ambiente atenda aos seguintes requisitos mínimos:

*   **PHP:** Versão 7.4 ou superior (recomenda-se PHP 8.x para melhor performance).
*   **Servidor Web:** Apache, Nginx, ou o servidor embutido do próprio PHP (para desenvolvimento local).
*   **Composer:** O gerenciador de dependências oficial do PHP (altamente recomendado).

---

## 2. Método da instalação: Instalação via Composer

O uso do Composer é a forma mais profissional, moderna e recomendada para instalar o Fat-Free Framework, pois facilita a atualização e a integração de bibliotecas de terceiros usando o `autoload`.

### Passo a Passo usando a ferramenta(Composer)

1. **Abra o terminal (ou Prompt de Comando/PowerShell)** e navegue até o diretório do seu projeto.
2. **Execute o comando de instalação:**
   ```bash
   composer require bcosca/fatfree-core
   ```
3. O Composer criará automaticamente o arquivo `composer.json`, o arquivo `composer.lock` e uma pasta chamada `vendor/`, onde os arquivos do framework e o script de autoload estarão salvos.

## 3. Configuração Inicial e Estrutura Básica

Após a instalação, é necessário criar o arquivo de entrada da aplicação, geralmente chamado de `index.php`, na raiz do seu projeto.

Crie um arquivo **`index.php`** com o seguinte código:

```php
<?php
// Carrega o autoloader do Composer (Método Recomendado)
require 'vendor/autoload.php';

// Instancia o framework
$f3 = \Base::instance();

// Define uma rota básica (Página Inicial)
$f3->route('GET /',
    function() {
        echo '<h1>Olá, mundo!</h1>';
        echo '<p>O Fat-Free Framework foi instalado com sucesso!</p>';
    }
);

// Executa a aplicação
$f3->run();
```

---

## 5. Rodando a Aplicação (Servidor Embutido do PHP)

Para testar rapidamente se a instalação foi bem-sucedida, você pode usar o servidor web embutido do próprio PHP sem precisar configurar o Apache ou o Nginx imediatamente.

1. No terminal, na raiz do seu projeto, execute:
   ```bash
   php -S localhost:8000
   ```
2. Abra o seu navegador e acesse: `http://localhost:8000/`
3. Você deverá ver a mensagem: **"Olá, mundo! O Fat-Free Framework foi instalado com sucesso!"**

---


> **Próximos Passos:**
> Com o framework instalado e funcionando, nós já podemos começar a explorar os recursos do fat-free, como conexão com Banco de Dados (usando o `DB\SQL`), manipulação de templates, e desenvolvimento de rotas mais complexas, é isso.
