
# alert 'asdasdasdd'

$.fn.hasAttr = (name) -> @attr(name)?

#=require ./vue/Fssp.coffee
#=require ./vue/Test.coffee
#=require ./vue/CostCalculator.coffee

Vue.config.productionTip = off

Vue.prototype.$app = appModel ? {
    homeUrl: '/'
    regions: []
    cities: []
    city: {}
}


$('.js-vue-app-fssp').each (i, el) ->
    $el = $ el
    region = $el.data 'region'
    actionSearch = $el.data 'action-search'
    Vue.prototype.$fsspAction = actionSearch ? ''
    Vue.prototype.$region = region ? { city:{}, options:[] }
    new Vue
        render: (h) -> h Fssp
    .$mount el


$('.js-test').each (i, el) ->
    $el = $ el
    Vue.prototype.$action = $el.data 'action'
    new Vue
        render: (h) -> h Test
    .$mount el

# $.fancybox.open src: '#test-bonus'
# $.fancybox.open src: '#test'
# $.fancybox.open src: '#arbitration-rate-info'
#$.fancybox.open src: '#arbitration-callback'

$('.js-vue-cost-calculator').each (i, el) ->
    $el = $ el
    new Vue
        render: (h) -> h CostCalculator
    .$mount el



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
            dataStr = $item.find('.js-search-data').text()
            $item.addClass 'd-none' if dataStr.search(///#{val}///i) < 0
        on



# $('*[data-percent]').each (i, el) ->
#     $this = $ el
#     percent = Number $(this).data 'percent'
#     $this.css width: "#{percent}%"


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
    $this.toggleClass 'active'
    $targetBlock = $ "#{$this.attr('data-toggle')}"
    $targetBlock.stop().slideToggle 300, () ->
        $this.addClass 'active' if $(this).is ':visible'
        on
    off


hashScroll = (e) ->
    e.preventDefault()
    $this = $ this
    offsetTop = $("#{$this.attr('href')}").offset().top
    $('html:not(:animated),body:not(:animated)').stop().animate scrollTop: offsetTop
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
        $a.on 'click', hashScroll
    $out


$('.js-hash-nav').on 'click', hashScroll


$('.js-h-hash-nav').each (i, el) ->
    $el = $ el
    $headers = $el.parent().find 'h2, h3, h4'
    return on unless $headers.length
    $root = $ '<div></div>'
    $root.append '<p class="fw-600 em-12">Оглавление</p>'
    $root.append hHashNav(i, $headers)
    $el.replaceWith $root
    on


class CirclePercent

    duration: 800

    constructor: (el) ->
        @$el = $ el
        percentNum = Number @$el.data 'circle-percent'
        @svg = SVG()
        @svg.viewbox 0, 0, 130, 130
        @$el.replaceWith @svg.node
        @arc (percentNum * 359.99999 / 100)
        @percent percentNum

    arcPoint: (deg) ->
        angle = (deg - 90) * Math.PI / 180
        x = 65 + (60 * Math.cos angle)
        y = 65 + (60 * Math.sin angle)
        { x, y }

    arc: (deg=0) ->
        deg = 359.9999999 if deg >= 360
        # start = @arcPoint deg
        pointStart = @arcPoint 0
        circle = @svg.group()
            .fill 'none'
            .stroke
                color: "rgba(255 202 95)"
                width: 10
        $({ deg: 0 }).animate { deg: deg },
            duration: @duration
            step: (now) =>
                circle.clear()
                .stroke "rgba( #{(255 - 180/360*now).toFixed()} #{(202 - 25/360*now).toFixed()} #{(95 - 32/360*now).toFixed()} )"
                point = @arcPoint now
                sweep = if now <= 180 then "0" else "1"
                circle.path("M #{point.x} #{point.y} A 60 60 0 #{sweep} 0 #{pointStart.x} #{pointStart.y}")

    percent: (num=0) ->
        text = @svg.group().text('')
            .font
                family: 'sans-serif'
                size: 30
                anchor: 'middle'
            .attr
                x: '50%'
                y: '36'
        $({ percent: 0 }).animate { percent: num },
            duration: @duration
            step: (now) =>
                # text.clear()
                text.text "#{now.toFixed()}%"



$('*[data-circle-percent]').each (i, el) -> new CirclePercent el


$('input[data-mask]').each (i, input) ->
    $input = $ input
    $input.inputmask $input.data 'mask'
    on


$('input[data-maskmoney]').each (i, input) ->
    $(input).maskMoney
        suffix: ' ₽'
        thousands: ' '
        precision: 0
    on


$('input[data-maskint]').each (i, input) ->
    $(input).inputmask
        alias: 'integer'
        allowMinus: false
        digits: 0
        rightAlign: off
    on


$('input[data-date]').each (i, input) ->
    $(input).datepicker
        locale: 'ru-ru'
        format: 'dd.mm.yyyy'
    on


class AjaxForm

    loaderHtml: ''
    loaderImg: '<img height="8" src="/img/loader.svg">'
    progress: off
    id: ''
    $form: $ {}

    constructor: (form) ->
        @$form = $ form
        @id = @$form.attr 'id'
        @$loader = $ "##{@id}-button"
        @action = @$form.data 'action'
        @$form.on 'error', (e, data) => @error data
        @$form.on 'submit', (e) =>
            e.preventDefault()
            @send new FormData form
            off
    send: (data) ->
        return on if @progress
        @progress = on
        @loaderHtml = @$loader.html()
        @$loader.html @loaderImg
        $.ajax
            method: 'post'
            url: @action
            data: data
            dataType: 'json'
            processData: off
            contentType: off
            cache: off
        .done ( data ) =>
            if data?.success? and data.success is 1
                @success data
                return on
            @$form.trigger 'error', data
            on
        .fail ( error ) =>
            # //console.log error
            @$form.trigger 'fail'
            on
        .always () =>
            @progress = off
            @$loader.text @loaderHtml
            on
        on
    success: (data) ->
        @$form.trigger 'success'
        on
    error: (error) ->
        console.log error
        for attr, errArr of error
            $ "##{@id}-input-#{attr}"
                .addClass 'error'
                .one 'focusin', (e) =>
                    $input = $ e.target
                    $input.removeClass 'error'
                    $ "##{String($input.attr 'id').replace('-input-', '-error-')}"
                        .html ''
                        .addClass 'd-none'
            $ "##{@id}-error-#{attr}"
                .html errArr[0]
                .removeClass 'd-none'
        on
    delay: (ms, cb) ->
        setTimeout cb, ms



# $.fancybox.open src: '#register'
# $.fancybox.open src: '#login'

$('#main-user-form-login').on 'success', (e) ->
    e.preventDefault()
    e.stopImmediatePropagation()
    window.document.location.reload()
    off

$('#main-user-form-register').on 'success', (e) ->
    e.preventDefault()
    e.stopImmediatePropagation()
    off

$('#main-user-form-register').on 'fail', (e) ->
    e.preventDefault()
    e.stopImmediatePropagation()
    off


# TO-DO
$('#rating-arb-form-filter').on 'submit', (e) ->
    e.preventDefault()
    e.stopImmediatePropagation()
    off

$('.js-form-ajax').each (i, form) ->
    ajaxForm = new AjaxForm form
    ajaxForm.$form
        .on 'success', ->
            $.fancybox.close()
            $.fancybox.open src: "##{@id}-modal-success"
            on
        .on 'fail', (e) ->
            $.fancybox.close()
            $.fancybox.open src: "##{@id}-modal-error"
            on





fileInputChanged = (e) ->
    files = this.files
    $input = $ this
    $label = $ "##{$input.attr 'id'}-label"
    if files.length
        fileName = String files[0].name
        fileName = "#{fileName.slice 0, 23}..." if fileName.length > 25
        $label.html fileName
    on


$('*[data-file-input]').on 'click', (e) ->
    e.preventDefault()
    $this = $ this
    $input = $ $this.attr 'data-file-input'
    $input.one 'change', fileInputChanged
    $input.trigger 'click'
    off


window.isCity = () ->
    $.fancybox.open src: '#is-city'
    on



$mainNavLn = $ "*[data-dropdown]"



$('.main-nav').on 'mouseleave', (e) ->
    $mainNavLn.removeClass 'active'
    $('.main-nav-content').removeClass 'active'


$mainNavLn.on 'click', (e) ->
    e.preventDefault()
    off


$('.main-nav-ln').on 'mouseenter', (e) ->
    $('.main-nav-content').removeClass 'active'
    $mainNavLn.removeClass 'active'
    $this = $ this
    return on unless $this.hasAttr 'data-dropdown'
    $content = $ "#{$this.attr 'data-dropdown'}"
    $this.addClass 'active'
    $content.addClass 'active'
    on


$('.main-mnav-ln').on 'click', (e) ->
    $this = $ this
    return on unless $this.hasAttr 'data-dropdown'
    $content = $ "#{$this.attr 'data-dropdown'}"
    $this.toggleClass 'active'
    $content.stop().slideToggle 300, () ->
        $this.addClass 'active' if $(this).is ':visible'
    on


$('*[data-mnav-open]').on 'click', (e) ->
    e.preventDefault()
    $('.main-mnav').addClass 'active'
    $('body').addClass 'main-mnav-active'
    off

# $('*[data-mnav-open]').trigger 'click'

$('.main-mnav-close').on 'click', (e) ->
    $('.main-mnav').removeClass 'active'
    $('body').removeClass 'main-mnav-active'


$('*[data-link]').on 'click', (e) ->
    e.preventDefault();
    $this = $ this
    return off if $this.hasClass 'active'
    $this.parents('.js-tab-links').find('*[data-link]').removeClass 'active'
    $this.addClass 'active'
    $content = $ $this.attr 'data-link'
    $content
        .parents('.js-tab-contents')
        .find('.tab-content')
        .removeClass('active')
        .css('opacity', 0)
    $content
        .addClass('active')
        .animate({opacity: 1}, 300)
    off


# РЕЙТИНГ АРБИТРАЖНЫХ УПРАВЛЯЮЩИХ
$('.js-arbitration-filter-tab').on 'click', (e) ->
    e.preventDefault()
    $this = $ this
    return off if $this.hasClass 'active'
    $($this.attr 'data-input').val $this.attr 'data-val'
    $($this.attr 'data-form').submit()
    off

$('.js-arbitration-filter-select').on 'change', () ->
    $this = $ this
    $($this.attr 'data-form').submit()


$('.js-slick-slider').each (i, el) ->
    $el = $ el
    $el.slick
        autoplay: yes
        arrows: no
        focusOnSelect: yes
        mobileFirst: yes
        slidesToShow: 3
        responsive: [
            {
                breakpoint: 576
                settings:
                    slidesToShow: 4
            }
            {
                breakpoint: 768
                settings:
                    slidesToShow: 5
            }
            {
                breakpoint: 992
                settings:
                    slidesToShow: 6
            }
            {
                breakpoint: 1200
                settings:
                    slidesToShow: 7
            }
        ]
    on