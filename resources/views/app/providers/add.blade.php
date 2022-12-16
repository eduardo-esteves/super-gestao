@extends('app.templates.basic')

@section('title', 'Fornecedores')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor - Adicionar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.providers.add') }}">Novo</a></li>
                <li><a href="{{ route('app.providers') }}">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                {{ $msg_success }}
                <form action="{{ route('app.providers.add') }}" method="post">
                    @csrf
                    <input
                            type="text"
                            name="name"
                            class="borda-preta"
                            placeholder="Nome"
                            value="{{ old('name') }}">
                    {{ $errors->has('name') ? $errors->first('name') : '' }}

                    <input
                            type="text"
                            name="email"
                            class="borda-preta"
                            placeholder="Email"
                            value="{{ old('email') }}">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}

                    <input
                            type="text"
                            name="uf"
                            class="borda-preta"
                            placeholder="UF"
                            value="{{ old('uf') }}">
                    {{ $errors->has('uf') ? $errors->first('uf') : '' }}

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection