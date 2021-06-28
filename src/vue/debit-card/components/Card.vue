<template>
<div class="cart mb-4">

<div class="cart-body">
    <div class="row">
        <div class="col-12 col-md-4 col-lg-auto">
            <img class="img" width="241" :src="offer.logo_url">
        </div><!-- .col -->
        <div class="col-12 col-md">
            <h3 v-html="offer.finmarket_name"></h3>
            <p>
                <span class="fw-600"><i class="i-star yellow"></i>&nbsp;{{ offer.mfi.rating }}</span>
                <span class="gray">{{ offer.mfi.name }}</span>
            </p>
            <div class="row justify-content-between">
                <div class="col-12 col-sm-auto">
                    <p class="em-13 fw-600 mb-0">до {{ offer.max_bonus }}%</p>
                    <p class="gray">Кэшбек</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-auto">
                    <p class="em-13 fw-600 mb-0">от {{ offer.remaining_percent_to }}%</p>
                    <p class="gray">Процент на остаток</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-auto">
                    <p class="em-13 fw-600 mb-0">
                        <span v-if="offer.service_auto">{{ offer.service_auto }} ₽/год</span>
                        <span v-else>Бесплатно</span>
                    </p>
                    <p class="gray">Обслуживание</p>
                </div><!-- .col -->
                <div class="col-12 col-lg-auto">
                    <a class="btn-default" href="javascript:;">Оформить</a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .col -->
    </div><!-- .row -->
    <p>
        <a
            @click.prevent="more($event, offer.mfi_id)"
            class="i-down-trans"
            href="javascript:;"
        >
            Подробнее
            <i class="i-down d-inline-block em-9"></i>
        </a>
    </p>
    <div class="card-more-info" ref="moreInfo">
        <div class="divider"></div>
        <div class="row">
            <div class="col-12 col-md">
                <div class="row">
                    <div class="col-12 col-xl-5">
                        <p class="gray">Обслуживание:</p>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="editor" v-html="offer.service_cost_comment"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-5">
                        <p class="gray">SMS-уведомления:</p>
                    </div>
                    <div class="col-12 col-xl-7">
                        <p>
                            <span v-if="offer.sms_notifications_cost">{{ offer.sms_notifications_cost }} ₽/мес.</span>
                            <span v-else>Бесплатно</span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-5">
                        <p class="gray">Снятие наличных в банкоматах собственного банка:</p>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="editor" v-html="offer.own_bank_cash_withdrawal"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-5">
                        <p class="gray">Снятие наличных в банкоматах других банков:</p>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="editor" v-html="offer.other_bank_cash_withdrawal"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-5">
                        <p class="gray">Необходимые документы:</p>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="editor">
                            <ul>
                                <li v-for="doc in offer.documents_for_issuance">
                                    <div v-html="doc"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-5">
                        <p class="gray">Возраст:</p>
                    </div>
                    <div class="col-12 col-xl-7">
                        <p>{{ offer.min_age }} - {{ offer.max_age }} лет</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-5">
                        <p class="gray">Лицензия:</p>
                    </div>
                    <div class="col-12 col-xl-7">
                        <p>{{ offer.certificate_of_cb }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-auto">
                        <a class="btn-trsp" href="javascript:;">Перейти</a>
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-auto d-none d-md-block mb-3">
                <div class="divider-v"></div>
            </div><!-- .col -->
            <div class="col-12 col-md-5 col-xl-4">
                <div v-if="review">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img class="img" width="50" src="/img/ava.svg">
                        </div><!-- .col -->
                        <div class="col">
                            <p class="mb-1 fw-600">{{ review.name }}</p>
                            <p v-html="rating"></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <p>{{ review.text }}</p>
                </div><!-- v-if -->
                <div v-else-if="review === null">
                    Загрузка...
                </div>
                <div v-else>
                    <p>Еще никто не оставил отзыв</p>
                </div><!-- v-else -->
                <!-- <p><a href="javascript:;">Все отзывы</a></p> -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- #card-more-info-1 -->
</div><!-- .cart-body -->

</div><!-- root -->
</template>

<!-- * * * * * * * * * * * * * * * CoffeeScript * * * * * * * * * * * * * * * -->
<script lang="coffee">

# import AppComp from '@/components/AppComp'

export default

    name: 'Card'

    # components: {}

    # beforeCreate: () ->

    # created: () ->

    # beforeMount: () ->

    # mounted: () ->

    props:
        offer: [Object, Boolean]

    data: () ->
        review: null

    methods:
        more: (e, mfiId) ->
            unless @review?
                $.ajax
                    type: 'GET'
                    url: "https://unicom24.ru/api/v1/reviews/mfi/#{mfiId}/?page=1&page_size=1"
                .done (data) =>
                    @review = data?.results?[0] ? off
                    yes
            $(e.target).toggleClass 'active'
            $(@$refs.moreInfo).stop().slideToggle 300
            off

    computed:
        rating: ->
            out = ''
            rating = (Number @review.rating)
            for i in [1..rating]
                out = "#{out}<i class=\"i-star yellow\"></i>&nbsp;"
            len = 5 - rating
            return out if len < 1
            for i in [1..len]
                out = "#{out}<i class=\"i-star gray\"></i>&nbsp;"
            out

    # watch:

</script>

<!-- * * * * * * * * * * * * * * * * Stylus * * * * * * * * * * * * * * * * * -->
<style lang="stylus" scoped>

// @require '../fun'

.card-more-info
    display none
    overflow hidden

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