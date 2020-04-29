<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function admin()
    {
        if (!isset($_GET['page'])) {
            return view('hidden.admin.index');
        } else if ($_GET['page'] == 'users') {
            return view('hidden.admin.users');
        } else if ($_GET['page'] == 'routes') {
            return view('hidden.admin.routes');
        } else if ($_GET['page'] == 'fleet') {
            return view('hidden.admin.fleet');
        } else if ($_GET['page'] == 'cards') {
            return view('hidden.admin.cards');
        } else if ($_GET['page'] == 'posts') {
            return view('hidden.admin.posts');
        } 
    }

    public function manage()
    {
        if (!isset($_GET['page'])) {
            return view('hidden.manage.index');
        } else if ($_GET['page'] == 'routes') {
            return view('hidden.manage.routes');
        } else if ($_GET['page'] == 'fleet') {
            return view('hidden.manage.fleet');
        } else if ($_GET['page'] == 'cards') {
            return view('hidden.manage.cards');
        } else if ($_GET['page'] == 'posts') {
            return view('hidden.manage.posts');
        } 
    }
}
