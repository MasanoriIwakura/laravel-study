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
$ laravel new <プロジェクト名>

# 実行
$ cd <プロジェクト名>
$ php artisan serve
# http://local host:8000/にアクセス
```

## XAMP環境の構築

Nginx + MariaDB + PHPの環境を構築する。  
各種インストールが面倒なのでDockerを使用する。  
また、Nginxの経験が無いので勉強用のNginxを選定

## Controllerの作成

Controllerは以下のコマンドで作成する。

```bash
$ php artisan make:controller <Controller名>
```

`app/Http`直下にControllerが作成される。  
Controllerの実装後、ルーティングに追加が必要。

Controllerの例

```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id='noname', $pass='unknown') {
        return <<<EOF
<html>
<head>
<title>HelloController/index</title>
</head>
<body>
    <h1>Index</h1>
    <p>HelloController Index page</p>
    <ul>
        <li>ID: {$id}</li>
        <li>PASS: {$pass}</li>
    </ul>
</body>
</html>
EOF;
    }
}
```

`routes/web.php` にルーティングの追加

```php
Route::get('hello/{id?}/{pass?}', 'HelloController@index');
```