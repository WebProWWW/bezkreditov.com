CostCalculator = {}

do ->

    # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    CostCalculator =
        template: '''
            <div>
                <div v-show="state === 1">
                    <div class="cart">
                        <div class="cart-body">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <label class="label">Общий размер долга</label>
                                    <input class="input" type="text" v-model="input.debtStr" ref="inputDebt">

                                    <label class="label">Регион проживания (прописки)</label>
                                    <select class="input" v-model="input.region.code">
                                        <option v-for="region in input.region.options" :value="region.code">{{ region.region_name }}</option>
                                    </select>

                                    <label class="label">Колличество кредитов, распиcок, поручительств</label>
                                    <input class="input" type="text" v-model="input.creditCount" ref="inputCount">
                                </div><!-- .col -->

                                <div class="col-12 col-lg-6">
                                    <div class="label">&nbsp;</div>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 col-sm">
                                            <p class="em-9 mb-2">Залоговое имущество, которое нужно продать (в том числе ипотечное):</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm-auto mb-2">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <label class="d-flex align-items-center m-0">
                                                        <span class="d-block mr-3">Есть</span>
                                                        <input class="radio" type="radio" value="1" v-model="input.quA">
                                                    </label>
                                                </div><!-- .col -->
                                                <div class="col-auto">
                                                    <label class="d-flex align-items-center m-0">
                                                        <span class="d-block mr-3">Нет</span>
                                                        <input class="radio" type="radio" value="0" v-model="input.quA">
                                                    </label>
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->

                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 col-sm">
                                            <p class="em-9 mb-2">Несовершеннолетние дети:</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm-auto mb-2">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <label class="d-flex align-items-center m-0">
                                                        <span class="d-block mr-3">Есть</span>
                                                        <input class="radio" type="radio" value="1" v-model="input.quB">
                                                    </label>
                                                </div><!-- .col -->
                                                <div class="col-auto">
                                                    <label class="d-flex align-items-center m-0">
                                                        <span class="d-block mr-3">Нет</span>
                                                        <input class="radio" type="radio" value="0" v-model="input.quB">
                                                    </label>
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->

                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 col-sm">
                                            <p class="em-9 mb-2">Крупные делки последние три года:</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm-auto mb-2">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <label class="d-flex align-items-center m-0">
                                                        <span class="d-block mr-3">Есть</span>
                                                        <input class="radio" type="radio" value="1" v-model="input.quC">
                                                    </label>
                                                </div><!-- .col -->
                                                <div class="col-auto">
                                                    <label class="d-flex align-items-center m-0">
                                                        <span class="d-block mr-3">Нет</span>
                                                        <input class="radio" type="radio" value="0" v-model="input.quC">
                                                    </label>
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <div class="row">
                                <div class="col-auto mx-auto">
                                    <div class="btn-default" @click.prevent="state = 2">Расчитать стоимость</div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div><!-- Form -->


                <div v-show="state === 2">
                    <div class="mb-4">
                        <div class="cart">
                            <div class="cart-body">
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <div class="logo logo-sm">
                                            <span class="logo-txt">Без кредитов</span>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                                <p class="center">Мы сделали предварительный расчет вашего банкротства исходя из данных:</p>
                                <div class="cart-divider"></div>
                                <p class="row">
                                    <span class="col-12 col-sm-6 fw-600 sm-right">Общий долг:</span>
                                    <span class="col-12 col-sm-6">{{ input.debtStr }}</span>
                                </p>
                                <p class="row">
                                    <span class="col-12 col-sm-6 fw-600 sm-right">Регион:</span>
                                    <span class="col-12 col-sm-6">{{ regionNane }}</span>
                                </p>
                                <p class="row">
                                    <span class="col-12 col-sm-6 fw-600 sm-right">Колличество кредитов:</span>
                                    <span class="col-12 col-sm-6">{{ input.creditCount }}</span>
                                </p>
                                <p class="row">
                                    <span class="col-12 col-sm-6 fw-600 sm-right">Залоговое имущество:</span>
                                    <span class="col-12 col-sm-6">{{ input.quA ? 'Есть' : 'Нет' }}</span>
                                </p>
                                <p class="row">
                                    <span class="col-12 col-sm-6 fw-600 sm-right">Несовершеннолетние дети:</span>
                                    <span class="col-12 col-sm-6">{{ input.quB ? 'Есть' : 'Нет' }}</span>
                                </p>
                                <p class="row">
                                    <span class="col-12 col-sm-6 fw-600 sm-right">Сделки за 3 года:</span>
                                    <span class="col-12 col-sm-6">{{ input.quC ? 'Есть' : 'Нет' }}</span>
                                </p>
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <div class="btn-default" @click.prevent="state = 1">Новый расчет</div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .cart-body -->
                        </div><!-- .cart -->
                    </div><!-- .mb-4 -->

                    <h2 class="h1 center">Предварительный расчет</h2>

                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="cart">
                                <div class="cart-body">
                                    <p class="center mt-auto">Предварительнася стоимость банкротства под ключ составит</p>
                                    <p class="center fw-600 em-13">104 999 рублей</p>
                                    <div class="row mt-auto">
                                        <div class="col-12 mx-auto">
                                            <div class="btn-default"><i class="i-download"></i> Сохранить расчет</div>
                                        </div>
                                    </div>
                                </div><!-- .cart-body -->
                            </div><!-- .cart -->
                        </div><!-- .col -->
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="cart">
                                <div class="cart-body">
                                    <p class="center fw-600 em-13 mt-auto">10 999 рублей в месяц!</p>
                                    <p class="center">Ваше банкротство в рассрочку на 12 месяцев</p>
                                    <div class="row mt-auto">
                                        <div class="col-12 mx-auto">
                                            <div class="btn-default">Получить консультацию</div>
                                        </div>
                                    </div>
                                </div><!-- .cart-body -->
                            </div><!-- .cart -->
                        </div><!-- .col -->
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="cart">
                                <div class="cart-body">
                                    <p class="center mt-auto">Хочу получить индивидуальную бесплатную консультацию юриста по банкротству</p>
                                    <div class="row mt-auto">
                                        <div class="col-12 mx-auto">
                                            <div class="btn-default">Получить консультацию</div>
                                        </div>
                                    </div>
                                </div><!-- .cart-body -->
                            </div><!-- .cart -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- Result -->

            </div><!-- root -->
        '''

        created: ->
            @city = window.appModel.city ?
                alias: ''
                id: ''
                name: ''
                region_code: ''
            @input.region.options = window.appModel.regions ?
                code: ''
                region_name: ''
            @input.region.code = @city.region_code
            yes

        mounted: ->
            $(@$refs.inputDebt).maskMoney
                suffix: ' ₽'
                thousands: ' '
                precision: 0
            $(@$refs.inputCount).inputmask
                alias: 'integer'
                allowMinus: false
                digits: 0
                rightAlign: off
            yes

        data: ->
            city: {}
            input:
                debtStr: '200 000 ₽'
                creditCount: 1
                quA: 1
                quB: 1
                quC: 0
                region:
                    code: ''
                    region_name: ''
                    options: []
            state: 1

        watch:
            'input.region.code': (val) ->
                @regionName = val
                @input.region.region_name = @regionNane
                yes

        computed:
            regionNane: ->
                name = ''
                for region in @input.region.options
                    name = region.region_name if region.code is @input.region.code
                name
