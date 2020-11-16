@extends('layouts.app', ['activePage' => 'fila01Add', 'titlePage' => __(' ')])



@section('content')

<div class="content">
    <form method="post" action="{{ route('fila01.store') }}" autocomplete="off" class="form-horizontal">
        @csrf
    <!-- Fila01  -->
        <div class="row">
            <div class="col-md-7">
                <div class="card ">
                    <div class="card-body ">
                        <div class="row">
                            <div class="table-responsive">
                                <form name="formCadEquip" id="formCadEquip" method="post" action="" >
                                    <div class="form-group">
                                        <h3>Quantidade de Jogadores</h3>

                                        <!-- Botão modal - Solo -->
                                        <button type="button" class="btn btn-primary col-sm-2" data-toggle="modal"  data-target="#modalSolo">
                                            Solo
                                        </button>


                                        <!-- Modal - Solo -->
                                        <div class="modal fade" id="modalSolo" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content col-sm-9">
                                                    <div class="modal-header col-sm-12">
                                                        <h3 style="display: inline-block">PS4 - Escritorio</h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group text-center">
                                                            <p>Que jogo gostaria de jogar?</p>
                                                            <div>
                                                                <input type="checkbox" id="checkop1" value="FIFA " required/> FIFA
                                                                <input  type="checkbox" id="checkop2" value="MORTAL COMBAT" /> MORTAL COMBAT
                                                            </div>
                                                            <input class="form-control text-center " name="teste" id="input-teste" placeholder="Outros Jogos" required/>

                                                            <b>Aceita receber alarmes quando<br>estiver chegando sua vez?</b><br>
                                                            <input type="checkbox" /> Receber Alarmes
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer col-sm-12">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                        <button type="button" class="btn btn-primary">Lets GO</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>

                                        <!-- Botão modal - Duo -->
                                        <button type="button" class="btn btn-primary col-sm-2" data-toggle="modal"  data-target="#modalDuo">
                                            Duo
                                        </button>


                                        <!-- Modal - Duo -->
                                        <div class="modal fade" id="modalDuo" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content col-sm-9">
                                                    <div class="modal-header col-sm-12">
                                                        <h3 style="display: inline-block">PS4 - Escritorio</h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group text-center">
                                                            <p>Que jogo gostaria de jogar?</p>
                                                            <input type="checkbox" required/> FIFA
                                                            <input type="checkbox" required/> MORTAL COMBAT

                                                            <input class="form-control text-center " name="teste" id="input-teste" placeholder="Outros Jogos" required/>

                                                            <b>Aceita receber alarmes quando<br>estiver chegando sua vez?</b><br>
                                                            <input type="checkbox" required/> Receber Alarmes
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer col-sm-12">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                        <button type="button" class="btn btn-primary">Lets GO</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>

                                        <!-- Botão modal - Squad -->
                                        <button type="button" class="btn btn-primary col-sm-2" data-toggle="modal"  data-target="#modalSquad">
                                            Sinuca
                                        </button>


                                        <!-- Modal - Squad -->
                                        <div class="modal fade" id="modalSquad" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content col-sm-9">
                                                    <div class="modal-header col-sm-12">
                                                        <h3 style="display: inline-block">Sinuca</h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group text-center">
{{--                                                            <p>Que jogo gostaria de jogar?</p>--}}
{{--                                                            <input type="checkbox" required/> FIFA--}}
{{--                                                            <input type="checkbox" required/> MORTAL COMBAT--}}

{{--                                                            <input class="form-control text-center " name="jogos" id="input-jogos" placeholder="Outros Jogos" required/>--}}

{{--                                                            <input class="form-control text-center " name="player2" id="input-player2" placeholder="Player 2" required/>--}}
{{--                                                            <input class="form-control text-center " name="player3" id="input-player3" placeholder="Player 3" required/>--}}
{{--                                                            <input class="form-control text-center " name="player4" id="input-player4" placeholder="Player 4" required/>--}}
                                                            <b>Aceita receber alarmes quando<br>estiver chegando sua vez?</b><br>
                                                            <input type="checkbox" required/> Receber Alarmes
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer col-sm-12">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                        <button type="button" class="btn btn-primary">Lets GO</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <button id="game" value="ps4_escritorio">Entrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
<!--
<h1 class="text-center">Cadastrar</h1> <hr>

<div class="col-8 m-auto">
<form name="formCad" id="formCad" method="post" action="{{ route('fila01.store') }}">
@csrf
<input class="form-control" type="text" name="tipo_equipamento" id="tipo_equipamento" placeholder="Tipo de fila01:"/>
<input class="form-control" type="text" name="modelo" id="modelo" placeholder="Modelo:" />
<input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" />
<input class="form-control" type="text" name="observacao" id="observacao" placeholder="Observação:" />
<input class="btn btn-primary" type="submit" value="Cadastra" />


</form>
</div>
-->



