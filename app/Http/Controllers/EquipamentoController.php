<?php

namespace App\Http\Controllers;

use App\Equipamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipamentoController extends Controller
{
    //Visualizando os Registros
    //private $objEquipamento;

    private $objEquipamento;


    public function __construct()
    {
    $this->objEquipamento= new Equipamento();


        $this->middleware('auth');
       // Visualizando os registros
       // $this->objEquipamento=new Equipamento();
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*
        Visualizando os registros
        dd($this->objEquipamento->all());
        */
        $data['equipamentos'] = Equipamento::all();

        //dd($data);
        return view('equipamentos.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $equipamento=$this->objEquipamento->all();
        return view('equipamentos.add', compact('equipamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objEquipamento->create([
            'tipo_equipamento' =>$request->tipo_equipamento,
            'modelo' =>$request->modelo,
            'nome' =>$request->nome,
            'observacao' =>$request->observacao


        ]);
        if($cad){return redirect('equipamentos');}
        

    
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamento $equipamento)
    {

        //dd($equipamento->id);
        return view('equipamentos.show')->with('equipamentos', $equipamentos);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
