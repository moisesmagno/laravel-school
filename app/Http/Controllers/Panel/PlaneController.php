<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plane;
use App\Models\Brand;
use App\Http\Requests\PlaneStoreUpdateFormRequest;

class PlaneController extends Controller
{

    private $plane;
    private $brand;
    private $totalPage = 10;


    public function __construct(Plane $plane, Brand $brand)
    {
        $this->plane = $plane;
        $this->brand = $brand;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Lista de aviões';
        $planes = $this->plane->with('brand')->paginate($this->totalPage);

        return view('panel.planes.index', compact('title', 'planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar novo avião';
        $classes = $this->plane->classes();
        $brands = $this->brand->pluck('name', 'id'); //option - value

        return view('panel.planes.create', compact('title', 'classes', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlaneStoreUpdateFormRequest $request)
    {
        $dataForm = $request->all();

        $insert = $this->plane->create($dataForm);

        if($insert)
            return redirect()
                        ->route('planes.index')
                        ->with('success', 'Sucesso ao cadatrar Avião :)');
        else
            return redirect()
                        ->route('planes.index')
                        ->with('error', 'Ocorreu um erro ao cadastrar o Avião!')
                        ->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plane = $this->plane->with('brand')->find($id);
        if(!$plane)
            return redirect()->back();

        $brand = $plane->brand->name;

        $title = "Detalhes do avião: {$plane->$id}";

        return view('panel.planes.show',compact('plane','title','brand'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $plane = $this->plane->find($id);

        $title = "Editar o avião {$plane->id}";

        $brands = $this->brand->pluck('name', 'id');

        $classes = $this->plane->classes();

        if(!$plane)
            return redirect()->back();

        return view('panel.planes.edit', compact('title', 'plane', 'brands', 'classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlaneStoreUpdateFormRequest $request, $id)
    {

        $plane = $this->plane->find($id);

        if(!$plane)
            return redirect()->back();

        $update = $plane->update($request->all());

        if($update)
            return redirect()
                        ->route('planes.index')
                        ->with('success', 'Sucesso ao editar o avião');
        else
            return redirect()
                        ->back()
                        ->with('error', 'Não foi possivel editar o avião')
                        ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plane = $this->plane->find($id);

        if(!$plane)
            return redirect()->back();

        if($plane->delete())
            return redirect()
                    ->route('planes.index')
                    ->with('success', 'O avião foi excluído com sucesso!');
        else
            return redirect()
                    ->route('planes.show')
                    ->with('error', 'Ocorreu um erro ao excluir o avião!');
    }

    public function search(Request $request)
    {
        $dataForm = $request->except(['_token']);
        $keyShearch = $request->key_search;
        $title = "Resultado de aviões para: {$keyShearch}";
        $planes = $this->plane->search($keyShearch, $this->totalPage);

        return view('panel.planes.index', compact('title', 'planes', 'dataForm'));

    }
}
