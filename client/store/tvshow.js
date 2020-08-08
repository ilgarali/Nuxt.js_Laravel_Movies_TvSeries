export const state = () => ({
    tvShows:'',
    single:'',
    singleEpisode:''
})

export const getters  = {
    tvShows(state){
        return state.tvShows
    },
    singleShow(state){
        return state.single
    },
    singleEpisode(state) {
        return state.singleEpisode
    }
}

export const mutations = {
    SET_TVSHOWS(state,tvShows){
        state.tvShows = tvShows

    },
    SET_SINGLE(state,single) {
        state.single = single
    },
    SET_SINGLEEPISODE(state,episode) {
        state.singleEpisode = episode;
    }
}

export const actions = {
   async getTvShows({commit}){
        try {
            const tvShows = await this.$axios.$get('/tvshow')
         
            commit("SET_TVSHOWS",tvShows.data)

        } catch (error) {
            console.log(error);
        }
    },
    async getSingleShow({commit},slug){
        try {
            const singleShow = await this.$axios.$get(`tvshow/${slug}`)
            
            commit("SET_SINGLE",singleShow.data)
        } catch (error) {
            console.log(error);
        }
    },

    async singleEpisode({commit},id) {
        try {
            console.log(id);
            const getSingleEpisode = await this.$axios.$get(`tvshow/episode/${id}`)
            commit("SET_SINGLEEPISODE",getSingleEpisode.data)
        } catch (error) {
            console.log(error);
        }
        
    }


}