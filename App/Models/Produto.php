<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model{
    //campos preenchíveis pelo Elloquent
    protected $fillable = ['titulo', 'descricao', 'preco', 'fabricante', 'updated_at', 'created_at'];

}


?>