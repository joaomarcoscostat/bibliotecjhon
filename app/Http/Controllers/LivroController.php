<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;

class LivroController extends Controller
{
    private $livro;

    public function construct(Livro $livro)
   {
        $this->Livro = $livro;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Estante de Livros';   
        $livros = Livro::all();
        return view('livro', compact('livros','title'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Cadastrar Livro';
        return view('create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $request->validate([
            'nome'=>'required',
            'autor'=>'required',
            'descricao'=>'required',
            'capa'=>'required',
            
            
        ]);

        $valid=$reuqest->validate();
        if($valid->fails()){
            return 'oi';
        }

        
        

       

        // $livro = new Livro([
        //     'nome' => $request->get('nome'),
        //     'autor' => $request->get('autor'),
        //     'descricao' => $request->get('descricao'), 
        //     'capa'=>$request->input('capa'),


        // ]);

       
            $dataForm=$request->all();
            // dd($dataForm);
            $dataForm['capa']='imagens/capas/'.$request['capa'];
            
          

            Livro::create($dataForm);

             return redirect('/livros')->with('success', 'Livro Salvo!');
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
