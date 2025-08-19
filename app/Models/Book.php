<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'cover',
    ];

    // 1 buku bisa punya banyak peminjaman
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
