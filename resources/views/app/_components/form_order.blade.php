<form action="{{ (empty($order->id))
    ? route('orders.store')
    : route('orders.update', ['order' => $order->id]) }}" method="post">
    @csrf
    @if(empty($order->id))
    @else
        @method('PUT')
    @endif

    <select name="customer_id">
        <option value="0000">-- Selecione o cliente --</option>
        @isset($customers)
            @foreach($customers as $customer)
                <option
                    value="{{ $customer->id }}"
                @if( !empty($customer && $order) )
                    {{ $customer->id === $order->customer_id ? 'selected' : '' }}
                @else
                    {{ old('customer_id') == $customer->id ? 'selected' : '' }}
                @endif >
                    {{ $customer->name }}
                </option>
            @endforeach
        @endisset
    </select>
    {{ $errors->has('customer_id') ? $errors->first('customer_id') : '' }}

    <button type="submit" class="borda-preta">{{ (empty($order->id)) ? 'Cadastrar' : 'Atualizar' }}</button>
</form>
