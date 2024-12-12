<?php

namespace App\Observers;

use App\Models\Evento;
use App\Models\Historico;
use Illuminate\Support\Facades\Auth;

class EventoObserver
{
    public function created(Evento $evento)
    {
        Historico::create([
            'users_id' => Auth::id(),
            'detalhes' => 'Evento criado: ' . $evento->titulo,
            'modificado' => now(),
        ]);
    }

    public function updated(Evento $evento)
    {
        Historico::create([
            'users_id' => Auth::id(),
            'detalhes' => 'Evento atualizado: ' . $evento->titulo,
            'modificado' => now(),
        ]);
    }

    public function deleted(Evento $evento)
    {
        Historico::create([
            'users_id' => Auth::id(),
            'detalhes' => 'Evento removido: ' . $evento->titulo,
            'modificado' => now(),
        ]);
    }
}
