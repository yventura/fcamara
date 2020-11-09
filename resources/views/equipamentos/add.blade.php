@extends('layouts.app', ['activePage' => 'equipamentosAdd', 'titlePage' => __(' ')])



@section('content')

  <div class="content">
    <div class="container-fluid">
      <form method="post" action="{{ route('equipamentos.store') }}" autocomplete="off" class="form-horizontal">
      @csrf 
      <!-- Equipamentos -->
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Entrando na fila') }}</h4>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-sm-11">
                  <div class="table-responsive">
                    <form name="formCadEquip" id="formCadEquip" method="post" action="" >
                      <div class="col-sm-12">
                        <div class="form-group">
                          <select class="btn btn-success" name="select_player" id="select_player">
                            <option>Quantidade de players</option>
                            <option>Solo</option>
                            <option>Dupla</option>
                          </select>
                        </div>
                      </div>
                      @php
                        @switch('select_player')
                          case 1:    
                            <div class="col-sm-12">
                              <div class="form-group">
                                <input class="form-control" name="player1" id="player1" type="text" placeholder="{{ __('Player 1') }}"/>
                              </div>
                            </div>
                          break;
                          case 2:
                            <div class="col-sm-12">
                              <div class="form-group">
                                <input class="form-control" name="player2" id="player2" type="text" placeholder="{{ __('Player 2') }}"/>
                              </div>
                            </div>
                          break;
                      @endphp
                      <div class="col-sm-12">
                        <div class="form-group">
                          <select class="btn btn-success" name="select_game" id="select_game">
                            <option>Lista de jogos</option>
                            <option>FIFA</option>
                            <option>SINUCA</option>
                          </select>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
<!-- 
<h1 class="text-center">Cadastrar</h1> <hr>

<div class="col-8 m-auto">
<form name="formCad" id="formCad" method="post" action="{{ route('equipamentos.store') }}">
@csrf
<input class="form-control" type="text" name="tipo_equipamento" id="tipo_equipamento" placeholder="Tipo de Equipamento:"/>
<input class="form-control" type="text" name="modelo" id="modelo" placeholder="Modelo:" />
<input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" />
<input class="form-control" type="text" name="observacao" id="observacao" placeholder="Observação:" />
<input class="btn btn-primary" type="submit" value="Cadastra" />


</form>
</div>
-->



 