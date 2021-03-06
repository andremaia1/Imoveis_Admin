<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table = 'imovel';
    
    protected $fillable = ['nome_apelido', 'descricao', 'tipo', 'status', 'areaConstr', 'areaTotal', 'dataCompra', 'usuario_id', 'endereco_id'];
    
    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'usuario_id');
    }
    
    public function endereco()
    {
        return $this->belongsTo('App\Endereco', 'endereco_id');
    }
    
    public function getTipoAttribute($value)
    {
        if ($value === 1) {
            return 'Casa';
        } else if ($value === 2) {
            return 'Apartamento';
        } else if ($value === 3) {
            return 'Chácara';
        } else if ($value === 4) {
            return 'Sítio';
        } else if ($value === 5) {
            return 'Fazenda';
        } else if ($value === 6) {
            return 'Imóvel Comercial';
        }
    }
    
    public function getTipo()
    {
        return $this->attributes['tipo'];
    }
    
    public function getStatusAttribute($value)
    {
        if ($value === 1) {
            return 'Desocupado';
        } else if ($value === 2) {
            return 'Por Alugar';
        } else if ($value === 3) {
            return 'Alugado';
        }
    }
    
    public function getStatus()
    {
        return $this->attributes['status'];
    }
    
    public function setTipoAttribute($value) {
        
        if ($value === 'Casa') {
            $this->attributes['tipo'] = 1;
        } else if ($value === 'Apartamento') {
            $this->attributes['tipo'] = 2;
        } else if ($value === 'Chácara') {
            $this->attributes['tipo'] = 3;
        } else if ($value === 'Sítio') {
            $this->attributes['tipo'] = 4;
        } else if ($value === 'Fazenda') {
            $this->attributes['tipo'] = 5;
        } else if ($value === 'Imóvel Comercial') {
            $this->attributes['tipo'] = 6;
        }
    }
    
    public function setStatusAttribute($value) {
        
        if ($value === 'Desocupado') {
            $this->attributes['status'] = 1;
        } else if ($value === 'Por Alugar') {
            $this->attributes['status'] = 2;
        } else if ($value === 'Alugado') {
            $this->attributes['status'] = 3;
        }
    }
}
