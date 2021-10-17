@extends('layout.app', ["current" => "produtos"])

@section('body')
    <div class="card shadow rouded">
        <div class="card-header bg-light">
            <h5 class="card-title">Cadastro de Produtos</h5>
        </div>
        <div class="card-body">
        @if(count($prods) > 0)
            <table class="table table-ordered table-hover bg-light" id="dataTable">
                <tbhed>
                    <tr>
                        <th>Código</th>
                        <th>Descrição Produto</th>
                        <th>Estoque</th>
                        <th>Preço</th>
                        <th>Categoria</th>
                        <th>Ação</th>
                    </tr>
                </tbhed>
                <tbody>
                    @foreach($prods as $prod)
                    <tr>
                        <td>{{$prod->id}}</td>
                        <td>{{$prod->nome}}</td>
                        <td>{{$prod->estoque}}</td>
                        <td>{{$prod->preco}}</td>
                        <td>{{$prod->categoria_id}}</td>
                        <td>
                             <a href="/produtos/editar/{{$prod->id}}" class="btn btn-info btn-sm shadow rounded">Editar</a>
                             <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-danger btn-sm shadow rounded">Excluir</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        </div>
        <div class="card-footer bg-light">
            <a href="/produtos/novo" class="btn btn-success btn-sm ">Cadastrar</a>
        </div>
    </div>
@endsection