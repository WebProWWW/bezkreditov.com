
import App from './partner/App.vue'
import Home from './partner/views/Home.vue'
import DebitCard from './partner/views/DebitCard.vue'
import DebitCardList from './partner/views/DebitCardList.vue'
import DebitCardProfile from './partner/views/DebitCardProfile.vue'

router = new VueRouter
    routes: [
        {
            path: '/'
            component: Home
        }
        {
            path: '/debetovye-karty'
            component: DebitCard
            children: [
                {
                    path: ''
                    component: DebitCardList
                    meta:
                        tags: yes
                }
                {
                    path: 'karta-:id'
                    component: DebitCardProfile
                }
                {
                    path: ':alias'
                    component: DebitCardList
                    meta:
                        tags: yes
                }
            ]
        }
    ]

$('.vue-app-partner').each (i, el) ->
    new Vue
        router: router
        render: (h) -> h App
    .$mount el
