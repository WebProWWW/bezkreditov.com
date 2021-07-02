/*!
 * @author Timur Valiyev
 * @link https://webprowww.github.io
 */
"use strict";

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

(function () {
  // alert 'asdasdasdd'
  var $mainNavLn, AjaxForm, CardMoreReview, CirclePercent, CostCalculator, Fssp, JsSearch, SelectSearch, Test, fileInputChanged, hHashNav, hashScroll;

  $.fn.hasAttr = function (name) {
    return this.attr(name) != null;
  };

  Fssp = {};

  (function () {
    var ApiLoader, FsspError, FsspForm, FsspSuccess, delay, loader;

    ApiLoader = function () {
      // ApiLoader
      // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      // /site/fssp-search
      var ApiLoader = /*#__PURE__*/function () {
        function ApiLoader() {
          _classCallCheck(this, ApiLoader);

          var csrfParam, csrfToken;
          csrfParam = $('meta[name="csrf-param"]').attr('content');
          csrfToken = $('meta[name="csrf-token"]').attr('content');
          this.csrf = _defineProperty({}, "".concat(csrfParam), csrfToken);
        }

        _createClass(ApiLoader, [{
          key: "load",
          value: function load(action) {
            var data = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
            data = $.extend({}, this.csrf, data);
            return $.ajax({
              method: 'post',
              url: action,
              data: data,
              dataType: 'json'
            }).done(function (data) {
              // console.log data
              return true;
            }).fail(function (error) {
              // console.log  error
              return true;
            }).always(function () {
              return true;
            });
          }
        }]);

        return ApiLoader;
      }();

      ;
      ApiLoader.prototype.csrf = {};
      return ApiLoader;
    }.call(this);

    loader = new ApiLoader();

    delay = function delay(ms, cb) {
      return setTimeout(cb, ms);
    }; // FsspSuccess
    // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


    FsspSuccess = {
      template: "<div class=\"row py-5\">\n    <div class=\"col-12 col-md-10 mx-auto\">\n        <p class=\"em-11 center\">\n            <i class=\"i-check em-36 green\"></i>\n            <br>\n            <br>\n            \u0417\u0430\u043F\u0440\u043E\u0441 \u043D\u0430 \u043F\u043E\u043B\u0443\u0447\u0435\u043D\u0438\u044F \u0438\u043D\u0444\u043E\u0440\u043C\u0430\u0446\u0438\u0438 \u0443\u0441\u043F\u0435\u0448\u043D\u043E \u043E\u0444\u043E\u0440\u043C\u043B\u0435\u043D.\n            <br>\n            <br>\n            \u041F\u0440\u043E\u0432\u0435\u0440\u043A\u0430 \u043C\u043E\u0436\u0435\u0442 \u0437\u0430\u043D\u044F\u0442\u044C \u043D\u0435\u0441\u043A\u043E\u043B\u044C\u043A\u043E \u043C\u0438\u043D\u0443\u0442, \u043A\u0430\u043A \u0442\u043E\u043B\u044C\u043A\u043E \u043E\u0442\u0447\u0435\u0442 \u0431\u0443\u0434\u0435\u0442 \u0433\u043E\u0442\u043E\u0432, \u043C\u044B \u043E\u0442\u043F\u0440\u0430\u0432\u0438\u043C \u0435\u0433\u043E \u043D\u0430 \u0443\u043A\u0430\u0437\u0430\u043D\u043D\u044B\u0439 \u0432\u0430\u043C\u0438 E-mail.\n        </p>\n    </div>\n\n    <div class=\"col-12\"></div>\n\n    <div class=\"col-auto mx-auto\">\n        <div class=\"btn btn-default\" @click.prevent=\"$emit('new-search')\">\u041D\u043E\u0432\u044B\u0439 \u0437\u0430\u043F\u0440\u043E\u0441</div>\n    </div>\n</div>",
      props: {
        input: Object,
        email: String
      }
    }; // FsspError
    // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    FsspError = {
      template: "<div class=\"row py-5\">\n    <div class=\"col-12 col-md-10 mx-auto\">\n        <p class=\"em-11 center\">\n            <i class=\"i-ban em-36 red\"></i>\n            <br>\n            <br>\n            \u041F\u0440\u0438 \u043E\u0431\u0440\u0430\u0431\u043E\u0442\u043A\u0438 \u0437\u0430\u043F\u0440\u043E\u0441\u0430 \u043F\u0440\u043E\u0438\u0437\u043E\u0448\u043B\u0430 \u043E\u0448\u0438\u0431\u043A\u0430\n            <br>\n            <br>\n            \u041F\u043E\u0436\u0430\u043B\u0443\u0439\u0441\u0442\u0430, \u043F\u043E\u043F\u0440\u043E\u0431\u0443\u0439\u0442\u0435 \u043F\u043E\u0437\u0436\u0435.\n        </p>\n    </div>\n\n    <div class=\"col-12\"></div>\n\n    <div class=\"col-auto mx-auto\">\n        <div class=\"btn btn-default\" @click.prevent=\"$emit('new-search')\">\u041F\u043E\u0438\u0441\u043A</div>\n    </div>\n</div>",
      props: {
        input: Object
      }
    }; // FsspForm
    // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    FsspForm = {
      template: "<div>\n    <p class=\"em-11\">\u0427\u0442\u043E\u0431\u044B \u043F\u043E\u043B\u0443\u0447\u0438\u0442\u044C \u0438\u043D\u0444\u043E\u0440\u043C\u0430\u0446\u0438\u044E \u043E\u0431 \u0438\u043C\u0435\u044E\u0449\u0438\u0445\u0441\u044F \u0437\u0430\u0434\u043E\u043B\u0436\u0435\u043D\u043D\u043E\u0441\u0442\u044F\u0445 \u043F\u0435\u0440\u0435\u0434 \u0441\u0443\u0434\u0435\u0431\u043D\u044B\u043C\u0438 \u043F\u0440\u0438\u0441\u0442\u0430\u0432\u0430\u043C\u0438 \u043F\u043E \u0438\u0441\u043F\u043E\u043B\u043D\u0438\u0442\u0435\u043B\u044C\u043D\u044B\u043C \u043F\u0440\u043E\u0438\u0437\u0432\u043E\u0434\u0441\u0442\u0432\u0430\u043C \u043D\u0435\u043E\u0431\u0445\u043E\u0434\u0438\u043C\u043E \u0437\u0430\u043F\u043E\u043B\u043D\u0438\u0442\u044C \u0444\u043E\u0440\u043C\u0443 \u043D\u0438\u0436\u0435.</p>\n\n    <div class=\"row\">\n        <div class=\"col-12 col-md-6 col-lg-auto\">\n            <label class=\"label mb-4 d-flex align-items-center\">\n                <span class=\"d-block\">\n                    <input class=\"radio\" type=\"radio\" v-model=\"input.searchType.val\" value=\"A\" :disabled=\"loading\">\n                </span>\n                <span class=\"d-block\">\n                    \u041F\u043E\u0438\u0441\u043A \u043F\u043E \u0431\u0430\u0437\u0435 \u0444\u0438\u0437 \u043B\u0438\u0446\n                </span>\n            </label>\n        </div><!-- .col -->\n        <div class=\"col-12 col-md-6 col-lg-auto\">\n            <label class=\"label mb-4 d-flex align-items-center\">\n                <span class=\"d-block\">\n                    <input class=\"radio\" type=\"radio\" v-model=\"input.searchType.val\" value=\"B\" :disabled=\"loading\">\n                </span>\n                <span class=\"d-block\">\n                    \u041F\u043E\u0438\u0441\u043A \u043F\u043E \u0431\u0430\u0437\u0435 \u044E\u0440 \u043B\u0438\u0446\n                </span>\n            </label>\n        </div><!-- .col -->\n        <div class=\"col-12 col-md-6 col-lg-auto\">\n            <label class=\"label mb-4 d-flex align-items-center\">\n                <span class=\"d-block\">\n                    <input class=\"radio\" type=\"radio\" v-model=\"input.searchType.val\" value=\"C\" :disabled=\"loading\">\n                </span>\n                <span class=\"d-block\">\n                    \u041F\u043E\u0438\u0441\u043A \u043F\u043E \u0431\u0430\u0437\u0435 \u0438\u0441\u043F\u043E\u043B\u043D\u0438\u0442\u0435\u043B\u044C\u043D\u044B\u0445 \u043F\u0440\u043E\u0438\u0437\u0432\u043E\u0434\u0441\u0442\u0432\n                </span>\n            </label>\n        </div><!-- .col -->\n    </div><!-- .row -->\n\n    <div v-if=\"isSearchTypeA || isSearchTypeB\">\n        <label>\u0420\u0435\u0433\u0438\u043E\u043D <span class=\"red\">*</span></label>\n        <select class=\"input\" :class=\"{error: input.region.error}\" v-model=\"input.region.val\" @focus=\"input.region.error = ''\" :disabled=\"loading\">\n            <option disabled selected value=\"null\">\u0420\u0435\u0433\u0438\u043E\u043D</option>\n            <option v-for=\"option in input.region.options\" :value=\"option.val\">\n                {{option.txt}}\n            </option>\n        </select>\n        <span class=\"input-error\" v-if=\"input.region.error\">{{input.region.error}}</span>\n    </div><!-- type -->\n\n\n    <div class=\"row\" v-if=\"isSearchTypeA\">\n        <div class=\"col-12 col-md-6\">\n            <label>\u0418\u043C\u044F <span class=\"red\">*</span></label>\n            <input class=\"input\" :class=\"{error: input.firstname.error}\" type=\"text\" v-model=\"input.firstname.val\" @focus=\"input.firstname.error=''\" :disabled=\"loading\">\n            <span class=\"input-error\" v-if=\"input.firstname.error\">{{input.firstname.error}}</span>\n        </div><!-- .col -->\n\n        <div class=\"col-12 col-md-6\">\n            <label>\u0424\u0430\u043C\u0438\u043B\u0438\u044F <span class=\"red\">*</span></label>\n            <input class=\"input\" :class=\"{error: input.lastname.error}\" type=\"text\" v-model=\"input.lastname.val\" @focus=\"input.lastname.error=''\" :disabled=\"loading\">\n            <span class=\"input-error\" v-if=\"input.lastname.error\">{{input.lastname.error}}</span>\n        </div><!-- .col -->\n\n        <div class=\"col-12 col-md-6\">\n            <label>\u041E\u0442\u0447\u0435\u0441\u0442\u0432\u043E</label>\n            <input class=\"input\" :class=\"{error: input.secondname.error}\" type=\"text\" v-model=\"input.secondname.val\" @focus=\"input.secondname.error=''\" :disabled=\"loading\">\n            <span class=\"input-error\" v-if=\"input.secondname.error\">{{input.secondname.error}}</span>\n        </div><!-- .col -->\n\n        <div class=\"col-12 col-md-6\">\n            <label>\u0414\u0430\u0442\u0430 \u0440\u043E\u0436\u0434\u0435\u043D\u0438\u044F</label>\n            <input class=\"input\" :class=\"{error: input.birthdate.error}\" type=\"text\" placeholder=\"\u0434\u0434.\u043C\u043C.\u0433\u0433\u0433\u0433\" v-model=\"input.birthdate.val\" @focus=\"input.birthdate.error=''\" readonly ref=\"date\">\n            <span class=\"input-error\" v-if=\"input.birthdate.error\">{{input.birthdate.error}}</span>\n        </div><!-- .col -->\n    </div><!-- .row type -->\n\n    <div v-if=\"isSearchTypeB\">\n        <label>\u041D\u0430\u0438\u043C\u0435\u043D\u043E\u0432\u0430\u043D\u0438\u0435 \u043F\u0440\u0435\u0434\u043F\u0440\u0438\u044F\u0442\u0438\u044F <span class=\"red\">*</span></label>\n        <input class=\"input\" :class=\"{error: input.name.error}\" type=\"text\" v-model=\"input.name.val\" @focus=\"input.name.error=''\" :disabled=\"loading\">\n        <span class=\"input-error\" v-if=\"input.name.error\">{{input.name.error}}</span>\n\n        <label>\u0410\u0434\u0440\u0435\u0441 \u043F\u0440\u0435\u0434\u043F\u0440\u0438\u044F\u0442\u0438\u044F - \u0434\u043E\u043B\u0436\u043D\u0438\u043A\u0430</label>\n        <input class=\"input\" :class=\"{error: input.address.error}\" type=\"text\" v-model=\"input.address.val\" @focus=\"input.address.error=''\" :disabled=\"loading\">\n        <span class=\"input-error\" v-if=\"input.address.error\">{{input.address.error}}</span>\n    </div><!-- type -->\n\n    <div v-if=\"isSearchTypeC\">\n        <label>\u041D\u043E\u043C\u0435\u0440 \u0438\u0441\u043F\u043E\u043B\u043D\u0438\u0442\u0435\u043B\u044C\u043D\u043E\u0433\u043E \u043F\u0440\u043E\u0438\u0437\u0432\u043E\u0434\u0441\u0442\u0432\u0430 <span class=\"red\">*</span></label>\n        <input class=\"input\" :class=\"{error: input.number.error}\" type=\"text\" v-model=\"input.number.val\" @focus=\"input.number.error=''\" :disabled=\"loading\">\n        <span class=\"input-error\" v-if=\"input.number.error\">{{input.number.error}}</span>\n    </div><!-- type -->\n\n    <div class=\"row\">\n        <div class=\"col-12 col-md-6\">\n            <label>E-mail <span class=\"red\">*</span></label>\n            <input class=\"input\" :class=\"{error: input.email.error}\" type=\"text\" v-model=\"input.email.val\" @focus=\"input.email.error=''\" :disabled=\"loading\">\n            <span class=\"input-error\" v-if=\"input.email.error\">{{input.email.error}}</span>\n        </div><!-- .col -->\n\n        <div class=\"col-12 col-md-6\">\n            <label>\u0422\u0435\u043B\u0435\u0444\u043E\u043D</label>\n            <input ref=\"inputPhone\" class=\"input\" :class=\"{error: input.phone.error}\" type=\"text\" v-model=\"input.phone.val\" @focus=\"input.phone.error=''\" :disabled=\"loading\">\n            <span class=\"input-error\" v-if=\"input.phone.error\">{{input.phone.error}}</span>\n        </div><!-- .col -->\n    </div><!-- .row -->\n\n    <div class=\"row\">\n        <div class=\"col-12 col-md-6\">\n            <div class=\"btn btn-default\" @click.prevent=\"submit\">\n                <span v-if=\"!loading\">\u041F\u043E\u043B\u0443\u0447\u0438\u0442\u044C \u0438\u043D\u0444\u043E\u0440\u043C\u0430\u0446\u0438\u044E</span>\n                <span v-else><img height=\"10\" src=\"/img/loader.svg\"></span>\n            </div>\n        </div>\n    </div>\n</div>",
      props: {
        input: Object
      },
      mounted: function mounted() {
        var _this = this;

        $(this.$refs.inputPhone).inputmask('+7-999-999-99-99', {
          greedy: false,
          oncomplete: function oncomplete(e) {
            _this.input.phone.val = $(e.target).val();
            return true;
          }
        });
        $(this.$refs.date).datepicker({
          locale: 'ru-ru',
          format: 'dd.mm.yyyy'
        }).on('change', function (e) {
          _this.input.birthdate.val = e.target.value;
          return true;
        });
        return true;
      },
      // components:
      data: function data() {
        return {
          loading: false
        };
      },
      methods: {
        submit: function submit(e) {
          var _this2 = this;

          var data, input, name, ref;

          if (!this.loading) {
            this.loading = true;
            data = new Object();
            ref = this.input;

            for (name in ref) {
              input = ref[name];
              data["Fssp[".concat(name, "]")] = input.val;
            }

            loader.load(this.$fsspAction, data).done(function (data) {
              var email, ref1;

              if ((data != null ? data.success : void 0) != null && data.success === 1) {
                email = _this2.input.email.val;
                ref1 = _this2.input;

                for (name in ref1) {
                  input = ref1[name];
                  input.val = input.reset;
                }

                _this2.$emit('search-success', email);
              } else {
                _this2.addArrors(data);
              }

              return true;
            }).fail(function () {
              _this2.$emit('search-error');

              return true;
            }).always(function () {
              _this2.loading = false;
              return true;
            });
          }

          return true;
        },
        addArrors: function addArrors(errors) {
          var error, name;

          if (_typeof(errors) !== 'object') {
            return true;
          }

          for (name in errors) {
            error = errors[name];
            this.input["".concat(name.substr(5))].error = error[0];
          }

          return true;
        }
      },
      computed: {
        isSearchTypeA: function isSearchTypeA() {
          return this.input.searchType.val === 'A';
        },
        isSearchTypeB: function isSearchTypeB() {
          return this.input.searchType.val === 'B';
        },
        isSearchTypeC: function isSearchTypeC() {
          return this.input.searchType.val === 'C';
        }
      }
    }; // Fssp
    // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    Fssp = {
      template: "<div ref=\"container\">\n    <transition name=\"fade\" mode=\"out-in\">\n        <component :is=\"view\"\n            :input=\"input\"\n            @search-success=\"searchSuccess\"\n            @search-error=\"searchError\"\n            @new-search=\"newSearch\"\n        ></component>\n    </transition>\n</div>",
      created: function created() {
        var j, len1, option, ref;
        ref = this.$region.options;

        for (j = 0, len1 = ref.length; j < len1; j++) {
          option = ref[j];
          this.input.region.options.push({
            val: option.code,
            txt: option.region_name
          });

          if (this.$region.current.code === option.code) {
            this.input.region.val = option.code;
          }
        }

        return true;
      },
      data: function data() {
        return {
          view: FsspForm,
          email: '',
          input: {
            // Тип поиска
            searchType: {
              val: 'A',
              error: '',
              reset: 'A'
            },
            // Номер региона
            region: {
              val: null,
              error: '',
              reset: null,
              options: []
            },
            // Имя физического лица
            firstname: {
              val: '',
              error: '',
              reset: ''
            },
            // Отчество физического лица
            secondname: {
              val: '',
              error: '',
              reset: ''
            },
            // Фамилия физического лица
            lastname: {
              val: '',
              error: '',
              reset: ''
            },
            // Дата рождения физического лица, в формате dd.mm.YYYY
            birthdate: {
              val: '',
              error: '',
              reset: ''
            },
            // Имя юридического лица
            name: {
              val: '',
              error: '',
              reset: ''
            },
            // Адрес юридического лица
            address: {
              val: '',
              error: '',
              reset: ''
            },
            // Номер исполнительного производства в формате n…n/yy/dd/rr или n…n/yy/ddddd-ИП
            number: {
              val: '',
              error: '',
              reset: ''
            },
            // Email
            email: {
              val: '',
              error: '',
              reset: ''
            },
            // Телефон
            phone: {
              val: '',
              error: '',
              reset: ''
            }
          }
        };
      },
      methods: {
        setView: function setView(View) {
          var offsetTop;
          offsetTop = $(this.$refs.container).offset().top - 30;
          $('html:not(:animated),body:not(:animated)').animate({
            scrollTop: offsetTop
          });
          this.view = View;
          return true;
        },
        searchSuccess: function searchSuccess(email1) {
          this.email = email1;
          this.setView(FsspSuccess);
          return true;
        },
        searchError: function searchError() {
          this.setView(FsspError);
          return true;
        },
        newSearch: function newSearch(reset) {
          this.setView(FsspForm);
          return true;
        }
      }
    }; // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    return true;
  })();

  Test = {};

  (function () {
    var TestEmail, TestEmailSucess, TestPhone, TestQuestions, TestSuccess; // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    TestQuestions = {
      template: "<div class=\"test\">\n    <div class=\"test-header\">\n        <div class=\"row\">\n            <div class=\"col-12\">\n                <h3 class=\"test-title\">\n                    \u041E\u0442\u0432\u0435\u0442\u044C\u0442\u0435 \u043D\u0430 5 \u043F\u0440\u043E\u0441\u0442\u044B\u0445 \u0432\u043E\u043F\u0440\u043E\u0441\u043E\u0432 \u0438 \u043F\u043E\u043B\u0443\u0447\u0438\u0442\u0435\n                    <br>\n                    \u043F\u0440\u0435\u0434\u0432\u0430\u0440\u0438\u0442\u0435\u043B\u044C\u043D\u043E\u0435 \u0440\u0435\u0448\u0435\u043D\u0438\u0435 \u043F\u043E \u0441\u043F\u0438\u0441\u0430\u043D\u0438\u0435\u044E \u0432\u0430\u0448\u0438\u0445 \u0434\u043E\u043B\u0433\u043E\u0432.\n                </h3>\n            </div>\n            <!--\n            <div class=\"col-auto\">\n                <p class=\"m-0\">{{ steep }} / {{ steepTotal }}</p>\n            </div>\n            -->\n        </div>\n        <!--\n        <span class=\"test-progress\" :style=\"{ right: progress }\"></span>\n        -->\n    </div>\n\n    <p><em class=\"em-11\">\u0412\u043E\u043F\u0440\u043E\u0441 {{ steep }}</em></p>\n\n    <h3 class=\"mb-1\">{{ item.title }}</h3>\n    <p class=\"popup-desc\">{{ item.desc }}</p>\n\n    <label class=\"label mb-4 d-flex align-items-center\" v-for=\"option in item.options\">\n        <span class=\"d-block\">\n            <input class=\"radio\" type=\"radio\" v-model=\"item.value\" :value=\"option\">\n        </span>\n        <span class=\"d-block\">\n            {{ option }}\n        </span>\n    </label>\n\n    <div class=\"row no-gutters mt-4\">\n        <div class=\"col-12 col-sm-auto order-2 order-sm-1\">\n            <span class=\"btn btn-sm\" @click.prevent=\"back\">\n                <span v-if=\"(steep === 1)\">\u0417\u0430\u043A\u0440\u044B\u0442\u044C</span>\n                <span v-else>\n                    <i class=\"i-left em-8\"></i>\n                    \u041D\u0430\u0437\u0430\u0434\n                </span>\n            </span>\n        </div><!-- /.col -->\n        <div class=\"col-12 col-sm-auto ml-auto order-1 order-sm-2\">\n            <span class=\"btn btn-sm\" @click.prevent=\"next\">\n                \u0414\u0430\u043B\u0435\u0435\n                <i class=\"i-right em-8\"></i>\n            </span>\n        </div><!-- /.col -->\n    </div>\n</div>",
      data: function data() {
        return {
          steep: 1,
          steepTotal: 5,
          items: [{
            title: 'Какая общая сумма Вашего долга?',
            desc: 'Выберите вариант нише и жмите на кнопку «Далее»',
            value: '0 - 200 000 ₽',
            options: ['0 - 200 000 ₽', '200 000 - 400 000 ₽', '400 000 - 1 000 000 ₽', '1 000 000 - 3 000 000 ₽', 'Более 3 000 000 ₽']
          }, {
            title: 'Какой у Вас срок просрочки по кредитам и займам?',
            value: '1 месяц',
            options: ['1 месяц', '2 месяца', '3 месяца', '4 месяца и более', 'Нет']
          }, {
            title: 'Есть ли у Вас в собственности автомобиль или квартира?',
            value: 'Да, есть',
            options: ['Да, есть', 'Нет']
          }, {
            title: 'Вы заключали сделки с недвижимостью или автомобилем за последние 3 года?',
            value: 'Да',
            options: ['Да', 'Нет']
          }, {
            title: 'Вы вносили хотя бы один ежемесячный платеж по кредитам или займам?',
            value: 'Да',
            options: ['Да', 'Нет']
          }]
        };
      },
      methods: {
        back: function back(e) {
          if (this.steep === 1) {
            $.fancybox.close(true);
          }

          if (this.steep > 1) {
            this.steep--;
          }

          return false;
        },
        next: function next(e) {
          if (this.steep === this.steepTotal) {
            this.$emit('complete', this.items);
          }

          if (this.steep < this.steepTotal) {
            this.steep++;
          }

          return false;
        }
      },
      computed: {
        progress: function progress() {
          return "".concat(100 - this.steep * 100 / this.steepTotal, "%");
        },
        item: function item() {
          return this.items["".concat(this.steep - 1)];
        },
        inputName: function inputName() {
          return "questions[".concat(this.steep - 1, "]");
        }
      }
    }; // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    TestPhone = {
      template: "<div>\n    <h3>\u0411\u043B\u0430\u0433\u043E\u0434\u0430\u0440\u0438\u043C \u0437\u0430 \u0434\u043E\u0432\u0435\u0440\u0438\u0435! \u0420\u0435\u0437\u0443\u043B\u044C\u0442\u0430\u0442 \u0433\u043E\u0442\u043E\u0432.</h3>\n    <p>\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043D\u043E\u043C\u0435\u0440 \u0442\u0435\u043B\u0435\u0444\u043E\u043D\u0430 \u0438 \u0443\u0437\u043D\u0430\u0439\u0442\u0435 \u0441\u0442\u043E\u0438\u043C\u043E\u0441\u0442\u044C:</p>\n    <p>\u0417\u0430\u044F\u0432\u043A\u0430 \u043D\u0430 \u0440\u0430\u0441\u0447\u0435\u0442 \u0441\u0442\u043E\u0438\u043C\u043E\u0441\u0442\u0438 \u043D\u0438 \u043A \u0447\u0435\u043C\u0443 \u0412\u0430\u0441 \u043D\u0435 \u043E\u0431\u044F\u0437\u044B\u0432\u0430\u0435\u0442</p>\n    <input\n        ref=\"input\"\n        :class=\"{error: error}\"\n        :disabled=\"loading\"\n        @click=\"$emit('error-clear')\"\n        class=\"input\"\n        type=\"text\"\n        placeholder=\"\u0412\u0430\u0448 \u043D\u043E\u043C\u0435\u0440 \u0442\u0435\u043B\u0435\u0444\u043E\u043D\u0430\"\n    >\n    <span class=\"input-error\" v-if=\"error\">{{ error }}</span>\n    <p class=\"em-9\">\u0414\u0430\u044E \u0441\u043E\u0433\u043B\u0430\u0441\u0438\u0435 \u043D\u0430 \u043E\u0431\u0440\u0430\u0431\u043E\u0442\u043A\u0443 \u0441\u0432\u043E\u0438\u0445 \u043F\u0435\u0440\u0441\u043E\u043D\u0430\u043B\u044C\u043D\u044B\u0445 \u0434\u0430\u043D\u043D\u044B\u0445 \u0432 \u0441\u043E\u043E\u0442\u0432\u0435\u0442\u0441\u0442\u0432\u0438\u0438 \u0441 \u043F\u043E\u043B\u0438\u0442\u0438\u043A\u043E\u0439 \u043A\u043E\u043D\u0444\u0438\u0434\u0435\u043D\u0446\u0438\u0430\u043B\u044C\u043D\u043E\u0441\u0442\u0438 \u043A\u043E\u043C\u043F\u0430\u043D\u0438\u0438 \xAB\u0411\u0435\u0437 \u041A\u0440\u0435\u0434\u0438\u0442\u043E\u0432\xBB</p>\n    <div class=\"row mt-4\">\n        <div class=\"col-12 col-sm-6 ml-auto\">\n            <span class=\"btn\" @click.prevent=\"submit\">\n                <span v-if=\"!loading\">\u0423\u0417\u041D\u0410\u0422\u042C \u0421\u0422\u041E\u0418\u041C\u041E\u0421\u0422\u042C</span>\n                <span v-else><img height=\"8\" src=\"/img/loader.svg\"></span>\n            </span>\n        </div><!-- /.col -->\n    </div>\n</div>",
      props: {
        loading: {
          type: Object,
          default: false
        },
        error: {
          tyoe: String,
          default: ''
        }
      },
      mounted: function mounted() {
        var _this3 = this;

        $(this.$refs.input).inputmask('+7-999-999-99-99', {
          greedy: false,
          oncomplete: function oncomplete(e) {
            _this3.phone = $(e.target).val();
            return true;
          }
        });
        return true;
      },
      data: function data() {
        return {
          phone: ''
        };
      },
      methods: {
        submit: function submit() {
          this.$emit('submit', this.phone);
          return false;
        }
      }
    }; // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    TestSuccess = {
      template: "<div>\n    <div class=\"text-center\">\n        <h3 class=\"\">\u0421\u043F\u0430\u0441\u0438\u0431\u043E \u0432\u044B \u0443\u0441\u043F\u0435\u0448\u043D\u043E \u043F\u0440\u043E\u0448\u043B\u0438 \u0442\u0435\u0441\u0442!</h3>\n        <p class=\"\">\u0421\u0435\u0433\u043E\u0434\u043D\u044F \u043C\u044B \u0441\u0432\u044F\u0436\u0435\u043C\u0441\u044F \u0441 \u0432\u0430\u043C\u0438 \u0438 \u043F\u043E\u043C\u043E\u0436\u0435\u043C \u0441\u043F\u0438\u0441\u0430\u0442\u044C \u0432\u0430\u0448\u0438 \u0434\u043E\u043B\u0433\u0438</p>\n    </div>\n    <div class=\"row mt-4\">\n        <div class=\"col-12 col-sm\">\n            <p class=\"text text-center\">\n                \u0410 \u043F\u043E\u043A\u0430 \u0441\u043A\u0430\u0447\u0430\u0439\u0442\u0435 \u043D\u0430\u0448 \u0447\u0435\u043A \u043B\u0438\u0441\u0442: <br>\xAB\u041A\u0430\u043A \u043E\u0431\u0449\u0430\u0442\u044C\u0441\u044F \u0441 \u043A\u043E\u043B\u043B\u0435\u043A\u0442\u043E\u0440\u0430\u043C\u0438!\xBB\n            </p>\n        </div>\n        <div class=\"col-12 col-sm-auto\">\n            <span class=\"btn\" @click=\"$emit('checklist')\">\u0421\u041A\u0410\u0427\u0410\u0422\u042C \u0427\u0415\u041A-\u041B\u0418\u0421\u0422</span>\n        </div>\n    </div>\n    <!--\n    <img @click.prevent=\"$emit('close')\" class=\"popup-close\" src=\"img/close.svg\">\n    -->\n</div>"
    }; // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    TestEmail = {
      template: "<div>\n    <h3 class=\"test-title\">\n        <span class=\"em-11\">\u041F\u043E\u0437\u0434\u0440\u0430\u0432\u043B\u044F\u0435\u043C!</span>\n        <br>\n        \u0412\u044B \u0443\u0441\u043F\u0435\u0448\u043D\u043E \u043F\u0440\u043E\u0448\u043B\u0438 \u043E\u043D\u043B\u0430\u0439\u043D - \u0442\u0435\u0441\u0442 \u043D\u0430 \u0441\u043F\u0438\u0441\u0430\u043D\u0438\u0435 \u0432\u0441\u0435\u0445 \u0432\u0430\u0448\u0438\u0445 \u0434\u043E\u043B\u0433\u043E\u0432!\n    </h3>\n    <p class=\"center\">\u041F\u0440\u0435\u0434\u0432\u0430\u0440\u0438\u0442\u0435\u043B\u044C\u043D\u043E\u0435 \u0440\u0435\u0448\u0435\u043D\u0438\u0435 \u043E \u0432\u043E\u0437\u043C\u043E\u0436\u043D\u043E\u0441\u0442\u0438 \u0441\u043F\u0438\u0441\u0430\u043D\u0438\u044F \u0432\u0441\u0435\u0445 \u0432\u0430\u0448\u0438\u0445 \u0434\u043E\u043B\u0433\u043E\u0432 \u043C\u044B \u043F\u0440\u0438\u0448\u043B\u0435\u043C \u0432\u0430\u043C \u043D\u0430 \u043F\u043E\u0447\u0442\u0443, \u0434\u043B\u044F \u044D\u0442\u043E\u0433\u043E \u0437\u0430\u043F\u043E\u043B\u043D\u0438\u0442\u0435 \u043F\u043E\u043B\u0435 \u0432\u0432\u043E\u0434\u0430 \u043F\u043E\u0447\u0442\u044B \u0438 \u043D\u0430\u0436\u043C\u0438\u0442\u0435 \u043A\u043D\u043E\u043F\u043A\u0443 \xAB\u041F\u043E\u043B\u0443\u0447\u0438\u0442\u044C \u043C\u043E\u0435 \u0440\u0435\u0448\u0435\u043D\u0438\u0435\xBB</p>\n    <input\n        v-model=\"email\"\n        :disabled=\"loading\"\n        :class=\"{error: error}\"\n        @click=\"$emit('error-clear')\"\n        class=\"input\"\n        type=\"text\"\n        placeholder=\"\u0412\u0430\u0448\u0430 \u044D\u043B\u0435\u043A\u0442\u0440\u043E\u043D\u043D\u0430\u044F \u043F\u043E\u0447\u0442\u0430\"\n    >\n    <span class=\"input-error\" v-if=\"error\">{{ error }}</span>\n    <label class=\"label d-flex align-items-center mb-4\">\n        <span class=\"d-block\">\n            <input\n                class=\"checkbox\"\n                type=\"checkbox\"\n                :class=\"{error: acceptError}\"\n                :disabled=\"loading\"\n                v-model=\"accept\"\n                @change=\"acceptError = false\"\n            >\n        </span>\n        <span class=\"d-block em-9\">\u0414\u0430\u044E \u0441\u043E\u0433\u043B\u0430\u0441\u0438\u0435 \u043D\u0430 \u043E\u0431\u0440\u0430\u0431\u043E\u0442\u043A\u0443 \u0441\u0432\u043E\u0438\u0445 \u043F\u0435\u0440\u0441\u043E\u043D\u0430\u043B\u044C\u043D\u044B\u0445 \u0434\u0430\u043D\u043D\u044B\u0445 \u0432 \u0441\u043E\u043E\u0442\u0432\u0435\u0442\u0441\u0442\u0432\u0438\u0438 \u0441 \u043F\u043E\u043B\u0438\u0442\u0438\u043A\u043E\u0439 \u043A\u043E\u043D\u0444\u0438\u0434\u0435\u043D\u0446\u0438\u0430\u043B\u044C\u043D\u043E\u0441\u0442\u0438 \u043F\u043E\u0440\u0442\u0430\u043B\u0430 \xAB\u0411\u0435\u0437 \u041A\u0440\u0435\u0434\u0438\u0442\u043E\u0432\xBB</span>\n    </label>\n    <span class=\"input-error\" v-if=\"acceptError\">\u041F\u043E\u0434\u0442\u0432\u0435\u0440\u0434\u0438\u0442\u0435 \u0441\u043E\u0433\u043B\u0430\u0441\u0438\u0435 \u043D\u0430 \u043E\u0431\u0440\u0430\u0431\u043E\u0442\u043A\u0443 \u0441\u0432\u043E\u0438\u0445 \u043F\u0435\u0440\u0441\u043E\u043D\u0430\u043B\u044C\u043D\u044B\u0445 \u0434\u0430\u043D\u043D\u044B\u0445</span>\n    <div class=\"row mt-4\">\n        <div class=\"col-12 col-sm-6 mx-auto\">\n            <span class=\"btn\" @click.prevent=\"submit\">\n                <span v-if=\"!loading\">\u041F\u043E\u043B\u0443\u0447\u0438\u0442\u044C \u043C\u043E\u0435 \u0440\u0435\u0448\u0435\u043D\u0438\u0435</span>\n                <span v-else><img height=\"8\" src=\"/img/loader.svg\"></span>\n            </span>\n        </div><!-- /.col -->\n    </div>\n</div>",
      props: {
        loading: {
          type: Object,
          default: false
        },
        error: {
          tyoe: String,
          default: ''
        }
      },
      data: function data() {
        return {
          email: '',
          accept: false,
          acceptError: false
        };
      },
      methods: {
        submit: function submit() {
          if (!this.accept) {
            this.acceptError = true;
            return false;
          }

          this.$emit('submit', this.email);
          return false;
        }
      }
    };
    /*
    TestEmail =
        template:'''
        <div>
            <h3 class="">Введите свой Email и мы отправим чек лист на почту</h3>
            <input
                v-model="email"
                :class="{error: error}"
                @click="$emit('error-clear')"
                class="input"
                type="text"
                placeholder="Email"
            >
            <span class="input-error" v-if="error">{{ error }}</span>
            <p class="em-9">Даю согласие на обработку своих персональных данных в соответствии с политикой конфиденциальности компании «Без Кредитов»</p>
            <div class="row mt-4">
                <div class="col-12 col-sm-6 ml-auto">
                    <span class="btn" @click.prevent="submit">
                        <span v-if="!loading">ОТПРАВИТЬ</span>
                        <span v-else><img height="8" src="/img/loader.svg"></span>
                    </span>
                </div><!-- /.col -->
            </div>
        </div>
        '''
         props:
            loading:
                type: Object
                default: off
            error:
                tyoe: String
                default: ''
         data: ->
            email: ''
         methods:
            submit: ->
                @$emit 'submit', @email
     * if @validate
     *     @$emit 'submit', @email
     * else
     *     @error = yes
                off
      * computed:
     *     validate: ->
     *         emailRe = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
     *         emailRe.test @email
     */
    // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    TestEmailSucess = {
      template: "<div class=\"center\">\n    <h3 class=\"\">\u0414\u0430\u043D\u043D\u044B\u0435 \u0443\u0441\u043F\u0435\u0448\u043D\u043E \u043F\u043E\u043B\u0443\u0447\u0435\u043D\u044B!</h3>\n    <p class=\"\">\u041F\u0440\u0435\u0434\u0432\u0430\u0440\u0438\u0442\u0435\u043B\u044C\u043D\u043E\u0435 \u0440\u0435\u0448\u0435\u043D\u0438\u0435 \u043E \u0432\u043E\u0437\u043C\u043E\u0436\u043D\u043E\u0441\u0442\u0438 \u0441\u043F\u0438\u0441\u0430\u043D\u0438\u044F \u0432\u0441\u0435\u0445 \u0432\u0430\u0448\u0438\u0445 \u0434\u043E\u043B\u0433\u043E\u0432 \u043C\u044B \u043F\u0440\u0438\u0448\u043B\u0435\u043C \u0432\u0430\u043C \u043D\u0430 \u043F\u043E\u0447\u0442\u0443 {{ email }}</p>\n</div>",
      props: {
        email: {
          type: String,
          default: ''
        }
      }
    }; // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    return Test = {
      template: "<div>\n    <questions\n        v-if=\"state === 1\"\n        @complete=\"questionsComplete\"\n    />\n    <phone\n        v-if=\"state === 2\"\n        :loading=\"process\"\n        :error=\"phoneErr\"\n        @error-clear=\"phoneErr = ''\"\n        @submit=\"phoneSubmit\"\n    />\n    <success\n        v-if=\"state === 3\"\n        @close=\"close\"\n        @checklist=\"state = 4\"\n    />\n    <email\n        v-if=\"state === 4\"\n        :loading=\"process\"\n        :error=\"emailErr\"\n        @error-clear=\"emailErr = ''\"\n        @submit=\"emailSubmit\"\n    />\n    <esuccess\n        v-if=\"state === 5\"\n        :email=\"email\"\n        @close=\"close(true)\"\n    />\n</div>",
      components: {
        'questions': TestQuestions,
        'phone': TestPhone,
        'success': TestSuccess,
        'email': TestEmail,
        'esuccess': TestEmailSucess
      },
      data: function data() {
        return {
          state: 1,
          comment: '',
          process: false,
          phone: '',
          phoneErr: '',
          email: '',
          emailErr: ''
        };
      },
      methods: {
        delay: function delay(ms, cb) {
          return setTimeout(cb, ms);
        },
        questionsComplete: function questionsComplete(items) {
          var item, j, len1;

          for (j = 0, len1 = items.length; j < len1; j++) {
            item = items[j];
            this.comment += "<p>".concat(item.title, "<br>").concat(item.value, "</p>");
          }

          this.state = 4;
          return true;
        },
        phoneSubmit: function phoneSubmit(phone) {
          var _this4 = this;

          var csrfParam, csrfToken, sendData;
          this.phone = phone;

          if (this.process) {
            return true;
          }

          this.process = true;
          sendData = {};
          sendData['FormCallback[phone]'] = this.phone;
          sendData['FormCallback[comment]'] = this.comment;
          csrfParam = $('meta[name="csrf-param"]').attr('content');
          csrfToken = $('meta[name="csrf-token"]').attr('content');
          this.csrf = _defineProperty({}, "".concat(csrfParam), csrfToken);
          sendData = $.extend({}, this.csrf, sendData);
          $.ajax({
            method: 'post',
            url: this.testCallback,
            data: sendData
          }).done(function (data) {
            var ref;

            if ((data != null ? data.success : void 0) != null && data.success === 1) {
              _this4.state = 3;
            } else {
              if (((ref = data['formcallback-phone']) != null ? ref[0] : void 0) != null) {
                _this4.phoneErr = data['formcallback-phone'][0];
              }
            }

            return true;
          }).fail(function (error) {
            return true;
          }).always(function () {
            _this4.process = false;
            return true;
          });
          return true;
        },
        emailSubmit: function emailSubmit(email1) {
          var _this5 = this;

          var csrfParam, csrfToken, sendData;
          this.email = email1;

          if (this.process) {
            return true;
          }

          this.process = true;
          sendData = {};
          sendData['FormTest[email]'] = this.email;
          sendData['FormTest[comment]'] = this.comment;
          csrfParam = $('meta[name="csrf-param"]').attr('content');
          csrfToken = $('meta[name="csrf-token"]').attr('content');
          this.csrf = _defineProperty({}, "".concat(csrfParam), csrfToken);
          sendData = $.extend({}, this.csrf, sendData);
          $.ajax({
            method: 'post',
            url: this.$action,
            data: sendData
          }).done(function (data) {
            var ref;

            if ((data != null ? data.success : void 0) != null && data.success === 1) {
              _this5.state = 5;
              $(document).one('afterClose.fb', function (e) {
                _this5.state = 1;
                _this5.comment = '';
                _this5.email = '';
                return _this5.phone = '';
              });
            } else {
              if (((ref = data['formtest-email']) != null ? ref[0] : void 0) != null) {
                _this5.emailErr = data['formtest-email'][0];
              }
            }

            return true;
          }).fail(function (error) {
            return true;
          }).always(function () {
            _this5.process = false;
            return true;
          });
          return true;
        }
      }
    };
  })(); // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


  CostCalculator = {};

  (function () {
    // * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    return CostCalculator = {
      template: "<div>\n    <div v-show=\"state === 1\">\n        <div class=\"cart\">\n            <div class=\"cart-body\">\n                <div class=\"row\">\n                    <div class=\"col-12 col-lg-6\">\n                        <label class=\"label\">\u041E\u0431\u0449\u0438\u0439 \u0440\u0430\u0437\u043C\u0435\u0440 \u0434\u043E\u043B\u0433\u0430</label>\n                        <input class=\"input\" type=\"text\" v-model=\"input.debtStr\" ref=\"inputDebt\">\n\n                        <label class=\"label\">\u0420\u0435\u0433\u0438\u043E\u043D \u043F\u0440\u043E\u0436\u0438\u0432\u0430\u043D\u0438\u044F (\u043F\u0440\u043E\u043F\u0438\u0441\u043A\u0438)</label>\n                        <select class=\"input\" v-model=\"input.region.code\">\n                            <option v-for=\"region in input.region.options\" :value=\"region.code\">{{ region.region_name }}</option>\n                        </select>\n\n                        <label class=\"label\">\u041A\u043E\u043B\u043B\u0438\u0447\u0435\u0441\u0442\u0432\u043E \u043A\u0440\u0435\u0434\u0438\u0442\u043E\u0432, \u0440\u0430\u0441\u043F\u0438c\u043E\u043A, \u043F\u043E\u0440\u0443\u0447\u0438\u0442\u0435\u043B\u044C\u0441\u0442\u0432</label>\n                        <input class=\"input\" type=\"text\" v-model=\"input.creditCount\" ref=\"inputCount\">\n                    </div><!-- .col -->\n\n                    <div class=\"col-12 col-lg-6\">\n                        <div class=\"label\">&nbsp;</div>\n                        <div class=\"row align-items-center mb-4\">\n                            <div class=\"col-12 col-sm\">\n                                <p class=\"em-9 mb-2\">\u0417\u0430\u043B\u043E\u0433\u043E\u0432\u043E\u0435 \u0438\u043C\u0443\u0449\u0435\u0441\u0442\u0432\u043E, \u043A\u043E\u0442\u043E\u0440\u043E\u0435 \u043D\u0443\u0436\u043D\u043E \u043F\u0440\u043E\u0434\u0430\u0442\u044C (\u0432 \u0442\u043E\u043C \u0447\u0438\u0441\u043B\u0435 \u0438\u043F\u043E\u0442\u0435\u0447\u043D\u043E\u0435):</p>\n                            </div><!-- .col -->\n                            <div class=\"col-12 col-sm-auto mb-2\">\n                                <div class=\"row\">\n                                    <div class=\"col-auto\">\n                                        <label class=\"d-flex align-items-center m-0\">\n                                            <span class=\"d-block mr-3\">\u0415\u0441\u0442\u044C</span>\n                                            <input class=\"radio\" type=\"radio\" value=\"1\" v-model=\"input.quA\">\n                                        </label>\n                                    </div><!-- .col -->\n                                    <div class=\"col-auto\">\n                                        <label class=\"d-flex align-items-center m-0\">\n                                            <span class=\"d-block mr-3\">\u041D\u0435\u0442</span>\n                                            <input class=\"radio\" type=\"radio\" value=\"0\" v-model=\"input.quA\">\n                                        </label>\n                                    </div><!-- .col -->\n                                </div><!-- .row -->\n                            </div><!-- .col -->\n                        </div><!-- .row -->\n\n                        <div class=\"row align-items-center mb-4\">\n                            <div class=\"col-12 col-sm\">\n                                <p class=\"em-9 mb-2\">\u041D\u0435\u0441\u043E\u0432\u0435\u0440\u0448\u0435\u043D\u043D\u043E\u043B\u0435\u0442\u043D\u0438\u0435 \u0434\u0435\u0442\u0438:</p>\n                            </div><!-- .col -->\n                            <div class=\"col-12 col-sm-auto mb-2\">\n                                <div class=\"row\">\n                                    <div class=\"col-auto\">\n                                        <label class=\"d-flex align-items-center m-0\">\n                                            <span class=\"d-block mr-3\">\u0415\u0441\u0442\u044C</span>\n                                            <input class=\"radio\" type=\"radio\" value=\"1\" v-model=\"input.quB\">\n                                        </label>\n                                    </div><!-- .col -->\n                                    <div class=\"col-auto\">\n                                        <label class=\"d-flex align-items-center m-0\">\n                                            <span class=\"d-block mr-3\">\u041D\u0435\u0442</span>\n                                            <input class=\"radio\" type=\"radio\" value=\"0\" v-model=\"input.quB\">\n                                        </label>\n                                    </div><!-- .col -->\n                                </div><!-- .row -->\n                            </div><!-- .col -->\n                        </div><!-- .row -->\n\n                        <div class=\"row align-items-center mb-4\">\n                            <div class=\"col-12 col-sm\">\n                                <p class=\"em-9 mb-2\">\u041A\u0440\u0443\u043F\u043D\u044B\u0435 \u0434\u0435\u043B\u043A\u0438 \u043F\u043E\u0441\u043B\u0435\u0434\u043D\u0438\u0435 \u0442\u0440\u0438 \u0433\u043E\u0434\u0430:</p>\n                            </div><!-- .col -->\n                            <div class=\"col-12 col-sm-auto mb-2\">\n                                <div class=\"row\">\n                                    <div class=\"col-auto\">\n                                        <label class=\"d-flex align-items-center m-0\">\n                                            <span class=\"d-block mr-3\">\u0415\u0441\u0442\u044C</span>\n                                            <input class=\"radio\" type=\"radio\" value=\"1\" v-model=\"input.quC\">\n                                        </label>\n                                    </div><!-- .col -->\n                                    <div class=\"col-auto\">\n                                        <label class=\"d-flex align-items-center m-0\">\n                                            <span class=\"d-block mr-3\">\u041D\u0435\u0442</span>\n                                            <input class=\"radio\" type=\"radio\" value=\"0\" v-model=\"input.quC\">\n                                        </label>\n                                    </div><!-- .col -->\n                                </div><!-- .row -->\n                            </div><!-- .col -->\n                        </div><!-- .row -->\n                    </div><!-- .col -->\n                </div><!-- .row -->\n                <div class=\"row\">\n                    <div class=\"col-auto mx-auto\">\n                        <div class=\"btn-default\" @click.prevent=\"state = 2\">\u0420\u0430\u0441\u0447\u0438\u0442\u0430\u0442\u044C \u0441\u0442\u043E\u0438\u043C\u043E\u0441\u0442\u044C</div>\n                    </div><!-- .col -->\n                </div><!-- .row -->\n            </div><!-- .cart-body -->\n        </div><!-- .cart -->\n    </div><!-- Form -->\n\n\n    <div v-show=\"state === 2\">\n        <div class=\"mb-4\">\n            <div class=\"cart\">\n                <div class=\"cart-body\">\n                    <div class=\"row\">\n                        <div class=\"col-auto mx-auto\">\n                            <div class=\"logo logo-sm\">\n                                <span class=\"logo-txt\">\u0411\u0435\u0437 \u043A\u0440\u0435\u0434\u0438\u0442\u043E\u0432</span>\n                            </div>\n                        </div><!-- .col -->\n                    </div><!-- .row -->\n                    <p class=\"center\">\u041C\u044B \u0441\u0434\u0435\u043B\u0430\u043B\u0438 \u043F\u0440\u0435\u0434\u0432\u0430\u0440\u0438\u0442\u0435\u043B\u044C\u043D\u044B\u0439 \u0440\u0430\u0441\u0447\u0435\u0442 \u0432\u0430\u0448\u0435\u0433\u043E \u0431\u0430\u043D\u043A\u0440\u043E\u0442\u0441\u0442\u0432\u0430 \u0438\u0441\u0445\u043E\u0434\u044F \u0438\u0437 \u0434\u0430\u043D\u043D\u044B\u0445:</p>\n                    <div class=\"cart-divider\"></div>\n                    <p class=\"row\">\n                        <span class=\"col-12 col-sm-6 fw-600 sm-right\">\u041E\u0431\u0449\u0438\u0439 \u0434\u043E\u043B\u0433:</span>\n                        <span class=\"col-12 col-sm-6\">{{ input.debtStr }}</span>\n                    </p>\n                    <p class=\"row\">\n                        <span class=\"col-12 col-sm-6 fw-600 sm-right\">\u0420\u0435\u0433\u0438\u043E\u043D:</span>\n                        <span class=\"col-12 col-sm-6\">{{ regionNane }}</span>\n                    </p>\n                    <p class=\"row\">\n                        <span class=\"col-12 col-sm-6 fw-600 sm-right\">\u041A\u043E\u043B\u043B\u0438\u0447\u0435\u0441\u0442\u0432\u043E \u043A\u0440\u0435\u0434\u0438\u0442\u043E\u0432:</span>\n                        <span class=\"col-12 col-sm-6\">{{ input.creditCount }}</span>\n                    </p>\n                    <p class=\"row\">\n                        <span class=\"col-12 col-sm-6 fw-600 sm-right\">\u0417\u0430\u043B\u043E\u0433\u043E\u0432\u043E\u0435 \u0438\u043C\u0443\u0449\u0435\u0441\u0442\u0432\u043E:</span>\n                        <span class=\"col-12 col-sm-6\">{{ input.quA ? '\u0415\u0441\u0442\u044C' : '\u041D\u0435\u0442' }}</span>\n                    </p>\n                    <p class=\"row\">\n                        <span class=\"col-12 col-sm-6 fw-600 sm-right\">\u041D\u0435\u0441\u043E\u0432\u0435\u0440\u0448\u0435\u043D\u043D\u043E\u043B\u0435\u0442\u043D\u0438\u0435 \u0434\u0435\u0442\u0438:</span>\n                        <span class=\"col-12 col-sm-6\">{{ input.quB ? '\u0415\u0441\u0442\u044C' : '\u041D\u0435\u0442' }}</span>\n                    </p>\n                    <p class=\"row\">\n                        <span class=\"col-12 col-sm-6 fw-600 sm-right\">\u0421\u0434\u0435\u043B\u043A\u0438 \u0437\u0430 3 \u0433\u043E\u0434\u0430:</span>\n                        <span class=\"col-12 col-sm-6\">{{ input.quC ? '\u0415\u0441\u0442\u044C' : '\u041D\u0435\u0442' }}</span>\n                    </p>\n                    <div class=\"row\">\n                        <div class=\"col-auto mx-auto\">\n                            <div class=\"btn-default\" @click.prevent=\"state = 1\">\u041D\u043E\u0432\u044B\u0439 \u0440\u0430\u0441\u0447\u0435\u0442</div>\n                        </div><!-- .col -->\n                    </div><!-- .row -->\n                </div><!-- .cart-body -->\n            </div><!-- .cart -->\n        </div><!-- .mb-4 -->\n\n        <h2 class=\"h1 center\">\u041F\u0440\u0435\u0434\u0432\u0430\u0440\u0438\u0442\u0435\u043B\u044C\u043D\u044B\u0439 \u0440\u0430\u0441\u0447\u0435\u0442</h2>\n\n        <div class=\"row justify-content-center\">\n            <div class=\"col-12 col-md-6 col-lg-4 mb-4\">\n                <div class=\"cart\">\n                    <div class=\"cart-body\">\n                        <p class=\"center mt-auto\">\u041F\u0440\u0435\u0434\u0432\u0430\u0440\u0438\u0442\u0435\u043B\u044C\u043D\u0430\u0441\u044F \u0441\u0442\u043E\u0438\u043C\u043E\u0441\u0442\u044C \u0431\u0430\u043D\u043A\u0440\u043E\u0442\u0441\u0442\u0432\u0430 \u043F\u043E\u0434 \u043A\u043B\u044E\u0447 \u0441\u043E\u0441\u0442\u0430\u0432\u0438\u0442</p>\n                        <p class=\"center fw-600 em-13\">104 999 \u0440\u0443\u0431\u043B\u0435\u0439</p>\n                        <div class=\"row mt-auto\">\n                            <div class=\"col-12 mx-auto\">\n                                <div class=\"btn-default\"><i class=\"i-download\"></i> \u0421\u043E\u0445\u0440\u0430\u043D\u0438\u0442\u044C \u0440\u0430\u0441\u0447\u0435\u0442</div>\n                            </div>\n                        </div>\n                    </div><!-- .cart-body -->\n                </div><!-- .cart -->\n            </div><!-- .col -->\n            <div class=\"col-12 col-md-6 col-lg-4 mb-4\">\n                <div class=\"cart\">\n                    <div class=\"cart-body\">\n                        <p class=\"center fw-600 em-13 mt-auto\">10 999 \u0440\u0443\u0431\u043B\u0435\u0439 \u0432 \u043C\u0435\u0441\u044F\u0446!</p>\n                        <p class=\"center\">\u0412\u0430\u0448\u0435 \u0431\u0430\u043D\u043A\u0440\u043E\u0442\u0441\u0442\u0432\u043E \u0432 \u0440\u0430\u0441\u0441\u0440\u043E\u0447\u043A\u0443 \u043D\u0430 12 \u043C\u0435\u0441\u044F\u0446\u0435\u0432</p>\n                        <div class=\"row mt-auto\">\n                            <div class=\"col-12 mx-auto\">\n                                <div class=\"btn-default\">\u041F\u043E\u043B\u0443\u0447\u0438\u0442\u044C \u043A\u043E\u043D\u0441\u0443\u043B\u044C\u0442\u0430\u0446\u0438\u044E</div>\n                            </div>\n                        </div>\n                    </div><!-- .cart-body -->\n                </div><!-- .cart -->\n            </div><!-- .col -->\n            <div class=\"col-12 col-md-6 col-lg-4 mb-4\">\n                <div class=\"cart\">\n                    <div class=\"cart-body\">\n                        <p class=\"center mt-auto\">\u0425\u043E\u0447\u0443 \u043F\u043E\u043B\u0443\u0447\u0438\u0442\u044C \u0438\u043D\u0434\u0438\u0432\u0438\u0434\u0443\u0430\u043B\u044C\u043D\u0443\u044E \u0431\u0435\u0441\u043F\u043B\u0430\u0442\u043D\u0443\u044E \u043A\u043E\u043D\u0441\u0443\u043B\u044C\u0442\u0430\u0446\u0438\u044E \u044E\u0440\u0438\u0441\u0442\u0430 \u043F\u043E \u0431\u0430\u043D\u043A\u0440\u043E\u0442\u0441\u0442\u0432\u0443</p>\n                        <div class=\"row mt-auto\">\n                            <div class=\"col-12 mx-auto\">\n                                <div class=\"btn-default\">\u041F\u043E\u043B\u0443\u0447\u0438\u0442\u044C \u043A\u043E\u043D\u0441\u0443\u043B\u044C\u0442\u0430\u0446\u0438\u044E</div>\n                            </div>\n                        </div>\n                    </div><!-- .cart-body -->\n                </div><!-- .cart -->\n            </div><!-- .col -->\n        </div><!-- .row -->\n    </div><!-- Result -->\n\n</div><!-- root -->",
      created: function created() {
        var ref, ref1;
        this.city = (ref = window.appModel.city) != null ? ref : {
          alias: '',
          id: '',
          name: '',
          region_code: ''
        };
        this.input.region.options = (ref1 = window.appModel.regions) != null ? ref1 : {
          code: '',
          region_name: ''
        };
        this.input.region.code = this.city.region_code;
        return true;
      },
      mounted: function mounted() {
        $(this.$refs.inputDebt).maskMoney({
          suffix: ' ₽',
          thousands: ' ',
          precision: 0
        });
        $(this.$refs.inputCount).inputmask({
          alias: 'integer',
          allowMinus: false,
          digits: 0,
          rightAlign: false
        });
        return true;
      },
      data: function data() {
        return {
          city: {},
          input: {
            debtStr: '200 000 ₽',
            creditCount: 1,
            quA: 1,
            quB: 1,
            quC: 0,
            region: {
              code: '',
              region_name: '',
              options: []
            }
          },
          state: 1
        };
      },
      watch: {
        'input.region.code': function inputRegionCode(val) {
          this.regionName = val;
          this.input.region.region_name = this.regionNane;
          return true;
        }
      },
      computed: {
        regionNane: function regionNane() {
          var j, len1, name, ref, region;
          name = '';
          ref = this.input.region.options;

          for (j = 0, len1 = ref.length; j < len1; j++) {
            region = ref[j];

            if (region.code === this.input.region.code) {
              name = region.region_name;
            }
          }

          return name;
        }
      }
    };
  })();

  Vue.config.productionTip = false;
  Vue.prototype.$app = typeof appModel !== "undefined" && appModel !== null ? appModel : {
    homeUrl: '/',
    regions: [],
    cities: [],
    city: {}
  };
  $('.js-vue-app-fssp').each(function (i, el) {
    var $el, actionSearch, region;
    $el = $(el);
    region = $el.data('region');
    actionSearch = $el.data('action-search');
    Vue.prototype.$fsspAction = actionSearch != null ? actionSearch : '';
    Vue.prototype.$region = region != null ? region : {
      city: {},
      options: []
    };
    return new Vue({
      render: function render(h) {
        return h(Fssp);
      }
    }).$mount(el);
  });
  $('.js-test').each(function (i, el) {
    var $el;
    $el = $(el);
    Vue.prototype.$action = $el.data('action');
    return new Vue({
      render: function render(h) {
        return h(Test);
      }
    }).$mount(el);
  }); // $.fancybox.open src: '#test-bonus'
  // $.fancybox.open src: '#test'
  // $.fancybox.open src: '#arbitration-rate-info'
  //$.fancybox.open src: '#arbitration-callback'

  $('.js-vue-cost-calculator').each(function (i, el) {
    var $el;
    $el = $(el);
    return new Vue({
      render: function render(h) {
        return h(CostCalculator);
      }
    }).$mount(el);
  });

  JsSearch = function () {
    var JsSearch = /*#__PURE__*/function () {
      function JsSearch(el) {
        var _this6 = this;

        _classCallCheck(this, JsSearch);

        this.$el = $(el);
        this.$items = this.$el.find('.js-search-item');
        this.$hide = this.$el.find('.js-search-hide');
        this.$el.find('.js-search-input').on('input', function (e) {
          return _this6.filterData($(e.target).val());
        });
      }

      _createClass(JsSearch, [{
        key: "filterData",
        value: function filterData(val) {
          this.$hide.removeClass('d-none');

          if (val.length) {
            this.$hide.addClass('d-none');
          }

          this.$items.removeClass('d-none');
          this.$items.each(function (i, item) {
            var $item, dataStr;
            $item = $(item);
            dataStr = $item.find('.js-search-data').text();

            if (dataStr.search(RegExp("".concat(val), "i")) < 0) {
              return $item.addClass('d-none');
            }
          });
          return true;
        }
      }]);

      return JsSearch;
    }();

    ;
    JsSearch.prototype.$el = $({});
    JsSearch.prototype.$items = $({});
    return JsSearch;
  }.call(this); // $('*[data-percent]').each (i, el) ->
  //     $this = $ el
  //     percent = Number $(this).data 'percent'
  //     $this.css width: "#{percent}%"
  // $.fancybox.open src: '#cities'


  $('.js-search').each(function (i, el) {
    return new JsSearch(el);
  });

  SelectSearch = /*#__PURE__*/function () {
    function SelectSearch(select) {
      var _this7 = this;

      _classCallCheck(this, SelectSearch);

      var $select;
      $select = $(select);
      this.$root = $('<div class="sselect"></div>');
      this.$input = $("<input class=\"input\" type=\"text\" placeholder=\"Введите название своего города\">");
      this.$options = $('<div class="sselect-options"></div>');
      $select.find('option').each(function (i, option) {
        var $option, $ssOption, disabled, optionText, selected;
        $option = $(option);
        optionText = $option.text().trim();

        if ($option.is(':disabled')) {
          disabled = ' disabled';
        } else {
          disabled = '';
        }

        if ($option.is(':selected')) {
          _this7.$input.val(optionText);

          selected = ' selected';
        } else {
          selected = '';
        }

        $ssOption = $("<div class=\"sselect-option".concat(disabled).concat(selected, "\">").concat(optionText, "</div>"));

        _this7.$options.append($ssOption);

        return true;
      });
      this.$root.append(this.$input);
      this.$root.append(this.$options);
      $select.replaceWith(this.$root); // EVENT

      $('body').on('click', function (e) {
        var $ssOption, $target;
        $target = $(e.target);
        $ssOption = _this7.$options.find('.sselect-option');
        $ssOption.each(function (i, option) {
          if ($target.is($(option))) {
            $ssOption.removeClass('selected');
            $target.addClass('selected');
          }

          return true;
        });

        if (!$target.is(_this7.$input)) {
          _this7.$input.val(_this7.$options.find('.selected').text().trim());

          _this7.$options.removeClass('active');

          _this7.$options.find('.sselect-option').removeClass('d-none');
        }

        return true;
      });
      this.$input.on('focusin', function (e) {
        var offsetTop;
        e.preventDefault();

        _this7.$options.addClass('active');

        _this7.$options.scrollTop(0);

        offsetTop = _this7.$options.find('.selected').position().top - 30;
        return _this7.$options.stop().animate({
          scrollTop: offsetTop
        });
      });
      this.$input.on('input', function (e) {
        _this7.filterData();

        return true;
      });
    }

    _createClass(SelectSearch, [{
      key: "filterData",
      value: function filterData() {
        var $options, val;
        val = this.$input.val().trim();
        $options = this.$options.find('.sselect-option');
        $options.removeClass('d-none');

        if (!val.length) {
          return true;
        }

        $options.each(function (i, option) {
          var $option, optionText;
          $option = $(option);
          optionText = $option.text().trim();

          if (optionText.search(RegExp("".concat(val), "i")) < 0) {
            return $option.addClass('d-none');
          }
        });
        return true;
      }
    }]);

    return SelectSearch;
  }();

  $('.js-select-search').each(function (i, el) {
    return new SelectSearch(el);
  });
  $('*[data-toggle]').on('click', function (e) {
    var $targetBlock, $this;
    e.preventDefault();
    $this = $(this);
    $this.toggleClass('active');
    $targetBlock = $("".concat($this.attr('data-toggle')));
    $targetBlock.stop().slideToggle(300, function () {
      var $thisBlock;
      $thisBlock = $(this);

      if ($($thisBlock).is(':visible')) {
        $this.addClass('active');
        $this.trigger('toggle-open');
        $thisBlock.trigger('toggle-open');
      }

      return true;
    });
    return false;
  });
  /*
   */

  CardMoreReview = /*#__PURE__*/function () {
    function CardMoreReview($view1, action) {
      var _this8 = this;

      _classCallCheck(this, CardMoreReview);

      this.$view = $view1;
      $.getJSON(action).done(function (data) {
        var ref, ref1, review;
        review = (ref = data != null ? (ref1 = data.results) != null ? ref1[0] : void 0 : void 0) != null ? ref : false;

        if (review) {
          _this8.renderReview(review);
        } else {
          _this8.renderEmpty();
        }

        return true;
      }).fail(function () {
        console.log("Error: ".concat(url));

        _this8.renderEmpty();

        return true;
      }).always(function () {
        return true;
      });
    }

    _createClass(CardMoreReview, [{
      key: "renderReview",
      value: function renderReview(review) {
        this.$view.html("<div class=\"row align-items-center\">\n    <div class=\"col-auto\">\n        <img class=\"img\" width=\"50\" src=\"/img/ava.svg\">\n    </div>\n    <div class=\"col\">\n        <p class=\"mb-1 fw-600\">".concat(review.name, "</p>\n        <p>").concat(this.ratingHtml(review.rating), "</p>\n    </div><!-- .col -->\n    <div class=\"col-12\">\n        <p class=\"js-debit-card-review-text\">").concat(review.text, "</p>\n    </div>\n</div>")); //<!-- <p><a href="javascript:;">Все отзывы</a></p> -->

        return true;
      }
    }, {
      key: "ratingHtml",
      value: function ratingHtml(rating) {
        var i, j, k, len, out, ref, ref1;
        out = '';
        rating = Number(rating);

        for (i = j = 1, ref = rating; 1 <= ref ? j <= ref : j >= ref; i = 1 <= ref ? ++j : --j) {
          out = "".concat(out, "<i class=\"i-star yellow\"></i>&nbsp;");
        }

        len = 5 - rating;

        if (len < 1) {
          return out;
        }

        for (i = k = 1, ref1 = len; 1 <= ref1 ? k <= ref1 : k >= ref1; i = 1 <= ref1 ? ++k : --k) {
          out = "".concat(out, "<i class=\"i-star gray\"></i>&nbsp;");
        }

        return out;
      }
    }, {
      key: "renderEmpty",
      value: function renderEmpty() {
        return this.$view.html('<p>Еще никто не оставил отзыв</p>');
      }
    }]);

    return CardMoreReview;
  }();

  $('.js-debit-card-more').on('toggle-open', function (e) {
    var $this, $view, loaded, url;
    $this = $(this);
    loaded = $this.attr('data-loaded');

    if (loaded != null) {
      return true;
    }

    $this.attr('data-loaded', true);
    url = $this.attr('data-action');
    $view = $this.find('.js-debit-card-review');
    new CardMoreReview($view, url);
    return true;
  });

  hashScroll = function hashScroll(e) {
    var $this, offsetTop;
    e.preventDefault();
    $this = $(this);
    offsetTop = $("".concat($this.attr('href'))).offset().top;
    $('html:not(:animated),body:not(:animated)').stop().animate({
      scrollTop: offsetTop
    });
    return false;
  };

  hHashNav = function hHashNav(index, $headers) {
    var $out, hPrev, level, numH2, numH3, numH4;
    $out = $('<blockquote></blockquote>');
    level = 0;
    hPrev = 0;
    numH2 = numH3 = numH4 = 0;
    $headers.each(function (i, el) {
      var $a, $el, $n, $p, h, id;
      $el = $(el);
      id = "h-hash-nav-".concat(index, "-").concat(i);
      $el.attr('id', id);
      h = Number($el.prop('tagName')[1]);
      $p = $("<p class=\"fw-600\" style=\"padding-left:".concat((h - 2) * 2, "em\"></p>"));
      $a = $("<a href=\"#".concat(id, "\">").concat($el.text(), "</a>"));
      $n = $('<span class="fw-300 mr-2"></span>');
      $n.text(function () {
        switch (h) {
          case 2:
            numH3 = 0;
            numH4 = 0;
            return "".concat(++numH2, ".");

          case 3:
            numH4 = 0;
            return "".concat(numH2, ".").concat(++numH3, ".");

          case 4:
            return "".concat(numH2, ".").concat(numH3, ".").concat(++numH4, ".");

          default:
            return '';
        }
      }());
      $p.append($n);
      $p.append($a);
      $out.append($p);
      return $a.on('click', hashScroll);
    });
    return $out;
  };

  $('.js-hash-nav').on('click', hashScroll);
  $('.js-h-hash-nav').each(function (i, el) {
    var $el, $headers, $root;
    $el = $(el);
    $headers = $el.parent().find('h2, h3, h4');

    if (!$headers.length) {
      return true;
    }

    $root = $('<div></div>');
    $root.append('<p class="fw-600 em-12">Оглавление</p>');
    $root.append(hHashNav(i, $headers));
    $el.replaceWith($root);
    return true;
  });

  CirclePercent = function () {
    var CirclePercent = /*#__PURE__*/function () {
      function CirclePercent(el) {
        _classCallCheck(this, CirclePercent);

        var percentNum;
        this.$el = $(el);
        percentNum = Number(this.$el.data('circle-percent'));
        this.svg = SVG();
        this.svg.viewbox(0, 0, 130, 130);
        this.$el.replaceWith(this.svg.node);
        this.arc(percentNum * 359.99999 / 100);
        this.percent(percentNum);
      }

      _createClass(CirclePercent, [{
        key: "arcPoint",
        value: function arcPoint(deg) {
          var angle, x, y;
          angle = (deg - 90) * Math.PI / 180;
          x = 65 + 60 * Math.cos(angle);
          y = 65 + 60 * Math.sin(angle);
          return {
            x: x,
            y: y
          };
        }
      }, {
        key: "arc",
        value: function arc() {
          var _this9 = this;

          var deg = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;
          var circle, pointStart;

          if (deg >= 360) {
            deg = 359.9999999;
          } // start = @arcPoint deg


          pointStart = this.arcPoint(0);
          circle = this.svg.group().fill('none').stroke({
            color: "rgba(255 202 95)",
            width: 10
          });
          return $({
            deg: 0
          }).animate({
            deg: deg
          }, {
            duration: this.duration,
            step: function step(now) {
              var point, sweep;
              circle.clear().stroke("rgba( ".concat((255 - 180 / 360 * now).toFixed(), " ").concat((202 - 25 / 360 * now).toFixed(), " ").concat((95 - 32 / 360 * now).toFixed(), " )"));
              point = _this9.arcPoint(now);
              sweep = now <= 180 ? "0" : "1";
              return circle.path("M ".concat(point.x, " ").concat(point.y, " A 60 60 0 ").concat(sweep, " 0 ").concat(pointStart.x, " ").concat(pointStart.y));
            }
          });
        }
      }, {
        key: "percent",
        value: function percent() {
          var num = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;
          var text;
          text = this.svg.group().text('').font({
            family: 'sans-serif',
            size: 30,
            anchor: 'middle'
          }).attr({
            x: '50%',
            y: '36'
          });
          return $({
            percent: 0
          }).animate({
            percent: num
          }, {
            duration: this.duration,
            step: function step(now) {
              // text.clear()
              return text.text("".concat(now.toFixed(), "%"));
            }
          });
        }
      }]);

      return CirclePercent;
    }();

    ;
    CirclePercent.prototype.duration = 800;
    return CirclePercent;
  }.call(this);

  $('*[data-circle-percent]').each(function (i, el) {
    return new CirclePercent(el);
  });
  $('input[data-mask]').each(function (i, input) {
    var $input;
    $input = $(input);
    $input.inputmask($input.data('mask'));
    return true;
  });
  $('input[data-maskmoney]').each(function (i, input) {
    $(input).maskMoney({
      suffix: ' ₽',
      thousands: ' ',
      precision: 0
    });
    return true;
  });
  $('input[data-maskint]').each(function (i, input) {
    $(input).inputmask({
      alias: 'integer',
      allowMinus: false,
      digits: 0,
      rightAlign: false
    });
    return true;
  });
  $('input[data-date]').each(function (i, input) {
    $(input).datepicker({
      locale: 'ru-ru',
      format: 'dd.mm.yyyy'
    });
    return true;
  });

  AjaxForm = function () {
    var AjaxForm = /*#__PURE__*/function () {
      function AjaxForm(form) {
        var _this10 = this;

        _classCallCheck(this, AjaxForm);

        this.$form = $(form);
        this.id = this.$form.attr('id');
        this.$loader = $("#".concat(this.id, "-button"));
        this.action = this.$form.data('action');
        this.$form.on('error', function (e, data) {
          return _this10.error(data);
        });
        this.$form.on('submit', function (e) {
          e.preventDefault();

          _this10.send(new FormData(form));

          return false;
        });
      }

      _createClass(AjaxForm, [{
        key: "send",
        value: function send(data) {
          var _this11 = this;

          if (this.progress) {
            return true;
          }

          this.progress = true;
          this.loaderHtml = this.$loader.html();
          this.$loader.html(this.loaderImg);
          $.ajax({
            method: 'post',
            url: this.action,
            data: data,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false
          }).done(function (data) {
            if ((data != null ? data.success : void 0) != null && data.success === 1) {
              _this11.success(data);

              return true;
            }

            _this11.$form.trigger('error', data);

            return true;
          }).fail(function (error) {
            // //console.log error
            _this11.$form.trigger('fail');

            return true;
          }).always(function () {
            _this11.progress = false;

            _this11.$loader.text(_this11.loaderHtml);

            return true;
          });
          return true;
        }
      }, {
        key: "success",
        value: function success(data) {
          this.$form.trigger('success');
          return true;
        }
      }, {
        key: "error",
        value: function error(_error) {
          var attr, errArr;
          console.log(_error);

          for (attr in _error) {
            errArr = _error[attr];
            $("#".concat(this.id, "-input-").concat(attr)).addClass('error').one('focusin', function (e) {
              var $input;
              $input = $(e.target);
              $input.removeClass('error');
              return $("#".concat(String($input.attr('id')).replace('-input-', '-error-'))).html('').addClass('d-none');
            });
            $("#".concat(this.id, "-error-").concat(attr)).html(errArr[0]).removeClass('d-none');
          }

          return true;
        }
      }, {
        key: "delay",
        value: function delay(ms, cb) {
          return setTimeout(cb, ms);
        }
      }]);

      return AjaxForm;
    }();

    ;
    AjaxForm.prototype.loaderHtml = '';
    AjaxForm.prototype.loaderImg = '<img height="8" src="/img/loader.svg">';
    AjaxForm.prototype.progress = false;
    AjaxForm.prototype.id = '';
    AjaxForm.prototype.$form = $({});
    return AjaxForm;
  }.call(this); // $.fancybox.open src: '#register'
  // $.fancybox.open src: '#login'


  $('#main-user-form-login').on('success', function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    window.document.location.reload();
    return false;
  });
  $('#main-user-form-register').on('success', function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    return false;
  });
  $('#main-user-form-register').on('fail', function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    return false;
  }); // TO-DO

  $('#rating-arb-form-filter').on('submit', function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    return false;
  });
  $('.js-form-ajax').each(function (i, form) {
    var ajaxForm;
    ajaxForm = new AjaxForm(form);
    return ajaxForm.$form.on('success', function () {
      $.fancybox.close();
      $.fancybox.open({
        src: "#".concat(this.id, "-modal-success")
      });
      return true;
    }).on('fail', function (e) {
      $.fancybox.close();
      $.fancybox.open({
        src: "#".concat(this.id, "-modal-error")
      });
      return true;
    });
  });

  fileInputChanged = function fileInputChanged(e) {
    var $input, $label, fileName, files;
    files = this.files;
    $input = $(this);
    $label = $("#".concat($input.attr('id'), "-label"));

    if (files.length) {
      fileName = String(files[0].name);

      if (fileName.length > 25) {
        fileName = "".concat(fileName.slice(0, 23), "...");
      }

      $label.html(fileName);
    }

    return true;
  };

  $('*[data-file-input]').on('click', function (e) {
    var $input, $this;
    e.preventDefault();
    $this = $(this);
    $input = $($this.attr('data-file-input'));
    $input.one('change', fileInputChanged);
    $input.trigger('click');
    return false;
  });

  window.isCity = function () {
    $.fancybox.open({
      src: '#is-city'
    });
    return true;
  };

  $mainNavLn = $("*[data-dropdown]");
  $('.main-nav').on('mouseleave', function (e) {
    $mainNavLn.removeClass('active');
    return $('.main-nav-content').removeClass('active');
  });
  $mainNavLn.on('click', function (e) {
    e.preventDefault();
    return false;
  });
  $('.main-nav-ln').on('mouseenter', function (e) {
    var $content, $this;
    $('.main-nav-content').removeClass('active');
    $mainNavLn.removeClass('active');
    $this = $(this);

    if (!$this.hasAttr('data-dropdown')) {
      return true;
    }

    $content = $("".concat($this.attr('data-dropdown')));
    $this.addClass('active');
    $content.addClass('active');
    return true;
  });
  $('.main-mnav-ln').on('click', function (e) {
    var $content, $this;
    $this = $(this);

    if (!$this.hasAttr('data-dropdown')) {
      return true;
    }

    $content = $("".concat($this.attr('data-dropdown')));
    $this.toggleClass('active');
    $content.stop().slideToggle(300, function () {
      if ($(this).is(':visible')) {
        return $this.addClass('active');
      }
    });
    return true;
  });
  $('*[data-mnav-open]').on('click', function (e) {
    e.preventDefault();
    $('.main-mnav').addClass('active');
    $('body').addClass('main-mnav-active');
    return false;
  }); // $('*[data-mnav-open]').trigger 'click'

  $('.main-mnav-close').on('click', function (e) {
    $('.main-mnav').removeClass('active');
    return $('body').removeClass('main-mnav-active');
  });
  $('*[data-link]').on('click', function (e) {
    var $content, $this;
    e.preventDefault();
    $this = $(this);

    if ($this.hasClass('active')) {
      return false;
    }

    $this.parents('.js-tab-links').find('*[data-link]').removeClass('active');
    $this.addClass('active');
    $content = $($this.attr('data-link'));
    $content.parents('.js-tab-contents').find('.tab-content').removeClass('active').css('opacity', 0);
    $content.addClass('active').animate({
      opacity: 1
    }, 300);
    return false;
  }); // РЕЙТИНГ АРБИТРАЖНЫХ УПРАВЛЯЮЩИХ

  $('.js-arbitration-filter-tab').on('click', function (e) {
    var $this;
    e.preventDefault();
    $this = $(this);

    if ($this.hasClass('active')) {
      return false;
    }

    $($this.attr('data-input')).val($this.attr('data-val'));
    $($this.attr('data-form')).submit();
    return false;
  });
  $('.js-arbitration-filter-select').on('change', function () {
    var $this;
    $this = $(this);
    return $($this.attr('data-form')).submit();
  });
  $('.js-slick-slider').each(function (i, el) {
    var $el;
    $el = $(el);
    $el.slick({
      autoplay: true,
      arrows: false,
      focusOnSelect: true,
      mobileFirst: true,
      slidesToShow: 3,
      responsive: [{
        breakpoint: 576,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 768,
        settings: {
          slidesToShow: 5
        }
      }, {
        breakpoint: 992,
        settings: {
          slidesToShow: 6
        }
      }, {
        breakpoint: 1200,
        settings: {
          slidesToShow: 7
        }
      }]
    });
    return true;
  });
}).call(void 0);