@extends('layouts.principal')

@section('titulo', 'Cliente Detalhe')

@section('conteudo')
  <h3> Informações do Cliente</h3>

  <p> ID:{{ $cliente['id']}}</p>
  <p>Nome: {{ $cliente['nome']}}</p>
  <br>

  <a href="{{route('clientes.index')}}"> Voltar </a>

@endsection