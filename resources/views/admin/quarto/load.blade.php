<!-- /.box-header -->
<div class="box-body">
    @include('flash::message')
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="col-md-8">Nome</th>
            <th class="col-md-2">Nota</th>
            <th class="col-md-2">Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($quartos as $quarto)
            <tr>
                <td>{{ $quarto->nome }}</td>
                <td>{{ $quarto->nota }}</td>
                <td>
                    <a href="{{route('quartos.show', $quarto->id)}}" title="Editar Hotel" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                    <a data-id="{{$quarto->id}}" class="btn btn-danger glyphicon glyphicon-remove removeHotel" title="Excluir Hotel"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>