<template>
  <section class="bg-dark holder">

      <b-row no-gutters>
        <Navbar />
        <Nuxt />
      </b-row>
    
  </section>
</template>
<script>
import Navbar from "../components/Navbar";
export default {
  components: {
    Navbar,
  },
};
</script>

<style>


</style>
