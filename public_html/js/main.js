/*!
 * @author Timur Valiyev
 * @link https://webprowww.github.io
 */
"use strict";function _typeof(n){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(n){return typeof n}:function(n){return n&&"function"==typeof Symbol&&n.constructor===Symbol&&n!==Symbol.prototype?"symbol":typeof n})(n)}function _defineProperty(n,e,t){return e in n?Object.defineProperty(n,e,{value:t,enumerable:!0,configurable:!0,writable:!0}):n[e]=t,n}function _classCallCheck(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}function _defineProperties(n,e){for(var t=0;t<e.length;t++){var s=e[t];s.enumerable=s.enumerable||!1,s.configurable=!0,"value"in s&&(s.writable=!0),Object.defineProperty(n,s.key,s)}}function _createClass(n,e,t){return e&&_defineProperties(n.prototype,e),t&&_defineProperties(n,t),n}(function(){var t,s,n,e,r,a;(function(){var t=new(function(){var n=function(){function t(){var n,e;_classCallCheck(this,t),n=$('meta[name="csrf-param"]').attr("content"),e=$('meta[name="csrf-token"]').attr("content"),this.csrf=_defineProperty({},"".concat(n),e)}return _createClass(t,[{key:"load",value:function(n,e){var t=1<arguments.length&&void 0!==e?e:{},t=$.extend({},this.csrf,t);return $.ajax({method:"post",url:n,data:t,dataType:"json"}).done(function(n){return!0}).fail(function(n){return!0}).always(function(){return!0})}}]),t}();return n.prototype.csrf={},n}.call(this)),e={template:'<div class="row py-5">\n    <div class="col-12 col-md-10 mx-auto">\n        <p class="em-11 center">\n            <i class="i-check em-36 green"></i>\n            <br>\n            <br>\n            Запрос на получения информации успешно оформлен.\n            <br>\n            <br>\n            Проверка может занять несколько минут, как только отчет будет готов, мы отправим его на указанный вами E-mail.\n        </p>\n    </div>\n\n    <div class="col-12"></div>\n\n    <div class="col-auto mx-auto">\n        <div class="btn btn-default" @click.prevent="$emit(\'new-search\')">Новый запрос</div>\n    </div>\n</div>',props:{input:Object,email:String}},n={template:'<div class="row py-5">\n    <div class="col-12 col-md-10 mx-auto">\n        <p class="em-11 center">\n            <i class="i-ban em-36 red"></i>\n            <br>\n            <br>\n            При обработки запроса произошла ошибка\n            <br>\n            <br>\n            Пожалуйста, попробуйте позже.\n        </p>\n    </div>\n\n    <div class="col-12"></div>\n\n    <div class="col-auto mx-auto">\n        <div class="btn btn-default" @click.prevent="$emit(\'new-search\')">Поиск</div>\n    </div>\n</div>',props:{input:Object}},s={template:'<div>\n    <p class="em-11">Чтобы получить информацию об имеющихся задолженностях перед судебными приставами по исполнительным производствам необходимо заполнить форму ниже.</p>\n\n    <div class="row">\n        <div class="col-12 col-md-6 col-lg-auto">\n            <label class="label mb-4 d-flex align-items-center">\n                <span class="d-block">\n                    <input class="radio" type="radio" v-model="input.searchType.val" value="A" :disabled="loading">\n                </span>\n                <span class="d-block">\n                    Поиск по базе физ лиц\n                </span>\n            </label>\n        </div>\x3c!-- .col --\x3e\n        <div class="col-12 col-md-6 col-lg-auto">\n            <label class="label mb-4 d-flex align-items-center">\n                <span class="d-block">\n                    <input class="radio" type="radio" v-model="input.searchType.val" value="B" :disabled="loading">\n                </span>\n                <span class="d-block">\n                    Поиск по базе юр лиц\n                </span>\n            </label>\n        </div>\x3c!-- .col --\x3e\n        <div class="col-12 col-md-6 col-lg-auto">\n            <label class="label mb-4 d-flex align-items-center">\n                <span class="d-block">\n                    <input class="radio" type="radio" v-model="input.searchType.val" value="C" :disabled="loading">\n                </span>\n                <span class="d-block">\n                    Поиск по базе исполнительных производств\n                </span>\n            </label>\n        </div>\x3c!-- .col --\x3e\n    </div>\x3c!-- .row --\x3e\n\n    <div v-if="isSearchTypeA || isSearchTypeB">\n        <label>Регион <span class="red">*</span></label>\n        <select class="input" :class="{error: input.region.error}" v-model="input.region.val" @focus="input.region.error = \'\'" :disabled="loading">\n            <option disabled selected value="null">Регион</option>\n            <option v-for="option in input.region.options" :value="option.val">\n                {{option.txt}}\n            </option>\n        </select>\n        <span class="input-error" v-if="input.region.error">{{input.region.error}}</span>\n    </div>\x3c!-- type --\x3e\n\n\n    <div class="row" v-if="isSearchTypeA">\n        <div class="col-12 col-md-6">\n            <label>Имя <span class="red">*</span></label>\n            <input class="input" :class="{error: input.firstname.error}" type="text" v-model="input.firstname.val" @focus="input.firstname.error=\'\'" :disabled="loading">\n            <span class="input-error" v-if="input.firstname.error">{{input.firstname.error}}</span>\n        </div>\x3c!-- .col --\x3e\n\n        <div class="col-12 col-md-6">\n            <label>Фамилия <span class="red">*</span></label>\n            <input class="input" :class="{error: input.lastname.error}" type="text" v-model="input.lastname.val" @focus="input.lastname.error=\'\'" :disabled="loading">\n            <span class="input-error" v-if="input.lastname.error">{{input.lastname.error}}</span>\n        </div>\x3c!-- .col --\x3e\n\n        <div class="col-12 col-md-6">\n            <label>Отчество</label>\n            <input class="input" :class="{error: input.secondname.error}" type="text" v-model="input.secondname.val" @focus="input.secondname.error=\'\'" :disabled="loading">\n            <span class="input-error" v-if="input.secondname.error">{{input.secondname.error}}</span>\n        </div>\x3c!-- .col --\x3e\n\n        <div class="col-12 col-md-6">\n            <label>Дата рождения</label>\n            <input class="input" :class="{error: input.birthdate.error}" type="text" placeholder="дд.мм.гггг" v-model="input.birthdate.val" @focus="input.birthdate.error=\'\'" readonly ref="date">\n            <span class="input-error" v-if="input.birthdate.error">{{input.birthdate.error}}</span>\n        </div>\x3c!-- .col --\x3e\n    </div>\x3c!-- .row type --\x3e\n\n    <div v-if="isSearchTypeB">\n        <label>Наименование предприятия <span class="red">*</span></label>\n        <input class="input" :class="{error: input.name.error}" type="text" v-model="input.name.val" @focus="input.name.error=\'\'" :disabled="loading">\n        <span class="input-error" v-if="input.name.error">{{input.name.error}}</span>\n\n        <label>Адрес предприятия - должника</label>\n        <input class="input" :class="{error: input.address.error}" type="text" v-model="input.address.val" @focus="input.address.error=\'\'" :disabled="loading">\n        <span class="input-error" v-if="input.address.error">{{input.address.error}}</span>\n    </div>\x3c!-- type --\x3e\n\n    <div v-if="isSearchTypeC">\n        <label>Номер исполнительного производства <span class="red">*</span></label>\n        <input class="input" :class="{error: input.number.error}" type="text" v-model="input.number.val" @focus="input.number.error=\'\'" :disabled="loading">\n        <span class="input-error" v-if="input.number.error">{{input.number.error}}</span>\n    </div>\x3c!-- type --\x3e\n\n    <div class="row">\n        <div class="col-12 col-md-6">\n            <label>E-mail <span class="red">*</span></label>\n            <input class="input" :class="{error: input.email.error}" type="text" v-model="input.email.val" @focus="input.email.error=\'\'" :disabled="loading">\n            <span class="input-error" v-if="input.email.error">{{input.email.error}}</span>\n        </div>\x3c!-- .col --\x3e\n\n        <div class="col-12 col-md-6">\n            <label>Телефон</label>\n            <input ref="inputPhone" class="input" :class="{error: input.phone.error}" type="text" v-model="input.phone.val" @focus="input.phone.error=\'\'" :disabled="loading">\n            <span class="input-error" v-if="input.phone.error">{{input.phone.error}}</span>\n        </div>\x3c!-- .col --\x3e\n    </div>\x3c!-- .row --\x3e\n\n    <div class="row">\n        <div class="col-12 col-md-6">\n            <div class="btn btn-default" @click.prevent="submit">\n                <span v-if="!loading">Получить информацию</span>\n                <span v-else><img height="10" src="/img/loader.svg"></span>\n            </div>\n        </div>\n    </div>\n\n    <p>\n        Нажимая кнопку «Получить информацию», вы принимаете условия\n        <br>\n        <strong>\n            <a class="ln-black-primary td-line" @click.prevent href="">Политики обработки персональных данных.</a>\n        </strong>\n    </p>\n</div>',props:{input:Object},mounted:function(){var e=this;return $(this.$refs.inputPhone).inputmask("+7-999-999-99-99",{greedy:!1,oncomplete:function(n){return e.input.phone.val=$(n.target).val(),!0}}),$(this.$refs.date).datepicker({locale:"ru-ru",format:"dd.mm.yyyy"}).on("change",function(n){return e.input.birthdate.val=n.target.value,!0}),!0},data:function(){return{loading:!1}},methods:{submit:function(){var n,s,r,e,a=this;if(!this.loading){for(r in this.loading=!0,n=new Object,e=this.input)s=e[r],n["Fssp[".concat(r,"]")]=s.val;t.load(this.actionSearch,n).done(function(n){var e,t;if(null!=(null!=n?n.success:void 0)&&1===n.success){for(r in e=a.input.email.val,t=a.input)(s=t[r]).val=s.reset;a.$emit("search-success",e)}else a.addArrors(n);return!0}).fail(function(){return a.$emit("search-error"),!0}).always(function(){return!(a.loading=!1)})}return!0},addArrors:function(n){var e,t;if("object"!==_typeof(n))return!0;for(t in n)e=n[t],this.input["".concat(t.substr(5))].error=e[0];return!0}},computed:{isSearchTypeA:function(){return"A"===this.input.searchType.val},isSearchTypeB:function(){return"B"===this.input.searchType.val},isSearchTypeC:function(){return"C"===this.input.searchType.val}}};a={template:'<div ref="container">\n    <div class="row">\n        <div class="col-12 col-xl-10 mx-auto">\n            <transition name="fade" mode="out-in">\n                <component :is="view"\n                    :input="input"\n                    @search-success="searchSuccess"\n                    @search-error="searchError"\n                    @new-search="newSearch"\n                ></component>\n            </transition>\n        </div>\n    </div>\n</div>',created:function(){for(var n,e=this.$region.options,t=0,s=e.length;t<s;t++)n=e[t],this.input.region.options.push({val:n.code,txt:n.name}),this.$region.current.id===n.id&&(this.input.region.val=n.code);return!0},data:function(){return{view:s,email:"",input:{searchType:{val:"A",error:"",reset:"A"},region:{val:null,error:"",reset:null,options:[]},firstname:{val:"",error:"",reset:""},secondname:{val:"",error:"",reset:""},lastname:{val:"",error:"",reset:""},birthdate:{val:"",error:"",reset:""},name:{val:"",error:"",reset:""},address:{val:"",error:"",reset:""},number:{val:"",error:"",reset:""},email:{val:"",error:"",reset:""},phone:{val:"",error:"",reset:""}}}},methods:{setView:function(n){var e=$(this.$refs.container).offset().top-30;return $("html:not(:animated),body:not(:animated)").animate({scrollTop:e}),this.view=n,!0},searchSuccess:function(n){return this.email=n,this.setView(e),!0},searchError:function(){return this.setView(n),!0},newSearch:function(){return this.setView(s),!0}}}})(),n={template:'<div>\n    <h3>Благодарим за доверие! Результат готов.</h3>\n    <p>Введите номер телефона и узнайте стоимость:</p>\n    <p>Заявка на расчет стоимости ни к чему Вас не обязывает</p>\n    <input\n        ref="input"\n        :class="{error: error}"\n        :disabled="loading"\n        @click="$emit(\'error-clear\')"\n        class="input"\n        type="text"\n        placeholder="Ваш номер телефона"\n    >\n    <span class="input-error" v-if="error">{{ error }}</span>\n    <p class="em-9">Даю согласие на обработку своих персональных данных в соответствии с политикой конфиденциальности компании «Без Кредитов»</p>\n    <div class="row mt-4">\n        <div class="col-12 col-sm-6 ml-auto">\n            <span class="btn" @click.prevent="submit">\n                <span v-if="!loading">УЗНАТЬ СТОИМОСТЬ</span>\n                <span v-else><img height="8" src="/img/loader.svg"></span>\n            </span>\n        </div>\x3c!-- /.col --\x3e\n    </div>\n</div>',props:{loading:{type:Object,default:!1},error:{tyoe:String,default:""}},mounted:function(){var e=this;return $(this.$refs.input).inputmask("+7-999-999-99-99",{greedy:!1,oncomplete:function(n){return e.phone=$(n.target).val(),!0}}),!0},data:function(){return{phone:""}},methods:{submit:function(){return this.$emit("submit",this.phone),!1}}},e={template:'<div>\n    <h3 class="test-title">\n        <span class="em-11">Поздравляем!</span>\n        <br>\n        Вы успешно прошли онлайн - тест на списание всех ваших долгов!\n    </h3>\n    <p class="center">Предварительное решение о возможности списания всех ваших долгов мы пришлем вам на почту, для этого заполните поле ввода почты и нажмите кнопку «Получить мое решение»</p>\n    <input\n        v-model="email"\n        :disabled="loading"\n        :class="{error: error}"\n        @click="$emit(\'error-clear\')"\n        class="input"\n        type="text"\n        placeholder="Ваша электронная почта"\n    >\n    <span class="input-error" v-if="error">{{ error }}</span>\n    <label class="label d-flex align-items-center mb-4">\n        <span class="d-block">\n            <input\n                class="checkbox"\n                type="checkbox"\n                :class="{error: acceptError}"\n                :disabled="loading"\n                v-model="accept"\n                @change="acceptError = false"\n            >\n        </span>\n        <span class="d-block em-9">Даю согласие на обработку своих персональных данных в соответствии с политикой конфиденциальности портала «Без Кредитов»</span>\n    </label>\n    <span class="input-error" v-if="acceptError">Подтвердите согласие на обработку своих персональных данных</span>\n    <div class="row mt-4">\n        <div class="col-12 col-sm-6 mx-auto">\n            <span class="btn" @click.prevent="submit">\n                <span v-if="!loading">Получить мое решение</span>\n                <span v-else><img height="8" src="/img/loader.svg"></span>\n            </span>\n        </div>\x3c!-- /.col --\x3e\n    </div>\n</div>',props:{loading:{type:Object,default:!1},error:{tyoe:String,default:""}},data:function(){return{email:"",accept:!1,acceptError:!1}},methods:{submit:function(){return this.accept?(this.$emit("submit",this.email),!1):!(this.acceptError=!0)}}},r={template:'<div class="center">\n    <h3 class="">Данные успешно получены!</h3>\n    <p class="">Предварительное решение о возможности списания всех ваших долгов мы пришлем вам на почту {{ email }}</p>\n</div>',props:{email:{type:String,default:""}}},s={template:'<div>\n    <questions\n        v-if="state === 1"\n        @complete="questionsComplete"\n    />\n    <phone\n        v-if="state === 2"\n        :loading="process"\n        :error="phoneErr"\n        @error-clear="phoneErr = \'\'"\n        @submit="phoneSubmit"\n    />\n    <success\n        v-if="state === 3"\n        @close="close"\n        @checklist="state = 4"\n    />\n    <email\n        v-if="state === 4"\n        :loading="process"\n        :error="emailErr"\n        @error-clear="emailErr = \'\'"\n        @submit="emailSubmit"\n    />\n    <esuccess\n        v-if="state === 5"\n        :email="email"\n        @close="close(true)"\n    />\n</div>',components:{questions:{template:'<div class="test">\n    <div class="test-header">\n        <div class="row">\n            <div class="col-12">\n                <h3 class="test-title">\n                    Ответьте на 5 простых вопросов и получите\n                    <br>\n                    предварительное решение по списаниею ваших долгов.\n                </h3>\n            </div>\n            \x3c!--\n            <div class="col-auto">\n                <p class="m-0">{{ steep }} / {{ steepTotal }}</p>\n            </div>\n            --\x3e\n        </div>\n        \x3c!--\n        <span class="test-progress" :style="{ right: progress }"></span>\n        --\x3e\n    </div>\n\n    <p><em class="em-11">Вопрос {{ steep }}</em></p>\n\n    <h3 class="mb-1">{{ item.title }}</h3>\n    <p class="popup-desc">{{ item.desc }}</p>\n\n    <label class="label mb-4 d-flex align-items-center" v-for="option in item.options">\n        <span class="d-block">\n            <input class="radio" type="radio" v-model="item.value" :value="option">\n        </span>\n        <span class="d-block">\n            {{ option }}\n        </span>\n    </label>\n\n    <div class="row no-gutters mt-4">\n        <div class="col-12 col-sm-auto order-2 order-sm-1">\n            <span class="btn btn-sm" @click.prevent="back">\n                <span v-if="(steep === 1)">Закрыть</span>\n                <span v-else>\n                    <i class="i-left em-8"></i>\n                    Назад\n                </span>\n            </span>\n        </div>\x3c!-- /.col --\x3e\n        <div class="col-12 col-sm-auto ml-auto order-1 order-sm-2">\n            <span class="btn btn-sm" @click.prevent="next">\n                Далее\n                <i class="i-right em-8"></i>\n            </span>\n        </div>\x3c!-- /.col --\x3e\n    </div>\n</div>',data:function(){return{steep:1,steepTotal:5,items:[{title:"Какая общая сумма Вашего долга?",desc:"Выберите вариант нише и жмите на кнопку «Далее»",value:"0 - 200 000",options:["0 - 200 000","200 000 - 400 000","400 000 - 1 000 000","1 000 000 - 3 000 000","Более 3 000 000"]},{title:"Какой у Вас срок просрочки по кредитам и займам?",value:"1 месяц",options:["1 месяц","2 месяца","3 месяца","4 месяца и более","Нет"]},{title:"Есть ли у Вас в собственности автомобиль или квартира?",value:"Да, есть",options:["Да, есть","Нет"]},{title:"Вы заключали сделки с недвижимостью или автомобилем за последние 3 года?",value:"Да",options:["Да","Нет"]},{title:"Вы вносили хотя бы один ежемесячный платеж по кредитам или займам?",value:"Да",options:["Да","Нет"]}]}},methods:{back:function(){return 1===this.steep&&$.fancybox.close(!0),1<this.steep&&this.steep--,!1},next:function(){return this.steep===this.steepTotal&&this.$emit("complete",this.items),this.steep<this.steepTotal&&this.steep++,!1}},computed:{progress:function(){return"".concat(100-100*this.steep/this.steepTotal,"%")},item:function(){return this.items["".concat(this.steep-1)]},inputName:function(){return"questions[".concat(this.steep-1,"]")}}},phone:n,success:{template:'<div>\n    <div class="text-center">\n        <h3 class="">Спасибо вы успешно прошли тест!</h3>\n        <p class="">Сегодня мы свяжемся с вами и поможем списать ваши долги</p>\n    </div>\n    <div class="row mt-4">\n        <div class="col-12 col-sm">\n            <p class="text text-center">\n                А пока скачайте наш чек лист: <br>«Как общаться с коллекторами!»\n            </p>\n        </div>\n        <div class="col-12 col-sm-auto">\n            <span class="btn" @click="$emit(\'checklist\')">СКАЧАТЬ ЧЕК-ЛИСТ</span>\n        </div>\n    </div>\n    \x3c!--\n    <img @click.prevent="$emit(\'close\')" class="popup-close" src="img/close.svg">\n    --\x3e\n</div>'},email:e,esuccess:r},data:function(){return{state:1,comment:"",process:!1,phone:"",phoneErr:"",email:"",emailErr:""}},methods:{delay:function(n,e){return setTimeout(e,n)},questionsComplete:function(n){for(var e,t=0,s=n.length;t<s;t++)e=n[t],this.comment+="<p>".concat(e.title,"<br>").concat(e.value,"</p>");return this.state=4,!0},phoneSubmit:function(n){var e,t,s,r=this;return this.phone=n,this.process||(this.process=!0,(s={})["FormCallback[phone]"]=this.phone,s["FormCallback[comment]"]=this.comment,e=$('meta[name="csrf-param"]').attr("content"),t=$('meta[name="csrf-token"]').attr("content"),this.csrf=_defineProperty({},"".concat(e),t),s=$.extend({},this.csrf,s),$.ajax({method:"post",url:this.testCallback,data:s}).done(function(n){var e;return null!=(null!=n?n.success:void 0)&&1===n.success?r.state=3:null!=(null!=(e=n["formcallback-phone"])?e[0]:void 0)&&(r.phoneErr=n["formcallback-phone"][0]),!0}).fail(function(n){return!0}).always(function(){return!(r.process=!1)})),!0},emailSubmit:function(n){var e,t,s,r=this;return this.email=n,this.process||(this.process=!0,(s={})["FormEmail[email]"]=this.email,s["FormEmail[comment]"]=this.comment,e=$('meta[name="csrf-param"]').attr("content"),t=$('meta[name="csrf-token"]').attr("content"),this.csrf=_defineProperty({},"".concat(e),t),s=$.extend({},this.csrf,s),$.ajax({method:"post",url:this.testSend,data:s}).done(function(n){var e;return null!=(null!=n?n.success:void 0)&&1===n.success?(r.state=5,$(document).one("afterClose.fb",function(n){return r.state=1,r.comment="",r.email="",r.phone=""})):null!=(null!=(e=n["formemail-email"])?e[0]:void 0)&&(r.emailErr=n["formemail-email"][0]),!0}).fail(function(n){return!0}).always(function(){return!(r.process=!1)})),!0}}},Vue.config.productionTip=!1,$(".js-vue-app-fssp").each(function(n,e){var t=$(e),s=t.data("region"),r=t.data("action-search");return Vue.prototype.actionSearch=null!=r?r:"",Vue.prototype.$region=null!=s?s:{city:{},options:[]},new Vue({render:function(n){return n(a)}}).$mount(e)}),$(".js-test").each(function(n,e){var t=$(e);return Vue.prototype.testCallback=t.data("action-callback"),Vue.prototype.testSend=t.data("action-send"),new Vue({render:function(n){return n(s)}}).$mount(e)}),t=function(){var n=function(){function t(n){var e=this;_classCallCheck(this,t),this.$el=$(n),this.$items=this.$el.find(".js-search-item"),this.$hide=this.$el.find(".js-search-hide"),this.$el.find(".js-search-input").on("input",function(n){return e.filterData($(n.target).val())})}return _createClass(t,[{key:"filterData",value:function(s){return this.$hide.removeClass("d-none"),s.length&&this.$hide.addClass("d-none"),this.$items.removeClass("d-none"),this.$items.each(function(n,e){var t=$(e);if(t.find(".js-search-data").text().search(RegExp("".concat(s),"i"))<0)return t.addClass("d-none")}),!0}}]),t}();return n.prototype.$el=$({}),n.prototype.$items=$({}),n}.call(this),$("*[data-percent]").each(function(n,e){var t=$(e),s=Number($(this).data("percent"));return t.css({width:"".concat(s,"%")})}),$(".js-search").each(function(n,e){return new t(e)}),$("*[data-toggle]").on("click",function(n){var e;return n.preventDefault(),e=$(this),$("".concat(e.attr("data-toggle"))).slideToggle(),!1}),window.isCity=function(){return $.fancybox.open({src:"#is-city"}),!0}}).call(void 0);