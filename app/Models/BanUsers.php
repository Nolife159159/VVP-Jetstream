<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanUsers extends Model
{
    use HasFactory;

    protected $table = 'banlist';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Vardas',
        'reason',
        'kasUzblokavo',
    ];
}
