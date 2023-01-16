<form action="{{ (empty($customer->id))
    ? route('customers.store')
    : route('customers.update', ['customer' => $customer->id]) }}" method="post">
    @csrf
    @if(empty($customer->id))
    @else
        @method('PUT')
    @endif

    <input
        type="text"
        name="name"
        class="borda-preta"
        placeholder="Nome"
        value="{{ $customer->name ?? old('name') }}">
    {{ $errors->has('name') ? $errors->first('name') : '' }}

    <input
        type="text"
        name="age"
        class="borda-preta"
        placeholder="Idade"
        value="{{ $customer->age ?? old('age') }}">
    {{ $errors->has('age') ? $errors->first('age') : '' }}

    <input
        type="text"
        name="gender"
        class="borda-preta"
        placeholder="Sexo"
        value="{{ $customer->gender ?? old('gender') }}">
    {{ $errors->has('gender') ? $errors->first('gender') : '' }}

    <input
        type="text"
        name="occupation"
        class="borda-preta"
        placeholder="Profissão"
        value="{{ $customer->occupation ?? old('occupation') }}">
    {{ $errors->has('occupation') ? $errors->first('occupation') : '' }}

    <select name="married">
        <option value="000">Casado(a)?</option>
        <option value="1">Sim</option>
        <option value="0">Não</option>
    </select>
    {{ $errors->has('married') ? $errors->first('married') : '' }}

    <button type="submit" class="borda-preta">{{ (empty($customer->id)) ? 'Cadastrar' : 'Atualizar' }}</button>
</form>
