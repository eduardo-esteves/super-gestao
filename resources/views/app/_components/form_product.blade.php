<form action="{{ (empty($product->id))
    ? route('products.store')
    : route('products.update', ['product' => $product->id]) }}" method="post">
    @csrf
    @if(empty($product->id))
    @else
        @method('PUT')
    @endif
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
                    {{ $measured_unit->id > 0
                        ? 'selected'
                        : ( old('measured_unit_id') == $measured_unit->id ? 'selected' : '' ) }}>
                    {{ $measured_unit->description }}
                </option>
            @endforeach
        @endisset
    </select>
    {{ $errors->has('measured_unit_id') ? $errors->first('measured_unit_id') : '' }}

    <button type="submit" class="borda-preta">{{ (empty($product->id)) ? 'Cadastrar' : 'Atualizar' }}</button>
</form>