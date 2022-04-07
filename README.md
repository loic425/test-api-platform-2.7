# test-api-platform-2.7

## Setup

### Configure your database user and password

```dotenv
#.env.local
DATABASE_URL="postgresql://db_user:db_password@127.0.0.1:5432/api_platform?serverVersion=13&charset=utf8"
```

### Install the project

```bash
composer install
bin/console doctrine:database:create
bin/console doctrine:migrations:migrate -n
bin/console doctrine:fixtures:load -n
```

## Run Server

```bash
symfony serve -d
```

## API swagger

[https://localhost:8000/api](https://localhost:8000/api)
