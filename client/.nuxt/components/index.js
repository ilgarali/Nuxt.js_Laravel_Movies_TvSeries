export { default as Logo } from '../../components/Logo.vue'
export { default as Main } from '../../components/Main.vue'
export { default as Movies } from '../../components/Movies.vue'
export { default as Navbar } from '../../components/Navbar.vue'
export { default as Shows } from '../../components/Shows.vue'
export { default as TvShow } from '../../components/TvShow.vue'
export { default as Watch } from '../../components/Watch.vue'
export { default as WatchShow } from '../../components/WatchShow.vue'

export const LazyLogo = import('../../components/Logo.vue' /* webpackChunkName: "components/Logo'}" */).then(c => c.default || c)
export const LazyMain = import('../../components/Main.vue' /* webpackChunkName: "components/Main'}" */).then(c => c.default || c)
export const LazyMovies = import('../../components/Movies.vue' /* webpackChunkName: "components/Movies'}" */).then(c => c.default || c)
export const LazyNavbar = import('../../components/Navbar.vue' /* webpackChunkName: "components/Navbar'}" */).then(c => c.default || c)
export const LazyShows = import('../../components/Shows.vue' /* webpackChunkName: "components/Shows'}" */).then(c => c.default || c)
export const LazyTvShow = import('../../components/TvShow.vue' /* webpackChunkName: "components/TvShow'}" */).then(c => c.default || c)
export const LazyWatch = import('../../components/Watch.vue' /* webpackChunkName: "components/Watch'}" */).then(c => c.default || c)
export const LazyWatchShow = import('../../components/WatchShow.vue' /* webpackChunkName: "components/WatchShow'}" */).then(c => c.default || c)
