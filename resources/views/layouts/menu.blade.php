<li class="nav-item">
    <a href="{{ route('clientes.index') }}"
       class="nav-link {{ Request::is('clientes*') ? 'active' : '' }}">
        <p>Clientes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('servicios.index') }}"
       class="nav-link {{ Request::is('servicios*') ? 'active' : '' }}">
        <p>Servicios</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('equipos.index') }}"
       class="nav-link {{ Request::is('equipos*') ? 'active' : '' }}">
        <p>Equipos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('marcas.index') }}"
       class="nav-link {{ Request::is('marcas*') ? 'active' : '' }}">
        <p>Marcas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tipoEquipos.index') }}"
       class="nav-link {{ Request::is('tipoEquipos*') ? 'active' : '' }}">
        <p>Tipo Equipos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tecnicos.index') }}"
       class="nav-link {{ Request::is('tecnicos*') ? 'active' : '' }}">
        <p>Tecnicos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tipoServicios.index') }}"
       class="nav-link {{ Request::is('tipoServicios*') ? 'active' : '' }}">
        <p>Tipo Servicios</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('estados.index') }}"
       class="nav-link {{ Request::is('estados*') ? 'active' : '' }}">
        <p>Estados</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('informeServicios.index') }}"
       class="nav-link {{ Request::is('informeServicios*') ? 'active' : '' }}">
        <p>Informe Servicios</p>
    </a>
</li>


