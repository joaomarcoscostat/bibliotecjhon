<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['nome','autor','capa','descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'livros';

}
