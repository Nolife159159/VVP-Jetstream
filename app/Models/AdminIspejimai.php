<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminIspejimai extends Model
{
    use HasFactory;

    protected $table = 'adminispejimai';

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
