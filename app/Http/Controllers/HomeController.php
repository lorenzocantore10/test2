<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function insert(Request $request) //mi richiamo la funzione della rotta,cioe' insert
    {
        $Player= new Player(); //mi creo un ogetto giocatore seguendo il modello

        $Player->nome = request('nome');//e conme un this->name,nel campo nome giocatore,è richiesto il nome
        $Player->goal = request('goal');//nel campo giocatore gol,è richiesto il numero di goals
        $Player->assist=request('assist');
        $Player->presenze=request('presenze');
        $Player->save();//infine mi salvo l'ogetto player

        return redirect('home');
    }
    public function marcatori(){
        $players=Player::all();
        //dal modello Player prendimi tutto e salvalo nella var $players
        //dd($players);//col dd di player all mi prende tutto l'ogetto,io voglio un array semplice che contenga esclusivamente nome e gol
        $players = DB::table('players')->select('nome', 'goal','assist','presenze')->get();//nella var player mi prendo dal DB dalla tab.players nom e gol
        //dd($players);

        $arrayNomi =[];//faccio un avar arrayNomi ed un ciclo for im cui arrayNOMI di i e uguale al nome di i
        for(  $i = 0;  $i < count($players); $i++){
            $arrayNomi[$i] = $players[$i]->nome;
        }
        //dd($arrayNomi);

        $arrayGoal=[];
        for(  $i = 0;  $i < count($players); $i++){
            $arrayGoal[$i] =$players[$i]->goal;
        }
       // dd($arrayGoal); //mi stamnpera esclusivamente il n.di gol,cioe' 37 e 42
        $arrayAssist=[];
        for(  $i = 0;  $i < count($players); $i++){
            $arrayAssist[$i] = $players[$i]->assist;
        }
        $arrayPresenze=[];
        for($i=0;$i<count($players);$i++){
            $arrayPresenze[$i]=$players[$i]->presenze;
        }
        return view('statistiche',compact('arrayNomi', 'arrayGoal','arrayAssist','arrayPresenze'));
    }   
   public function insert2( Request $request)
   {
        $Wallet=new Wallet();

        $Wallet->nome = request('nome');//e conme un this->name,nel campo nome ,è richiesto il nome
        $Wallet->mensilita = request('mensilita');//nel campo wallet mensilita,è richiesto il numero di mensilita
        $Wallet->guadagno=request('guadagno');//nel campo wallet guadagno e richiesta la ral

        $Wallet->save();//infine mi salvo l'ogetto wallet

        return redirect('home');
   }
   public function ral(){
    $wallets=Wallet::all();
    //dal modello Wallet prendimi tutto e salvalo nella var $players
    //dd($players);//col dd di player all mi prende tutto l'ogetto,io voglio un array semplice che contenga esclusivamente nome e gol
    $players = DB::table('players')->select('nome', 'goal','assist','presenze')->get();//nella var player mi prendo dal DB dalla tab.players nom e gol
    //dd($players);

    $arrayNomi =[];//faccio un avar arrayNomi ed un ciclo for im cui arrayNOMI di i e uguale al nome di i
    for(  $i = 0;  $i < count($players); $i++){
        $arrayNomi[$i] = $players[$i]->nome;
    }
    //dd($arrayNomi);

    $arrayGoal=[];
    for(  $i = 0;  $i < count($players); $i++){
        $arrayGoal[$i] =$players[$i]->goal;
    }
   // dd($arrayGoal); //mi stamnpera esclusivamente il n.di gol,cioe' 37 e 42
    $arrayAssist=[];
    for(  $i = 0;  $i < count($players); $i++){
        $arrayAssist[$i] = $players[$i]->assist;
    }
    $arrayPresenze=[];
    for($i=0;$i<count($players);$i++){
        $arrayPresenze[$i]=$players[$i]->presenze;
    }
    return view('statistiche',compact('arrayNomi', 'arrayGoal','arrayAssist','arrayPresenze'));
}   

   }


