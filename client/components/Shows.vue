<template>
  <b-container>
    <b-row no-gutters>
      <b-col v-for="(movie, index) in datas" :key="index" cols="md-3 col-12 col-sm-6 my-2">
        <div class="main-content ml-3">
          <div class="text-white">
              <!-- <ul>
                  <li v-for="(season, index) in movie.seasons.season_1" :key="index">
                    
                      <a href="" v-for="(item, index) in season.episodes" :key="index">
                          {{item.resource.altyazi}}
                      </a>
                  </li>
              </ul> -->
            
          </div>
          <div class="img" >
            <div class="language-info">
              <div  class="lanuguage-detail d-flex justify-content-end" v-for="(season, index) in movie.seasons.season_1" :key="index">
                <div  v-for="(item, index) in season.episodes" :key="index"  >
                    <div v-if="item.resource.dublaj && index < 1" class="dublaj" >

                    </div>
             

             
                    <div  class="subtitle" v-if="item.resource.altyazi">
                  <i class="fas fa-closed-captioning fa-lg text-white"></i>
                </div>
                </div>
              </div>
            </div>

            <b-img :src="'http://127.0.0.1:8000/' + movie.movie_img" fluid alt="Responsive image"></b-img>
            <div class="d-flex justify-content-between rating">
              <div class="imdb font-weight-bolder">
                <i class="fas fa-star"></i>
                {{movie.imdb}}
              </div>

              <div class="released text-white font-weight-bolder">{{movie.released}}</div>
            </div>
            <div class="details p-1">
              <nuxt-link :to="'dizi/single/' + movie.movie_slug">
                <h6 class="pl-2 mt-2 font-weight-bold movie-title">{{movie.movie_title}}</h6>
              </nuxt-link>

              <div class="categories d-flex">
                <p
                  class="pl-2 text-muted"
                  v-for="(category, index) in movie.categories"
                  :key="index"
                >{{category.category}}</p>
              </div>
            </div>
          </div>
        </div>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
export default {
  props: ["datas"],
  data() {
    return {
      loading:false
    }
  },
  created() {
    
  },

};


</script>

<style scoped>
.img {
  position: relative;
  width: 115%;
}
a {
  text-decoration: none;
}
.main-content {
  width: 80%;
}
.details {
  background-color: #181a25;
}
.movie-title {
  color: #f4b74c;
}

.dublaj {
  background-image: url("data:image/svg+xml;base64,CjxzdmcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB2aWV3Qm94PScwIDAgMTYgMTInIGVuYWJsZS1iYWNrZ3JvdW5kPSduZXcgMCAwIDE2IDEyJz48c3dpdGNoPjxnPjxwYXRoIGZpbGw9JyNlNjIxMjYnIGQ9J20wIDBoMTZ2MTJoLTE2eicvPjxnPjxwYXRoIGZpbGw9JyNmZmYnIGQ9J203Ljg1NiA3LjU2NWMtLjUyNC44MzUtMS40NTcgMS4zODktMi41MTggMS4zODktMS42MzggMC0yLjk2Ni0xLjMyMi0yLjk2Ni0yLjk1MyAwLTEuNjMyIDEuMzI4LTIuOTU0IDIuOTY2LTIuOTU0IDEuMDYxIDAgMS45OTMuNTU0IDIuNTE4IDEuMzg5LS40MTMtLjQyNy0uOTkyLS42OTMtMS42MzQtLjY5My0xLjI1MiAwLTIuMjY4IDEuMDEtMi4yNjggMi4yNTggMCAxLjI0OCAxLjAxNiAyLjI1OCAyLjI2OCAyLjI1OC42NDIuMDAxIDEuMjIxLS4yNjYgMS42MzQtLjY5MycvPjxwYXRoIGZpbGw9JyNmZmYnIGQ9J203Ljk3OCA0Ljk2NmgxLjkxM3YxLjkxMmgtMS45MTN6JyB0cmFuc2Zvcm09J21hdHJpeCguNzA3MTEtLjcwNzExLjcwNzExLjcwNzExLTEuNTcgOC4wNSknLz48L2c+PC9nPjwvc3dpdGNoPjwvc3ZnPg==");
  background-repeat: no-repeat;
  width: 1.4rem;
  height: 1.4rem;
  margin-top: 0.1rem;
  margin-right: 0.1rem;
}

.language-info {
  position: absolute;
  width: 100%;
}

.rating {
  position: absolute;
  margin-top: -1.5rem;
  width: 100%;
}

.rating .imdb {
  color: #f4b74c;
  font-size: 1.1rem;
}
.rating .released {
  font-size: 1.1rem;
}
</style>