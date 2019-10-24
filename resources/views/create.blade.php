@extends('Templates.templateGeral')

    @section('content')

        
            <h2>Inserir livro na estante:</h2>

            <form class="form" method="post" action="{{route('livros.store')}}">

                @csrf
                <input    type="text" name="nome" placeholder="Titulo"   class="form-control">
                <input    type="text" name="autor" placeholder="Autor"    class="form-control">
                <textarea type="text" name="descricao" placeholder="Descrição"class="form-control"></textarea>

                
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Selecionar Capa</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" > 
                    </div>
                

                <button style="width:540px" type="submit" class="btn btn-secondary btn-lg btn-block">Adcionar Livro</button>

            </form>

        

    @endsection