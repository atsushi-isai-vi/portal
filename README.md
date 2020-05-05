
# バージョン
PHP:7.3
mysql:5.7
laravel:latest


# docker-compose.ymlの設定
docker-compose.ymlのcontainer_nameを自分の任意の名前にする

```
  php: # アプリケーションサーバの設定
    container_name: php-test2  # 任意の名前
```

```
  nginx: # WEBサーバのコンテナの設定
    image: nginx # nginxの公式イメージを使用
    container_name: nginx-test2  # 任意の名前
```

# docker-compose.ymlの設定
docker-compose.ymlのMYSQL_DATABASEを自分の任意の名前にする

```
MYSQL_DATABASE: database # 任意のDB名にしておく
```


# docker起動

``` bash
$ docker-compose build
$ docker-compose up -d
```

## phpコンテナ（アプリケーションサーバのコンテナ）への入り方

```bash
$ docker-compose exec php bash

```

## nodeの入れ方
$ docker-compose exec php bashでコンテナ（アプリケーションサーバのコンテナ）に入った後に実行

```bash
＃  npm install
 ```



## Laravelプロジェクト作成
$ docker-compose exec php bashでコンテナ（アプリケーションサーバのコンテナ）に入った後に実行

```bash
$ laravel new
```
"laravel new"にプロジェクト名は付けないこと


## コンテナの立ち上げ
```bash
$ docker-compose up -d
```

## コンテナの削除
```bash
$  docker-compose down
```

ルートディレクトリ
http://localhost:8000/

phpmyadmin
http://localhost:8080/

## dbコンテナ（mysqlのコンテナ）への入り方

```bash
$ docker-compose exec db bash
```

## nginxコンテナ（webサーバのコンテナ）への入り方

```bash
$ docker-compose exec nginx bash
```