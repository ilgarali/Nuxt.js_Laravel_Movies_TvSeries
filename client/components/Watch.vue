<template>
  <b-col cols="md-9" class="mt-4 bg-main" >
    <div v-if="loading">
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
        Film izle:
        <span class="text-muted">{{single.movie_title}}</span>
      </h3>
    </div>

    <div class="choose-language d-flex my-3 ml-2">
      <div class="text-white">
      
      </div>
      <div
        v-if="single.sources.altyazi"
        class="subtitle lang-choice ml-4 mr-3 text-white active"
        @click="showData('sub')"
      >
        <i class="fas fa-closed-captioning fa-lg"></i>
        Turkce altyazi
      </div>
      <div
        v-if="single.sources.dublaj"
        class="text-muted lang-choice d-flex ml-4"
        @click="showData('dub')"
      >
        <div class="dublaj mr-2"></div>
        <p>Turkce Dublaj</p>
      </div>
    </div>

    <div class="main" v-if="single.sources.altyazi">
      <div class="text-white"></div>
      <div class="subtitle">
        <div class="source d-flex ml-4 text-muted font-weight-bold">
          <div
            v-for="(item, index) in single.sources.altyazi"
            :key="index"
            @click="link(index)"
            :class="[index < 1 ? 'active-source' : '']"
            class="border-source sources py-1 px-2 ml-1 mr-2"
          >{{item.resource_name}}</div>
        </div>

        <b-container>
          <b-row>
            <b-col cols="md-12">
              <div
                class="video my-3"
                v-for="(item, index) in single.sources.altyazi"
                :key="index"
                @click="link(index)"
                :class="index < 1 ? 'v-active' : ''"
              >
                <iframe class="responsive-iframe" :src="item.sources" allowfullscreen></iframe>
              </div>
            </b-col>
          </b-row>
        </b-container>
      </div>
    </div>

    <div class="dub" v-else>
       <div class="source d-flex ml-4 text-muted font-weight-bold">
          <div
            v-for="(item, index) in single.sources.dublaj"
            :key="index"
            @click="link(index)"
            :class="[index < 1 ? 'active-source' : '']"
            class="border-source sources py-1 px-2 ml-1 mr-2"
          >{{item.resource_name}}</div>
        </div>

      <b-container>
        <b-row>
          <b-col cols="md-12">
             <div
                class="video my-3"
                v-for="(item, index) in single.sources.dublaj"
                :key="index"
                @click="link(index)"
                :class="index < 1 ? 'v-active' : ''"
              >
                <iframe class="responsive-iframe" :src="item.sources" allowfullscreen></iframe>
              </div>
          </b-col>
        </b-row>
      </b-container>
    </div>

    <b-container>
      <b-row>
        <b-col cols="md-4">
          
          <b-img fluid :src="`http://127.0.0.1:8000/${single.movie_img}`"></b-img>
        </b-col>
        <b-col cols="md-8">
          <h6 class="text-white font-weight-bolder">Genel Bakis</h6>
          <div class="border p-3">
            <div class="categories">
              <h6 class="text-white font-weight-bolder">
                Turu:
                <span v-for="(category, index) in single.categories" :key="index"> {{ category.category }} </span>
              </h6>
              <p
                class="text-muted"
              >{{single.post_description}}</p>
            </div>
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
        </b-col>
      </b-row>
    </b-container>
    </div>

    <div class="load" v-else>
      <b-img fluid src="https://cdn.dribbble.com/users/2346349/screenshots/9246147/media/06971345603f8422d664fa0ea362b3a5.gif"></b-img>
    </div>
  </b-col>
</template>

<script>

import {mapActions,mapGetters} from 'vuex'
export default {
  components: {
   
  },

  data() {
    return {
      loading:false
    };
  },
  props:['single'],

   created() {
     setTimeout(() => {
      
       this.loading = true
     }, 2500);
   
  },
 

  methods: {
    link(a) {
      const sources = document.querySelectorAll(".sources");
      const videos = document.querySelectorAll(".video");
      sources.forEach((e) => e.classList.remove("active-source"));
      sources[a].classList.add("active-source");
      videos.forEach((e) => e.classList.remove("v-active"));
      videos[a].classList.add("v-active");
    },
    showData(a) {
      const lanChoice = document.querySelectorAll(".lang-choice");
      lanChoice.forEach((e) => e.classList.remove("active"));
      if (a === "sub") {
        this.show = true;
        lanChoice[0].classList.add("active");
      } else {
        this.show = false;
        lanChoice[1].classList.add("active");
      }
    },
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

.dublaj {
  background-image: url("data:image/svg+xml;base64,CjxzdmcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyB2aWV3Qm94PScwIDAgMTYgMTInIGVuYWJsZS1iYWNrZ3JvdW5kPSduZXcgMCAwIDE2IDEyJz48c3dpdGNoPjxnPjxwYXRoIGZpbGw9JyNlNjIxMjYnIGQ9J20wIDBoMTZ2MTJoLTE2eicvPjxnPjxwYXRoIGZpbGw9JyNmZmYnIGQ9J203Ljg1NiA3LjU2NWMtLjUyNC44MzUtMS40NTcgMS4zODktMi41MTggMS4zODktMS42MzggMC0yLjk2Ni0xLjMyMi0yLjk2Ni0yLjk1MyAwLTEuNjMyIDEuMzI4LTIuOTU0IDIuOTY2LTIuOTU0IDEuMDYxIDAgMS45OTMuNTU0IDIuNTE4IDEuMzg5LS40MTMtLjQyNy0uOTkyLS42OTMtMS42MzQtLjY5My0xLjI1MiAwLTIuMjY4IDEuMDEtMi4yNjggMi4yNTggMCAxLjI0OCAxLjAxNiAyLjI1OCAyLjI2OCAyLjI1OC42NDIuMDAxIDEuMjIxLS4yNjYgMS42MzQtLjY5MycvPjxwYXRoIGZpbGw9JyNmZmYnIGQ9J203Ljk3OCA0Ljk2NmgxLjkxM3YxLjkxMmgtMS45MTN6JyB0cmFuc2Zvcm09J21hdHJpeCguNzA3MTEtLjcwNzExLjcwNzExLjcwNzExLTEuNTcgOC4wNSknLz48L2c+PC9nPjwvc3dpdGNoPjwvc3ZnPg==");
  background-repeat: no-repeat;
  width: 1.4rem;
  height: 1.4rem;
  margin-top: 0.1rem;
  margin-right: 0.1rem;
}

.active {
  border-bottom: 1px solid #f4b74c;
}
.border-source {
  background-color: #181a25;
  font-size: 0.8rem;
  border-radius: 10%;
}

.active-source {
  background-color: #f4b74c;
  color: #20232a;
}
.video {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}

.video {
  display: none;
}

.v-active {
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