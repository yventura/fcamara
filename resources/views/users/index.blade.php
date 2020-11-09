@extends('layouts.app', ['activePage' => 'edit', 'titlePage' => __('  ')])

@section('content')
<br>
<br>
    <div class="col-lg-12 col-md-20">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Usuarios Cadastrados</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead class="text-warning">
                        <th>Player</th>
                        <th>Jogo</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        <div>
                            <tr>
                                <td>João</td>
                                <td>FIFA</td>
                                <td>Jogando</td>
                            </tr>
                            <tr>
                                <td>Yuri</td>
                                <td>FIFA</td>
                                <td>Aguardando</td>
                            </tr>
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
