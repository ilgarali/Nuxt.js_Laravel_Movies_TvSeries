<template>
  <Watch :single="single" />
</template>

<script>
import Watch from "../../components/Watch";
import {mapActions,mapGetters} from 'vuex'
export default {
  components: {
    Watch,
  },
  computed: {
    ...mapGetters({
      single:"movie/single"
    })
  },
  created() {
    this.getSingle(this.$route.params.slug)

  },
  methods: {
       ...mapActions({
      getSingle:"movie/getSingleMovie"
    })
  },
  
};
</script>

<style scoped>
</style>
