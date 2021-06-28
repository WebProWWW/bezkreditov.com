<template>
<div>

<app-promo
    :title="promoTitle"
    :text="promoText"
    :offers-count="offersCount"
/>

<app-nav-tag
    :tags="tags"
    parent-path="/debetovye-karty"
/>

<div class="section bg">
    <div class="container">
        <div class="h1">Рекомендуем {{ recommended }}</div>
        <app-card
            v-for="offer, i in offersRecommend"
            :offer="offer"
            :key="i"
            @select="$emit('list-select', $event)"
        ></app-card>
    </div><!-- .container -->
</div><!-- .section -->

<div class="section bg">
    <div class="container">
        <div class="h1">Подобрать {{ selected }}</div>
        <p>Показано {{ offers.length }} из {{ offersCount }}</p>
        <app-card
            v-for="offer, i in offers"
            :offer="offer"
            :key="i"
            @select="$emit('list-select', $event)"
        ></app-card>
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
        <h2 class="h1">{{ reviewsTitle }}</h2>
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

<section class="section bg" v-if="content">
    <div class="container">
        <div class="cart mb-4 p-lg-3">
            <div class="cart-body">
                <div class="editor" v-html="content"></div>
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

import AppPromo from '../components/AppPromo.vue'
import AppNavTag from '../components/AppNavTag.vue'
import AppCard from '../components/AppCard.vue'

export default

    name: 'DebitCardList'

    components: {
        AppPromo
        AppNavTag
        AppCard
    }

    # beforeCreate: () ->

    # created: () ->

    # beforeMount: () ->

    # mounted: () ->

    props:
        tags:
            type: Array
            default: -> []
        popTags:
            type: Array
            default: -> []
        offers:
            type: Array
            default: -> []
        offersRecommend:
            type: Array
            default: -> []
        lastReviews:
            type: Array
            default: -> []
        offersCount:
            type: [Number, String]
            defaul: 0
        promoTitle:
            type: String
            defaul: ''
        promoText:
            type: String
            defaul: ''
        recommended:
            type: String
            defaul: ''
        selected:
            type: String
            defaul: ''
        content:
            type: String
            defaul: ''
        reviewsTitle:
            type: String
            defaul: ''

    # data: () ->

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