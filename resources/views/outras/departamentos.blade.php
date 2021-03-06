@extends('layouts.principal')

@section('titulo', 'Departamentos')

@section('conteudo')
  <h3> Departamentos</h3>
  <ul>
    <li>Computadores</li>
    <li>Comida</li>
    <li>Roupas</li>
  </ul>

<x-alerta titulo="Erro Fatal" tipo="info">
    <p>Erro inesperado</p>
    <p>Ocorreu um erro inesperado</p>
</x-alerta>

<x-alerta titulo="Erro Fatal" tipo="error">
    <p>Erro inesperado</p>
    <p>Ocorreu um erro inesperado</p>
</x-alerta> 

<x-alerta titulo="Erro Fatal" tipo="success">
    <p>Erro inesperado</p>
    <p>Ocorreu um erro inesperado</p>
</x-alerta> 
  
<x-alerta titulo="Erro Fatal" tipo="warning">
  <p>Erro inesperado</p>
  <p>Ocorreu um erro inesperado</p>
</x-alerta>

@endsection