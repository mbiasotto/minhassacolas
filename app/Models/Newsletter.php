<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = 'app_newsletter';

    protected $fillable = [
        'email',
        'nome',
        'telefone',
        'data_cadastro',
        'ip',
        'user_agent',
        'origem',
        'status'
    ];

    protected $dates = [
        'data_cadastro'
    ];

    // Scope para buscar apenas ativos
    public function scopeAtivos($query)
    {
        return $query->where('status', 1);
    }

    // Scope para buscar por data
    public function scopePorData($query, $dataInicio, $dataFim = null)
    {
        if ($dataFim) {
            return $query->whereBetween('data_cadastro', [$dataInicio, $dataFim]);
        }
        return $query->whereDate('data_cadastro', $dataInicio);
    }

    // Scope para filtros (seguindo padrão do sistema)
    public function scopeFilter($query, $filtro, $filtro_campos)
    {
        $filtro = explode(" ",$filtro);
        return $query->where(function($q) use ($filtro, $filtro_campos) {
            foreach ($filtro_campos as $key => $campo){
                $q->orWhere(function($q) use ($filtro, $campo) {
                    foreach ($filtro as $key => $var){
                        $q->Where($campo,'like','%'.$var.'%');
                    }
                });
            }
        }); 
    }

    // Scope para paginação (seguindo padrão do sistema)
    public function scopePaginates($query, $config)
    {
        return $query->paginate($config['limite'], ['*'], 'page', $config['page']); 
    }
} 