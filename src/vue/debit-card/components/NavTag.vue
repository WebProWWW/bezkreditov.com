<template>
<div class="row no-gutters justify-content-lg-between app-list-tag-row">

<div class="col-auto app-list-tag-col" v-for="tag in tags">
    <router-link
        class="btn-trsp btn-sm app-list-tag-btn"
        active-class="active"
        :to="tag.path.replace('/debetovye-karty', '')"
    >{{ tag.name }}</router-link>
</div>

</div><!-- root -->
</template>

<!-- * * * * * * * * * * * * * * * CoffeeScript * * * * * * * * * * * * * * * -->
<script lang="coffee">

# import AppComp from '@/components/AppComp'

export default

    name: 'NavTag'

    # components: {}

    # beforeCreate: () ->

    # created: () ->

    # beforeMount: () ->

    # mounted: () ->

    props:
        tags: Array

    # data: () ->

    # methods:

    # computed:

    # watch:

</script>

<!-- * * * * * * * * * * * * * * * * Stylus * * * * * * * * * * * * * * * * * -->
<style lang="stylus" scoped>

// @require '../fun'

.app-list-tag-col
    margin 0 3px

.app-list-tag-row
    margin 0 -3px

.app-list-tag-btn
    font-size .8em
    padding 2px 5px

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