# conduit
Laravelを使った記事投稿アプリです。

## 環境
- PHP 8.4.12
- Laravel Framework 12.28.1
- SQLite

## ディレクトリ構成
```
.
├── README.md
├── app
│   ├── Http
│   ├── Models
│   └── Providers
├── artisan
├── bootstrap
│   ├── app.php
│   ├── cache
│   └── providers.php
├── composer.json
├── composer.lock
├── config
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   └── session.php
├── database
│   ├── database.sqlite
│   ├── factories
│   ├── migrations
│   └── seeders
├── package.json
├── phpunit.xml
├── public
│   ├── favicon.ico
│   ├── index.php
│   └── robots.txt
├── resources
│   ├── css
│   ├── js
│   └── views
├── routes
│   ├── console.php
│   └── web.php
├── storage
│   ├── app
│   ├── framework
│   └── logs
├── tests
│   ├── Feature
│   ├── TestCase.php
│   └── Unit
├── vendor
│   ├── autoload.php
│   ├── bin
│   ├── brick
│   ├── carbonphp
│   ├── composer
│   ├── dflydev
│   ├── doctrine
│   ├── dragonmantank
│   ├── egulias
│   ├── fakerphp
│   ├── filp
│   ├── fruitcake
│   ├── graham-campbell
│   ├── guzzlehttp
│   ├── hamcrest
│   ├── laravel
│   ├── league
│   ├── mockery
│   ├── monolog
│   ├── myclabs
│   ├── nesbot
│   ├── nette
│   ├── nikic
│   ├── nunomaduro
│   ├── phar-io
│   ├── phpoption
│   ├── phpunit
│   ├── psr
│   ├── psy
│   ├── ralouphie
│   ├── ramsey
│   ├── sebastian
│   ├── staabm
│   ├── symfony
│   ├── theseer
│   ├── tijsverkoyen
│   ├── vlucas
│   ├── voku
│   └── webmozart
└── vite.config.js

```
## 開発サーバー起動
```
php artisan serve
```

## マイグレーション
```
php artisan migrate
```

## モデル・コントローラー生成
```
php artisan make:model Article
php artisan make:controller ArticleController
```
