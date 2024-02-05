@extends('layout.main')
@section('title', 'Cats')
@section('content')
    <article class="promo">
        <div class="container">
            <div class="promo__cats">
                @foreach($cats as $cat)
                    <a class="promo__card promo-sale" href="{{ route('gallery.show',$cat->slug) }}">
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
                        <button class="promo__btn" data-graph-path="order" data-form="popupFormOrder" id="buyBtn"
                                data-product-id="{{ $cat->id }}">Оставить заявку
                        </button>
                        <input type="hidden" class="cat-id" id="catId" value="{{ $cat->id }}">
                    </a>
                @endforeach
            </div>
        </div>
    </article>

@endsection
