<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;
    protected $fillable = [
        'produto_id',
        'tipo',
        'quantidade',
        'data_movimentacao'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
