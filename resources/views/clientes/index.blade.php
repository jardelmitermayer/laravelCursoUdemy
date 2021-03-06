@extends('layouts.principal')

@section('titulo', 'Clientes')
    
@section('conteudo')

  <h3>{{$titulo}}</h3>
  <a href="{{ route('clientes.create')}}">NOVO CLIENTE</a>

  @if(count($clientes)>0)

  <ul>
    @foreach($clientes as $cliente) 
      <li>
        {{ $cliente['id']}} | {{ $cliente['nome']}} 
        <a href="{{ route('clientes.edit', $cliente['id'])}}"> Editar</a>
        <a href="{{ route('clientes.show', $cliente['id'])}}"> Info</a>
        <form action="{{ route('clientes.destroy', $cliente['id']) }}" method="POST">
          @csrf
          @method('DELETE')
          <input type="submit" value="Apagar">

        </form>
      </li>
    @endforeach
  </ul>
  <hr>
  @for ($i=0;$i<10;$i++)
      {{ $i }},
  @endfor

  <br>
  @for ($i=0;$i<count($clientes);$i++)
      {{ $clientes[$i]['nome'] }},
  @endfor
  <br>
  
  @foreach ($clientes as $cliente)
    <p>
        {{$cliente['nome']}} |
        @if($loop->first)
          (primeiro) |
        @endif
        @if($loop->last)
        (ultimo) |
      @endif
      ({{ $loop->index}}) - {{ $loop->iteration}} / {{ $loop->count}}
    </p>
  @endforeach

  @else

    <h4> Não existem usuários cadastrados</h4>

  @endif

  @empty($clientes)
      
    <h4> Não existem usuários cadastrados</h4>

  @endempty    

@endsection