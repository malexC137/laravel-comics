<header>
    <div class="top-navbar">
        <div class="container">
            <h6>dc power™visa®</h6>
            <h6>additional dc sites<i class="fa fa-caret-down" aria-hidden="true"></i></h6>
        </div>
    </div>
    <div class="navbar">
        <div class="container">
            <div class="logo-container">
                <a href=" {{ route('home-page') }} ">
                    <img src=" {{ asset('images/dc-logo.png') }} " alt="">
                </a>
            </div>
            <ul>
                <li>
                    <a href=" {{ route('characters-page') }} ">
                        Characters
                    </a>
                </li>
                <li>
                    <a href=" {{ route('comics-page') }} ">
                        Comics
                    </a>
                </li>
                <li>
                    <a href=" {{ route('movies-page') }} ">
                        Movies
                    </a>
                </li>
                <li>
                    <a href=" {{ route('tv-page') }} ">
                        Tv
                    </a>
                </li>
                <li>
                    <a href=" {{ route('games-page') }} ">
                        Games
                    </a>
                </li>
                <li>
                    <a href=" {{ route('collectibles-page') }} ">
                        Collectibles
                    </a>
                </li>
                <li>
                    <a href=" {{ route('videos-page') }} ">
                        Videos
                    </a>
                </li>
                <li>
                    <a href=" {{ route('fans-page') }} ">
                        Fans
                    </a>
                </li>
                <li>
                    <a href=" {{ route('news-page') }} ">
                        News
                    </a>
                </li>
                <li>
                    <a href=" {{ route('shop-page') }} ">
                        Shop<i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <input type="text" placeholder="Searc">
        </div>
    </div>
    <div class="jumbotron-container">
        <img src=" {{ asset('images/jumbotron.jpg') }} " alt="">
    </div>

</header>
