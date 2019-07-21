@extends('layout.app', ["current" => "home"])

@section('body')
    <div class="jumbotron ng-light border-success">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-success">
                    <div class="card-body">
                        <h5 class="card-title">Estacionamento</h5>
                        <p class="card-text">
                            Sistema de gerenciamento de veículos.
                        </p>
                        <a href="/veiculo" class="btn btn-success">Cadastrar veículos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

