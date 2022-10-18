
# Laravel Xastre

<h1> Sobre o Projeto </h1>
 -Projeto consiste em desenvolver um sistema web com uma interface de front-end estruturada usando Boostrap.
 -Ferramenta que possibilita aos usuários o bom uso das funcionalidades abaixo listadas, que são:
 
<h1> CRUD </h1>
 -Alunos -> Há um N filmes do gosto do aluno, usando principalmente API's
  
 -Professores -> RP(Registro do Professor), matéria dada e nome
 
 -Materia -> Nome da matéria, alunos e professor que da cada matéria

<h1> Front-End e Back-End </h1>
  
 -As linguagens de front e back end foram trabalhadas separadamente
  
 -Usamos como back e front end o frame-work Laravel
  
 -Banco de Dados -> My-SQL


### Passo a passo
Clone este repositório, entre na pasta e execute os comandos abaixo no terminal, recomendamos abrir a pasta pelo Visual Studio Code:

Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=Laravel
APP_URL=http://localhost:8080

DB_PASSWORD=root
```


Suba os containers do projeto
```sh
docker compose up -d
```
Caso ocorram problemas com os containers, rode os seguintes comandos
```sh
systemctl start docker
gpassword -a $USER docker
```

Acessar o container
```sh
docker compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Migrar as tabelas para o Banco de dados
```sh
php artisan migrate
```

Acesse o CRUD de alunos 
[http://localhost:8080](http://localhost:8080)
ou
[http://localhost:8080/alunos](http://localhost:8080/alunos)

Acesse o CRUD de matérias 
[http://localhost:8080/materias](http://localhost:8080/materias)

Acesse o CRUD de professores
[http://localhost:8080/professores](http://localhost:8080/professores)

Acesse o phpmyadmin
[http://localhost:8081](http://localhost:8081)

