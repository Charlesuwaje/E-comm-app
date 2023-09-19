<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // public function scopeFilter($query, array $filters) {
    //     if($filters['name'] ?? false) {
    //         $query->where('name', 'like', '%' . request('name') . '%');
    //     }

    //     if($filters['search'] ?? false) {
    //         $query->where('title', 'like', '%' . request('search') . '%')
    //             ->orWhere('description', 'like', '%' . request('search') . '%')
    //             ->orWhere('name', 'like', '%' . request('search') . '%');
    //     }
    // }
}
