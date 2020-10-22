
#=require ./vue/Fssp.coffee
#=require ./vue/Test.coffee

Vue.config.productionTip = off

$('.js-vue-app-fssp').each (i, el) ->
    Vue.prototype.actionSearch = $(el).data 'action-search'
    new Vue
        render: (h) -> h Fssp
    .$mount el


$('.js-test').each (i, el) ->
    $el = $ el
    Vue.prototype.testCallback = $el.data 'action-callback'
    Vue.prototype.testSend = $el.data 'action-send'
    new Vue
        render: (h) -> h Test
    .$mount el

# $.fancybox.open src: '#test'


class JsSearch

    $el: $ {}
    $items: $ {}

    constructor: (el) ->
        @$el = $ el
        @$items = @$el.find '.js-search-item'
        @$hide = @$el.find '.js-search-hide'
        @$el.find('.js-search-input').on 'input', (e) =>
            @filterData $(e.target).val()

    filterData: (val) ->
        @$hide.removeClass 'd-none'
        @$hide.addClass 'd-none' if val.length
        @$items.removeClass 'd-none'
        @$items.each (i, item) =>
            $item = $ item
            datdStr = $item.find('.js-search-data').text()
            $item.addClass 'd-none' if datdStr.search(///#{val}///i) < 0
        on



$('*[data-percent]').each (i, el) ->
    $this = $ el
    percent = Number $(this).data 'percent'
    $this.css width: "#{percent}%"


# $.fancybox.open src: '#cities'


$('.js-search').each (i, el) ->
    new JsSearch el


$('*[data-toggle]').on 'click', (e) ->
    e.preventDefault()
    $this = $ this
    $targetBlock = $ "#{$this.attr('data-toggle')}"
    $targetBlock.slideToggle()
    off


window.isCity = () ->
    $.fancybox.open src: '#is-city'
    on
