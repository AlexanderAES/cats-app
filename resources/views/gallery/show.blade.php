@extends('layout.main')
@section('title', 'Cats')
@section('content')
    <article class="promo">
        <div class="container">
            <h1 class="cat__title title">{{$cat->breed}}</h1>
            <div class="cat-card__wrapper">
                <img src="{{asset($cat->img[0])}}" class="cat-card__image" alt="image_cat">
                <div class="promo-show__inner">
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
                        <div class="promo__count">
                            <div class="promo__count-num">{{$cat->size}}</div>
                            <div class="promo__count-text">Размер</div>
                        </div>
                    </div>
                </div>
                <div class="cat-card__action">
                    <div class="cat-card__text">{!! $cat->description !!}</div>
                    <div class="cat-card__btn" data-graph-path="call">
                        <a class="btn-blue" data-form="popupFormCall">Заказать кота</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
