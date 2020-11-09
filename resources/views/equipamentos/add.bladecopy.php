@extends('layouts.app', ['activePage' => 'equiADD', 'titlePage' => __('Criar Laudo')])

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
                <h4 class="card-title">{{ __('Equipamentos') }}</h4>
                <p class="card-category">{{ __('Inserção de Equipamentos') }}</p>
              </div>
              <div class="card-body ">
                <div class="row">
                   
                </div>
                <div class="card-footer ml-auto mr-auto" >
                    <button type="button" data-toggle="modal" data-target="#adicionarEquipamento" class="btn btn-primary">{{ __('Adicionar Equipamento') }}</button>
                </div>


                <div class="row">
                    <div class="col-sm-11">
                        <div class="table-responsive">
                            <table class="table" id="equipamentosTable">
                                <thead class="text-primary">
                                    <th>Tipo de Equipamento</th>
                                    <th>Modelo</th>
                                    <th>Nome</th>
                                    <th>Observação</th>
                                </thead>
                                <tbody id="hardwares">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              </div>
              <div style="display: none;">
                <textarea name="equipamentos" id="input-equipamentos"></textarea>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" action="add.blade.php" method="post" onClick="adicionarInput()" class="btn btn-success" >{{ __('Confirmar') }}</button>
                

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Componentes Modal Adicionar Equipamento -->
  <div class="modal fade" id="adicionarEquipamento" tabindex="-1" role="dialog" aria-labelledby="adicionarEquipamentoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Equipamentos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
              <label class="col-sm-12 col-form-label">{{ __('Tipo de Equipamento') }} <small>Micro Computador, Monitor, Estabilisador ETC.</small></label>
              <div class="col-sm-12">
                <div class="form-group{{ $errors->has('tipo_equipamento') ? ' has-danger' : '' }}">
                <input class="form-control" name="tipo_equipamento" id="tipo_equipamento" type="text" placeholder="{{ __('Micro Computador') }}"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label class="col-sm-12 col-form-label">{{ __('Modelo') }} <small>Descrição do Modelo</small></label>
              <div class="col-sm-12">
                <div class="form-group{{ $errors->has('modelo') ? ' has-danger' : '' }}">
                <input class="form-control{{ $errors->has('modelo') ? ' is-invalid' : '' }}" name="modelo" id="input-modelo" type="text" placeholder="{{ __('A50') }}" required />
                @if ($errors->has('modelo'))
                  <span id="name-error" class="error text-danger" for="input-modelo">{{ $errors->first('modelo') }}</span>
                @endif
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label class="col-sm-12 col-form-label">{{ __('Nome') }} <small>Nome Tecnico</small></label>
              <div class="col-sm-12">
                <div class="form-group{{ $errors->has('nome') ? ' has-danger' : '' }}">
                <input class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" id="input-nome" type="text" placeholder="{{ __('Accept') }}" required />
                @if ($errors->has('nome'))
                  <span id="name-error" class="error text-danger" for="input-nome">{{ $errors->first('nome') }}</span>
                @endif
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label class="col-sm-12 col-form-label">{{ __('Observacao') }} <small>Observacao</small></label>
              <div class="col-sm-12">
                <div class="form-group{{ $errors->has('observacao') ? ' has-danger' : '' }}">
                <input class="form-control{{ $errors->has('observacao') ? ' is-invalid' : '' }}" name="observacao" id="input-observacao" type="text" placeholder="{{ __('Observação') }}" required />
                @if ($errors->has('observacao'))
                  <span id="name-error" class="error text-danger" for="input-observacao">{{ $errors->first('observacao') }}</span>
                @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" onClick="adicionarEquipamento()" class="btn btn-primary">Adicionar Equipamento</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Fim Componente Modal -->

  <script type="text/javascript">
    //Sobe variaveis "globais"
    var equipamentos = [];
    var excluir = [];
    var quantidade_linhas = 0;
    var linhas_excluidas = 0;

    //Cria funcões "globais" da pagina
    lcspmg = {
      showNotification: function(from, align) {
        //types ['', 'info', 'danger', 'success', 'warning', 'rose', 'primary'];

        $.notify({
          icon: "add_alert",
          message: "teste"

        }, {
          type: 'danger',
          timer: 4000,
          placement: {
            from: from,
            align: align
          }
        });
      },
    }
  </script>
  <script type="text/javascript">
    function adicionarEquipamento() {
      var errors = 0;
      //Puxa os dados
      tipo_equipamento = document.getElementById('tipo_equipamento').value;
      modelo = document.getElementById('input-modelo').value;
      nome = document.getElementById('input-nome').value;
      observacao = document.getElementById('input-observacao').value;

      if (tipo_equipamento.trim() == "" || modelo.trim() == "" || nome.trim() == "" || observacao.trim() == "") {
        errors++;
        alert('ets');
      }

      if (!errors) {
        equipamentos[quantidade_linhas] = [tipo_equipamento, modelo, nome, observacao];
        
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>'+ tipo_equipamento +'</td>';
        cols += '<td>'+ modelo +'</td>';
        cols += '<td>'+ nome +'</td>';
        cols += '<td>'+ observacao + '</td>';
        cols += '<td><a href="#" onClick="removerEquipamento(this, '+ quantidade_linhas +')" class="btn btn-sm btn-danger"><i class="material-icons">delete</i></a></td>';
        
        newRow.append(cols);
        $("#equipamentosTable").append(newRow);
        
        quantidade_linhas++;

        $('#adicionarEquipamento').modal('hide');
      }
    }

    function removerEquipamento(item, id) {
      var pergunta = false;

      pergunta = confirm('Tem certeza que deseja deletar esse equipamento?' + id);

      if (pergunta) {
        var tr = $(item).closest('tr');

        tr.fadeOut(400, function() {
          tr.remove();  
        });

        excluir[linhas_excluidas] = id;
        linhas_excluidas++;
      }
    }

    function adicionarInput() {
    $('#input-equipamento').val(JSON.stringify(equipamentos));
      
    }
  </script>
@endsection