

import App from './offer/App.vue'

$win = $ window

$('#vue-app-offer').each (i, el) ->
    new Vue
        render: (h) -> h App
    .$mount el
    yes

# $.fancybox.open
#     src: '#offer-modal'
#     touch: false
#     clickSlide: false

# $win.trigger 'vue-app-offer-load',
#     minSum: 1000
#     maxSum: 10000000
#     url: '/offer-2003515.json'
#     id: 2003515
#     title: 'Ипотека "Вторичное жилье"'
#     logo: 'https://unicom24.ru/media/open/5/0/3a/03a1b750430ba70ec8f617c90656f189.png'

$('*[data-offer]').click (e) ->
    e.preventDefault()
    # $this = $ this
    # src = $this.data 'src'
    # id = Number $this.data 'id'
    # url = $this.data 'url'
    # title = $this.data 'title'
    # logo = $this.data 'logo'
    # $.fancybox.open
    #     src: src
    #     touch: false
    #     clickSlide: false
    # $win.trigger 'vue-app-offer-load', {url, id, title, logo}
    off
