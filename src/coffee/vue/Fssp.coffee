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
                    <input class="input" :class="{error: input.phone.error}" type="text" v-model="input.phone.val" @focus="input.phone.error=''" :disabled="loading">
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

            <p>
                Нажимая кнопку «Получить информацию», вы принимаете условия
                <br>
                <strong>
                    <a class="ln-black-primary td-line" @click.prevent href="">Политики обработки персональных данных.</a>
                </strong>
            </p>
        </div>
        '''

        props:
            input: Object

        mounted: ->
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
                        .load(@actionSearch, data)
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
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto">
                    <transition name="fade" mode="out-in">
                        <component :is="view"
                            :input="input"
                            @search-success="searchSuccess"
                            @search-error="searchError"
                            @new-search="newSearch"
                        ></component>
                    </transition>
                </div>
            </div>
        </div>
        '''

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
                    options: [
                        {val:1,txt:'Республике Адыгея'}
                        {val:2,txt:'Республике Башкортостан'}
                        {val:3,txt:'Республике Бурятия'}
                        {val:4,txt:'Республике Алтай'}
                        {val:5,txt:'Республике Дагестан'}
                        {val:6,txt:'Республике Ингушетия'}
                        {val:7,txt:'Кабардино-Балкарской Республике'}
                        {val:8,txt:'Республике Калмыкия'}
                        {val:9,txt:'Карачаево-Черкесской Республике '}
                        {val:10,txt:'Республике Карелия'}
                        {val:11,txt:'Республике Коми'}
                        {val:12,txt:'Республике Марий Эл'}
                        {val:13,txt:'Республике Мордовия'}
                        {val:14,txt:'Республике Саха (Якутия)'}
                        {val:15,txt:'Республике Северная Осетия – Алания'}
                        {val:16,txt:'Республике Татарстан'}
                        {val:17,txt:'Республике Тыва'}
                        {val:18,txt:'Удмуртской Республике'}
                        {val:19,txt:'Республике Хакасия'}
                        {val:20,txt:'Чеченской Республике'}
                        {val:21,txt:'Чувашской Республике'}
                        {val:22,txt:'Алтайскому краю'}
                        {val:23,txt:'Краснодарскому краю'}
                        {val:24,txt:'Красноярскому краю'}
                        {val:25,txt:'Приморскому краю'}
                        {val:26,txt:'Ставропольскому краю'}
                        {val:27,txt:'Хабаровскому краю и Еврейской АО'}
                        {val:28,txt:'Амурской области'}
                        {val:29,txt:'Архангельской области и Ненецкому АО'}
                        {val:30,txt:'Астраханской области'}
                        {val:31,txt:'Белгородской области'}
                        {val:32,txt:'Брянской области'}
                        {val:33,txt:'Владимирской области'}
                        {val:34,txt:'Волгоградской области'}
                        {val:35,txt:'Вологодской области'}
                        {val:36,txt:'Воронежской области'}
                        {val:37,txt:'Ивановской области'}
                        {val:38,txt:'Иркутской области'}
                        {val:39,txt:'Калининградской области'}
                        {val:40,txt:'Калужской области'}
                        {val:41,txt:'Камчатскому краю и Чукотскому АО'}
                        {val:42,txt:'Кемеровской области'}
                        {val:43,txt:'Кировской области'}
                        {val:44,txt:'Костромской области'}
                        {val:45,txt:'Курганской области'}
                        {val:46,txt:'Курской области'}
                        {val:47,txt:'Ленинградской области'}
                        {val:48,txt:'Липецкой области'}
                        {val:49,txt:'Магаданской области'}
                        {val:50,txt:'Московской области'}
                        {val:51,txt:'Мурманской области'}
                        {val:52,txt:'Нижегородской области'}
                        {val:53,txt:'Новгородской области'}
                        {val:54,txt:'Новосибирской области'}
                        {val:55,txt:'Омской области'}
                        {val:56,txt:'Оренбургской области'}
                        {val:57,txt:'Орловской области'}
                        {val:58,txt:'Пензенской области'}
                        {val:59,txt:'Пермскому краю'}
                        {val:60,txt:'Псковской области'}
                        {val:61,txt:'Ростовской области'}
                        {val:62,txt:'Рязанской области'}
                        {val:63,txt:'Самарской области'}
                        {val:64,txt:'Саратовской области'}
                        {val:65,txt:'Сахалинской области'}
                        {val:66,txt:'Свердловской области'}
                        {val:67,txt:'Смоленской области'}
                        {val:68,txt:'Тамбовской области'}
                        {val:69,txt:'Тверской области'}
                        {val:70,txt:'Томской области'}
                        {val:71,txt:'Тульской области'}
                        {val:72,txt:'Тюменской области'}
                        {val:73,txt:'Ульяновской области'}
                        {val:74,txt:'Челябинской области'}
                        {val:75,txt:'Забайкальскому краю'}
                        {val:76,txt:'Ярославской области'}
                        {val:77,txt:'Москве'}
                        {val:78,txt:'Санкт-Петербургу'}
                        {val:82,txt:'Республике Крым'}
                        {val:86,txt:'Ханты-Мансийскому АО – Югре'}
                        {val:89,txt:'Ямало-Ненецкому АО'}
                        {val:92,txt:'Севастополю'}
                    ]
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