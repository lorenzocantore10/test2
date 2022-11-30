<?php

namespace App\Models;
use App\Models\players;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $table='players'; //dalla table players,nel fillable ci vado a mettere i miei attribut.che saranno nome giocatore e gol segnati
    protected $fillable = [
        'nome',
        'goal',
        'assist',
        'presenze'];

        public function teams(){
            return $this->belongsToMany('App\Models\Team');
        }

}
