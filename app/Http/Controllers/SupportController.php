<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Support $supports)
    {
        $supports = $supports->all();

        // dd($supports);

        return view('admin/supports/index', compact('supports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/supports/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSupport $request, Support $support)
    {
        //para pegar todos dados do request
        // $data = $request->all();
        // para pegar apenas dados que ja foram validados
        $data = $request->validated();
        $data['status'] = 'a';

        $support =  $support->create($data);
        // dd($support);
        return redirect()->route('supports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(String|int $id)
    {
        if (!$support = Support::find($id) ) {
            // se for passado um id que nao existe na bd ele volta para a rota anterior
            return back();
        }
        // $support = Support::find($id);
        // dd($support);
        return view('admin/supports/show', compact('support'));

        // para alem do metodo find all nos temos outros metodos que podem filtrar os registros
        // Assim: $support->where('id', '!=', $id)->first()  Ou
        // Assim: $support->where('id', $id)->first()  Aqui por default temos igual de forma implicita

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Support $support, String|int $id)
    {
        if (!$support=$support->where('id', $id)->first() ) {
            // se for passado um id que nao existe na bd ele volta para a rota anterior
            return back();
        }

        return view('admin/supports/edit', compact('support'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateSupport $request,Support $support, String|int $id)
    {
        if (!$support = $support->find($id) ) {
            // se for passado um id que nao existe na bd ele volta para a rota anterior
            return back();
        }

        // Quando nao ha validacoes
        // $support->update($request->only([
        //     'subject', 'body'
        // ]));


        // Quando ha validacoes
        $support->update($request->validated());

        // outra forma de actualizar mais muito verbosa seria:
            // $support->subject = $request->subject;
            // $support->body = $request->body;
            // $support->save();
            // A forma acima funciona tanto para cadastro como para edicao.


        return redirect()->route('supports.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String|int $id, Support $support)
    {
        if (!$support = $support->find($id) ) {
            // se for passado um id que nao existe na bd ele volta para a rota anterior
            return back();
        }
        $support->delete();
        return redirect()->route('supports.index');

    }
}
