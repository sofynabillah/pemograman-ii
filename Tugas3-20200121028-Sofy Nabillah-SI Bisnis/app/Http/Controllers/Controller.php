<?php

namespace App\Http\Controllers;

use illuminate\http\Request;


class Controller extends BaseController
{
    public function index ()
    {
        return 'test berhasil';
    }

    public function urutan($urutan)
    {
        return view('urutan', ['ke'])
    }
    
}
