@extends('layout.app', ["current" => "veículo"])

@section('body')
    <div class="card border">
        <div class="vard-body">
            <form action="/veiculo/{{$veiculo->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="marca"> Marca</label>
                    <input type="text" class="form-control" name="marcaVeiculo" value="{{$veiculo->marcaVeiculo}}"
                           id="marcaVeiculo" placeholder="Marca do veículo">

                    <label for="modelo"> Modelo</label>
                    <input type="text" class="form-control" name="modeloVeiculo" value="{{$veiculo->modeloVeiculo}}"
                           id="modeloVeiculo" placeholder="Modelo do veículo">

                    <label for="placa"> Placa</label>
                    <input type="text" class="form-control" name="placa" value="{{$veiculo->palca}}"
                           id="placa" placeholder="Placa">

                    <label for="donoVeículo"> Proprietário</label>
                    <input type="text" class="form-control" name="proprietario" value="{{$veiculo->proprietario}}"
                           id="proprietario" placeholder="Proprietário do veículo">

                    <label for="telefone"> Telefone</label>
                    <input type="text" class="form-control" name="telefone" value="{{$veiculo->telefone}}"
                           id="telefone" placeholder="Telefone de contato">

                    <label for="horario">Hora de entrada</label>
                    <input type="text" class="form-control" name="hora" value="{{$veiculo->hora}}"
                           id="hora" placeholder="HH:MM">

                    <label for="codigoVaga">código da vaga</label>
                    <input type="number" class="form-control" name="vagaVeiculo"
                           id="vagaVeiculo" placeholder="Código da vaga">

                </div>
                <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
                <button class="btn btn-danger btn-sn">
                    <a href="/"/>Voltar</button>
            </form>
        </div>
    </div>
@endsection
