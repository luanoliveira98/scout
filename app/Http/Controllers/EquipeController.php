<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index()
    {
        return "Listar Equipes";
    }

    public function store(Request $request)
    {
        return "Criar Equipe";
    }

    public function show(Int $id)
    {
        return "Listar Equipe";
    }

    public function update(Request $request, Int $id)
    {
        return "Atualizar Equipe";
    }

    public function destroy(Int $id)
    {
        return "Deletar Equipe";
    }
}
