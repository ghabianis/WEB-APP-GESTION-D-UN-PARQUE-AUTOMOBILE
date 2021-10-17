<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;

class assignationModel extends Eloquent implements AuthenticatableContract
{
    use HasFactory, Notifiable;
    use AuthenticatableTrait;
    protected $connection='mongodb';

    protected $table= 'assignations';
    protected $fillable=['name','pname','numcin','nump','marque','model','dater'];
}
