<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrkIspejimai extends Model
{
    use HasFactory;

    protected $table = 'drkispejimai';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Vardas',
        'kasispejo',
        'priezastis',
    ];

}
