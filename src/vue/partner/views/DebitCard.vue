<template>
<div>

<router-view
    :tags="tags"
    :pop-tags="popTags"
    :offers="offers"
    :offers-recommend="offersRecommend"
    :last-reviews="lastReviews"
    :offers-count="offersCount"
    :promo-title="promoTitle"
    :promo-text="promoText"
    :recommended="recommended"
    :selected="selected"
    :content="content"
    :reviews-title="reviewsTitle"
    @list-select="loadOffer"
    :offer="offer"
    :list-offer="listOffer"
/>

</div><!-- root -->
</template>

<!-- * * * * * * * * * * * * * * * CoffeeScript * * * * * * * * * * * * * * * -->
<script lang="coffee">

export default

    name: 'DebitCard'

    # components: {}

    # beforeCreate: () ->

    created: () ->
        $.ajax
            type: 'GET'
            url: 'https://unicom24.ru/api/v1/offers/?loan_type=debitcard&page=1&page_size=10&region_id=180185&with_inactive=true&with_info_offer=true'
        .done (data) =>
            @offers = data?.results ? []
            @offersCount = data?.count ? 0
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
        @updateSeoPage @$route.path
        yes

    # beforeMount: () ->

    # mounted: () ->

    # beforeRouteEnter: (to, from, next) ->

    beforeRouteUpdate: (to, from, next) ->
        to.matched.some (record) =>
            if record.meta.tags is yes
                @updateSeoPage to.path
                return yes
            off
        next()
        yes

    # props:

    data: () ->
        tags: []
        popTags: []
        offers: []
        offersRecommend: []
        lastReviews: []
        offersCount: 0
        promoTitle: ''
        promoDesc: ''
        content: ''
        offer: {}
        listOffer: {}

    methods:
        updateSeoPage: (path) ->
            url = "https://unicom24.ru/api/v1/seo_pages/?path=#{path}"
            $.ajax
                type: 'GET'
                url: url
            .done (data) =>
                data = data?[0] ? {}
                navs = data.linking_fields ? []
                @promoTitle = data.h1 ? ''
                @promoText = data.short_content ? ''
                @recommended = data.recommended_key ? ''
                @selected = data.selected_key ? ''
                @content = data.content ? ''
                @reviewsTitle = data.offer_wall_reviews_block_header ? ''
                @popTags = []
                for nav in navs
                    if nav.display_location is 'popular_offers'
                        @popTags.push nav
                        
                    if nav.display_location is 'tag_tiles'
                        @tags = nav.ancors.sort (a, b) -> Number(a.weight) - Number(b.weight)
                yes
            yes

        loadOffer: (@listOffer) ->
            url = "https://unicom24.ru/api/universal/v1/doc/offer/#{@listOffer.id}/"
            $.ajax
                type: 'GET'
                url: url
                # password: '3MKuz04k:bezkreditov@bezkreditov.com'
            .done (data) =>
                @offer = data?.offer ? {}
                # console.log @offer
                @$router.push '/debetovye-karty/karta-qwerty'
                yes
            off

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