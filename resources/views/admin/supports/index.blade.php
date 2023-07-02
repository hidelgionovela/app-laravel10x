<h1>Listagem das duvidas para Suporte</h1>
<a href="{{route('supports.create')}}">adcionar suporte</a>

<table style="width: 90%; border: solid black 1px;">
         <thead>
                  <th>Assunto</th>
                  <th>status</th>
                  <th>descricao</th>
                  <th>view</th>
                  <th>edit</th>
         </thead>
         <tbody>
                  @foreach ($supports as $support)
                  <tr>
                           <td>{{$support->subject}}</td>
                           <td>{{$support->status}}</td>
                           <td>{{$support->body}}</td>
                           <td> <a href="{{ route('supports.show', $support->id) }}">Ver</a> </td>
                           <td> <a href="{{ route('supports.edit', $support->id) }}">Editar</a> </td>
                  </tr>

                  @endforeach
         </tbody>
</table>

<style>
    td{
        text-align: center;
        border: solid black 1px;

    }
</style>
