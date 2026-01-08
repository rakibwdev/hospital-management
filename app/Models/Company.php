<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes, ModelTrait;

    protected $fillable = [
        'name',
        'logo',
        'order',
    ];

    public function scopeApiFilter($query, $date)
    {
        return $this->filterByDate($query, $date);
    }

    public function scopeFilter($query, $search)
    {
        return $query->when($search, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%');
        });
    }

    public function brands(): HasMany
    {
        // return $this->hasMany(Brand::class, 'company_id', 'id');
        return $this->hasMany();
    }

    protected $casts = [
        'order' => 'integer',
    ];
}
