<template>
  <div id="page">
    <div class="container mt-3">
      <div class="row pt-3">
        <div class="col-lg-6 col-md-12 site-title pt-5 mt-5">
          <h3 class="display-6 pb-2 my-5">Hey</h3>
          <h1 class="display-4 ">Je suis <strong>David Philippe</strong></h1>
          <h4 class="lead text-uppercase text-primary border-top border-2 pt-4">Webdesigner | Content manager | Community manager
          </h4>
          <div class="site-buttons">
            <div class="d-flex flex-row flex-wrap"><a target="_blank" href="https://davidphilippe.fr/CV%20David%20Philippe.pdf">
              <button type="button" class="btn btn-outline-primary m-5 text-uppercase">Get cv</button></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 pe-auto py-5 banner-image">
          <div class="img-fluid">
            <div class="row text-center mt-5 pt-5">
              <svg xmlns="http://www.w3.org/2000/svg" width="400" height="200" viewBox="0 0 215.842 111.953">
                <g id="logo" transform="translate(0.016 0.002)">
                  <path id="Tracé_1" data-name="Tracé 1" d="M54.92,52.15l14.8-15.7C34.27-3.63-2.9,31.41.75,64.02c-.26,41.96,44.31,57.75,65.22,40.62L143.71,4.95H109.73L49.22,86.48c-13.51,4.41-27.6-7.59-27.18-23.59C25.99,30.7,50.98,36.83,54.92,52.15Z" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="1"/>
                  <path id="Tracé_2" data-name="Tracé 2" d="M160.89,59.8l-14.8,15.7c35.44,40.09,72.62,5.04,68.97-27.57.26-41.96-44.31-57.75-65.22-40.62L72.1,107h33.98l60.51-81.53c13.51-4.41,27.6,7.59,27.18,23.59-3.95,32.19-28.94,26.06-32.88,10.74Z" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="1"/>
                </g>
              </svg>

            </div>
          </div>
        </div>
      </div>
      <div  class="row text-center fleche mb-5">
        <svg  xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
        </svg>
      </div>

    </div>
    <Biographie></Biographie>

      <div  class="row text-center py-5 fleche py-3">
        <svg  xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
        </svg>
      </div>

    <Projets></Projets>

      <div  class="row text-center py-5 fleche py-3">
        <svg  xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
        </svg>
      </div>

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

<style scoped>

</style>
