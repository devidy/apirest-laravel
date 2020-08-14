<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Funcionario as FuncionarioResource;
use App\Http\Resources\Funcionarios as FuncionarioCollection;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $funcionarios = Funcionario::paginate(3);
        return (new FuncionarioCollection($funcionarios))
                    ->response()
                    ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FuncionarioRequest $request)
    {
        return Funcionario::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionario $funcionario)
    {
        return new FuncionarioResource($funcionario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $funcionario->update($request->all());

        return [];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();

        return [];
    }
}
