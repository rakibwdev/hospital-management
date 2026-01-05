<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes, ModelTrait;

    protected $fillable = [
        'company_id',
        'generic_id',
        'name',
        'form',
        'price',
        'strength',
        'packsize',
        'order',
    ];
    protected $casts = [
        'company_id' => 'integer',
        'generic_id' => 'integer',
        'order' => 'integer',
    ];
    public function scopeApiFilter($query, $date)
    {
        return $this->filterByDate($query, $date);
    }
    public function scopeFilter($query, $search, $company_id, $generic_id)
    {
        return $query->when($search, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->when($company_id, function ($query) use ($company_id) {
            $query->where('company_id', $company_id);
            // })->when($generic_id, function ($query) use ($generic_id) {
            //     $query->where('generic_id', $generic_id);
            // });
        })->when($generic_id, function ($query) use ($generic_id) {
            $query->where('generic_id', $generic_id);
        });
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
    public function generic(): BelongsTo
    {
        return $this->belongsTo(Generic::class);
    }
}
