<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Promotor;
use App\Models\Promotoria;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function create(Request $request)
    {
        // Buscar promotores e promotorias já existentes
        $promotorTitular = Promotor::where('nome', $request->promotor_titular)->first();
        $promotorDesignado = Promotor::where('nome', $request->promotor_designado)->first();
        
        $promotoria = Promotoria::where('nome', $request->promotoria)->first();

        // Verificar se os registros existem
        if (!$promotorTitular || !$promotorDesignado || !$promotoria) {
            return response()->json(['message' => 'Algum dos registros não foi encontrado.'], 404);
        }

        // Criar evento
        $evento = Evento::create([
            'titulo' => $request->titulo,
            'tipo' => $request->tipo,
            'periodo_inicio' => $request->periodo_inicio,
            'periodo_fim' => $request->periodo_fim,
            'promotor_titular_id' => $promotorTitular->id,
            'promotor_designado_id' => $promotorDesignado->id
        ]);

        return response()->json(['message' => 'Evento criado com sucesso!', 'evento' => $evento], 201);
    }
}
