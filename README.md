# AppCake-article-news
## run the command below in sequential order
### composer install
### php bin/console doctrine:database:create
### php bin/console make:migration
### php bin/console doctrine:migrations:migrate

### symfony console app:create:user
#### Note: Two user will be created: admin@admin.com and visitor@admin.com both sharing password: 12345

## This can be run as many times as possible. it is CLI for download and parsing news
### symfony console app:news:loader

### symfony server:start

