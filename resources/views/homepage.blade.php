@extends('layouts.main')

@section('page-title')
    Home Page
@endsection

@section('page-content')

    {{-- Button off space e Jumbotron--}}
    <section class="section-main">
        <div class="container">
            <button class=" ms-btn-series">CURRENT SERIES</button>
        </div>
    </section>
    {{-- Button off space --}}



    {{-- Section Card e button --}}
    <section class="ms-section-cards">
        <div class="container">
            {{-- Card da Cards --}}
            <div class="row">
                @foreach ($cards as $card)
                    <div class="col-2 g-4">
                        <img class="img-fluid" src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                        <h5 class="py-3 text-center">{{ $card['series'] }}</h5>
                    </div>
                @endforeach    
            </div>
            {{-- Card da Cards --}}
            <div class="ms-btn-bottom-series text-center ">
                <button class="px-5 py-1">LOAD MORE</button>
            </div>
            
        </div>
    </section>
    {{-- Section Card e button --}}


    {{-- Section Bar Buy --}}
    <section class="section-buy">
        <div class="container">
            {{-- Contenitore card buy --}}
            <div class="ms-row-bar-buy d-flex">
                <div class="ms-card-bar-buy d-flex">
                    <div class="ms-img-bar-buy py-5">
                        <img class=" img-fluid" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"" alt="">
                    </div>
                    <div class="ms-text-bar-buy d-flex align-items-center mb-0">
                        <div class="">DIGITAL COMICS</div>
                    </div>
                    
                </div>
                <div class="ms-card-bar-buy d-flex">
                    <div class="ms-img-bar-buy py-5">
                        <img class=" img-fluid" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"" alt="">
                    </div>
                    <div class="ms-text-bar-buy d-flex align-items-center mb-0">
                        <div class="">DC MERCHANDISE</div>
                    </div>
                    
                </div>
                <div class="ms-card-bar-buy d-flex">
                    <div class="ms-img-bar-buy py-5">
                        <img class=" img-fluid" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"" alt="">
                    </div>
                    <div class="ms-text-bar-buy d-flex align-items-center mb-0">
                        <div class="">DIGITAL COMICS</div>
                    </div>
                </div>
                <div class="ms-card-bar-buy d-flex">
                    <div class="ms-img-bar-buy py-5">
                        <img class=" img-fluid" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"" alt="">
                    </div>
                    <div class="ms-text-bar-buy d-flex align-items-center mb-0">
                        <div class="">SUBSCRIPTIONS</div>
                    </div>
                    
                </div>
                <div class="ms-card-bar-buy d-flex">
                    <div class="ms-img-bar-buy py-5">
                        <img class=" img-fluid" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}"" alt="">
                    </div>
                    <div class="ms-text-bar-buy d-flex align-items-center mb-0">
                        <div class="">DC POWER VISA</div>
                    </div>
                    
                </div>
            </div>
            {{-- Contenitore card buy --}}
        </div>
    </section>
    {{-- Section Bar Buy --}}



@endsection