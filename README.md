# API-criada-com-Slim-Framework (Slim Framework 3 Skeleton)

Este aplicativo usa o Slim 3 mais recente com o renderizador de modelo PHP-View. Ele também usa o registrador Monolog.
Este aplicativo de esqueleto foi criado para o Composer. Isso torna a configuração de um novo aplicativo Slim Framework rápida e fácil.

## Instale o aplicativo

Execute este comando a partir do diretório no qual deseja instalar seu novo aplicativo Slim Framework.

``
    php composer.phar create-project slim/slim-skeleton:^3.1 slim3
``
*Inicie seu servidor php.
* Acesse seu localhost acessando a pasta do projeto até a pasta public. 
Por exemplo: http://localhost/projeto/public/

* Certifique-se de que `logs /` é gravável na web.
para isto inicie o terminal na pasta do projeto e rode o comando:

``
chmod 777 logs/
``

Se tudo correu bem, seu projeto slim está pronto para receber suas ideias e então você poderá criar algo legal!

Lembrando que pode ser feito muito mais, pois este projeto já se inicia com dependências incríveis! com possibilidade de ser iniciado através do docker, utilizando templates e muito mais!

Então vamos ao projeto:

Neste projeto foi realizado um CRUD de produtos através da nossa API.
Para facilitar este processo foi utilizado Illuminate database com Eloquent.
Foi realizado habilitação de acesso CORS para que a APi possa ser consumida via AJAX por exemplo.
Foi realizado proteção de rotas utilizando middleware e JWT.

Lembre-se de criar o banco de dados e configurar na aplicação para rodar (para mais informações verifique db.php e settings.php que são os arquivos que possuem as configurações e uso do banco de dados).

##Para testar esta API:
- Antes de mais nada deve ser criado o banco de dados e as configurações realizadas;
- Realizar INSERT de usuarios para realizar teste de autenticação, simulando de que o usuário já é cadastrado (lembre-se de que a senha está utilizando MD5);

## Utilizando a API
- Para testar esta API é indicado fazer uso do Insomnia ou Postman para realizar as requisições listadas abaixo:

- Gerar chave de acesso que deve ser passada no Header de cada requisição através do par chave/valor: X-Token/chave, e esta chave é gerada ao realizar acesso a rota:
http://localhost/API-criada-com-Slim-Framework/public/api/token (passando no body email e senha cadastrados previamente no banco).

Para todas as rotas abaixo deve-se enviar no header X-Token/chave a chave gerada para o usuário conforme mencionado anteriormente.
- Listando produtos:
http://localhost/API-criada-com-Slim-Framework/public/api/v1/produtos/lista

*basta acessar a rota acima que será retornado um Json com a lista de produtos cadastrados.*

- Recuperando 1 produto:
http://localhost/API-criada-com-Slim-Framework/public/api/v1/produtos/lista/{id}

*basta acessar a rota acima passando o ID do produto desejado que será retornado um Json com as informações do produto.*

- Inserindo produtos:
http://localhost/API-criada-com-Slim-Framework/public/api/v1/produtos/adiciona

*basta acessar a rota acima que será submetido os dados de um produto a ser cadastro, este é passado em um form através de pares chave/valor conforme exemplo abaixo:*

titulo      Notebook  
descricao   Notebook pequeno  
preco       1999.99  
fabricante  Acer  

- Atualizando produtos:
http://localhost/API-criada-com-Slim-Framework/public/api/v1/produtos/atualiza/{id}

*basta acessar a rota acima passando o ID do produto desejado que será atualizado e seus dados são passados em um form através de pares chave/valor conforme exemplo abaixo:*

titulo      Notebook  
descricao   Notebook pequeno  
preco       1999.99  
fabricante  Acer  

- Deletando Produtos:
http://localhost/API-criada-com-Slim-Framework/public/api/v1/produtos/remove/{id}

*basta acessar a rota acima passando o ID do produto desejado que será retornado um Json com as informações do produto que foi deletado.*



*Esta API faz parte da exploração e estudo do Slim framework na sua versão 3.* *, *e criada durante o curso: Desenvolvimento Web Completo  - Udemy - com o professor Jamilton Damasceno.*
