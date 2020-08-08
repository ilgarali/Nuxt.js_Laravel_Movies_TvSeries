<template>
  <b-col cols="md-3 " class="mt-4 main-navbar">
    <b-row>
      <b-col cols="md-8 nav  mx-auto mt-3">
        <div class="logo m-auto pt-1">
          <b-img src="https://www.dizidi.com/img/logo.png" fluid alt="Responsive image"></b-img>
        </div>
        <div class="buttons d-flex my-3 mx-auto">
            <div >
              <nuxt-link class="film btn  mx-2" to="/">Film</nuxt-link>
            </div>
            <div><nuxt-link  class="dizi btn" to="/dizi">Dizi</nuxt-link></div>
          </div>
        <div class="menu-items">
          
          <div class="heading">
            <p class="text-muted">POPÜLER DİZİ TÜRLERİ</p>
          </div>
          <div class="categories">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <div class="d-flex justify-content-between text-white p-2">
                  <i class="fas fa-house-user ml-2 align-self-center mr-3"></i>
                  <nuxt-link class="align-self-center link text-white" to="/family">Family</nuxt-link>
                </div>
              </li>
              <li class="nav-item">
                <div class="d-flex justify-content-between text-white p-2">
                  <i class="fas fa-bolt align-self-center mr-3 ml-2"></i>
                  <nuxt-link class="align-self-center link text-white" to="/action">Action</nuxt-link>
                </div>
              </li>
              <li class="nav-item">
                <div class="d-flex justify-content-between text-white p-2">
                  <i class="fas fa-child align-self-center mr-3 ml-2"></i>

                  <nuxt-link class="align-self-center link text-white" to="/animation">Animation</nuxt-link>
                </div>
              </li>
              <li class="nav-item">
                <div class="d-flex justify-content-between text-white p-2">
                  <i class="fas fa-child align-self-center mr-3 ml-2"></i>

                  <nuxt-link class="align-self-center link text-white" to="/dram">Dram</nuxt-link>
                </div>
              </li>
              <li class="nav-item">
                <div class="d-flex justify-content-between text-white p-2">
                  <i class="fas fa-child align-self-center mr-3 ml-2"></i>

                  <nuxt-link class="align-self-center link text-white" to="/science-fiction">Science Fiction</nuxt-link>
                </div>
              </li>
                <li class="nav-item">
                <div class="d-flex justify-content-between text-white p-2">
                  <i class="fas fa-bolt align-self-center mr-3 ml-2"></i>
                  <nuxt-link class="align-self-center link text-white" to="/action">Action</nuxt-link>
                </div>
              </li>
              <li class="nav-item">
                <div class="d-flex justify-content-between text-white p-2">
                  <i class="fas fa-child align-self-center mr-3 ml-2"></i>

                  <nuxt-link class="align-self-center link text-white" to="/animation">Animation</nuxt-link>
                </div>
              </li>
              <li class="nav-item">
                <div class="d-flex justify-content-between text-white p-2">
                  <i class="fas fa-child align-self-center mr-3 ml-2"></i>

                  <nuxt-link class="align-self-center link text-white" to="/dram">Dram</nuxt-link>
                </div>
              </li>
              <li class="nav-item">
                <div class="d-flex justify-content-between text-white p-2">
                  <i class="fas fa-child align-self-center mr-3 ml-2"></i>

                  <nuxt-link class="align-self-center link text-white" to="/science-fiction">Science Fiction</nuxt-link>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </b-col>
    </b-row>
  </b-col>
</template>

<script>
export default {};
</script>

<style scoped>
.row {
  background-color: #08090e;
  height: 100%;
  width: 90%;
  margin-left: 2rem;
  border-top-left-radius: 2%;
}
.nav {
  

  height: 100vh;
 
}
.btn {
  width: 5rem;
  height: 2rem;
  background: #181a25;
  font-size: 0.9rem;
  color: rgba(255, 255, 255, 0.6);
}

.nuxt-link-exact-active {
  background: #f4b74c;
  color: #20232a;
}

.link {
  width: 73%;
  white-space: nowrap;
}

@media only screen and (max-width: 600px) {
  .nav {
    position: fixed;
    z-index: 100;
    height: 15%;
     background-color: #08090e;
     margin-top: 0 !important;
  }
  .row {
    margin-left: 0;
  }
  .nav .menu-items {
    display: none;
  }
  .main-navbar {
      margin-top: 0 !important;
  }
  
  .buttons {
    align-self: center;
  }
}
</style>