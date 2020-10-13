Fssp = new Object
do ->


# ApiLoader
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    # /api/fssp-search
    # /api/fssp-status
    # /api/fssp-result
    class ApiLoader
        csrf: {}
        constructor: () ->
            csrfParam = $('meta[name="csrf-param"]').attr 'content'
            @csrf = "#{csrfParam}": $('meta[name="csrf-token"]').attr 'content'
        load: ( action, data={} ) ->
            data = $.extend {}, @csrf, data
            $.ajax
                method: 'post'
                url: "/api/fssp-#{action}.json"
                data: data
                dataType: 'json'
            .done ( data ) =>
                console.log data
                on
            .fail ( error ) =>
                console.log  error
                on
            .always () =>
                on


    loader = new ApiLoader


    delay = ( ms, cb ) -> setTimeout cb, ms




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
                            <input class="radio" type="radio" v-model="searchType" value="A">
                        </span>
                        <span class="d-block">Поиск по базе физ лиц</span>
                    </label>
                </div><!-- .col -->
                <div class="col-12 col-md-6 col-lg-auto">
                    <label class="label mb-4 d-flex align-items-center">
                        <span class="d-block">
                            <input class="radio" type="radio" v-model="searchType" value="B">
                        </span>
                        <span class="d-block">
                            Поиск по базе юр лиц
                        </span>
                    </label>
                </div><!-- .col -->
                <div class="col-12 col-md-6 col-lg-auto">
                    <label class="label mb-4 d-flex align-items-center">
                        <span class="d-block">
                            <input class="radio" type="radio" v-model="searchType" value="C">
                        </span>
                        <span class="d-block">
                            Поиск по базе исполнительных производств
                        </span>
                    </label>
                </div><!-- .col -->
            </div><!-- .row -->

            <div v-if="isSearchTypeA || isSearchTypeB">
                <label>Регион <span class="red">*</span></label>
                <select class="input">
                    <option>Город федирального значения Москва</option>
                    <option>Город федирального значения Москва</option>
                    <option>Город федирального значения Москва</option>
                    <option>Город федирального значения Москва</option>
                    <option>Город федирального значения Москва</option>
                    <option>Город федирального значения Москва</option>
                </select>
            </div><!-- type -->

            <div class="row" v-if="isSearchTypeA">
                <div class="col-12 col-md-6">
                    <label>Имя <span class="red">*</span></label>
                    <input class="input" type="text">
                </div><!-- .col -->

                <div class="col-12 col-md-6">
                    <label>Фамилия <span class="red">*</span></label>
                    <input class="input" type="text">
                </div><!-- .col -->

                <div class="col-12 col-md-6">
                    <label>Отчество</label>
                    <input class="input" type="text">
                </div><!-- .col -->

                <div class="col-12 col-md-6">
                    <label>Дата рождения</label>
                    <input class="input" type="text" placeholder="дд.мм.гггг">
                </div><!-- .col -->
            </div><!-- .row type -->

            <div v-if="isSearchTypeB">
                <label>Наименование предприятия <span class="red">*</span></label>
                <input class="input" type="text">

                <label>Адрес предприятия - должника</label>
                <input class="input" type="text">
            </div><!-- type -->

            <div v-if="isSearchTypeC">
                <label>Номер исполнительного производства <span class="red">*</span></label>
                <input class="input" type="text">

                <label>&nbsp;</label>
                <div class="input" style="visibility: hidden;">&nbsp;</div>
                <label>&nbsp;</label>
                <div class="input" style="visibility: hidden;">&nbsp;</div>
            </div><!-- type -->

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="btn btn-default" @click.prevent>Получить информацию</div>
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

        # components:

        data: ->
            loading: off
            error: ''
            searchType: 'A'

        methods:
            submit: ( e ) ->
                if @validate and !@loading
                    @loading = on
                    postData = new Object
                    for name, input of @inputs
                        postData[name] = input.value if input.type is 'text' or 'date'
                        postData[name] = input.value.val if input.type is 'select'
                    loader.load 'search', postData
                    .done ( data ) =>
                        @$emit 'search-success', data.response.task, @inputs
                        on
                    .always () =>
                        @loading = off
                        on
                on
        computed:
            isSearchTypeA: -> @searchType is 'A'
            isSearchTypeB: -> @searchType is 'B'
            isSearchTypeC: -> @searchType is 'C'
            validate: ->
                for input in @$refs.formInputs
                    console.log input
                off
                # res = yes
                # for input in @$refs.formInputs
                #     res = no unless input.validate?()
                # res


                # res = yes
                # return yes unless @input.required
                # res = no if @isText and String(@input.value).length < 1
                # res = no if @isDate and String(@input.value).length < 1
                # res = no if @isEmail and String(@input.value).length < 1
                # # res = no if @isPhone and String(@input.value).length < 1
                # if @isSelect
                #     res = no
                #     res = yes if @input.value.val? and String(@input.value.val).length > 1
                # @error = on unless res
                # res


# FsspStatus
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


    FsspStatus =
        template:'''
        <div>
            <div class="center">
                <h3 class="title-1 mb-4">Проверка данных</h3>
                <div class="mb-4" v-if="loading">
                    <img class="mb-3" src="/img/loader-blue.svg" height="10" alt="">
                    <div class="stext gray">Проверка занимает 2-10 минут, ожидайте.</div>
                </div>
                <p v-if="error" class="stext red">
                    Произошла ошибка. Повторите попытку позже
                    <br>
                    <a href @click.prevent="$emit('new-search')">Выполнить новый поиск</a>
                </p>
                <p class="title-3">Ваши данные для проверки по базе ФССП</p>
            </div>
            <div class="row" v-for="input in inputs">
                <div class="col-6">
                    <p class="text mb-3 bold right">{{ input.label }}:</p>
                </div>
                <div class="col-6">
                    <p v-if="( input.type === 'select' )" class="text mb-3">{{ input.value.txt }}</p>
                    <p v-else class="text mb-3">{{ input.value }}</p>
                </div>
            </div>
        </div>
        '''

        created: ->
            @checkStatus()
            on

        props:
            inputs: Object
            task: String

        data: ->
            loading: off
            error: off
            currentTry: 0
            delay: delay

        methods:
            checkStatus: ->
                @loading = on
                @currentTry++
                wait = 3000 * @currentTry
                wait = 30000 if wait > 30000
                @delay wait, () =>
                    loader.load 'status', task: @task
                    .done ( data ) =>
                        @loadResult() if data.response.status is 0
                        @checkStatus() if data.response.status is 2 and @currentTry < 50
                        on
                    .fail () =>
                        @error = on
                        @loading = off
                        on
                    on
                on
            loadResult: () ->
                loader.load 'result', task: @task
                .done ( data ) =>
                    @$emit 'status-success', data?.response?.result ? []
                    on
                .fail ( error ) =>
                    @error = on
                    on
                .always () =>
                    @loading = off
                    on


# FsspResult
# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


    FsspResult =
        template:'''
        <div>
            <div v-for="res in results">
                <p class="title-1">Результаты по данным<p>
                <p class="text">
                    {{ res.query.params.lastname }}
                    {{ res.query.params.firstname }}
                    {{ res.query.params.secondname }}
                    {{ res.query.params.birthdate }}
                </p>
                <div v-for="item, i in res.result">
                    <div class="wall-divider"></div>
                    <div class="wall-list">
                        <div class="text gray"># {{ i + 1 }}</div>
                        <span class="row mb-2">
                            <span class="col-12 col-md-5"><span class="stext bold mb-1 md-right">Должник</span></span>
                            <span class="col"><span class="stext mb-1">{{ item.name }}</span></span>
                        </span>
                        <span class="row mb-2">
                            <span class="col-12 col-md-5"><span class="stext bold mb-1 md-right">Исполнительное производство</span></span>
                            <span class="col">
                                <span class="stext mb-1">
                                    <span v-html="item.exe_production"></span>
                                </span>
                            </span>
                        </span>
                        <span class="row mb-2">
                            <span class="col-12 col-md-5"><span class="stext bold mb-1 md-right">Реквизиты исполнительного документа</span></span>
                            <span class="col">
                                <span class="stext mb-1">
                                    <span v-html="item.details"></span>
                                </span>
                            </span>
                        </span>
                        <span class="row mb-2">
                            <span class="col-12 col-md-5"><span class="stext bold mb-1 md-right">Предмет исполнения, сумма непогашенной задолженности</span></span>
                            <span class="col">
                                <span class="stext mb-1">
                                    <span v-html="item.subject"></span>
                                </span>
                            </span>
                        </span>
                        <span class="row mb-2">
                            <span class="col-12 col-md-5"><span class="stext bold mb-1 md-right">Отдел судебных приставов</span></span>
                            <span class="col">
                                <span class="stext mb-1">
                                    <span v-html="item.department"></span>
                                </span>
                            </span>
                        </span>
                        <span class="row mb-2">
                            <span class="col-12 col-md-5"><span class="stext bold mb-1 md-right">Судебный пристав-исполнитель</span></span>
                            <span class="col">
                                <span class="stext mb-1">
                                    <span v-html="item.bailiff"></span>
                                </span>
                            </span>
                        </span>
                        <span class="row mb-2">
                            <span class="col-12 col-md-5"><span class="stext bold mb-1 md-right">Дата, причина окончания или прекращения ИП</span></span>
                            <span class="col">
                                <span class="stext mb-1">
                                    <span v-html="convertString(item.ip_end)"></span>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>

            <p class="title-2 center" v-if="!results.length">
                <i class="icon-check-circle post-icon"></i>
                По вашему запросу ничего не найдено
            </p>

            <div class="row align-items-center mt-4">
                <div class="col-12 col-md-auto mx-auto">
                    <span class="btn btn-default" @click.prevent="$emit('new-search')">Выполнить новый поиск</span>
                </div>
            </div>
        </div>
        '''

        props:
            results: Array

        methods:
            convertString: (str) ->
                out = ''
                for text, index in str.split ','
                    out += switch index
                        when 0 then "#{text.replace /-/gi, '.'}<br>"
                        when 1 then "ст.#{text}&nbsp;"
                        when 2 then "ч.#{text}&nbsp;"
                        when 3 then "п.#{text}&nbsp;"
                        else text
                out


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
                            :task="task"
                            :results="results"
                            @search-success="searchSuccess"
                            @status-success="statusSuccess"
                            @new-search="newSearch"
                        ></component>
                    </transition>
                </div>
            </div>
        </div>
        '''

        data: ->
            view: FsspForm
            input:
                region:
                    required: yes
                    # value: { val: 34, txt: 'Волгоградская область' }
                    value: {}
                    options:
                        [
                            {val:22,txt:'Алтайский край'}
                            {val:28,txt:'Амурская область'}
                            {val:29,txt:'Архангельская область и Ненецкий АО'}
                            {val:30,txt:'Астраханская область'}
                            {val:31,txt:'Белгородская область'}
                            {val:32,txt:'Брянская область'}
                            {val:33,txt:'Владимирская область'}
                            {val:34,txt:'Волгоградская область'}
                            {val:35,txt:'Вологодская область'}
                            {val:36,txt:'Воронежская область'}
                            {val:75,txt:'Забайкальский край'}
                            {val:37,txt:'Ивановская область'}
                            {val:38,txt:'Иркутская область'}
                            {val:39,txt:'Калининградская область'}
                            {val:40,txt:'Калужская область'}
                            {val:41,txt:'Камчатский край'}
                            {val:42,txt:'Кемеровская область'}
                            {val:43,txt:'Кировская область'}
                            {val:44,txt:'Костромская область'}
                            {val:23,txt:'Краснодарский край'}
                            {val:24,txt:'Красноярский край'}
                            {val:45,txt:'Курганская область'}
                            {val:46,txt:'Курская область'}
                            {val:47,txt:'Ленинградская область'}
                            {val:48,txt:'Липецкой области'}
                            {val:49,txt:'Магаданская область'}
                            {val:77,txt:'Москва'}
                            {val:50,txt:'Московская область'}
                            {val:51,txt:'Мурманская область'}
                            {val:52,txt:'Нижегородская область'}
                            {val:53,txt:'Новгородская область'}
                            {val:54,txt:'Новосибирская область'}
                            {val:55,txt:'Омская область'}
                            {val:56,txt:'Оренбургская область'}
                            {val:57,txt:'Орловская область'}
                            {val:58,txt:'Пензенская область'}
                            {val:59,txt:'Пермский край'}
                            {val:25,txt:'Приморский край'}
                            {val:60,txt:'Псковская область'}
                            {val:1,txt:'Республика Адыгея'}
                            {val:4,txt:'Республика Алтай'}
                            {val:2,txt:'Республика Башкортостан'}
                            {val:3,txt:'Республика Бурятия'}
                            {val:5,txt:'Республика Дагестан'}
                            {val:6,txt:'Республика Ингушетия'}
                            {val:7,txt:'Республика Кабардино-Балкария'}
                            {val:8,txt:'Республика Калмыкия'}
                            {val:9,txt:'Республика Карачаево-Черкесская'}
                            {val:10,txt:'Республика Карелия'}
                            {val:11,txt:'Республика Коми'}
                            {val:82,txt:'Республика Крым'}
                            {val:12,txt:'Республика Марий Эл'}
                            {val:13,txt:'Республика Мордовия'}
                            {val:14,txt:'Республика Саха (Якутия)'}
                            {val:15,txt:'Республика Северная Осетия – Алания'}
                            {val:16,txt:'Республика Татарстан'}
                            {val:17,txt:'Республика Тыва'}
                            {val:18,txt:'Республика Удмуртия'}
                            {val:19,txt:'Республика Хакасия'}
                            {val:20,txt:'Республика Чеченя'}
                            {val:21,txt:'Республика Чувашия'}
                            {val:61,txt:'Ростовская область'}
                            {val:62,txt:'Рязанская область'}
                            {val:63,txt:'Самарская область'}
                            {val:78,txt:'Санкт-Петербургу'}
                            {val:64,txt:'Саратовская область'}
                            {val:65,txt:'Сахалинская область'}
                            {val:66,txt:'Свердловская область'}
                            {val:92,txt:'Севастополю'}
                            {val:67,txt:'Смоленская область'}
                            {val:26,txt:'Ставропольский край'}
                            {val:68,txt:'Тамбовская область'}
                            {val:69,txt:'Тверская область'}
                            {val:70,txt:'Томская область'}
                            {val:71,txt:'Тульская область'}
                            {val:72,txt:'Тюменская область'}
                            {val:73,txt:'Ульяновская область'}
                            {val:27,txt:'Хабаровский край и Еврейский АО'}
                            {val:86,txt:'Ханты-Мансийский АО – Югра'}
                            {val:74,txt:'Челябинская область'}
                            {val:87,txt:'Чукотский АО'}
                            {val:89,txt:'Ямало-Ненецкий АО'}
                            {val:76,txt:'Ярославская область'}
                        ]
                lastname:
                    type: 'text'
                    label: 'Фамилия'
                    placeholder: 'Иванов (пример)'
                    required: yes
                    # value: 'СОНИН'
                    value: ''
                firstname:
                    type: 'text'
                    label: 'Имя'
                    placeholder: 'Андрей (пример)'
                    required: yes
                    # value: 'АЛЕКСЕЙ'
                    value: ''
                secondname:
                    type: 'text'
                    label: 'Отчество'
                    placeholder: 'Генадьевич (пример)'
                    # value: 'ВИКТОРОВИЧ'
                    value: ''
                birthdate:
                    type: 'date'
                    label: 'Дата рождения'
                    placeholder: 'дд.мм.гггг'
                    required: yes
                    # value: '21.12.1985'
                    value: ''
                email:
                    type: 'email'
                    label: 'Ваш e-mail'
                    placeholder: 'E-mail'
                    required: yes
                    # value: '21.12.1985'
                    value: ''
                phone:
                    type: 'phone'
                    label: 'Ваш телефон'
                    placeholder: ''
                    # value: '21.12.1985'
                    value: ''
            task: ''
            results: []

        methods:
            setView: ( View ) ->
                offsetTop = $(@$refs.container).offset().top - 15
                $('html:not(:animated),body:not(:animated)').animate scrollTop: offsetTop
                @view = View
                on
            searchSuccess: ( @task ) ->
                @setView FsspStatus
                on
            statusSuccess: ( @results ) ->
                @setView FsspResult
                on
            newSearch: ->
                @setView FsspForm


# * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    on