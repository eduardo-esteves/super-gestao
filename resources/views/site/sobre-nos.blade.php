<h3>Sobre nós</h3>

<ul>
    <li><a href="{{ route('site.index') }}">Home</a></li>
    <li><a href="{{ route('site.about') }}">Sobre nós</a></li>
    @if( isset($user) && isset($password) )
        <li><a href="{{ route('site.contact') }}">Contato</a></li>
    @endif
</ul>