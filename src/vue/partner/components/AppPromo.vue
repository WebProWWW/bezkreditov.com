<template>
<div class="section">

<div class="container">
    <div class="row align-items-center">
        <div class="col-12 col-md-6">
            <h1>{{ title }}</h1>
            <div v-html="textReplaced"></div>
        </div><!-- .col -->
        <div class="col-12 col-md-6">
            <img class="img-center" width="400" src="/img/img-49.jpg" style="margin-bottom: -11px;">
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container -->

</div><!-- root -->
</template>

<!-- * * * * * * * * * * * * * * * CoffeeScript * * * * * * * * * * * * * * * -->
<script lang="coffee">

# import AppComp from '@/components/AppComp'

export default

    name: 'AppPromo'

    # components: {}

    # beforeCreate: () ->

    # created: () ->

    # beforeMount: () ->

    # mounted: () ->

    props:
        title:
            type: String
            defaul: ''
        text:
            type: String
            defaul: ''
        offersCount:
            type: [String, Number]
            defaul: 0

    # data: () ->

    # methods:

    computed:
        textReplaced: ->
            # «Без кредитов»
            
            text = @text ? ''
            text
                .replaceAll '«Юником24»', '«Без&nbsp;кредитов»'
                .replaceAll '&laquo;Юником24&raquo;', '«Без&nbsp;кредитов»'
                .replaceAll 'Юником24', '«Без&nbsp;кредитов»'
                .replaceAll '%current_date%', @today
                .replaceAll '%offer_count%', @offersCount
                .replaceAll '%month%', @month
                .replaceAll '%year%', @year
        today: ->
            today = new Date
            dd = String(today.getDate()).padStart 2, '0'
            mm = String(today.getMonth() + 1).padStart 2, '0'
            yyyy = today.getFullYear()
            "#{dd}.#{mm}.#{yyyy}"
        month: ->
            monthArr = ['название','январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь']
            today = new Date
            monthArr[ today.getMonth() ]
        year: ->
            (new Date).getFullYear()

    # watch:

</script>

<!-- * * * * * * * * * * * * * * * * Stylus * * * * * * * * * * * * * * * * * -->
<style lang="stylus" scoped>

// @require '../fun'

.section
    position relative
    overflow hidden
    background #C4C9DD

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