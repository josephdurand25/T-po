<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormAlimentationRequest;
use App\Models\Admin\Alimentation;
use Illuminate\Http\Request;

class AlimentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $demarage = Alimentation::where('type_aliment', 'demarage')->sum('nbre_sac');
        $croissance = Alimentation::where('type_aliment','croissance')->sum('nbre_sac');
        $finition = Alimentation::where('type_aliment','finition')->sum('nbre_sac');
        return view('admin.pages.alimentation.index',compact(['demarage','croissance','finition']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormAlimentationRequest $request)
    {
        //
        $validateData = $request->validated();
        // dd($validateData);
        $aliment = new Alimentation;
        $aliment->type_aliment = $validateData['type_aliment'];
        $aliment->nbre_sac = $validateData['nbr_sac'];
        $aliment->prix_unitaire = $validateData['prix_unit'];
        $result = $aliment->save();
        if($result){
            return redirect()->back()->with('success', "$aliment->type_aliment enregistré avec succès.") ;
        }else{
            return redirect()->back()->with('echec', "Le(a) $aliment->type_aliment n'a pas été enregistré.");
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
