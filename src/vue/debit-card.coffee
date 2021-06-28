
import App from './debit-card/App.vue'
import List from './debit-card/views/List.vue'

router = new VueRouter
    routes: [
        {
            path: '/'
            component: List
            children: [
                {
                    path: '*'
                    component: List
                }
            ]
        }
    ]

$('.js-app-debit-card').each (i, el) ->
    new Vue
        router: router
        render: (h) -> h App
    .$mount el
