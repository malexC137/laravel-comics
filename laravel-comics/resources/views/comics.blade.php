@extends('layout.default')

@section('page_title', 'Comics page')

@section('content')
<main>
    <div class="blue-bar">
        <div class="main-container">
            <div class="comics-card upper">
                <img src=" {{ $product['thumb'] }} " alt="">
                <div class="comics-card-text-top">
                    <h3>comic book</h3>
                </div>
                <div class="comics-card-text-bot">
                    <h3>view gallery</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <section class="main-section">
            <div class="main-text-container">
                <h1 class="upper">{{ $product['title']}}</h1>
                <div class="shopping-bar">
                    <div class="shopping-bar-container">
                        <h5 class="text-green-op">U.S. Price:</h5>
                        <h5 class="text-white"> {{ $product['price']}} </h5>
                    </div>
                    <div class="distancer"></div>
                    <div class="shopping-bar-container">
                        <h5 class="upper text-green-op">available</h5>
                    </div>
                    <div class="shopping-bar-container text-white">
                        <h5>Check availability</h5><i class="fa fa-caret-down" aria-hidden="true"></i>
                    </div>
                </div>
                <p>{{ $product['description']}}</p>

            </div>
            <div class="main-advertiser-container upper">
                <h4>advertisement</h4>
                <img src=" {{ asset('images/adv.jpg') }} " alt="">
            </div>
        </section>
    </div>
    <section class="table-section">
        <div class="main-container">
            <table>
                <thead>
                    <tr>
                        <th>
                            <h2>Talent</h2>
                        </th>
                        <th class="distancer"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="data-left">Art by:</td>
                        <td>
                            @foreach($product['artists'] as $artistName)
                            <a href=""> {{ $artistName }} </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td id="data-left">Written by:</td>
                        <td>
                            @foreach($product['writers'] as $writerName)
                            <a href=""> {{ $writerName }} </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th>
                            <h2>Specs</h2>
                        </th>
                        <th class="distancer"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Series:</td>
                        <td><a href="" class="upper"> {{ $product['series']}} </a></td>
                    </tr>
                    <tr>
                        <td>U.S. Price:</td>
                        <td>{{ $product['price']}} </td>
                    </tr>
                    <tr>
                        <td>On Sale Date:</td>
                        <td> {{ $product['sale_date']}} </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</main>
@endsection
