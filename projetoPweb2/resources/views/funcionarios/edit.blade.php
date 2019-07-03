@extends('./layouts/app')
@section('content')
<div class="container">
    <h1>Editando Funcionario: {{$funcionario->name}}</h1>
    @if ($errors->any())
    <ul class="alert alert-warning">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif

    {!! Form::open(['url'=>"funcionarios/$funcionario->id/update", 'method'=>'put'])!!}

    <!-- Nome Form Input -->

    <div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', $funcionario->Nome, ['class'=>'form-control']) !!}
    </div>

    <!-- Descricao Form Input -->

    <div class="form-group">
            {!! Form::label('cargo', 'Cargo:') !!}
            {!! Form::text('cargo', $funcionario->Cargo, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
            {!! Form::label('cpf', 'Cpf:') !!}
            {!! Form::text('cpf', $funcionario->CPF, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::submit('Salvar Dados', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

 </div>
@endsection