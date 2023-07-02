<h1>Detalhes da duvida {{ $support -> id }}</h1>



<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Status: {{ $support->status }}</li>
    <li>Descricao: {{ $support->body }}</li>
</ul>

<br>
<a href="{{ route('supports.index') }}">Voltar</a>
