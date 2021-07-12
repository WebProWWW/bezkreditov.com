Fssp = {}

do ->

# ApiLoader
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    # /site/fssp-search
    class ApiLoader
        csrf: {}
        constructor: () ->
            csrfParam = $('meta[name="csrf-param"]').attr 'content'
            csrfToken = $('meta[name="csrf-token"]').attr 'content'
            @csrf = "#{csrfParam}": csrfToken
        load: ( action, data={} ) ->
            data = $.extend {}, @csrf, data
            $.ajax
                method: 'post'
                url: action
                data: data
                dataType: 'json'
            .done ( data ) =>
                # console.log data
                on
            .fail ( error ) =>
                # console.log  error
                on
            .always () =>
                on



    loader = new ApiLoader


    delay = ( ms, cb ) -> setTimeout cb, ms


# FsspSuccess
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


    FsspSuccess =
        template:'''
        <div class="row py-5">
            <div class="col-12 col-md-10 mx-auto">
                <p class="em-11 center">
                    <i class="i-check em-36 green"></i>
                    <br>
                    <br>
                    Запрос на получения информации успешно оформлен.
                    <br>
                    <br>
                    Проверка может занять несколько минут, как только отчет будет готов, мы отправим его на указанный вами E-mail.
                </p>
            </div>

            <div class="col-12"></div>

            <div class="col-auto mx-auto">
                <div class="btn btn-default" @click.prevent="$emit('new-search')">Новый запрос</div>
            </div>
        </div>
        '''

        props:
            input: Object
            email: String


# FsspError
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


    FsspError =
        template:'''
        <div class="row py-5">
            <div class="col-12 col-md-10 mx-auto">
                <p class="em-11 center">
                    <i class="i-ban em-36 red"></i>
                    <br>
                    <br>
                    При обработки запроса произошла ошибка
                    <br>
                    <br>
                    Пожалуйста, попробуйте позже.
                </p>
            </div>

            <div class="col-12"></div>

            <div class="col-auto mx-auto">
                <div class="btn btn-default" @click.prevent="$emit('new-search')">Поиск</div>
            </div>
        </div>
        '''

        props:
            input: Object


# FsspForm
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


    FsspForm =
        template:'''
        <div>
            <p class="em-11">Чтобы получить информацию об имеющихся задолженностях перед судебными приставами по исполнительным производствам необходимо заполнить форму ниже.</p>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-auto">
                    <label class="label mb-4 d-flex align-items-center">
                        <span class="d-block">
                            <input class="radio" type="radio" v-model="input.searchType.val" value="A" :disabled="loading">
                        </span>
                        <span class="d-block">
                            Поиск по базе физ лиц
                        </span>
                    </label>
                </div><!-- .col -->
                <div class="col-12 col-md-6 col-lg-auto">
                    <label class="label mb-4 d-flex align-items-center">
                        <span class="d-block">
                            <input class="radio" type="radio" v-model="input.searchType.val" value="B" :disabled="loading">
                        </span>
                        <span class="d-block">
                            Поиск по базе юр лиц
                        </span>
                    </label>
                </div><!-- .col -->
                <div class="col-12 col-md-6 col-lg-auto">
                    <label class="label mb-4 d-flex align-items-center">
                        <span class="d-block">
                            <input class="radio" type="radio" v-model="input.searchType.val" value="C" :disabled="loading">
                        </span>
                        <span class="d-block">
                            Поиск по базе исполнительных производств
                        </span>
                    </label>
                </div><!-- .col -->
            </div><!-- .row -->

            <div v-if="isSearchTypeA || isSearchTypeB">
                <label>Регион <span class="red">*</span></label>
                <select class="input" :class="{error: input.region.error}" v-model="input.region.val" @focus="input.region.error = ''" :disabled="loading">
                    <option disabled selected value="null">Регион</option>
                    <option v-for="option in input.region.options" :value="option.val">
                        {{option.txt}}
                    </option>
                </select>
                <span class="input-error" v-if="input.region.error">{{input.region.error}}</span>
            </div><!-- type -->


            <div class="row" v-if="isSearchTypeA">
                <div class="col-12 col-md-6">
                    <label>Имя <span class="red">*</span></label>
                    <input class="input" :class="{error: input.firstname.error}" type="text" v-model="input.firstname.val" @focus="input.firstname.error=''" :disabled="loading">
                    <span class="input-error" v-if="input.firstname.error">{{input.firstname.error}}</span>
                </div><!-- .col -->

                <div class="col-12 col-md-6">
                    <label>Фамилия <span class="red">*</span></label>
                    <input class="input" :class="{error: input.lastname.error}" type="text" v-model="input.lastname.val" @focus="input.lastname.error=''" :disabled="loading">
                    <span class="input-error" v-if="input.lastname.error">{{input.lastname.error}}</span>
                </div><!-- .col -->

                <div class="col-12 col-md-6">
                    <label>Отчество</label>
                    <input class="input" :class="{error: input.secondname.error}" type="text" v-model="input.secondname.val" @focus="input.secondname.error=''" :disabled="loading">
                    <span class="input-error" v-if="input.secondname.error">{{input.secondname.error}}</span>
                </div><!-- .col -->

                <div class="col-12 col-md-6">
                    <label>Дата рождения</label>
                    <input class="input" :class="{error: input.birthdate.error}" type="text" placeholder="дд.мм.гггг" v-model="input.birthdate.val" @focus="input.birthdate.error=''" readonly ref="date">
                    <span class="input-error" v-if="input.birthdate.error">{{input.birthdate.error}}</span>
                </div><!-- .col -->
            </div><!-- .row type -->

            <div v-if="isSearchTypeB">
                <label>Наименование предприятия <span class="red">*</span></label>
                <input class="input" :class="{error: input.name.error}" type="text" v-model="input.name.val" @focus="input.name.error=''" :disabled="loading">
                <span class="input-error" v-if="input.name.error">{{input.name.error}}</span>

                <label>Адрес предприятия - должника</label>
                <input class="input" :class="{error: input.address.error}" type="text" v-model="input.address.val" @focus="input.address.error=''" :disabled="loading">
                <span class="input-error" v-if="input.address.error">{{input.address.error}}</span>
            </div><!-- type -->

            <div v-if="isSearchTypeC">
                <label>Номер исполнительного производства <span class="red">*</span></label>
                <input class="input" :class="{error: input.number.error}" type="text" v-model="input.number.val" @focus="input.number.error=''" :disabled="loading">
                <span class="input-error" v-if="input.number.error">{{input.number.error}}</span>
            </div><!-- type -->

            <div class="row">
                <div class="col-12 col-md-6">
                    <label>E-mail <span class="red">*</span></label>
                    <input class="input" :class="{error: input.email.error}" type="text" v-model="input.email.val" @focus="input.email.error=''" :disabled="loading">
                    <span class="input-error" v-if="input.email.error">{{input.email.error}}</span>
                </div><!-- .col -->

                <div class="col-12 col-md-6">
                    <label>Телефон</label>
                    <input ref="inputPhone" class="input" :class="{error: input.phone.error}" type="text" v-model="input.phone.val" @focus="input.phone.error=''" :disabled="loading">
                    <span class="input-error" v-if="input.phone.error">{{input.phone.error}}</span>
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="btn btn-default" @click.prevent="submit">
                        <span v-if="!loading">Получить информацию</span>
                        <span v-else><img height="10" src="/img/loader.svg"></span>
                    </div>
                </div>
            </div>
        </div>
        '''

        props:
            input: Object

        mounted: ->
            $(@$refs.inputPhone).inputmask '+7-999-999-99-99',
                greedy: false
                oncomplete: (e) =>
                    @input.phone.val = $(e.target).val()
                    on
            $(@$refs.date).datepicker
                locale: 'ru-ru'
                format: 'dd.mm.yyyy'
            .on 'change', (e) =>
                @input.birthdate.val = e.target.value
                on
            on

        # components:

        data: ->
            loading: off

        methods:
            submit: (e) ->
                if !@loading
                    @loading = on
                    data = new Object
                    data["Fssp[#{name}]"] = input.val for name, input of @input
                    loader
                        .load(@$fsspAction, data)
                        .done (data) =>
                            if data?.success? and data.success is 1
                                email = @input.email.val
                                input.val = input.reset for name, input of @input
                                @$emit 'search-success', email
                            else
                                @addArrors(data)
                            on
                        .fail () =>
                            @$emit 'search-error'
                            on
                        .always () =>
                            @loading = off
                            on
                on
            addArrors: (errors) ->
                return on unless typeof errors is 'object'
                for name, error of errors
                    @input["#{name.substr(5)}"].error = error[0]
                on
        computed:
            isSearchTypeA: -> @input.searchType.val is 'A'
            isSearchTypeB: -> @input.searchType.val is 'B'
            isSearchTypeC: -> @input.searchType.val is 'C'


# Fssp
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


    Fssp =
        template: '''
        <div ref="container">
            <transition name="fade" mode="out-in">
                <component :is="view"
                    :input="input"
                    @search-success="searchSuccess"
                    @search-error="searchError"
                    @new-search="newSearch"
                ></component>
            </transition>
        </div>
        '''

        created: ->
            for option in @$region.options
                @input.region.options.push
                    val: option.code
                    txt: option.region_name
                @input.region.val = option.code if @$region.current.code is option.code
            on

        data: ->
            view: FsspForm
            email: ''
            input:
                # Тип поиска
                searchType:
                    val: 'A'
                    error: ''
                    reset: 'A'
                # Номер региона
                region:
                    val: null
                    error: ''
                    reset: null
                    options: []
                # Имя физического лица
                firstname:
                    val: ''
                    error: ''
                    reset: ''
                # Отчество физического лица
                secondname:
                    val: ''
                    error: ''
                    reset: ''
                # Фамилия физического лица
                lastname:
                    val: ''
                    error: ''
                    reset: ''
                # Дата рождения физического лица, в формате dd.mm.YYYY
                birthdate:
                    val: ''
                    error: ''
                    reset: ''
                # Имя юридического лица
                name:
                    val: ''
                    error: ''
                    reset: ''
                # Адрес юридического лица
                address:
                    val: ''
                    error: ''
                    reset: ''
                # Номер исполнительного производства в формате n…n/yy/dd/rr или n…n/yy/ddddd-ИП
                number:
                    val: ''
                    error: ''
                    reset: ''
                # Email
                email:
                    val: ''
                    error: ''
                    reset: ''
                # Телефон
                phone:
                    val: ''
                    error: ''
                    reset: ''

        methods:
            setView: (View) ->
                offsetTop = $(@$refs.container).offset().top - 30
                $('html:not(:animated),body:not(:animated)').animate scrollTop: offsetTop
                @view = View
                on
            searchSuccess: (@email) ->
                @setView FsspSuccess
                on
            searchError: () ->
                @setView FsspError
                on
            newSearch: (reset) ->
                @setView FsspForm
                on


# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    on