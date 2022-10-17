
# Laravel Xastre

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

