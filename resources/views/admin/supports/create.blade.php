<h1>Nova Duvida para suporte</h1>

<form action="{{route('supports.store')}}" method="POST">
         {{-- <input type="hidden" value="{{csrf_token()}}" name="_token"> --}}
         {{-- @csrf  --}}
         {{-- Duas formas acima de incorporar o token nos formularios para verificacao de seguranca --}}
         @csrf
         <input type="text" name="subject" placeholder="Assunto">
         <input name="body" id="" cols="30" rows="2" placeholder="Descricao">
         <input type="submit"  value="Enviar">
</form>

<a href="{{ route('supports.index') }}">Lista Supports</a>
