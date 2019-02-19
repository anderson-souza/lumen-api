# Lumen-API

Repositório para fins didáticos.  
Aprendendo a utilizar o micro-framework Lumen para criar APIs Rest.

## Configuração do Ambiente
Dentro do repositório existe um arquivo chamado ***.env.example*** o qual deve ser renomeado para ***.env*** apenas. Dentro deste arquivo deve ser configurado as informações do banco de dados local. As principais configurações são:

- DB_CONNECTION=mysql #Banco de Dados
- DB_HOST=127.0.0.1 #IP do Banco, padrão Localhost
- DB_PORT=3306 #Porta de comunicação
- DB_DATABASE=lumen-api #Nome do banco de dados
- DB_USERNAME=root #Usuário de conexão com o banco
- DB_PASSWORD= #Senha do usuário

É necessário criar um banco de dados específico para rodar a migração e população dos dados, este banco é informado na tag DB_DATABASE

## Comandos para execução  
Comando necessário para atualizar dependências do composer
> composer update --no-scripts

Comando para executar a migração do banco
> php artisan migrate

Comando para popular o banco de dados
> php artisan db:seed

Após estas configurações o projeto está pronto para ser executado.