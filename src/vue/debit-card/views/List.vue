<template>
<div>

<div class="section">
    <div class="container">
        <nav-tag
            :tags="tags"
        />
    </div><!-- .container -->
</div><!-- .section -->

<div class="section bg">
    <div class="container">
        <div class="h1">Рекомендуем дебетовые карты от популярных банков России</div>
        <card
            v-for="offer, i in offersRecommend"
            :offer="offer"
            :key="i"
        ></card>
    </div><!-- .container -->
</div><!-- .section -->

<div class="section bg">
    <div class="container">
        <div class="h1">Подобрать дебетовую карту по параметрам онлайн</div>
        <p>Показано 10 дебетовые карты</p>
        <card
            v-for="offer, i in offers"
            :offer="offer"
            :key="i"
        ></card>
    </div><!-- .container -->
</div><!-- .section -->

<div class="section bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-stat"></i>
                        </div>
                        <h3>Узнайте свой кредитный рейтинг</h3>
                        <p class="my-auto pb-3">Один из главных показателей, который оценивается банками при решении о предоставлении займа.</p>
                        <div class="row">
                            <div class="col-auto mx-auto">
                                <p><a class="btn-default" href="javascript:;">Узнать рейтинг</a></p>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-safe"></i>
                        </div>
                        <h3>Защитите свою кредитную историю</h3>
                        <p class="my-auto pb-3">Сервис поможет сберечь от лишних уплат по просрочкам, а также от действий кредитных мошенников.</p>
                        <div class="row">
                            <div class="col-auto mx-auto">
                                <p><a class="btn-default" href="javascript:;">Защитить кредит</a></p>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-card"></i>
                        </div>
                        <h3>Полная кредитная история</h3>
                        <p class="my-auto pb-3">Информация о ваших кредитах, просрочках, обращениях в банки и МФО</p>
                        <div class="row">
                            <div class="col-auto mx-auto">
                                <p><a class="btn-default" href="javascript:;">Скачать историю</a></p>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .section -->

<div class="section bg">
    <div class="container">
        <h2 class="h1">Последние отзывы о дебетовых картах</h2>
        <div class="cart">
            <div class="cart-body" v-for="review, i in lastReviews">
                <div class="row">
                    <div class="col-auto">
                        <img class="img" width="80" :src="review.offer.logo">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3 class="mb-1">{{ review.offer.finmarket_name }}</h3>
                        <p>
                            <span v-html="lastReviewStarsHtml(review.rating)"></span>
                            {{ review.name }}
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto">
                        <p>{{ date(review.created) }}</p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <p>{{ review.text }}</p>
                <div class="divider mb-1" v-if="i < (lastReviews.length - 1)"></div>
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</div><!-- .section -->


<section class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 mb-4">
                <div class="cart">
                    <div class="cart-body center lg-left">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-auto">
                                <img class="img-center" width="70" src="/img/ava-man.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-lg">
                                <h3 class="mb-1">Денис Беневольский</h3>
                                <p>04 дек. 2020</p>
                            </div><!-- .col-12 -->
                        </div><!-- .row -->
                        <h3 class="yellow">Как зарабатывать на дебетовой карте?</h3>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-sm-6 mb-4">
                <div class="cart">
                    <div class="cart-body center lg-left">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-auto">
                                <img class="img-center" width="70" src="/img/ava-man.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-lg">
                                <h3 class="mb-1">Денис Беневольский</h3>
                                <p>01 дек. 2020</p>
                            </div><!-- .col-12 -->
                        </div><!-- .row -->
                        <h3 class="yellow">Как выбрать дебетовую карту?</h3>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1">Как оформить дебетовую карту онлайн с помощью &laquo;Без&nbsp;кредитов&raquo;</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-stamp"></i>
                        </div>
                        <p>С помощью фильтров подберите лучшее предложение из доступных</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-hand"></i>
                        </div>
                        <p>Перед оформлением карты ознакомьтесь с условиями на странице предложения</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-edit"></i>
                        </div>
                        <p>Нажмите на кнопку “Оформить” и заполните анкету на сайте банка</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="cart mb-4 p-lg-3">
            <div class="cart-body">
                <h2 class="h1">Дебетовые карты: памятка клиенту</h2>
                <p>Дебетовые карты могут использоваться как средство получения зарплаты, стипендии или пенсии. Но кроме этого, они могу еще и быть дополнительным источником выгодных предложений!</p>
                <p>Для того, чтобы карта стала более выгодным финансовым инструментом, необходимо обратить внимание на следующие дополнительные опции:</p>
                <ul class="ul-circle">
                    <li><p><strong>Кэшбэк</strong>. С каждой вашей покупки на карту будет возвращаться небольшой процент в рублях или в баллах, которые можно будет обменять на другие услуги банка или подарки.</p></li>
                    <li><p><strong>Процент на остаток по счету</strong>. В конце каждого месяца на дебетовую карту будет начисляться процент, который зависит от остатка денег на счету.</p></li>
                    <li><p><strong>Стоимость обслуживания</strong>. От этой опции зависит размер платы за использование картой банка. Очень часто банки предлагают получить бесплатное обслуживание за выполнение определенных условий банка (например, если вы потратите определенную сумму денег за месяц или оформите вклад в банке).</p></li>
                    <li><p><strong>Мили</strong>. Процент потраченных вами денег вернется на ваш счет в виде миль, которые затем можно будет обменять на билеты на самолет. Эта услуга особенно актуальна для путешественников и людей, посещающие разные страны по работе.</p></li>
                </ul>
                <p>Кроме того, банки предлагают владельцам карт дополнительные специальные программы - бонусы от партнеров, специальные предложения в магазинах, скидки на услуги банка и т.п.</p>
                <p>Поэтому следует внимательно отнестись к выбору дебетовой карты - важно не упустить наиболее выгодные предложения и оформить лучшую карту онлайн.</p>
                <p>Оформляя карту на Юником24, вы сможете не только сравнить условия по дебетовым картам от всех банков России, но и узнать отзывы реальных клиентов! Изучите доступные предложения, жмите на кнопку "Оформить", заполните анкету и договаривайтесь с менеджером банка о получении карты.</p>
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="cart mb-4 p-lg-3">
            <div class="cart-body">
                <h2 class="h1">Популярные предложения</h2>
                <div
                    v-for="popTag in popTags"
                >
                    <h3>{{ popTag.title }}</h3>
                    <div class="row">
                        <div
                            class="col-auto mb-3"
                            v-for="popTagLn in popTag.ancors"
                        >
                            <router-link
                                :to="popTagLn.path.replace('/debetovye-karty', '')"
                            >{{ popTagLn.name }}</router-link>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->


</div><!-- root -->
</template>

<!-- * * * * * * * * * * * * * * * CoffeeScript * * * * * * * * * * * * * * * -->
<script lang="coffee">

import Card from '../components/Card.vue'
import NavTag from '../components/NavTag.vue'

export default

    name: 'List'

    components: { Card, NavTag }

    # beforeCreate: () ->

    created: () ->
        # https://unicom24.ru/api/v1/offers/?page_size=20&with_inactive=true&with_info_offer=true&region_id=180185&partner=173183&loan_type=debitcard&ordering=-remaining_percent_to
        $.ajax
            type: 'GET'
            url: 'https://unicom24.ru/api/v1/offers/?loan_type=debitcard&page=1&page_size=10&region_id=180185&with_inactive=true&with_info_offer=true'
        .done (data) =>
            @offers = data?.results ? []
            yes
        $.ajax
            type: 'GET'
            url: 'https://unicom24.ru/api/v1/offers/?page_size=10&region_id=180185&only_popular=true&loan_type=debitcard'
        .done (data) =>
            @offersRecommend = data?.results ? []
            yes
        $.ajax
            type: 'GET'
            url: 'https://unicom24.ru/api/v1/reviews/mfi/?page=1&page_size=3&offer_loan_type=debitcard&min_rating=3'
        .done (data) =>
            @lastReviews = data?.results ? []
            yes
        $.ajax
            type: 'GET'
            url: 'https://unicom24.ru/api/v1/seo_pages/?path=/debetovye-karty'
        .done (data) =>

            navs = data?[0]?.linking_fields ? []
            for nav in navs
                if nav.display_location is 'popular_offers'
                    @popTags.push nav
                    
                if nav.display_location is 'tag_tiles'
                    @tags = nav.ancors.sort (a, b) -> Number(a.weight) - Number(b.weight)
            yes
        yes

    # beforeMount: () ->

    # mounted: () ->

    # props:

    data: () ->
        tags: []
        popTags: []
        offers: []
        offersRecommend: []
        lastReviews: []

    methods:
        lastReviewStarsHtml: (rating) ->
            out = ''
            rating = Number rating
            for i in [1..rating]
                out = "#{out}<i class=\"i-star yellow\"></i>&nbsp;"
            len = 5 - rating
            return out if len < 1
            for i in [1..len]
                out = "#{out}<i class=\"i-star gray\"></i>&nbsp;"
            out
        date: (timestamp) ->
            fdate = new Date timestamp
            opt =
                day: 'numeric'
                month: 'long'
                year: 'numeric'
                # hour: 'numeric'
                # minute: 'numeric'
            fdate.toLocaleString 'default', opt

    # computed:

    # watch:

</script>

<!-- * * * * * * * * * * * * * * * * Stylus * * * * * * * * * * * * * * * * * -->
<style lang="stylus" scoped>

// @require '../fun'

/*
* Small devices (phones, 576px and up)                          ≥ 576px
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
// @media (min-width: 576px)

/*
* Medium devices (tablets, 768px and up)                        ≥ 768px
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
// @media (min-width: 768px)

/*
* Large devices (desktops, 992px and up)                        ≥ 992px
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
// @media (min-width: 992px)

/*
* Extra large devices (large desktops, 1200px and up)          ≥ 1200px
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
// @media (min-width: 1200px)

</style>