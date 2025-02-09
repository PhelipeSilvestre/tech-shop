<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status', 'total'];

    // Relacionamento com o modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacionamento com os itens do pedido
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
