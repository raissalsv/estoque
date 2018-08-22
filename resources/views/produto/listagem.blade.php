@extends('layout.principal')

@section('conteudo')

@if(empty($produtos))
<div class="alert alert-danger">Você não tem nenhum produto cadastrado.</div>
@else
<h1>Listagem de Produtos</h1>
<table class="table table-striped table-bordered table-hover">
  @foreach ($produtos as $p)
    <tr class="{{$p->quantidade == 1 ? 'danger' : '' }}">
      <td>{{$p->nome}}</td>
      <td>{{$p->valor}}</td>
      <td>{{$p->quantidade}}</td>
      <td>{{$p->descricao}}</td>
      <td><a href="/produtos/mostra/{{$p->id}}">Ver</a></td>
    </tr>
  @endforeach
</table>
@endif
@stop
