@extends('layout.main')
@section('title', 'Cats')
@section('content')
    <article class="promo">
        <div class="container">
            <div class="promo__cats">
                @foreach($allCats as $cat)
                    <div class="promo__card promo-sale">
                        <span class="notification"></span>
                        <div class="promo__img">
                            <img src="{{ asset($cat->img[0]) }}" alt="cat">
                        </div>
                        <div class="promo__inner">
                            <h2 class="promo__name">{{$cat->breed}}</h2>
                            <div class="promo__box">
                                <div class="promo__color">{{$cat->color}}</div>
                                <div class="promo__age">
                                    <div class="promo__age-month">{{$cat->age}} мес.</div>
                                    <div class="promo__age-text">Возраст</div>
                                </div>
                                <div class="promo__count">
                                    <div class="promo__count-num">{{$cat->sex}}</div>
                                    <div class="promo__count-text">Пол</div>
                                </div>
                            </div>
                            <div class="promo__price">{{$cat->price}} руб.</div>
                        </div>
                        <button class="promo__btn">Оставить заявку</button>
                    </div>
                @endforeach
            </div>
            <div class="navigation">
                {{$allCats->withQueryString()->links()}}
            </div>
        </div>
    </article>
@endsection
