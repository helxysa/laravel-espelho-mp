<?php

namespace App\Filament\Pages;
use Illuminate\Support\Facades\DB;


use Filament\Pages\Page;

class Promotoria extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.promotoria';



    public $promotorias;

    public function mount()
    {

        $this->promotorias = DB::select("
            SELECT 
                m.nome AS municipio,
                gp.nome AS grupo_promotoria,
                pr.nome AS promotoria,
                pt.nome AS promotor_titular,
                pd.nome AS promotor_designado,
                e.titulo AS evento,
                e.tipo AS tipo_evento,
                e.periodo_inicio,
                e.periodo_fim
            FROM 
                eventos e
            JOIN promotores pt ON pt.id = e.promotor_titular_id
            JOIN promotores pd ON pd.id = e.promotor_designado_id
            JOIN promotorias pr ON pr.id = e.promotor_titular_id
            JOIN grupo_promotorias gp ON gp.id = pr.grupo_promotoria_id
            JOIN municipios m ON m.id = gp.municipios_id
        ");
    }


}

