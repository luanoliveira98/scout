<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Lista de equipes
     * 
     * @return      string          Lista de Equipes
     */
    public function index()
    {
        $equipes = Equipe::all();
        return $this->returnJson(config('messages.index.success'), $equipes);
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
