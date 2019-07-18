<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head, $body, $end;
$head = '<html><head>';
$body ='</head><body>';
$end = '</body></html>';

function tag($tag, $txt) {
    return "<{$tag}>{$txt}</{$tag}>";
}

class HelloController extends Controller
{
    public function index() {
        global $head, $body, $end;

        $html = $head . tag('title', 'HelloController/index') .
                $body . tag('h1', 'Index') .
                tag('p', 'This is Index page.') .
                '<a href="hello/other">Go to Other</a>' . $end;
                
        return $html;
    }

    public function other() {
        global $head, $body, $end;

        $html = $head . tag('title', 'HelloController/other') .
                $body . tag('h1', 'Other') .
                tag('p', 'This is Other page.') . $end;
                
        return $html;
    }
}
