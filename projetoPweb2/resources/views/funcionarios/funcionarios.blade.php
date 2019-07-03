@extends('./layouts/app')

 @section('content')
 <div class="container">
 <h1>Funcionarios</h1>
 <a href="{{ route('funcionarios.create') }}" class="btn btn-default">Novo Funcionario </a>

 <table class="table table-striped table-bordered table-hover">
 <thead>
 <tr>
 <th>ID</th>
 <th>Nome</th>
 <th>Cargo</th>
 <th>cpf</th>
 <th></th>
 </tr>
 </thead>
 <tbody>

 @foreach($funcionarios as $funcionario)

 <tr>
 <td>{{ $funcionario->id }}</td>
 <td>{{ $funcionario->Nome }}</td>
 <td>{{ $funcionario->Cargo }}</td>
 <td>{{ $funcionario->CPF }}</td>
 <td>
 <a href="{{ route('funcionarios.edit',['id'=>$funcionario->id]) }}" class="btn-sm btn-success">Editar</a>
 <a href="{{ route('funcionarios.destroy',['id'=>$funcionario->id]) }}" class="btn-sm btn-danger">Remover</a>
 </td>
 </tr>
 @endforeach

</tbody>
</table>
</div>
@endsection


