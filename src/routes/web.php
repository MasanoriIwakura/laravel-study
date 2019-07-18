<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return '<html><body><h1>Hello</h1></body></html>';
});

$html = <<<EOF
<html>
<body>
    <h1>Hoge</h1>
    <p>ヒアドキュメント</p>
</body>
</html>
EOF;

Route::get('hoge', function () use ($html) {
    return $html;
});

Route::get('user/{id}', function ($id) {
    $message = '';
    $users = array('1'=>'Taro', '2'=>'Jiro', '3'=>'Saburo');

    if (array_key_exists($id, $users)) {
        $message = "id = ${id}, user = ${users[$id]}";
    } else {
        $message = "対象のユーザーは存在しません。[id:${id}]";
    }

$html = <<<EOF
<html>
<body>
    <h1>パラメータサンプル</h1>
    <p>$message</p>
</body>
</html>
EOF;

    return $html;
});