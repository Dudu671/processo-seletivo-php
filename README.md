# Teste para vaga de desenvolvedor PHP

## Vídeo demonstrativo: https://www.youtube.com/watch?v=E58qKuvM28w

<hr/>

# Instruções para rodar o projeto

## Execute o seguinte comando no diretório www do WampServer ou no diretório correspondente de outro servidor que você utilize:

```sh
git clone https://github.com/Dudu671/processo-seletivo-php.git
```

<hr/>

## Vá até o PHPMyAdmin e importe o arquivo SQL localizado dentro do projeto no diretório src/database. Para fazê-lo, basta selecionar seguir os passos:

-> Selecione "Novo" no menu lateral à esquerda;

-> Crie um banco de dados chamado "rgb_gallery" e com a collation "utf8mb4_0900_ai_ci";

-> Selecione a aba "Importar" no menu superior e clique no botão "Procurar...";

-> Navegue até o diretório do projeto;

-> Navegue até o diretório src/database;

-> Selecione o arquivo rgb_gallery.sql e clique no botão "Executar" no final da página;

-> Pronto! Banco de dados criado e populado.

<hr/>

## Agora é preciso instalar o autoload. Portanto, é crucial ter o Composer instalado em seu computador. Ciente disso, execute o seguinte comando no diretório do projeto:

```sh
composer install
```

<hr/>

## Com tudo isso feito, restam somente dois passos:

-> Iniciar o servidor Wamp ou algum outro que você utilize;  
-> Abrir o navegador e acessar "localhost/processo-seletivo-php/home".

<hr/>

Eduardo R. de Matos - eduardoooax@gmail.com
