@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __(' ')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">computer</i>
              </div>
              <p class="card-category">Entrada no Laboratorio</p><br>
              <h4 class="card-title">Analisados: 08/ { 20 }</h4>
            </div>
            <div class="card-footer">
              <div class="stats">
              <i class="material-icons">update</i> Ultimos 20 Minutos
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
              <i class="material-icons">computer</i>
              </div>
              <p class="card-category">Recuperados</p>
              <br>
              <br>
              <h4 class="card-title">Recuperados: 05/ { 20 }</h4>
            </div>
            <div class="card-footer">
              <div class="stats">
              <i class="material-icons">update</i> Ultimos 20 Minutos
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Laudos PT (Diário)</p>
              <br>
              <h4 class="card-title">Problemas: 03/ { 20 }</h4>
            </div>
            <div class="card-footer">
              <div class="stats">
              <i class="material-icons">update</i> Ultimos 20 Minutos
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
              <i class="material-icons">storage</i>
              </div>
              <p class="card-category">Capacidade do Servidor</p>
              <br>
              <h4 class="card-title">Armazenamento: 245
              <small>GB</small>
              <br>
              </h4>
            </div>
            <div class="card-footer">
              <div class="stats">
              <i class="material-icons">update</i> Ultimos 20 Minutos
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success">
              <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
            <h4 class="card-title">Computadores Recuperados</h4>
              <input type="radio" name="semana" value="semana"/> Semana<br />
              <input type="radio" name="mes" value="mes"/> Mes<br />
              <input type="radio" name="ano" value="ano"/> Ano
            </div>
            <div class="card-footer">
              <div class="stats">
              <i class="material-icons">access_time</i> ultima atualização a 2 horas
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-warning">
              <div class="ct-chart" id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
            <h4 class="card-title">Emails Enviados</h4>
              <input type="radio" name="semana" value="semana"/> Semana<br />
              <input type="radio" name="mes" value="mes"/> Mes<br />
              <input type="radio" name="ano" value="ano"/> Ano
            </div>
            <div class="card-footer">
              <div class="stats">
              <i class="material-icons">access_time</i> ultima atualização a 2 horas
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-danger">
              <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Laudos Perda Total</h4>
              <input type="radio" name="semana" value="semana"/> Semana<br />
              <input type="radio" name="mes" value="mes"/> Mes<br />
              <input type="radio" name="ano" value="ano"/> Ano
            </div>
            <div class="card-footer">
              <div class="stats">
              <i class="material-icons">access_time</i> ultima atualização a 2 horas
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
