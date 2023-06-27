<h1>Novo suporte</h1>

<form action="{{route('supports.store')}}" method="POST">
         {{-- <input type="hidden" value="{{csrf_token()}}" name="_token"> --}}
         {{-- @csrf  --}}
         {{-- Duas formas acima de incorporar o token nos formularios para verificacao de seguranca --}}
         @csrf
         <input type="text" name="subject" placeholder="Assunto">
         <textarea name="body" id="" cols="30" rows="5" placeholder="Descricao"></textarea>
         <input type="submit" name="subject" value="Enviar">
</form>