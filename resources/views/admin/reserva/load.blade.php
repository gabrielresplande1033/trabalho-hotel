<!-- /.box-header -->
<div class="box-body">
    @include('flash::message')
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="col-md-2">Numero da Reserva</th>
            <th class="col-md-2">Email</th>
            <th class="col-md-2">Quantidade de Pessoas</th>
            <th class="col-md-2">Valor total  da Reserva</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($reservas as $reserva)
            <tr>
                <td>{{ $reserva->id }}</td>
                <td>{{ $reserva->email }}</td>
                <td>{{ $reserva->qtdPessoas }}</td>
                <td>{{ $reserva->valorTotal }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>