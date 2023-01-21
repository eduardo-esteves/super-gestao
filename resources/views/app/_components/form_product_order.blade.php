<form action="{{ route('app.products-orders.store', ['order' => $order->id]) }}" method="post">
    @csrf

    <select name="product_id">
        <option value="0000">-- Selecione um produto --</option>
        @isset($products)
            @foreach($products as $product)
                <option
                    value="{{ $product->id }}"
                    {{ old('product_id') == $product->id ? 'selected' : '' }}> {{ $product->name }}
                </option>
            @endforeach
        @endisset
    </select>
    {{ $errors->has('product_id') ? $errors->first('product_id') : '' }}

    <button type="submit" class="borda-preta">{{ (empty($order->id)) ? 'Cadastrar' : 'Atualizar' }}</button>
</form>
