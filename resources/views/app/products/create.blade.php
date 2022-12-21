@extends('app.templates.basic')

@section('title', 'Produtoes')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Produto - Adicionar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('products.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                {{ $msg ?? '' }}
                <form action="{{ route('products.store') }}" method="post">
                    @csrf
                    <input
                            type="text"
                            name="name"
                            class="borda-preta"
                            placeholder="Nome"
                            value="{{ $product->name ?? old('name') }}">
                    {{ $errors->has('name') ? $errors->first('name') : '' }}

                    <input
                            type="text"
                            name="description"
                            class="borda-preta"
                            placeholder="Descrição"
                            value="{{ $product->description ?? old('description') }}">
                    {{ $errors->has('description') ? $errors->first('description') : '' }}

                    <input
                            type="text"
                            name="pounds"
                            class="borda-preta"
                            placeholder="Peso"
                            value="{{ $product->pounds ?? old('pounds') }}">
                    {{ $errors->has('pounds') ? $errors->first('pounds') : '' }}

                    <select name="measured_unit_id">
                        <option value="0000">-- Selecione a unidade de medida --</option>
                        @isset($measured_units)
                            @foreach($measured_units as $measured_unit)
                                <option
                                    value="{{ $measured_unit->id }}"
                                    {{ old('measured_unit_id') == $measured_unit->id ? 'selected' : '' }}>
                                    {{ $measured_unit->description }}
                                </option>
                            @endforeach
                        @endisset
                    </select>
                    {{ $errors->has('measured_unit_id') ? $errors->first('measured_unit_id') : '' }}

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection