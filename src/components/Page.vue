<template>
  <div id="page">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6 col-md-12 site-title mt-5">
          <h3 class="display-6 pb-2 mt-5">Hey</h3>
          <h1 class="display-4 ">I'm <strong>David Philippe</strong></h1>
          <h4 class="lead text-uppercase border-top border-2 pt-4">Webdesigner | Content manager | Community manager
          </h4>
          <div class="site-buttons">
            <div class="d-flex flex-row flex-wrap">
              <button type="button" class="btn button primary-button mr-4 text-uppercase">hire
                me</button>
              <button type="button" class="btn button secondary-button text-uppercase">Get cv</button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 banner-image">
          <img src="" alt="banner-img" class="img-fluid">
        </div>
      </div>
    </div>

    <Biographie></Biographie>
    <Projets></Projets>
    <Contact></Contact>


  </div>
</template>

<script>
import Biographie from "./Biographie.vue";
import Contact from "./Contact.vue";
import Projets from "./Projets.vue";
export default {
  name: 'Page',
  components: {Projets, Contact, Biographie},
  data () {
    return {

    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
