<form action="{{ (empty($product_detail->id))
    ? route('product-details.store')
    : route('product-details.update', ['product_detail' => $product_detail->id]) }}" method="post">
    @csrf
    @if(empty($product_detail->id))
    @else
        @method('PUT')
    @endif

    <input
        type="text"
        name="length"
        class="borda-preta"
        placeholder="Comprimento"
        value="{{ $product_detail->length ?? old('length') }}">
    {{ $errors->has('length') ? $errors->first('length') : '' }}

    <input
        type="text"
        name="width"
        class="borda-preta"
        placeholder="Largura"
        value="{{ $product_detail->width ?? old('width') }}">
    {{ $errors->has('width') ? $errors->first('width') : '' }}

    <input
        type="text"
        name="height"
        class="borda-preta"
        placeholder="Altura"
        value="{{ $product_detail->height ?? old('height') }}">
    {{ $errors->has('height') ? $errors->first('height') : '' }}

    <input
        type="text"
        name="product_id"
        class="borda-preta"
        placeholder="Produto ID"
        value="{{ $product_detail->product_id ?? old('product_id') }}">
    {{ $errors->has('length') ? $errors->first('length') : '' }}

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

    <button type="submit" class="borda-preta">{{ (empty($product_detail->id)) ? 'Cadastrar' : 'Atualizar' }}</button>
</form>