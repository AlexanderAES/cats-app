<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__block">
                <p class="footer__title">Возьми кота!</p>
                <p class="footer__text">Подпишись и успей поучавсвовать в акции</p>
            </div>
            <div class="footer__subscription">
                <form class="footer__form form-subscribe" id="form_subscribe" method="POST" action="/subscribe">
                    @method('POST')
                    @csrf
                    <div class="footer__form-box">
                        <label for="email">
                            <input class="modal__section obligatory" id="email" type="email" name="email"
                                   placeholder="email">
                        </label>
                        <label for="submit-btn">
                            <input id="submit-btn" type="submit" name="submit" value="Подписаться на новости">
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
<div class="graph-modal">
    <div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="order">
        <button class="btn-reset graph-modal__close js-modal-close" aria-label="Закрыть модальное окно"></button>
        <div class="graph-modal__content">
            <div class="modal">
                <form class="modal__form form-order" id="form_order" method="POST" action="/order">
                    @method('POST')
                    @csrf
                    <h3 class="modal__title">Заказать кота</h3>
                    <div class="info-success" style="display: none;"></div>
                    <p class="modal__subtitle">Просто заполните форму заявки и мы вам перезвоним.</p>
                    <div class="info-success" id="success-message" style="display: none;"></div>
                    <div class="field">
                        <label>Ваше имя <span class="required-field input-field">*</span></label>
                        <input name="name" type="text" class="modal__section name obligatory" data-validate-field="name"
                            {{ old('name') }}>
                    </div>
                    <div class="field">
                        <label>Телефон <span class="required-field input-field">*</span></label>
                        <input name="phone" type="tel" class="modal__section tel obligatory" data-validate-field="tel">
                    </div>

                    <input name="cat" type="hidden" class="modal__section" id="hiddenCatId">
                    <div class="field">
                        <label>Email</label>
                        <input name="email" type="email"
                               class="modal__section form-field__input-email" {{ old('email') }}>
                    </div>

                    <div class="modal__wrap">
                        <div class="modal__spinner">
                            <button id="form_call_submit" type="submit" class="modal__btn validateBtn">
                                Отправить
                            </button>
                            <div class="preloader">
                                <span class="submit-spinner submit-spinner_hide"></span>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal__success hidden-modal">
                    <img class="modal__img" src="{{asset('icons/success.svg')}}">
                    <p class="modal__text text">Ваша заявка принята <br> Мы свяжемся с вами в ближайшее время</p>
                </div>
                <div class="modal__error hidden-modal">
                    <img class="modal__img" src="{{asset('image/icons/error.svg')}}">
                    <p class="modal__text text">Что-то пошло не так <br> Попробуйте отправить заявку еще раз</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/graph-modal.min.js')}}"></script>
<script src="{{asset('js/mask-tel.js')}}"></script>
<script src="{{asset('js/send-data.js')}}"></script>
