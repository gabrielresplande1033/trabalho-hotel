@extends('layouts.user_app')

@section('content')
    <link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
    <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel = "folha de estilo">
    <link href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel = "stylesheet">
    <!-- Single Listing -->

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="single_listing">

                    <!-- Hotel Info -->

                    <div class="hotel_info">

                        <!-- Title -->
                        <div style="padding-top: 160px"></div>
                            <div class="hotel_title_content">
                                <h1 style="font-size: 60px;text-align: center;position: center; color: black" class="hotel_title">Reserva no: {{$hotel->nome}} </h1>
                            </div>
                            <div class="hotel_title_button ml-lg-auto text-lg-right">
                                <div class="button"><a href="#">book<span></span><span></span><span></span></a></div>
                            </div>
                        </div>

                        <form action="{{ route('reserva.store') }}" method="post" role="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                               <label>Hotel escolhido: </label>
                                <input disabled value="{{$hotel->nome}}">
                            </div>
                            <div class="form-group">
                            <label>Quarto escolhido</label>
                            <input disabled value="{{$quarto->nome}}">
                            </div>
                            <input type="hidden" name="quarto_id" readonly value="{{$quarto->id}}">
                             <div class="form-group">
                                 <label>Usuario Reserva:</label>
                                 <input name="user_id" hidden readonly value="{{$user->id}}">
                                 <input disabled value="{{$user->name}}">
                             </div>

                            <div class="form-group">
                                <label>Email:</label>
                                <input name="email" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label>Telefone:</label>
                                <input name="telefone">
                            </div>
                            <div class="form-group">
                                <label>Quantidade de Pessoas:</label>
                                <select id="qtdPessoas" name="qtdPessoas" onchange="atualizaValorReserva()">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Valor da Reserva:</label>
                                <input name="valorTotal" id="valor" value="{{ $quarto->precoDiaria }}" readonly>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Confirmar Reserva</button>
                            </div>
                        </form>

                        </div>

                    </div>

                    </div>
                </div>

    <script>
        function atualizaValorReserva() {
            var e = document.getElementById("qtdPessoas");
            var value = e.options[e.selectedIndex].value;
            var mult = {{$quarto->precoDiaria}};
            var total = mult * value;
            document.getElementById("valor").value = total;

        }
    </script>
            </div>
        </div>
@endsection

