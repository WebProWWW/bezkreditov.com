<template>
<div>

<div class="divider"></div>

<div class="container">
    <nav class="breadcrubmbs">
        <a class="breadcrubmbs-ln" href="/"><i class="i-home"></i> Главная</a>
        <router-link
            class="breadcrubmbs-ln"
            to="/debetovye-karty"
        >Дебетовые карты</router-link>
        <!-- <span class="breadcrubmbs-ln"></span> -->
    </nav>
</div><!-- .container -->

<router-view/>

</div><!-- root -->
</template>

<!-- * * * * * * * * * * * * * * * CoffeeScript * * * * * * * * * * * * * * * -->
<script lang="coffee">

# import AppComp from '@/components/AppComp'

export default

    name: 'App'

    # components: {}

    # beforeCreate: () ->

    # created: () ->

    # beforeMount: () ->

    # mounted: () ->

    # props:

    # data: () ->

    # methods:

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