<template>
  <b-col  cols="md-9" class="mt-4 bg-main">
    <div class="loading" v-if="loading">
      <b-img
          fluid
        src="https://cdn.dribbble.com/users/2346349/screenshots/9246147/media/06971345603f8422d664fa0ea362b3a5.gif"
      >

      </b-img>
    </div>
    <div class="seasons" v-else>
      <!-- <div class="text-white">
                <ul>
                  <li v-for="(season, index) in single.seasons" :key="index">
                      {{season[0].episodes[0].episode_name}}
                      <h5 href="" v-for="(item, index) in season" :key="index">
                     
                      </h5>
                  </li>
              </ul> 
      </div> -->
      <b-container>
      <div class="links d-flex mt-5">
        <div class="main mx-2 active">
          <nuxt-link class="text-white" to="/">Ana Sayfa</nuxt-link>
        </div>
        <div class="look">
          <nuxt-link class="text-white" to="/">Goz At</nuxt-link>
        </div>
      </div>
      <div class="tv-shows mt-5 text-white">
        <h2 class="ml-1 font-weight-bold">
          Dizi izle:
          <span class="text-muted">{{single.movie_title}} (2018)</span>
        </h2>
        <h3 class="ml-1">
          Suits
          <span class="text-muted">({{single.released}})</span>
        </h3>
      </div>
      <div class="genel text-white">
        <h6 class="ml-1 g-title font-weight-bold">Genel Bakis</h6>
      </div>

      <b-row class="my-3">
        <b-col cols="md-4 my-2">
          <b-img fluid :src="`http://127.0.0.1:8000/${single.movie_img}`"></b-img>
        </b-col>
        <b-col cols="md-8 my-2">
          <div class="text-white">
            <h6 class>Genel Bakis</h6>
            <p class>
              
              Türü:
              <span class="maincolor" v-for="(category, index) in single.categories" :key="index"> {{category.category}} </span>
            </p>
            <p
              class="text-muted"
            >
            {{single.post_description}}
            </p>
          </div>

          <div class="details my-3">
            <table class="table table-bordered table-hover text-muted">
              <thead>
                <tr>
                  <th>ULke</th>
                  <th>Imdb</th>
                  <th>Released</th>
                  <th>Duration</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="col">{{single.country}}</td>
                  <td scope="col">{{single.imdb}}</td>
                  <td scope="col">{{single.released}}</td>
                  <td scope="col">{{single.duration}}</td>
                </tr>
              </tbody>
            </table>
          </div>

          <b-container>
            <b-row class="row-border pt-1">
              <b-col cols="md-3 col-6">
                <div v-for="(season, i,index) in single.seasons" :key="index" 
                  
                 class="seasons p-2" @click="showSeason(index)">
                  
                  <a v-for="(item, index) in season" :key="index" class="text-muted ml-2 season p-2">{{item.season}}</a>
                </div>
                
              </b-col>

              <b-col v-for="(season, i,index) in single.seasons" :key="index" cols="md-9 col-6 episodes"
               :class="[index < 1 ? 'active-episodes' : '']"> 
                <div class="div" v-for="(item, index) in season" :key="index">
                  <h6 class="text-muted episode p-2" v-for="(episode, index) in item.episodes" :key="index" >
                
                  <span  class=" ml-2">
                    <nuxt-link class="text-white"   :to=" {path:`episode/${episode.episode_id}`,description:single.post_description} ">{{episode.episode_name}}</nuxt-link>
                  </span>
                </h6>
                </div>
              
              </b-col>
              
            </b-row>
          </b-container>
        </b-col>
      </b-row>
    </b-container>
    </div>
  </b-col>
</template>

<script>
import {mapGetters,mapActions} from 'vuex'
export default {
  components: {
   
  },
  data() {
    return {
      loading:true
    }
  },

  computed: {
    ...mapGetters({
      single:"tvshow/singleShow"
    })
  },

  created() {
   setTimeout(async () => {
     await this.getSingleShow(this.$route.params.slug)
      this.loading =false

    }, 2522);
  },
  methods: {
      showSeason(a){
        
          const episodes = document.querySelectorAll('.episodes')
       
          episodes.forEach(e => e.classList.remove('active-episodes'))
          episodes[a].classList.add('active-episodes')
      },
      ...mapActions({
        getSingleShow:"tvshow/getSingleShow"
      })
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
.g-title {
  border-bottom: 1px solid #f4b74c;
  display: inline-block;
}

.genel {
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
  height: 1.35rem;
}
.maincolor {
  color: #f4b74c !important;
}

.row-border {
  border: 1px solid rgb(24, 26, 37);
}
.season {
  border-right: 1px solid rgb(24, 26, 37);
  transition: ease-in 0.6s;
  
}

.season:hover {
    cursor: pointer;
    color: #f4b74c !important;
    font-weight: bolder;
}

.episode {
  border-bottom: 1px solid rgb(24, 26, 37);
}

.episodes {
    display: none;
}
.active-episodes {
    display: block;
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