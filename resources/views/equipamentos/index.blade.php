@extends('layouts.app', ['activePage' => 'equipamentoIndex', 'titlePage' => __('')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Fila - Sinuca</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Posição na fila
                  </th>
                  <th>
                    Nome
                  </th>
                  <th>
                    Abandonar fila
                  </th>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>João Pedro</td>
                  <td>
                    <button type="submit" class="btn btn-success">{{ __('Sair da Fila') }}</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Maria Silva</td>
                  <td>
                    <button type="submit" class="btn btn-success">{{ __('Sair da Fila') }}</button>
                  </td>
                </tr>
              <tr>  
                <td>3</td>
                <td>Mauricio Neves</td>
                  <td>
                    <button type="submit" class="btn btn-success">{{ __('Sair da Fila') }}</button>
                  </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection