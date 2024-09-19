<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Avaliacoes;
use App\Models\Bibliotecas;
use App\Models\Emprestimos;
use App\Models\Livros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $livros = Livros::all();
        $emprestimos = Emprestimos::where('user_id', Auth::user()->id)->get();
        $bibliotecas = Bibliotecas::all();
        $resenhas = Avaliacoes::where('user_id', Auth::user()->id)->get();
        return view('dashboard.usuario', ["livros" => $livros, "emprestimos" => $emprestimos, "bibliotecas" => $bibliotecas, "resenhas" => $resenhas]);
    }
}
