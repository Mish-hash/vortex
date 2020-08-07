<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $title = 'Home page';
        $categories = ['УСЛУГИ', 'НОУТБУКИ', 'SSD, USB HDD, SD, CR, FLASH, DVD, КАРМАНЫ', 'КОМПЬЮТЕРЫ И КОМПЛЕКТУЮЩИЕ', 'МОНИТОРЫ И КРЕПЛЕНИЯ', 'ПЕРИФЕРИЯ КОМПЬЮТЕРНАЯ'];
        return view('main.index', compact('title', 'categories'));
    }
}
