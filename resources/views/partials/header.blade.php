<header>
    <div id="logo">
        <img src="{{ asset('images/la-molisana-logo.png')}}" alt="La Molisana - Logo">
    </div>
    <div id="menu">
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    Home
                </a>
            </li>
            <li>
                <a href=" {{ route('prodotti')}}">
                    Prodotti
                </a>
            </li>
            <li>
                <a href="{{ route('news')}}">
                    News
                </a>
            </li>
        </ul>
    </div>
</header>
