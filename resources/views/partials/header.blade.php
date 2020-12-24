<header>
    <div id="logo">
        <img src="{{ asset('images/la-molisana-logo.png')}}" alt="La Molisana - Logo">
    </div>
    <div id="menu">
        <ul>
            <li>
                <a class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}"
                    href="{{ route('home') }}">
                    Home
                </a>
            </li>
            <li>
                <a class="{{ Request::route()->getName() == 'pagina-prodotti' ? 'active' : '' }}"
                    href=" {{ route('pagina-prodotti')}}">
                    Prodotti
                </a>
            </li>
            <li>
                <a class="{{ Request::route()->getName() == 'news' ? 'active' : '' }}"
                     href="{{ route('news')}}">
                    News
                </a>
            </li>
        </ul>
    </div>
</header>
