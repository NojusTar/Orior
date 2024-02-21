<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        "name", "companyCode", "pvm", 
        "director", "location", "phone", 
        "email", "website", "socials", 
        "workers", "capital", "age", 
        "tags", "description", "logo"
    ];

    public function scopeFilter($query, array $filters)
    {
        if($filters["search"] ?? false)
        {
            $query->where("name", "like", "%" . request("search") . "%");
        }
    }
}
