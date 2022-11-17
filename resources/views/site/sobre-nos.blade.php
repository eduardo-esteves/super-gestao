<h3>Sobre nós</h3>

<ul>
    <li><a href="{{ route('site.index') }}">Home</a></li>
    <li><a href="{{ route('site.about') }}">Sobre nós</a></li>
    @if( isset($user) && isset($password) )
        <li><a href="{{ route('site.contact') }}">Contato</a></li>
    @endif
</ul>

@isset($products)
    @for($i = 0; isset($products[$i]); $i++)
        Produto: {{ $products[$i]['name'] }} <br />
        Fabricante: {{ $products[$i]['maker'] }} <br />
        Preço: {{ $products[$i]['price'] }} <br />
        <hr />
    @endfor
@endisset