<h1>Listagem dos suportes</h1>
<a href="{{route('supports.create')}}">adcionar suporte</a>

<table style="width: 90%; border: solid black 1px;">
         <thead>
                  <th>Assunto</th>
                  <th>status</th>
                  <th>descricao</th>
                  <th></th>
         </thead>
         <tbody>
                  @foreach ($supports as $support)
                  <tr>
                           <td>{{$support->subject}}</td>
                           <td>{{$support->status}}</td>
                           <td>{{$support->body}}</td>
                           <td> > </td>
                  </tr>
                           
                  @endforeach
         </tbody>
</table>