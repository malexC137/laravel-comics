@extends('layout.default')

@section('page_title', 'Laravel Comics')

@section('content')
<main>
    <div class="home-section">
        <div class="container container-home">
            <div class="text-container">
                <h1 class="upper">Current series</h1>
            </div>
            <div class="card-container text-white">
                @foreach($comicsList as $key => $prodotto)
                <a href=" {{ route('comics-page', ['index' => $key]) }} " class="comic-card">
                    <img src=" {{ $prodotto['thumb'] }} " alt="">
                    <h4> {{ $prodotto['series'] }} </h4>
                </a>
                @endforeach
                <button class="button-1 upper">
                    <h4>load more</h4>
                </button>
            </div>
        </div>
    </div>
    <div class="nav-buy nav-buy-home">
        <div class="container nav-buy-container">
            <ul class="upper text-white">
                <li>
                    <a href="">
                        <img src=" {{ asset('images/buy-comics-digital-comics.png') }} " alt="">
                        <h5>digital comics</h5>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src=" {{ asset('images/buy-comics-merchandise.png') }} " alt="">
                        <h5>dc merchandise</h5>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src=" {{ asset('images/buy-comics-subscriptions.png') }} " alt="">
                        <h5>subscription</h5>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src=" {{ asset('images/buy-comics-shop-locator.png') }} " alt="">
                        <h5>comic shop locator </h5>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src=" {{ asset('images/buy-dc-power-visa.svg') }} " alt="">
                        <h5>dc power visa</h5>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</main>

@endsection
