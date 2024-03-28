<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DetalleInspeccion extends Model
{
    use HasFactory;

    protected $table  = 'detalle_inspeccions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'inspeccion_id',
        'item',
        'subitem',
        'fecha',
        'porcentaje',
        'responsable',
    ];

     /**
     * Get the get_items that owns the Subitem
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function get_inspeccion(): HasOne
    {
        return $this->hasOne(Inspeccion::class);
    }
}
