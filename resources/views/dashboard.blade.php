@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __(' ')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
{{--        <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--          <div class="card card-stats">--}}
{{--            <div class="card-header card-header-warning card-header-icon">--}}
{{--              <div class="card-icon">--}}
{{--                <i class="material-icons">computer</i>--}}
{{--              </div>--}}
{{--              <p class="card-category">Entrada no Laboratorio</p><br>--}}
{{--              <h4 class="card-title">Analisados: 08/ { 20 }</h4>--}}
{{--            </div>--}}
{{--            <div class="card-footer">--}}
{{--              <div class="stats">--}}
{{--              <i class="material-icons">update</i> Ultimos 20 Minutos--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
          <h1>Em Produção</h1>
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
