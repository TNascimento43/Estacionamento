@extends('layout.app', ["current" => "vagas"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Veículos atuais no estacionamento</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>placa</th>
                        <th>Proprietário</th>
                        <th>Contato</th>
                        <th>Horário</th>
                        <th>vaga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($veiculo as $veic)
                        <tr>
                            <td>{{$veic-> vaga}}</td>
                            <td>{{$veic->telefone}}</td>
                            <td>{{$veic->proprietario}}</td>
                            <td>
                                <a href="/veiculo/editar/{{$veic->vaga}}" class="btn btn-sn btn-success"></a>
                                <a href="/veiculo/apagar/{{$veic->vaga}}" class="btn btn-sn btn-danger"></a>

                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection
