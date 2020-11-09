<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('FIFO') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
  <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Pagina Inicial') }}</p>
        </a>
  </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
        <i class="material-icons">persons</i>
          <p>{{ __('Perfil') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'profile' || $activePage == 'user-management') ? 'show' : '' }}" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> EP </span>
                <span class="sidebar-normal">{{ __('Editar Perfil') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Controle de Usuários') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'equipamentosIndex' || $activePage == 'equipamentosAdd') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#hardwares" aria-expanded="true">
        <i class="material-icons">devices</i>
          <p>{{ __('Hardwares') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'equipamentosIndex' || $activePage == 'equipamentosAdd') ? 'show' : '' }}" id="hardwares">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'equipamentosAdd' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('equipamentos.create') }}">
                <i class="material-icons">add_to_queue</i>
                <span class="sidebar-normal">{{ __('Adicionar Equipamento') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'equipamentosIndex' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('equipamentos.index') }}">
                <i class="material-icons">list_alt</i>
                <span class="sidebar-normal"> {{ __('Listar Equipamentos') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
