
# Projeto de teste para a empresa Paytour (Vaga PHP)

### Para acelerar o processo de desenvolvimento, usei como base o respositório da EspecializaTi que se encontra no Github no endereço https://github.com/especializati/setup-docker-laravel/tree/laravel-9-com-php-8 (branch laravel-9-com-php-8) no qual o setup foi feito com o auxílio do Docker.

### O teste em si consiste em criar um formulário com os seguintes dados: Nome, e-mail, telefone, Cargo Desejado (Campo texto livre), Escolaridade (Campo select), observações, arquivo e data e hora do envio. O formulário deve ter validação dos campos e teste unitários.

### Como apenas a linguagem de programação a ser usada foi definida, o PHP, optei por usar o framework Laravel por ser muito bom de se tralahar e além disso, é muito requerido no mercado.
### Passo a passo
Clone Repositório
```sh
git clone https://github.com/especializati/setup-docker-laravel.git qualquer_nome
```

```sh
cd qualquer_nome/
```


Alterne para a branch laravel 8.x
```sh
git checkout laravel-9-com-php-8
```


Remova o versionamento
```sh
rm -rf .git/
```


Crie o Arquivo .env
```sh
cd example-project/
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=Projeto
APP_URL=http://localhost:8180

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:8180](http://localhost:8180)

Após esses passos, crie um arquivo de ambiente para os testes
```sh
cp .env.testing.example .env.testing 
```
Para poder fazer os teste unitários.

Para fazer o teste de envio de email, crie uma conta no https://mailtrap.io/ e pegue as credenciais de email do Laravel para o seu .env
Este é o local no .env que senão incluidas suas credenciais do mailtrap (apenas copie e cole dentro do arquivo) 
```sh
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"
```

Desde já, agradeço a equipe da [Paytour](https://www.paytour.com.br/) pela oportunidade de realizar esse teste.
