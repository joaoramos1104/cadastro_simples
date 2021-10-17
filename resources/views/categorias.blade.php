@extends('layout.app', ["current" => "categorias"])

@section('body')
    <div class="card shadow rouded">
        <div class="card-header bg-light">
            <h5 class="card-title">Cadastro de Categorias</h5>
        </div>
        <div class="card-body">
        @if(count($cats) > 0)
            <table class="table table-ordered table-hover bg-light" id="dataTable">
                <tbhed>
                    <tr>
                        <th>Código</th>
                        <th>Nome da Categoria</th>
                        <th>Ação</th>
                    </tr>
                </tbhed>
                <tbody>
                    @foreach($cats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->nome}}</td>
                        <td>
                             <a href="/categorias/editar/{{$cat->id}}" class="btn btn-info btn-sm shadow rounded">Editar</a>
                             <a href="/categorias/apagar/{{$cat->id}}" class="btn btn-danger btn-sm shadow rounded">Excluir</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        </div>
        <div class="card-footer bg-light">
            <a href="/categorias/nova" class="btn btn-success btn-sm ">Cadastrar</a>
        </div>
    </div>
@endsection