@extends('layouts.app', ['activePage' => 'fila01Index', 'titlePage' => __('')])

@section('content')

    <div class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('fila01.store') }}" class="form-horizontal">
                <div class="row">
                    <div class="col-md-9">
                    @csrf
                            <div class="card ">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">{{ __('Entrando na Fila') }}</h4>
                                </div>

                                <div class="row">
                                    <label style="color: black" class="col-sm-4 col-form-label m-3">{{ __('Nickname') }}</label>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="player" id="input-player" placeholder="Nickname..." required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label style="color: black" class="col-sm-4 col-form-label m-3">{{ __('Selecione seu Jogo') }}</label>
                                    <div class="col-sm-4">
                                        <select style="display: inline" class="form-control" name="game" id="input-game" required>
                                            <option value="">Selecione</option>
                                            <option value="ps4">Ps4</option>
                                            <option value="sinuca">Sinuca</option>
                                        </select>
                                    </div>
                                </div>


                            <div class="text-center mt-3 mb-4">
                                <button type="submit" class="btn btn-success ">{{ __('Gerar Ocorrencia') }}</button>
                            </div>
                            <!-- Fim Dados -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

