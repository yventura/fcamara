<?php

namespace App\Http\Controllers;

use App\fila01;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class fila01Controller extends Controller
{
    //Visualizando os Registros

    private $objFila01;


    public function __construct()
    {
    $this->objFila01= new fila01();


        $this->middleware('auth');
       // Visualizando os registros
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        /*
        exibe os registros
        */
        $data['fila01'] = fila01::all();

        //dd($data);
        return view('fila01.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $fila_01=$this->objFila01->all();
        return view('fila01.add', compact('fila_01'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
            {
            $cad=$this->objFila01->create([
                'player' =>$request->player,
                'game' =>$request->game,
                'status' =>$request->status


            ]);
        if($cad){return redirect('fila01');}



    }

    /**
     * Display the specified resource.
     *
     * @param fila01 $fila_01
     * @return Response
     */
    public function show(fila01 $fila_01)
    {
        return view('fila01.show')->with('fila01', $fila01);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
