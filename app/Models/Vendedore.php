<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vendedore
 *
 * @property $id
 * @property $nombre
 * @property $apellidoP
 * @property $apellidoM
 * @property $distribuidora
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vendedore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidoP' => 'required',
		'apellidoM' => 'required',
		'distribuidora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidoP','apellidoM','distribuidora'];



}
