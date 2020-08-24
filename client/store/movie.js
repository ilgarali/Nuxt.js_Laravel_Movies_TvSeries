export const state = () => ({
    movies: '',
    links: '',
    single: '',
    categories:''


})

export const getters = {
    movies(state) {
        return state.movies
    },
    links(state) {
        return state.links
    },
    single(state) {
        return state.single
    },
    categories(state) {
        return state.categories
    }

}

export const mutations = {
    SET_MOVIE(state, movies) {
        console.log(movies);
        state.movies = movies.data
        state.links = movies.meta

    },
    SET_PAGE(state, pagination) {
        state.movies = pagination.data
    },
    SET_SINGLE(state, single) {


        state.single = single
    },
    SET_CATEGORIES(state,categories) {

        state.categories = categories.data
    }
}


export const actions = {
    async getMovies({ commit }) {
        try {
            const movies = await this.$axios.$get('/movie')
            commit("SET_MOVIE", movies)
        } catch (error) {
            console.log(error);
        }


    },
    async getChangedPage({ commit }, page) {
        try {
            const pagination = await this.$axios.$get(`movie?page=${page}`)
            commit("SET_PAGE", pagination)
        } catch (error) {
            console.log(error);
        }


    },
    async getSingleMovie({ commit }, slug) {

        try {
            const single = await this.$axios.$get(`movie/${slug}`);

            commit('SET_SINGLE', single.data)
        } catch (error) {
            console.log(error);
        }


    },
    async getCategories({commit}) {
        try {
            const categories = await this.$axios.get(`categories`);
            commit("SET_CATEGORIES",categories.data)
        } catch (error) {
            console.log(error);
        }
    }
}

