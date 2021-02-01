CostCalculator = {}

do ->

    # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    CostCalculator =
        template: '''
            <div>
                <div v-if="state === 1">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="mb-5">
                                <label class="label">Общий размер долга</label>
                                <input class="input" data-maskmoney type="text">
                            </div>

                            <label class="label">Колличество кредитов, распиcок, поручительств</label>
                            <input class="input" type="text">
                        </div><!-- .col -->

                        <div class="col-12 col-lg-6">
                            <div class="row align-items-center mb-3">
                                <div class="col-12 col-sm">
                                    <p class="em-9 mb-2">Залоговое имущество, которое нужно продать (в том числе ипотечное):</p>
                                </div><!-- .col -->
                                <div class="col-12 col-sm-auto mb-2">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Есть</span>
                                                <input class="radio" type="radio" name="radio-111">
                                            </label>
                                        </div><!-- .col -->
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Нет</span>
                                                <input class="radio" type="radio" name="radio-111">
                                            </label>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->

                            <div class="row align-items-center mb-3">
                                <div class="col-12 col-sm">
                                    <p class="em-9 mb-2">Несовершеннолетние дети:</p>
                                </div><!-- .col -->
                                <div class="col-12 col-sm-auto mb-2">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Есть</span>
                                                <input class="radio" type="radio" name="radio-222">
                                            </label>
                                        </div><!-- .col -->
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Нет</span>
                                                <input class="radio" type="radio" name="radio-222">
                                            </label>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->

                            <div class="row align-items-center mb-3">
                                <div class="col-12 col-sm">
                                    <p class="em-9 mb-2">Крупные делки последние три года:</p>
                                </div><!-- .col -->
                                <div class="col-12 col-sm-auto mb-2">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Есть</span>
                                                <input class="radio" type="radio" name="radio-333">
                                            </label>
                                        </div><!-- .col -->
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Нет</span>
                                                <input class="radio" type="radio" name="radio-333">
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
                </div><!-- Form -->


                <div v-if="state === 2">
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
                        <span class="col-12 col-sm-6">5 000 000 рублей</span>
                    </p>
                    <p class="row">
                        <span class="col-12 col-sm-6 fw-600 sm-right">Регион:</span>
                        <span class="col-12 col-sm-6">Москва и МО</span>
                    </p>
                    <p class="row">
                        <span class="col-12 col-sm-6 fw-600 sm-right">Колличество кредитов:</span>
                        <span class="col-12 col-sm-6">10</span>
                    </p>
                    <p class="row">
                        <span class="col-12 col-sm-6 fw-600 sm-right">Залоговое имущество:</span>
                        <span class="col-12 col-sm-6">Нет</span>
                    </p>
                    <p class="row">
                        <span class="col-12 col-sm-6 fw-600 sm-right">Несовершеннолетние дети:</span>
                        <span class="col-12 col-sm-6">Нет</span>
                    </p>
                    <p class="row">
                        <span class="col-12 col-sm-6 fw-600 sm-right">Сделки за 3 года:</span>
                        <span class="col-12 col-sm-6">Нет</span>
                    </p>
                    <div class="row">
                        <div class="col-auto mx-auto">
                            <div class="btn-default" @click.prevent="state = 1">Новый расчет</div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- Result -->

            </div><!-- root -->
        '''

        data: ->
            state: 1

    # # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    # TestQuestions =
    #     template: '''
    #     <div class="test">
    #         <div class="test-header">
    #             <div class="row">
    #                 <div class="col-12">
    #                     <h3 class="test-title">
    #                         Ответьте на 5 простых вопросов и получите
    #                         <br>
    #                         предварительное решение по списаниею ваших долгов.
    #                     </h3>
    #                 </div>
    #                 <!--
    #                 <div class="col-auto">
    #                     <p class="m-0">{{ steep }} / {{ steepTotal }}</p>
    #                 </div>
    #                 -->
    #             </div>
    #             <!--
    #             <span class="test-progress" :style="{ right: progress }"></span>
    #             -->
    #         </div>

    #         <p><em class="em-11">Вопрос {{ steep }}</em></p>

    #         <h3 class="mb-1">{{ item.title }}</h3>
    #         <p class="popup-desc">{{ item.desc }}</p>

    #         <label class="label mb-4 d-flex align-items-center" v-for="option in item.options">
    #             <span class="d-block">
    #                 <input class="radio" type="radio" v-model="item.value" :value="option">
    #             </span>
    #             <span class="d-block">
    #                 {{ option }}
    #             </span>
    #         </label>

    #         <div class="row no-gutters mt-4">
    #             <div class="col-12 col-sm-auto order-2 order-sm-1">
    #                 <span class="btn btn-sm" @click.prevent="back">
    #                     <span v-if="(steep === 1)">Закрыть</span>
    #                     <span v-else>
    #                         <i class="i-left em-8"></i>
    #                         Назад
    #                     </span>
    #                 </span>
    #             </div><!-- /.col -->
    #             <div class="col-12 col-sm-auto ml-auto order-1 order-sm-2">
    #                 <span class="btn btn-sm" @click.prevent="next">
    #                     Далее
    #                     <i class="i-right em-8"></i>
    #                 </span>
    #             </div><!-- /.col -->
    #         </div>
    #     </div>
    #     '''

    #     data: ->
    #         steep: 1
    #         steepTotal: 5
    #         items: [
    #             {
    #                 title: 'Какая общая сумма Вашего долга?'
    #                 desc: 'Выберите вариант нише и жмите на кнопку «Далее»'
    #                 value: '0 - 200 000 ₽'
    #                 options: [
    #                     '0 - 200 000 ₽'
    #                     '200 000 - 400 000 ₽'
    #                     '400 000 - 1 000 000 ₽'
    #                     '1 000 000 - 3 000 000 ₽'
    #                     'Более 3 000 000 ₽'
    #                 ]
    #             }
    #             {
    #                 title: 'Какой у Вас срок просрочки по кредитам и займам?'
    #                 value: '1 месяц'
    #                 options: [
    #                     '1 месяц'
    #                     '2 месяца'
    #                     '3 месяца'
    #                     '4 месяца и более'
    #                     'Нет'
    #                 ]
    #             }
    #             {
    #                 title: 'Есть ли у Вас в собственности автомобиль или квартира?'
    #                 value: 'Да, есть'
    #                 options: [
    #                     'Да, есть'
    #                     'Нет'
    #                 ]
    #             }
    #             {
    #                 title: 'Вы заключали сделки с недвижимостью или автомобилем за последние 3 года?'
    #                 value: 'Да'
    #                 options: [
    #                     'Да'
    #                     'Нет'
    #                 ]
    #             }
    #             {
    #                 title: 'Вы вносили хотя бы один ежемесячный платеж по кредитам или займам?'
    #                 value: 'Да'
    #                 options: [
    #                     'Да'
    #                     'Нет'
    #                 ]
    #             }
    #         ]

    #     methods:
    #         back: (e) ->
    #             $.fancybox.close yes if @steep is 1
    #             @steep-- if @steep > 1
    #             off
    #         next: (e) ->
    #             @$emit 'complete', @items if @steep is @steepTotal
    #             @steep++ if @steep < @steepTotal
    #             off


    #     computed:
    #         progress: ->
    #             "#{100 - @steep * 100 / @steepTotal}%"
    #         item: ->
    #             @items["#{@steep - 1}"]
    #         inputName: ->
    #             "questions[#{@steep - 1}]"


    # # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


    # TestPhone =
    #     template:'''
    #     <div>
    #         <h3>Благодарим за доверие! Результат готов.</h3>
    #         <p>Введите номер телефона и узнайте стоимость:</p>
    #         <p>Заявка на расчет стоимости ни к чему Вас не обязывает</p>
    #         <input
    #             ref="input"
    #             :class="{error: error}"
    #             :disabled="loading"
    #             @click="$emit('error-clear')"
    #             class="input"
    #             type="text"
    #             placeholder="Ваш номер телефона"
    #         >
    #         <span class="input-error" v-if="error">{{ error }}</span>
    #         <p class="em-9">Даю согласие на обработку своих персональных данных в соответствии с политикой конфиденциальности компании «Без Кредитов»</p>
    #         <div class="row mt-4">
    #             <div class="col-12 col-sm-6 ml-auto">
    #                 <span class="btn" @click.prevent="submit">
    #                     <span v-if="!loading">УЗНАТЬ СТОИМОСТЬ</span>
    #                     <span v-else><img height="8" src="/img/loader.svg"></span>
    #                 </span>
    #             </div><!-- /.col -->
    #         </div>
    #     </div>
    #     '''

    #     props:
    #         loading:
    #             type: Object
    #             default: off
    #         error:
    #             tyoe: String
    #             default: ''

    #     mounted: ->
    #         $(@$refs.input).inputmask '+7-999-999-99-99',
    #             greedy: false
    #             oncomplete: (e) =>
    #                 @phone = $(e.target).val()
    #                 on
    #         on

    #     data: ->
    #         phone: ''

    #     methods:
    #         submit: ->
    #             @$emit 'submit', @phone
    #             off


    # # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


    # TestSuccess =
    #     template:'''
    #     <div>
    #         <div class="text-center">
    #             <h3 class="">Спасибо вы успешно прошли тест!</h3>
    #             <p class="">Сегодня мы свяжемся с вами и поможем списать ваши долги</p>
    #         </div>
    #         <div class="row mt-4">
    #             <div class="col-12 col-sm">
    #                 <p class="text text-center">
    #                     А пока скачайте наш чек лист: <br>«Как общаться с коллекторами!»
    #                 </p>
    #             </div>
    #             <div class="col-12 col-sm-auto">
    #                 <span class="btn" @click="$emit('checklist')">СКАЧАТЬ ЧЕК-ЛИСТ</span>
    #             </div>
    #         </div>
    #         <!--
    #         <img @click.prevent="$emit('close')" class="popup-close" src="img/close.svg">
    #         -->
    #     </div>
    #     '''


    # # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


    # TestEmail =
    #     template:'''
    #     <div>
    #         <h3 class="test-title">
    #             <span class="em-11">Поздравляем!</span>
    #             <br>
    #             Вы успешно прошли онлайн - тест на списание всех ваших долгов!
    #         </h3>
    #         <p class="center">Предварительное решение о возможности списания всех ваших долгов мы пришлем вам на почту, для этого заполните поле ввода почты и нажмите кнопку «Получить мое решение»</p>
    #         <input
    #             v-model="email"
    #             :disabled="loading"
    #             :class="{error: error}"
    #             @click="$emit('error-clear')"
    #             class="input"
    #             type="text"
    #             placeholder="Ваша электронная почта"
    #         >
    #         <span class="input-error" v-if="error">{{ error }}</span>
    #         <label class="label d-flex align-items-center mb-4">
    #             <span class="d-block">
    #                 <input
    #                     class="checkbox"
    #                     type="checkbox"
    #                     :class="{error: acceptError}"
    #                     :disabled="loading"
    #                     v-model="accept"
    #                     @change="acceptError = false"
    #                 >
    #             </span>
    #             <span class="d-block em-9">Даю согласие на обработку своих персональных данных в соответствии с политикой конфиденциальности портала «Без Кредитов»</span>
    #         </label>
    #         <span class="input-error" v-if="acceptError">Подтвердите согласие на обработку своих персональных данных</span>
    #         <div class="row mt-4">
    #             <div class="col-12 col-sm-6 mx-auto">
    #                 <span class="btn" @click.prevent="submit">
    #                     <span v-if="!loading">Получить мое решение</span>
    #                     <span v-else><img height="8" src="/img/loader.svg"></span>
    #                 </span>
    #             </div><!-- /.col -->
    #         </div>
    #     </div>
    #     '''

    #     props:
    #         loading:
    #             type: Object
    #             default: off
    #         error:
    #             tyoe: String
    #             default: ''

    #     data: ->
    #         email: ''
    #         accept: off
    #         acceptError: off

    #     methods:
    #         submit: ->
    #             unless @accept
    #                 @acceptError = yes
    #                 return off
    #             @$emit 'submit', @email
    #             off

    # ###
    # TestEmail =
    #     template:'''
    #     <div>
    #         <h3 class="">Введите свой Email и мы отправим чек лист на почту</h3>
    #         <input
    #             v-model="email"
    #             :class="{error: error}"
    #             @click="$emit('error-clear')"
    #             class="input"
    #             type="text"
    #             placeholder="Email"
    #         >
    #         <span class="input-error" v-if="error">{{ error }}</span>
    #         <p class="em-9">Даю согласие на обработку своих персональных данных в соответствии с политикой конфиденциальности компании «Без Кредитов»</p>
    #         <div class="row mt-4">
    #             <div class="col-12 col-sm-6 ml-auto">
    #                 <span class="btn" @click.prevent="submit">
    #                     <span v-if="!loading">ОТПРАВИТЬ</span>
    #                     <span v-else><img height="8" src="/img/loader.svg"></span>
    #                 </span>
    #             </div><!-- /.col -->
    #         </div>
    #     </div>
    #     '''

    #     props:
    #         loading:
    #             type: Object
    #             default: off
    #         error:
    #             tyoe: String
    #             default: ''

    #     data: ->
    #         email: ''

    #     methods:
    #         submit: ->
    #             @$emit 'submit', @email
    #             # if @validate
    #             #     @$emit 'submit', @email
    #             # else
    #             #     @error = yes
    #             off

    #     # computed:
    #     #     validate: ->
    #     #         emailRe = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    #     #         emailRe.test @email
    # ###


    # # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


    # TestEmailSucess =
    #     template:'''
    #     <div class="center">
    #         <h3 class="">Данные успешно получены!</h3>
    #         <p class="">Предварительное решение о возможности списания всех ваших долгов мы пришлем вам на почту {{ email }}</p>
    #     </div>
    #     '''

    #     props:
    #         email:
    #             type: String
    #             default: ''

    # # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


    # Test =

    #     template: '''
    #     <div>
    #         <questions
    #             v-if="state === 1"
    #             @complete="questionsComplete"
    #         />
    #         <phone
    #             v-if="state === 2"
    #             :loading="process"
    #             :error="phoneErr"
    #             @error-clear="phoneErr = ''"
    #             @submit="phoneSubmit"
    #         />
    #         <success
    #             v-if="state === 3"
    #             @close="close"
    #             @checklist="state = 4"
    #         />
    #         <email
    #             v-if="state === 4"
    #             :loading="process"
    #             :error="emailErr"
    #             @error-clear="emailErr = ''"
    #             @submit="emailSubmit"
    #         />
    #         <esuccess
    #             v-if="state === 5"
    #             :email="email"
    #             @close="close(true)"
    #         />
    #     </div>
    #     '''

    #     components:
    #         'questions': TestQuestions
    #         'phone': TestPhone
    #         'success': TestSuccess
    #         'email': TestEmail
    #         'esuccess': TestEmailSucess

    #     data: ->
    #         state: 1
    #         comment: ''
    #         process: off
    #         phone: ''
    #         phoneErr: ''
    #         email: ''
    #         emailErr: ''

    #     methods:
    #         delay: (ms, cb) -> setTimeout cb, ms
    #         questionsComplete: (items) ->
    #             @comment += "<p>#{item.title}<br>#{item.value}</p>" for item in items
    #             @state = 4
    #             on
    #         phoneSubmit: (@phone) ->
    #             return on if @process
    #             @process = on
    #             sendData = {}
    #             sendData['FormCallback[phone]'] = @phone
    #             sendData['FormCallback[comment]'] = @comment
    #             csrfParam = $('meta[name="csrf-param"]').attr 'content'
    #             csrfToken = $('meta[name="csrf-token"]').attr 'content'
    #             @csrf = "#{csrfParam}": csrfToken
    #             sendData = $.extend {}, @csrf, sendData
    #             $.ajax
    #                 method: 'post'
    #                 url: @testCallback
    #                 data: sendData
    #             .done (data) =>
    #                 if data?.success? and data.success is 1
    #                     @state = 3
    #                 else
    #                     @phoneErr = data['formcallback-phone'][0] if data['formcallback-phone']?[0]?
    #                 on
    #             .fail (error) =>
    #                 on
    #             .always () =>
    #                 @process = off
    #                 on
    #             on
    #         emailSubmit: (@email) ->
    #             return on if @process
    #             @process = on
    #             sendData = {}
    #             sendData['FormTest[email]'] = @email
    #             sendData['FormTest[comment]'] = @comment
    #             csrfParam = $('meta[name="csrf-param"]').attr 'content'
    #             csrfToken = $('meta[name="csrf-token"]').attr 'content'
    #             @csrf = "#{csrfParam}": csrfToken
    #             sendData = $.extend {}, @csrf, sendData
    #             $.ajax
    #                 method: 'post'
    #                 url: @$action
    #                 data: sendData
    #             .done (data) =>
    #                 if data?.success? and data.success is 1
    #                     @state = 5
    #                     $(document).one 'afterClose.fb', (e) =>
    #                         @state = 1
    #                         @comment = ''
    #                         @email = ''
    #                         @phone = ''
    #                 else
    #                     @emailErr = data['formtest-email'][0] if data['formtest-email']?[0]?
    #                 on
    #             .fail (error) =>
    #                 on
    #             .always () =>
    #                 @process = off
    #                 on
    #             on


    # # * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *