<?php

namespace Hall\Http\Controllers;

use Hall\Equipement;
use Hall\Vente;
use Illuminate\Http\Request;

class EquipementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendus=Vente::pluck('equipement_id')->all();
//        $res=Equipement::orderByDesc('id')->paginate(5);
        $res=Equipement::orderByDesc('id')->whereNotIn('id',$vendus)->paginate(10);
//        $res=User::paginate(5);
        return response()->json($res);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.equipements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Equipement=new Equipement();
        $Equipement->nom_equipement=$request->nom_equipement;
        $Equipement->valeur=$request->valeur;
        $Equipement->caracteristiques=$request->caracteristiques;
        $Equipement->description=$request->description;
        $Equipement->duree_de_vie=$request->duree_de_vie;
        $Equipement->etat=$request->etat;
        $Equipement->type=$request->type;
        $Equipement->save();
      return response()->json($Equipement);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Hall\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function show(Equipement $equipement)
    {
        return view('admin.equipements.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Hall\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipement $equipement)
    {
        return view('admin.equipements.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Hall\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipement $equipement)
    {

        $equipement->nom_equipement=$request->nom_equipement;
        $equipement->valeur=$request->valeur;
        $equipement->caracteristiques=$request->caracteristiques;
        $equipement->description=$request->description;
        $equipement->duree_de_vie=$request->duree_de_vie;
        $equipement->etat=$request->etat;
        $equipement->type=$request->type;
        $equipement->save();
        $res=Equipement::orderByDesc('id')->paginate(5);
        return response()->json($res);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Hall\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipement $equipement)
    {
        //
    }
}
