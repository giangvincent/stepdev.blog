import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/p/:slug',
      name: 'post',
      component: () => import('./views/Post.vue')
    },
    {
      path: '/cat/:slug',
      name: 'category',
      component: () => import('./views/Category.vue')
    },
    {
      path: '/tag/:slug',
      name: 'tag',
      component: () => import('./views/Tag.vue')
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ './views/About.vue')
    }
  ]
})
