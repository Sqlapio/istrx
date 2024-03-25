<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    protected $table  = 'items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'descripcion',
        'responsable',
    ];

    /**
     * Get all of the subitems for the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function get_subitems(): HasMany
    {
        return $this->hasMany(Subitem::class);
    }

    /**
     * Get all of the subitems for the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function get_informes(): HasMany
    {
        return $this->hasMany(Informe::class, 'id');
    }
}
