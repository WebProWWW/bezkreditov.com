<template>
<div>

<input
    class="input mb-1"
    :class="{error: error !== ''}"
    ref="money"
    type="text"
    @focus="$emit('focus')"
    @keyup="onInput"
    @focusout="onFocusOut"
>
<div ref="slider"></div>

</div><!-- root -->
</template>

<!-- * * * * * * * * * * * * * * * CoffeeScript * * * * * * * * * * * * * * * -->
<script lang="coffee">

# import AppComp from '@/components/AppComp'

export default

    name: 'InputSlider'

    # components: {}

    # beforeCreate: () ->

    # created: () ->

    # beforeMount: () ->

    mounted: () ->
        $(@$refs.money).maskMoney
            suffix: ' ₽'
            thousands: ' '
            precision: 0
            selectAllOnFocus: yes
        $(@$refs.slider).slider
            uiLibrary: 'bootstrap4'
            min: @min
            max: @max
            slide: (e, value) =>
                ceiil = Math.ceil(value * .001) * 1000
                $(@$refs.money).maskMoney 'mask', ceiil
                @val = ceiil
                @$emit 'focus'
                @$emit 'input', @val
                yes
        yes

    props:
        error: String
        value:
            type: Number
            default: 0
        min:
            type: Number
            default: 0
        max:
            type: Number
            default: 0

    data: () ->
        val: 0
        error: ''

    methods:
        onInput: (e) ->
            value = e.target.value
                .replace /\s/g, ''
                .replace /\₽/g, ''
            # value = @min if value < @min
            # value = @max if value > @max
            @val = value
            @$emit 'input', @val
            yes

        onFocusOut: (e) ->
            value = e.target.value
                .replace /\s/g, ''
                .replace /\₽/g, ''
            value = @min if value < @min
            value = @max if value > @max
            @val = value
            $(@$refs.slider).slider().value @val
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