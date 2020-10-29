
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

hHashNav = (index, $headers) ->
    $out = $ '<blockquote></blockquote>'
    level = 0
    hPrev = 0
    numH2 = numH3 = numH4 = 0
    $headers.each (i, el) ->
        $el = $ el
        id = "h-hash-nav-#{index}-#{i}"
        $el.attr 'id', id
        h = Number $el.prop('tagName')[1]
        $p = $ "<p class=\"fw-600\" style=\"padding-left:#{(h-2) * 2}em\"></p>"
        $a = $ "<a href=\"##{id}\">#{$el.text()}</a>"
        $n = $ '<span class="fw-300 mr-2"></span>'
        $n.text switch h
            when 2
                numH3 = 0
                numH4 = 0
                "#{++numH2}."
            when 3
                numH4 = 0
                "#{numH2}.#{++numH3}."
            when 4
                "#{numH2}.#{numH3}.#{++numH4}."
            else ''
        
        $p.append $n
        $p.append $a
        $out.append $p

        # level++ if h > hPrev
        # level-- if h < hPrev
        # level = 0 if level < 0
        # hPrev = h

        $a.on 'click', hashScroll
    $out

$('.js-h-hash-nav').each (i, el) ->
    $el = $ el
    $headers = $el.parent().find 'h2, h3, h4'
    return on unless $headers.length
    $root = $ '<div></div>'
    $root.append '<p class="fw-600 em-12">Оглавление</p>'
    $root.append hHashNav(i, $headers)
    $el.replaceWith $root
    on
    # $out = $ ''
    # $blockquote = $ ''
    # numH1 = numH2 = numH3 = numH4 = 0
    # $headers.each (hi, hel) ->
    #     $hel = $ hel
    #     id = "h-hash-nav-#{i}-#{hi}"
    #     $hel.attr 'id', id
    #     h = Number $hel.prop('tagName')[1]
    #     pl = (h - 2) * 2
    #     pl = 0 if pl < 0
    #     # $num = $ '<span class="fw-400 mr-2"></span>'
    #     # $num.text switch hNum
    #     #     when 1 then '1.'
    #     # # if hNum is 1
    #     # #     numH2 = numH3 = numH4 = 0
    #     # #     numH1++
    #     # #     $num.text "#{numH1}."
    #     # # if hNum is 2
    #     # #     numH3 = numH4 = 0
    #     # #     numH2++
    #     # #     $num.text "#{numH1}.#{numH2}."
    #     # # if hNum is 3
    #     # #     numH4 = 0
    #     # #     numH3++
    #     # #     $num.text "#{numH1}.#{numH2}.#{numH3}."
    #     # # if hNum is 4
    #     # #     numH4++
    #     # #     $num.text "#{numH1}.#{numH2}.#{numH3}.#{numH4}."
    #     # $a = $ "<a href=\"##{id}\">#{$hel.text()}</a>"
    #     # $a.on 'click', hashScroll
    #     # $p = $ "<p class=\"fw-600\" style=\"padding-left:#{pl}em\"></p>"
    #     # $p.append $num
    #     # $p.append $a
    #     # $blockquote.append $p
    # $out.append $blockquote
    # $out = '' unless $headers.length
    # $el.replaceWith $out
    # on

window.isCity = () ->
    $.fancybox.open src: '#is-city'
    on
