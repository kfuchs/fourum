<?php namespace Fourum\Controllers\Admin;

use Fourum\Controllers\AdminController;
use Illuminate\Support\Facades\View;

class IndexController extends AdminController
{
    public function index()
    {
        echo View::make('index');
    }
}
