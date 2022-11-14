<h3>Contato</h3>

<ul>
    <li><a href="{{ route('site.index') }}">Home</a></li>
    <li><a href="{{ route('site.about') }}">Sobre nós</a></li>
    <li><a href="{{ route('site.contact', [
        'user'      => $user,
        'password'  => $password
    ]) }}">Contato</a></li>
</ul>

<p> Recebido o usuário {{ $user }} e senha {{ $password }}</p>