<template>
<div>

<div v-if="loading">
    <img class="img-center my-5" width="50" src="/img/loader.svg">
</div>

<div v-else-if="offer">
    <div class="row no-gutters align-items-center">
        <div class="col-auto mr-2">
            <img class="img img-circle" width="60" :src="logo">
        </div>
        <div class="col clip">
            <p class="clip fw-600 mb-1 em-11" v-html="title"></p>
            <p class="clip em-9">{{ offer.name }}</p>
        </div>
    </div>
    <div v-for="input, i in inputs">

        <label class="label" :for="inputId(i)">{{ input.label }}</label>

        <input-slider
            v-if="input.type === 'slider'"
            v-model="input.value"
            :min="minSum"
            :max="maxSum"
            :error="input.error"
            @focus="input.error = ''"
        />

        <input-phone
            v-if="input.type === 'phone'"
            v-model="input.value"
            :error="input.error"
            @focus="input.error = ''"
        />

        <input-only-text
            v-if="input.type === 'only-text'"
            v-model="input.value"
            :error="input.error"
            @focus="input.error = ''"
        />

        <input-date
            v-if="input.type === 'date'"
            v-model="input.value"
            :error="input.error"
            @focus="input.error = ''"
        />

        <input-passport
            v-if="input.type === 'passport'"
            v-model="input.value"
            :error="input.error"
            @focus="input.error = ''"
        />

        <div v-if="input.type === 'text'">
            <input class="input" :class="{error: input.error !== ''}" type="text" :id="inputId(i)" @focus="input.error = ''" v-model="input.value">
        </div>

        <div v-if="input.type === 'int'">
            <input class="input" :class="{error: input.error !== ''}" type="text" :id="inputId(i)" @focus="input.error = ''" v-model="input.value">
        </div>

        <div class="input-error" v-show="input.error !== ''">{{ input.error }}</div>

    </div>
    <div>
        <div class="btn-default" @click.prevent="send">
            <img width="50" src="/img/loader.svg" v-if="sending">
            <span v-else>Отправить заявку</span>
        </div>
    </div>
</div>

<div v-else-if="sendSuccess">
    <p class="center">
        Ваша заявка №&nbsp;<span class="em-13 fw-600">{{ requestId }}</span> успешно принята.
        <br>
        Специалист Банка позвонит Вам в течении 30 минут.
        <br>
        Пожалуйста, сохраните номер Ваши заявки.
    </p>
</div>

<div v-else>
    <p class="center">Предложение не найдено</p>
</div>

</div><!-- root -->
</template>

<!-- * * * * * * * * * * * * * * * CoffeeScript * * * * * * * * * * * * * * * -->
<script lang="coffee">

import InputSlider from './components/InputSlider.vue'
import InputPhone from './components/InputPhone.vue'
import InputOnlyText from './components/InputOnlyText.vue'
import InputDate from './components/InputDate.vue'
import InputPassport from './components/InputPassport.vue'

export default

    name: 'App'

    components: {
        InputSlider
        InputPhone
        InputOnlyText
        InputDate
        InputPassport
    }

    # beforeCreate: () ->

    created: () ->
        csrfParam = $('meta[name="csrf-param"]').attr 'content'
        csrfToken = $('meta[name="csrf-token"]').attr 'content'
        @csrf = "#{csrfParam}": csrfToken
        $(window).on 'vue-app-offer-load', (e, data) =>
            @sendSuccess = no
            # @id = data.id
            @offer  = null
            @inputs = null
            @minSum = data.minSum
            @maxSum = data.maxSum
            @title = data.title
            @logo = data.logo
            @load data.url
            yes
        yes

    # beforeMount: () ->

    # mounted: () ->

    # props:

    data: () ->
        minSum: 0
        maxSum: 0
        title: ''
        logo: ''
        loading: no
        offer: null
        inputs: null
        csrf: null
        sending: no
        sendSuccess: no

    methods:

        inputId: (i) ->
            "offer-input-#{i}"

        load: (url) ->
            @loading = yes
            $.get url
            .done (data) =>
                @offer = data.offer
                @inputs = data.inputs
                yes
            .fail () =>
                yes
            .always () =>
                @loading = no
                yes
            yes

        send: (e) ->
            @sending = yes
            postData = new Object
            postData["UnicomFormUniversal[#{name}]"] = input.value for name, input of @inputs
            postData["UnicomFormUniversal[offer]"] = @offer.id
            postData = $.extend {}, @csrf, postData
            $.post '/offer-send.json', postData
            .done (data) =>
                if data?.success? and data.success is 1
                    if data?.response?.id? and data?.response?.status is 'SENT'
                        @offer = null
                        @requestId = data.response.id
                        @sendSuccess = yes
                    return yes
                @addErrors data
                yes
            .fail () =>
                yes
            .always () =>
                @sending = no
                yes
            yes

        addErrors: (errors) ->
                return on unless typeof errors is 'object'
                for name, error of errors
                    inputName = name.substr 20
                    @inputs[inputName].error = error[0]
                on

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