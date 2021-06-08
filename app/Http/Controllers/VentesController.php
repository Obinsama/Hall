<?php

namespace Hall\Http\Controllers;

use Hall\Equipement;
use Hall\Service;
use Hall\Vente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipements=Equipement::pluck('nom_equipement');

        $res=Vente::orderByDesc('id')->paginate(10);
        $ventes=DB::table('factures')
//            ->select('factures.id','factures.ref','factures.montant as montant','factures.reste as reste','ventes.cout','ventes.description','ventes.statut')
            ->select('factures.id','factures.ref','factures.montant as montant','factures.reste as reste','factures.statut','date_facturation as date')
            ->join('services','factures.id','=','services.facture_id')
            ->join('ventes','services.id','=','ventes.service_id')
//            ->where('factures.statut','=','termine')
//            ->join('equipements','equipements.id','=','ventes.equipement_id')
            ->orderBy('factures.id','desc')
            ->groupBy('factures.id')
            ->paginate(10);
        return response()->json($ventes);
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

        $service=new Service();
        $service->facture_id=$request->data['facture'];
        $service->type='Vente';
        $service->cout=$request->data['vente']['cout'];
        $service->delai=date('Y-m-d H:i:s',strtotime('+7 days'));
//        $service->description=$request->data['vente']->description;
        $service->description='ras';
        $service->statut=$request->data['vente']['statut'];
        $service->save();
        $service_id=Service::orderByDesc('id')->first();
        foreach ($request->data['vente']['Equipements'] as $item){
            $vente=new Vente();
            $vente->service_id=$service_id->id;
            $vente->equipement_id=$item['id'];
            $vente->cout=$item['valeur'];
            $vente->description=$item['description'];
            $vente->statut='en cours';
            $vente->save();
        }


//        return response()->json($request->data['vente']->cout);
        return response()->json('ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \Hall\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function show(Vente $vente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Hall\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function edit(Vente $vente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Hall\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vente $vente)
    {
        $vente->statut='termine';
        $vente->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Hall\Vente  $vente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vente $vente)
    {
        $vente->statut='annule';
        $vente->save();
    }
}
