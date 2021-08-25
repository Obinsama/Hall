<?php

namespace Hall\Http\Controllers;

use Hall\Equipement;
use Hall\Facture;
use Hall\Vente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class FacturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
//        $equipements=Equipement::pluck('nom_equipement');
//
//        $res=Vente::orderByDesc('id')->paginate(10);
//        $factures=DB::table('equipements')
//            ->select('factures.id','factures.ref','nom_equipement','factures.montant as montant','factures.reste as reste','ventes.cout','ventes.description','ventes.statut')
//            ->join('ventes','equipements.id','=','ventes.equipement_id')
//            ->join('services','services.id','=','ventes.service_id')
//            ->join('factures','factures.id','=','services.facture_id')
//            ->orderBy('ventes.id','desc')
//            ->paginate(10);
//        return response()->json($factures);
        return response()->json($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vente=json_decode($request->getContent(),true);
        $ref=strtoupper(substr('FAC',0,3)).'-'.strtoupper(Date('D')).time();
        $facture=new Facture();
        $facture->client_id=1;
        $facture->ref=$ref;
        $facture->user_id=Auth::id();
        $facture->date_facturation=date('Y-m-d H:i:s');
        $facture->montant=$request->montant;
        $facture->reste=$request->reste;
        $facture->date_limite=date('Y-m-d H:i:s',strtotime('+7 days'));;
        $facture->statut=$request->statut;
        $facture->fichier='/';
        $facture->save();
        $facture=Facture::orderByDesc('id')->first();

        $tab=[
            'facture'=>$facture->id,
            'vente'=>$vente
        ];

        return response()->json($tab);

    }

    /**
     * Display the specified resource.
     *
     * @param  \Hall\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(Facture $facture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Hall\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit(Facture $facture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Hall\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facture $facture)
    {
        $facture->statut='termine';
        $facture->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Hall\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facture $facture)
    {
        $facture->statut='annule';
        $facture->save();
    }
    public function details($id){
        $ventes=DB::table('factures')
            ->select('equipements.id','nom_equipement','equipements.type','valeur','equipements.description','equipements.caracteristiques','equipements.etat')
            ->join('services','factures.id','=','services.facture_id')
            ->join('ventes','services.id','=','ventes.service_id')
            ->join('equipements','equipements.id','=','ventes.equipement_id')
            ->where('services.facture_id',$id)
            ->get();
        $response=$ventes;
//        $response=json_decode($request->getContent(),false);
        return response()->json($response);
    }
    public function data($id){
        $ventes=DB::table('factures')
            ->select('equipements.id','nom_equipement','equipements.type','valeur','equipements.etat')
            ->join('services','factures.id','=','services.facture_id')
            ->join('ventes','services.id','=','ventes.service_id')
            ->join('equipements','equipements.id','=','ventes.equipement_id')
            ->where('services.facture_id',$id)
            ->get();
        $facture=DB::table('factures')
            ->select('factures.id','factures.ref','factures.montant','factures.reste','date_facturation','date_limite')
            ->join('services','factures.id','=','services.facture_id')
            ->join('ventes','services.id','=','ventes.service_id')
            ->join('equipements','equipements.id','=','ventes.equipement_id')
            ->where('services.facture_id',$id)
            ->get();
        $response=['vente'=>$ventes,'facture'=>$facture];
//        $response=json_decode($request->getContent(),false);
        return response()->json($response);
    }
}
