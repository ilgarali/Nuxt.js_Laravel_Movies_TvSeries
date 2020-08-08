<template>
  <b-col cols="md-9" class="mt-4 bg-main">
    <div class="main" v-if="loading">
      <div class="links d-flex mt-4 ml-4">
        <div class="main mx-2 active">
          <nuxt-link class="text-white" to="/">Ana Sayfa</nuxt-link>
        </div>
        <div class="look">
          <nuxt-link class="text-white" to="/">Goz At</nuxt-link>
        </div>
      </div>

      <div class="tv-shows ml-4 mt-5 text-white">
        <h3 class="ml-1 font-weight-bold">
          Dizi izle:
          <span class="text-muted">Son Eklenene Göre Diziler</span>
        </h3>
      </div>

      <b-row class="mt-5 ml-2">
        <b-col cols="md-8 sm-12 xs-12">
          <b-form-group id="input-group-1" class="search-area">
            <i class="fas fa-search search-icon text-white mt-2 ml-2"></i>
            <b-form-input
              id="input-1"
              class="ml-1 pl-4"
              type="search"
              required
              placeholder="Enter email"
            ></b-form-input>
          </b-form-group>
        </b-col>
        <b-col cols="md-4 pr-5 sm-12 xs-12">
          <b-form-group id="input-group-3">
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Son Eklenene Göre</option>
            </select>
          </b-form-group>
        </b-col>
      </b-row>

      <b-container>
        <b-row class="justify-content-around m-auto">
          <b-col cols="md-3" class="col-6 col-sm-6">
            <b-form-group id="input-group-3">
              <label for class="text-white">Tur</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Seç</option>
              </select>
            </b-form-group>
          </b-col>
          <b-col cols="md-3 col-6 col-sm-6">
            <b-form-group id="input-group-3">
              <label class="text-white">Yil</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Yil</option>
              </select>
            </b-form-group>
          </b-col>
          <b-col cols="md-3 col-6 col-sm-6">
            <b-form-group id="input-group-3">
              <label class="text-white">Ülkeler</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Ülkeler</option>
              </select>
            </b-form-group>
          </b-col>
          <b-col cols="md-3 col-6 col-sm-6">
            <b-form-group id="input-group-3">
              <label class="text-white">İzleme tipi</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>İzleme tipi</option>
              </select>
            </b-form-group>
          </b-col>
        </b-row>
      </b-container>

      <Movies :datas="movies" v-if="movie" />

      <Shows :datas="tvShows" v-else />

      <b-container>
        <b-row class="ml-2 my-4">
          <b-col cols="md-6">
            <ul class="pagination">
              <li class="page-item" v-for="(item,index) in links.last_page" :key="index">
                
                <a class="page-link" @click="changePage(++index)">{{item}}</a>
              </li>
            </ul>
          </b-col>
        </b-row>
      </b-container>
    </div>
    <div class="loading" v-else>
      <b-img
        fluid
        src="https://cdn.dribbble.com/users/2346349/screenshots/9246147/media/06971345603f8422d664fa0ea362b3a5.gif"
      ></b-img>
    </div>
  </b-col>
</template>

<script>
import Movies from "./Movies";
import Shows from "./Shows";
import { mapActions, mapGetters } from "vuex";

export default {
  components: {
    Movies,Shows
  },
  data() {
    return {
      movie: true,
      loading: false,
    };
  },

  created() {
    setTimeout(() => {
      this.loading = true
    }, 1000);
    if (this.$route.name === "dizi") {
      this.movie = false;
      this.getTvShows();
    } else {
      this.getMovie();
    }
  },
  computed: {
    ...mapGetters({
      movies: "movie/movies",
      links: "movie/links",
      tvShows: "tvshow/tvShows",
    }),
  },

  methods: {
    changePage(index) {
      this.getChangedPage(index);
    },
    ...mapActions({
      getMovie: "movie/getMovies",
      getChangedPage: "movie/getChangedPage",
      getTvShows: "tvshow/getTvShows",
    }),
  },
};
</script>

<style scoped>
a {
  text-decoration: none;
}

.active {
  border-bottom: 2px solid #f4b74c;
}

.bg-main {
  background-color: rgb(14, 16, 28);

  margin-left: -2.9rem;
}
h3 span {
  font-size: 1.4rem;
}
.search-area {
  position: relative;
}

.search-icon {
  position: absolute;
}
input,
select {
  background-color: transparent !important;
  border: 1px solid #343a46;
}
input:focus,
select:focus {
  border: 1px solid #343a46;
  box-shadow: none;
}

@media only screen and (max-width: 600px) {
  .bg-main {
    margin-left: 0;
  }
  .search-area {
    width: 89%;
  }
}
</style>