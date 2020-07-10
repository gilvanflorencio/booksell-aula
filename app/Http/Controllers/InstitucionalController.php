<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;

class InstitucionalController extends Controller
{
    function homeView(){
        $livros = Livro::all();
        return view('index',compact('livros'));
    }
    function favoritoView(){
        return view('favorito');
    }
    function loginView(){
        return view('login');
    }
    function cadastroView(){
        return view('cadastro');
    }
    function produtoView(){
        return view('produto');
    }
}
