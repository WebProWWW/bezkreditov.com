<template>
<div>

<input
    type="text"
    ref="input"
    class="input"
    :class="{error: error !== ''}"
    :value="val"
    @focus="$emit('focus')"
    @keyup="onInput"
>

</div><!-- root -->
</template>

<!-- * * * * * * * * * * * * * * * CoffeeScript * * * * * * * * * * * * * * * -->
<script lang="coffee">

# import AppComp from '@/components/AppComp'

export default

    name: 'InputPassport'

    # components: {}

    # beforeCreate: () ->

    # created: () ->

    # beforeMount: () ->

    mounted: () ->
        @val = @value
        $(@$refs.input).inputmask '9999-999999'
        yes

    props:
        error: String
        value: String

    data: () ->
        val: null

    methods:
        onInput: (e) ->
            val = $(e.target).inputmask 'unmaskedvalue'
            if val.length is 10 then @$emit('input', val) else @$emit('input', '')
            yes

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