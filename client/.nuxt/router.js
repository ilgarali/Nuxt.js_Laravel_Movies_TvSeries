import Vue from 'vue'
import Router from 'vue-router'
import { interopDefault } from './utils'
import scrollBehavior from './router.scrollBehavior.js'

const _3220c078 = () => interopDefault(import('../pages/dizi/index.vue' /* webpackChunkName: "pages/dizi/index" */))
const _73fd5f8e = () => interopDefault(import('../pages/dizi/single/episode/_slug.vue' /* webpackChunkName: "pages/dizi/single/episode/_slug" */))
const _6a97264d = () => interopDefault(import('../pages/dizi/single/_slug.vue' /* webpackChunkName: "pages/dizi/single/_slug" */))
const _47fd1b80 = () => interopDefault(import('../pages/film/_slug.vue' /* webpackChunkName: "pages/film/_slug" */))
const _5b6448e1 = () => interopDefault(import('../pages/index.vue' /* webpackChunkName: "pages/index" */))
const _f40b5148 = () => interopDefault(import('../pages/_slug/index.vue' /* webpackChunkName: "pages/_slug/index" */))

// TODO: remove in Nuxt 3
const emptyFn = () => {}
const originalPush = Router.prototype.push
Router.prototype.push = function push (location, onComplete = emptyFn, onAbort) {
  return originalPush.call(this, location, onComplete, onAbort)
}

Vue.use(Router)

export const routerOptions = {
  mode: 'history',
  base: decodeURI('/'),
  linkActiveClass: 'nuxt-link-active',
  linkExactActiveClass: 'nuxt-link-exact-active',
  scrollBehavior,

  routes: [{
    path: "/dizi",
    component: _3220c078,
    name: "dizi"
  }, {
    path: "/dizi/single/episode/:slug?",
    component: _73fd5f8e,
    name: "dizi-single-episode-slug"
  }, {
    path: "/dizi/single/:slug?",
    component: _6a97264d,
    name: "dizi-single-slug"
  }, {
    path: "/film/:slug?",
    component: _47fd1b80,
    name: "film-slug"
  }, {
    path: "/",
    component: _5b6448e1,
    name: "index"
  }, {
    path: "/:slug",
    component: _f40b5148,
    name: "slug"
  }],

  fallback: false
}

export function createRouter () {
  return new Router(routerOptions)
}
