import Vue from 'vue'
import App from './App.vue'
import './assets/tailwind.css'
import VueRouter from 'vue-router'
import SignUp from './components/SignUp.vue'
import LoginForm from './components/LoginForm.vue'


Vue.use(VueRouter);
const router= new VueRouter({
  mode:'history',
  routes: [
    {path: "/SignUp", name: "SignUp", component: SignUp},
    {path: "/LoginForm", name:"LoginForm", component: LoginForm},

  ]
})


Vue.config.productionTip = false



new Vue({
router: router,
  render: h => h(App),
}).$mount('#app')
