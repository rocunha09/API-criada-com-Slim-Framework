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

Lembrando que pode ser feito muito mais, pois este projeto já se inicia com dependências incríveis! podendo ser iniciado através do docker, utilizando templates e muito mais!

Então vamos ao nosso projeto:

Neste projeto foi realizado um CRUD de produtos através da nossa API.
Para facilitar este processo foi utilizado Illuminate database com Eloquent.

Lembre-se de criar o banco de dados e configurar na aplicação para rodar (para mais informações verifique db.php e settings.php que são os arquivos que possuem as configurações e uso do banco de dados).




*Esta API faz parte da exploração e estudo do Slim framework na sua versão 3.* *, *e criada durante o curso: Desenvolvimento Web Completo  - Udemy - com o professor Jamilton Damasceno.*

