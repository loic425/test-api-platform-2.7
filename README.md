# test-api-platform-2.7

## Setup

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

@see https:localhost:8000/api
