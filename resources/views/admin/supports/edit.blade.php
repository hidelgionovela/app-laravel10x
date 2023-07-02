{{-- @dd($support->id); --}}
<h1>#{{ $support->id }} Actualizar duvida</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach

@endif

<form action="{{route('supports.update', $support->id)}}" method="POST">

         {{-- <input type="hidden" value="{{csrf_token()}}" name="_token"> --}}
         {{-- @csrf  --}}
         {{-- Duas formas acima de incorporar o token nos formularios para verificacao de seguranca --}}
         @csrf
         @method('PUT')
         <input type="text" name="subject" placeholder="Assunto" value="{{ $support->subject }}">
         <input name="body" id="" cols="30" rows="2" placeholder="Descricao" value="{{ $support->body }}">
         <input type="submit"  value="Enviar">
</form>

<a href="{{ route('supports.index') }}">Lista Supports</a>
