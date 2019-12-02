@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Quarto </h3>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Quarto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('quartos.store') }}" method="post" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                    @include('admin.errors._check_form')
                    @include('flash::message')

                    <div class="form-group">
                        <label for="nome">Selecione o Hotel referente ao quarto</label>
                        <select id="hotel_id" name="hotel_id" onChange="atualizarValorQuarto()">
                            @foreach($hoteis as $hotel)
                                    <option name="valor" id="eoq" value="{{$hotel->id}}">{{$hotel->nome}}-{{$hotel->cidade}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nome">Home Quarto</label>
                        <input type="input" name="nome" id="nome"  class="form-control" onChange="eoq()" placeholder="Nome do Quarto">
                    </div>

                    <div class="form-group">
                        <label for="nome">Cidade</label>
                        <input type="input" id="cidade" name="cidade" class="form-control" placeholder="Cidade" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nome">Valor Quarto</label>
                        <input type="number" id="precoDiaria" name="precoDiaria" class="form-control" value="0" placeholder="Valor do Quarto">
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição do Quarto</label>
                        <input type="input" name="descricao" id="descricao"  class="form-control" placeholder="Descrição do Quarto">
                    </div>

                    <div class="form-group">
                        <label for="imagem">Imagem</label>
                        <input type="file" name="image" id="image"  class="form-control">
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
        
        <script>
            function atualizarValorQuarto() {
                var e = document.getElementById("hotel_id");
                var value = e.options[e.selectedIndex].text;
                var split = value.split("-");
                document.getElementById("cidade").value = split[1];

                console.log(split);

            }

        </script>
    </section>
@stop
