<div class="topo">
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}">
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.home') }}">Home</a></li>
            <li><a href="{{ route('app.customers') }}">Clientes</a></li>
            <li><a href="{{ route('products.index') }}">Produtos</a></li>
            <li><a href="{{ route('app.providers') }}">Fornecedores</a></li>
            <li><a href="{{ route('app.signOut') }}">Sair</a></li>
        </ul>
    </div>
</div>