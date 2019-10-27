@extends('Templates.templateGeral')

    @section('content')
     <h2>Livros disponíveis:</h2>

     <span> <a style="margin-bottom:10px" href="{{route('livros.create')}}" class="btn btn-dark"><img style="margin-right:10px;" src="icons/png/plus-2x.png" alt="icon name"> Adicionar </a></span>
            
        <div>
            <table class="table table-striped table-dark" >
                <tr>
                    <th style="width:50px">Capa</th>
                    <th style="width:1000px">Descrição</th>
                    <th>Autor</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                    

                </tr>


                @forelse ( $livros as $livro )
                    <tr>
                        <td><img class="imagem" src="{{$livro->capa}}"> </td>
                        <td>{{$livro->descricao}}</td>
                        <td>{{$livro->autor}}</td>
                        <td>
                        <form style="width:5px">
                                <button type="submit" value="remover" class="buttonIconPencil"></button>
                        </form>
                        </td>
                        
                        <td>
                        <form style="width:5px" action="{{ route('livros.destroy', $livro->id) }}" class="form-horizontal" method="post" style="display: inline-block">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" value="remover" class="buttonIconTrash"></button>
                        </form>
                        <td>

                    </tr> 
                    
                @empty

                    <p>Nenhuma Categoria Cadastrada</p>

                    
                @endforelse
            </table>

        </div>
    
        <footer>

            <label >“Livros dão alma ao universo, asas para a mente, voo para a imaginação, e vida a tudo”. – Platão</label>

         </footer>
@endsection




           
   

  


 