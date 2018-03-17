<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Flight;
use App\Models\Aiport;
use App\Models\Plane;

class FlightController extends Controller
{
    private $flight;
    private $aiport;
    private $plane;
    private $totalPaginate = 20;

    public function __construct(Flight $flight, Aiport $aiport, Plane $plane)
    {
        $this->flight = $flight;
        $this->aiport = $aiport;
        $this->plane = $plane;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Lista de Voos";

        $flights = $this->flight->paginate($this->totalPaginate);

        return view('panel.flights.index', compact('title','flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastro de Voos";

        $planes = $this->plane->pluck('id', 'id');
        $aiports = $this->aiport->pluck('name', 'id');

        return view('panel.flights.create', compact('title', 'planes', 'aiports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($this->flight->newFlight($request))
            return redirect()
                        ->route('flights.index')
                        ->with('success', 'Cadastro realizado com sucesso!');
        else
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao cadastrar Marca!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
