<h3>Novo cliente</h3>

<form action="{{ route('clientes.store') }}" method="POST">
  @csrf
  <input type="text" name="nome">
  <input type="submit" value="enviar">

</form>