<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 *
 * @property $id
 * @property $nombre
 * @property $precio
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventario extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','precio','descripcion'];



}
