@extends('usuario.barraUsuario')

@section('conteudo')

    &nbsp;
    <div class='row'>
        <div class='col-sm-12'>
            <h2>Ver Locatário</h2>
        </div>
    </div>

    <div class="container">
        <hr style="background-color:gainsboro">
        <p><b>Nome: </b>{{$locatario->nome}}</p>
        <p><b>Email: </b>{{$locatario->email}}</p>
        <p><b>Telefone: </b>{{$locatario->telefone}}</p>
        <p><b>CPF: </b>{{$locatario->cpf}}</p>
        <p><b>RG: </b>{{$locatario->rg}}</p>
        <hr style="background-color:gainsboro">
    </div>
@endsection