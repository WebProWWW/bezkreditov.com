<template>
<div>

<input
    ref="input"
    type="text"
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

    name: 'InputDate'

    # components: {}

    # beforeCreate: () ->

    # created: () ->

    # beforeMount: () ->

    mounted: () ->
        @val = @value
        $(@$refs.input).inputmask '99.99.9999', placeholder: 'дд.мм.гггг'
        # date = new Date()
        # y = date.getFullYear() - 16
        # m = date.getMonth()
        # d = date.getDate()
        # maxDate = new Date(y, m, d)
        # $(@$refs.input).datepicker
        #     locale: 'ru-ru'
        #     format: 'dd.mm.yyyy'
        #     maxDate: maxDate
        #     showOtherMonths: off
        #     selectOtherMonths: off
        #     open: (e) =>
        #         console.log e
        #     # value: "#{d}.#{m}.#{y}"
        #     change: @onInput
        yes

    props:
        error: String
        value: String

    data: () ->
        val: ''

    methods:
        onInput: (e) ->
            $target = $ e.target
            if $target.inputmask('isComplete')
                @$emit 'input', $target.val()
            else
                @$emit 'input', ''
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