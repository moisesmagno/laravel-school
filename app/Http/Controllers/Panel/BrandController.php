<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;

class BrandController extends Controller
{

    private $brand;

    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Marcas de aviões';
        $brands = $this->brand->all();
        return view('panel.brands.index', compact('title','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Criar marca de avião';
        return view('panel.brands.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Brand $brand)
    {
        $dataForm = $request->all();

        $insert = $this->brand->create($dataForm);

        if($insert)
            return redirect()
                        ->route('brands.index')
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
        $brand = $this->brand->find($id);

        if(!$brand)
            return redirect()->back();

        $title = "Editar Marca: " . $brand->name;

        return view('panel.brands.edit', compact('title', 'brand'));
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

        $brand = $this->brand->find($id);

        if(!$brand)
            return redirect()->back();

        $update = $brand->update($request->all());

        if($update)
            return redirect()
                    ->route('brands.index')
                    ->with('success', 'Marca atualizada com sucesso!');
        else
            return redirect()
                ->route('brands.index')
                        ->with('error', 'Nâo foi atualizar editar a marca!');
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
