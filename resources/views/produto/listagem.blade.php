@extends('layout.principal')

@section('conteudo')

    @if(empty($produtos))
        <div class="alert alert-danger">Você não tem nenhum produto cadastrado.</div>
    @else
        <h1>Listagem de Produtos</h1>
        <table class="table table-striped table-bordered table-hover">
            @foreach ($produtos as $p)
                <tr class="{{$p->quantidade == 1 ? 'bg-danger' : '' }}">
                    <td>{{$p->nome}}</td>
                    <td>{{$p->valor}}</td>
                    <td>{{$p->quantidade}}</td>
                    <td>{{$p->descricao}}</td>
                    <td><a href="{{action('ProdutoController@mostra', $p->id)}}"><i class="fab fa-searchengin"></i></a></td>
                    <td><a href="{{action('ProdutoController@remove', $p->id)}}"><i class="far fa-trash-alt"></i></a></td>
                </tr>
            @endforeach
        </table>
    @endif
    @if(old('nome'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado.
        </div>
    @endif
@stop
