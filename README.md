# Laravelの勉強

## Laravelについて

- 2012年にリリースされた比較的若いフレームワーク
- MVCフレームワーク
- 学習コストが低い
- Symfonyベース
- インストールは全てComposerを使う
- ORM, テンプレートエンジン搭載

## Composerについて

PHPのパッケージ管理プログラム。

## 環境構築

macOSの場合を例に記載。

```bash
# composerのインストール
$ brew install composer

# composerのバージョン確認
$ composer -V

# Laravelのインストール
$ composer global require "laravel/installer=~1.1"

# PATHの設定
$ echo "export PATH=~/.composer/vendor/bin:$PATH" >> ~/.bash_profile
$ source ~/.bash_profile

# Laravelのバージョン確認
$ laravel --version
```

## Laravelプロジェクト作成

```bash
# 作成したいフォルダに移動してから実行
laravel new <プロジェクト名>

# 実行
cd <プロジェクト名>
php artisan serve
# http://local host:8000/にアクセス
```

## XAMP環境の構築

Nginx + MariaDB + PHPの環境を構築する。  
各種インストールが面倒なのでDockerを使用する。  
また、Nginxの経験が無いので勉強用のNginxを選定
