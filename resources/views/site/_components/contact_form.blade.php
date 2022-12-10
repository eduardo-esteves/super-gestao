<form action="{{ route('site.contact') }}" method="post">

    @if( $errors->any() )
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )
                <li> {{ $error }} </li>
            @endforeach
        </div>
    @endif

    @csrf
    <input
        name="name"
        type="text"
        placeholder="Nome"
        class="{{ $class }}"
        value="{{ old('name') }}">
    <br>
    <input
        name="phone"
        type="text"
        placeholder="Telefone"
        class="{{ $class }}"
        value="{{ old('phone') }}">
    <br>
    <input
        name="email"
        type="text"
        placeholder="E-mail"
        class="{{ $class }}"
        value="{{ old('email') }}">
    <br>
    <select name="reason_contact" class="{{ $class }}">
        @foreach( $reason_contact as $key => $reason )
            <option value="{{ $key }}" {{ old('reason_contact') == $key ? 'selected': '' }}>{{ $reason }}</option>
        @endforeach
    </select>
    <br>
    <textarea
        name="message"
        class="{{ $class }}">
        Preencha aqui a sua mensagem
    </textarea>
    <br>
    <button
        type="submit"
        class="{{ $class }}">
        ENVIAR
    </button>
</form>