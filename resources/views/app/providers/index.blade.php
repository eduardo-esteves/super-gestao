@extends('app.templates.basic')

@section('title', 'Fornecedores')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor - Pesquisar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.providers.add') }}">Novo</a></li>
                <li><a href="{{ route('app.providers') }}">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action="{{ route('app.providers.list') }}" method="post">
                    @csrf
                    <input
                        type="text"
                        name="name"
                        class="borda-preta"
                        placeholder="Nome">
                    <input
                        type="text"
                        name="email"
                        class="borda-preta"
                        placeholder="Email">
                    <input
                        type="text"
                        name="uf"
                        class="borda-preta"
                        placeholder="UF">

                    <button type="submit" class="borda-preta">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>
@endsection