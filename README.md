## Dockerビルド
- git clone git@github.com:taka-toshi21/free-market.git
- docker-compose up -d --build

## Laravel環境構築
- docker-compose exec php bash
- composer install
- cp.env.example.env，環境変数を適宜変更
- php artisan key:generate
- php artisan migrate
- 会員登録を二人分追加
- php artisan db:seed

## 開発環境
- お問い合わせ画面：http://localhost/
- ユーザー登録：http://localhost/register
- phpMyAdmin: http://localhost:8080/

## 使用技術（実行環境）
- PHP 8.2.11
- Laravel 8.83.8
- query 3.7.1.min.js
- MySQL 8.0.26
- nginx 1.21.1

## ER図
<img width="1551" height="772" alt="free-market-er" src="https://github.com/user-attachments/assets/6df2793c-a901-4a19-b3f8-651e7538209a" />
