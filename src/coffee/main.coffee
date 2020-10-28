
#=require ./vue/Fssp.coffee
#=require ./vue/Test.coffee

Vue.config.productionTip = off

$('.js-vue-app-fssp').each (i, el) ->
    $el = $ el
    region = $el.data 'region'
    actionSearch = $el.data 'action-search'
    Vue.prototype.actionSearch = actionSearch ? ''
    Vue.prototype.$region = region ? { city:{}, options:[] }
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


class SelectSearch

    constructor: (select) ->
        $select = $ select
        @$root = $ '<div class="sselect"></div>'
        @$input = $ "<input class=\"input\" type=\"text\" placeholder=\"Введите название своего города\">"
        @$options = $ '<div class="sselect-options"></div>'
        $select.find('option').each (i, option) =>
            $option = $ option
            optionText = $option.text().trim()
            if $option.is ':disabled'
                disabled = ' disabled'
            else
                disabled = ''
            if $option.is ':selected'
                @$input.val optionText
                selected = ' selected'
            else
                selected = ''
            $ssOption = $ "<div class=\"sselect-option#{disabled}#{selected}\">#{optionText}</div>"
            @$options.append $ssOption
            # $ssOption.on 'click', (e) =>
            #     e.preventDefault()
            #     $target = $ e.target
            #     @$input.val $target.text().trim()
            #     @$options.removeClass 'active selected'
            #     @$options.find('.sselect-option').removeClass 'd-none'
            #     off
            on

        @$root.append @$input
        @$root.append @$options
        $select.replaceWith @$root
        # EVENT
        $('body').on 'click', (e) =>
            $target = $ e.target
            $ssOption = @$options.find '.sselect-option'
            $ssOption.each (i, option) =>
                if $target.is $ option
                    $ssOption.removeClass 'selected'
                    $target.addClass 'selected'
                on
            unless $target.is @$input
                @$input.val @$options.find('.selected').text().trim()
                @$options.removeClass 'active'
                @$options.find('.sselect-option').removeClass 'd-none'
            on
        @$input.on 'focusin', (e) =>
            e.preventDefault()
            @$options.addClass 'active'
            @$options.scrollTop 0
            offsetTop = @$options.find('.selected').position().top - 30
            @$options.stop().animate scrollTop: offsetTop
        @$input.on 'input', (e) =>
            @filterData()
            on

    filterData: () ->
        val =  @$input.val().trim()
        $options = @$options.find '.sselect-option'
        $options.removeClass 'd-none'
        return on unless val.length
        $options.each (i, option) =>
            $option = $ option
            optionText = $option.text().trim()
            $option.addClass 'd-none' if optionText.search(///#{val}///i) < 0
        on



$('.js-select-search').each (i, el) ->
    new SelectSearch el

$('*[data-toggle]').on 'click', (e) ->
    e.preventDefault()
    $this = $ this
    $targetBlock = $ "#{$this.attr('data-toggle')}"
    $targetBlock.slideToggle()
    off


hashScroll = (e) ->
    e.preventDefault()
    $this = $ this
    offsetTop = $("#{$this.attr('href')}").offset().top
    $('html:not(:animated),body:not(:animated)').animate scrollTop: offsetTop
    off

$('.js-h-hash-nav').each (i, el) ->
    $el = $ el
    $headers = $el.parent().find(':header')
    $blockquote = $ '<blockquote></blockquote>'
    $headers.each (hi, hel) ->
        $hel = $ hel
        id = "h-hash-nav-#{i}-#{hi}"
        $hel.attr 'id', id
        hNum = Number $hel.prop('tagName')[1]
        pl = (hNum - 2) * 2
        pl = 0 if pl < 0
        $a = $ """<a href="##{id}">#{$hel.text()}</a>"""
        $a.on 'click', hashScroll
        $p = $ """<p class="fw-600" style="padding-left:#{pl}em"></p>"""
        $p.append $a
        $blockquote.append $p
    $blockquote = '' unless $headers.length
    $el.parent().prepend $blockquote
    on

window.isCity = () ->
    $.fancybox.open src: '#is-city'
    on
