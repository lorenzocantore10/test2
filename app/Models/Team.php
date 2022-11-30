<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table='teams'; //dalla table players,nel fillable ci vado a mettere i miei attribut.che saranno nome giocatore e gol segnati
    protected $fillable = [
       'nome',
    'tipo'];

    public function players(){
        return $this->belongsToMany('App\Models\Player');
    }
}
