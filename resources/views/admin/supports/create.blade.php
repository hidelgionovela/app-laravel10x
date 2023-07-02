<h1>Nova Duvida para suporte</h1>


@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach

@endif



<form action="{{route('supports.store')}}" method="POST">
         {{-- <input type="hidden" value="{{csrf_token()}}" name="_token"> --}}
         {{-- @csrf  --}}
         {{-- Duas formas acima de incorporar o token nos formularios para verificacao de seguranca --}}
         @csrf
         <input type="text" name="subject" placeholder="Assunto" value="{{ old('subject') }}">
         <input name="body" id="" cols="30" rows="2" placeholder="Descricao" value="{{ old('body') }}">
         <input type="submit"  value="Enviar">
</form>

<a href="{{ route('supports.index') }}">Lista Supports</a>
