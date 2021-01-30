<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $table = 'zaidejai';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vardas',
        'slaptazodis',
    ];

    protected $appends = ['darbas_job'];


    public function getDarbasJobAttribute($value)
    {
        $job = null;
        switch ($this->darbas) {
            case 0:
                $job = "Bedarbis";
                break;
            case 1:
                $job = "Medikas";
                break;
            case 2:
                $job = "Policija";
                break;
            case 3:
                $job = "Apsauga";
                break;
            case 4:
                $job = "Kontrobandininkai";
                break;
            case 5:
                $job = "Furistai";
                break;
            case 6:
                $job = "Kariuomenė";
                break;
            case 7:
                $job = "Mechanikas";
                break;
            case 8:
                $job = "S.W.A.T.";
                break;
            case 9:
                $job = "F.T.B.";
                break;
            case 10:
                $job = "Taksistas";
                break;
            case 10:
                $job = "Reporteriai";
                break;
            default:
                $job = "Bedarbis";
                break;
        }
        return $job;
    }

}
