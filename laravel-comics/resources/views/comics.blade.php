@extends('layout.default')

@section('page_title', 'Comics page')

@section('content')
<main>
    <div class="blue-bar">
        <div class="main-container">
            <div class="comics-card upper">
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
                <h1 class="upper">action comics #1000: the deluxe edition</h1>
                <div class="shopping-bar">
                    <div class="shopping-bar-container">
                        <h5 class="text-green-op">U.S. Price:</h5>
                        <h5 class="text-white">$19.99</h5>
                    </div>
                    <div class="distancer"></div>
                    <div class="shopping-bar-container">
                        <h5 class="upper text-green-op">available</h5>
                    </div>
                    <div class="shopping-bar-container text-white">
                        <h5>Check availability</h5><i class="fa fa-caret-down" aria-hidden="true"></i>
                    </div>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam neque quo, officia, enim pariatur repellendus quisquam illum atque id, ut iure quasi doloribus quis earum rem similique. Tempore, autem minima.</p>

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
                            <a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a>
                        </td>
                    </tr>
                    <tr>
                        <td id="data-left">Written by:</td>
                        <td>
                            <a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a><a href="">name surname, </a>
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
                        <td><a href="" class="upper">action comics</a></td>
                    </tr>
                    <tr>
                        <td>U.S. Price:</td>
                        <td>$19.99</td>
                    </tr>
                    <tr>
                        <td>On Sale Date:</td>
                        <td>Oct 02 2018</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    
</main>
@endsection
