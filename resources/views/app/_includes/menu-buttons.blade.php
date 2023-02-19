<div class="menu">
    <ul>
        @if(isset($add))
            <li><a class="btn primary" href="{{ route($add) }}">Novo</a></li>
        @endif
        @if(isset($back))
            <li><a class="btn secondary" href="{{ route($back) }}">Voltar</a></li>
        @endif
        @if(isset($search))
            <li><a class="btn success" href="{{ route($search) }}">Consulta</a></li>
        @else
            <li><a class="btn success" href="#">Consulta</a></li>
        @endif
    </ul>
</div>
