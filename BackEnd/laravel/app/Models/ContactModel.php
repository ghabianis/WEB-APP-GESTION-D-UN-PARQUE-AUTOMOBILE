<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;

class ContactModel extends Eloquent implements AuthenticatableContract
{
    use HasFactory, Notifiable;
    use AuthenticatableTrait;
    protected $connection='mongodb';

    protected $table= 'contacts';
    protected $fillable=['fname','lname','email','message'];
}
