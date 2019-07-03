@extends('./layouts/app')
@section('content')
    <div class="container">
    @if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

        <h1>Novo Funcionario</h1>

        {!! Form::open(['url'=>'funcionarios/store']) !!}


        <!-- Nome Form Input -->
        
         <div class="form-group">
         {!! Form::label('nome', 'Nome:') !!}
         {!! Form::text('nome', null, ['class'=>'form-control']) !!}
         </div>
        
         <div class="form-group">
         {!! Form::label('cargo', 'Cargo:') !!}
         {!! Form::text('cargo', null, ['class'=>'form-control']) !!}
        </div>
    
        <div class="form-group">
         {!! Form::label('cpf', 'Cpf:') !!}
         {!! Form::text('cpf', null, ['class'=>'form-control']) !!}
        </div>
    
        
         <div class="form-group">
         {!! Form::submit('Novo Funcionario', ['class'=>'btn btn-primary']) !!}
         </div>


        {!! Form::close() !!}
    <div>
@endsection