<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table='contacts';//dalla table contacts,nel fillable ci vado a mettere i miei attribut.che saranno email telefono e  facebook 
    protected $fillable=[
        'email',
        'telefono',
        'facebook',];
}
