
#=include lib/MyClass.coffee

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


