@extends('layout.main')
@section('title', 'Cats')
@section('content')
    <article class="promo">
        <div class="container">
            <div class="promo__descr">
                <div class="promo__sorting">Сортировать по:</div>
                <div class="promo__sorting-price">Цене</div>
                <div class="promo__sorting-age">Возрасту</div>
            </div>
            <div class="promo__cats">
                <div class="promo__card promo-sale">
                    <span class="notification"></span>
                    <div class="promo__img">
                        <img src="{{asset('images/cat_1.jpg')}}" alt="cat">
                    </div>
                    <div class="promo__inner">
                        <h2 class="promo__name">Сибирская</h2>
                        <div class="promo__box">
                            <div class="promo__color">Коричневый окрас</div>
                            <div class="promo__age">
                                <div class="promo__age-month">2мес.</div>
                                <div class="promo__age-text">Возраст</div>
                            </div>
                            <div class="promo__count">
                                <div class="promo__count-num">самец</div>
                                <div class="promo__count-text">Пол</div>
                            </div>
                        </div>
                        <div class="promo__price">30 000 руб.</div>
                    </div>
                    <button class="promo__btn">Купить</button>
                </div>
                <div class="promo__card">
                    <span class="notification"></span>
                    <div class="promo__img">
                        <img src="{{asset('images/cat_7.jpg')}}" alt="cat">
                    </div>
                    <div class="promo__inner">
                        <h2 class="promo__name">Сибирская</h2>
                        <div class="promo__box">
                            <div class="promo__color">Коричневый окрас</div>
                            <div class="promo__age">
                                <div class="promo__age-month">2мес.</div>
                                <div class="promo__age-text">Возраст</div>
                            </div>
                            <div class="promo__count">
                                <div class="promo__count-num">самка</div>
                                <div class="promo__count-text">Пол</div>
                            </div>
                        </div>
                        <div class="promo__price">40 000 руб.</div>
                    </div>
                    <button class="promo__btn" disabled>Продан</button>
                </div>
                <div class="promo__card">
                    <span class="notification"></span>
                    <div class="promo__img">
                        <img src="{{asset('images/cat_3.jpg')}}" alt="cat">
                    </div>
                    <div class="promo__inner">
                        <h2 class="promo__name">Сибирская</h2>
                        <div class="promo__box">
                            <div class="promo__color">Коричневый окрас</div>
                            <div class="promo__age">
                                <div class="promo__age-month">2мес.</div>
                                <div class="promo__age-text">Возраст</div>
                            </div>
                            <div class="promo__count">
                                <div class="promo__count-num">самец</div>
                                <div class="promo__count-text">Пол</div>
                            </div>
                        </div>
                        <div class="promo__price">20 000 руб.</div>
                    </div>
                    <button class="promo__btn">Купить</button>
                </div>
                <div class="promo__card">
                    <span class="notification"></span>
                    <div class="promo__img">

                        <img src="{{asset('images/cat_4.jpg')}}" alt="cat">
                    </div>
                    <div class="promo__inner">
                        <h2 class="promo__name">Сибирская</h2>
                        <div class="promo__box">
                            <div class="promo__color">Коричневый окрас</div>
                            <div class="promo__age">
                                <div class="promo__age-month">2мес.</div>
                                <div class="promo__age-text">Возраст</div>
                            </div>
                            <div class="promo__count">
                                <div class="promo__count-num">самка</div>
                                <div class="promo__count-text">Пол</div>
                            </div>
                        </div>
                        <div class="promo__price">25 000 руб.</div>
                    </div>
                    <button class="promo__btn">Купить</button>
                </div>
                <div class="promo__card promo-sale">
                    <span class="notification"></span>
                    <div class="promo__img">

                        <img src="{{asset('images/cat_5.jpg')}}" alt="cat">
                    </div>
                    <div class="promo__inner">
                        <h2 class="promo__name">Сибирская</h2>
                        <div class="promo__box">
                            <div class="promo__color">Коричневый окрас</div>
                            <div class="promo__age">
                                <div class="promo__age-month">2мес.</div>
                                <div class="promo__age-text">Возраст</div>
                            </div>
                            <div class="promo__count">
                                <div class="promo__count-num">самец</div>
                                <div class="promo__count-text">Пол</div>
                            </div>
                        </div>
                        <div class="promo__price">30 000 руб.</div>
                    </div>
                    <button class="promo__btn">Купить</button>
                </div>
                <div class="promo__card">
                    <span class="notification"></span>
                    <div class="promo__img">
                        <span class="notification"></span>
                        <img src="{{asset('images/cat_6.jpg')}}" alt="cat">
                    </div>
                    <div class="promo__inner">
                        <h2 class="promo__name">Сибирская</h2>
                        <div class="promo__box">
                            <div class="promo__color">Коричневый окрас</div>
                            <div class="promo__age">
                                <div class="promo__age-month">2мес.</div>
                                <div class="promo__age-text">Возраст</div>
                            </div>
                            <div class="promo__count">
                                <div class="promo__count-num">самка</div>
                                <div class="promo__count-text">Пол</div>
                            </div>
                        </div>
                        <div class="promo__price">10 000 руб.</div>
                    </div>
                    <button class="promo__btn" disabled>Продан</button>
                </div>
            </div>
            <button class="promo__button">Показать еще 20</button>
        </div>
    </article>
@endsection
