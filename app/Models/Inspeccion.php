<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Inspeccion extends Model
{
    use HasFactory;

    protected $table  = 'inspeccions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'codigo',
        'fecha',
        'lugar',
        'porcen_total',
        'responsable',
    ];

    /**
     * Get all of the subitems for the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function get_detalle_inpeccions(): HasMany
    {
        return $this->hasMany(DetalleInspeccion::class);
    }

}
