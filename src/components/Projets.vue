<template>
  <div id="projets">
    <div class="container">
      <div class="project-title pb-5">
        <h1 class="text-uppercase title-h1">Mes projets récents</h1>
        <h3 class="text-uppercase title-h1">de 2020 à 2022</h3>
      </div>

      <div class="button-group py-3">
        <button type="button" class="btn btn-outline-primary active"  data-filter="*">All</button>
        <button type="button" class="btn btn-outline-primary " data-filter=".dossier">Dossier</button>
        <button type="button" class="btn btn-outline-primary " data-filter=".videos">Vidéos</button>
        <button type="button" class="btn btn-outline-primary " data-filter=".sites">Sites</button>
      </div>

      <div class="row grid">
        <div class="col-lg-4 col-md-6 col-sm-12 element-item dossier">
          <div>
            <b-overlay :show="show" rounded="sm">
              <b-card title="Card with overlay" :aria-hidden="show ? 'true' : null">
                <b-card-text>Laborum consequat non elit enim exercitation cillum.</b-card-text>
                <b-card-text>Click the button to toggle the overlay:</b-card-text>
                <b-button :disabled="show" variant="primary" @click="show = true">
                  Show overlay
                </b-button>
              </b-card>
            </b-overlay>
            <b-button class="mt-3" @click="show = !show">Toggle overlay</b-button>
          </div>
          <div class="our-project">
            <div class="img">
              <a class="test-popup-link" href="https://davidphilippe.fr/images-projets/David Philippe  Jules Crevoisier  Tania Handré (1).pdf">
                <img src="https://davidphilippe.fr/images-projets/dossier-ab-testing.PNG" alt="portfolio-1" class="img-fluid">
              </a>
            </div>
            <div class="title py-4">
              <h4 class="text-uppercase">Dossier AB testing</h4>
              <span class="text-secondary">Allez voir</span>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
          <div class="our-project">
            <div class="img">
              <a class="test-popup-link" href="https://davidphilippe.fr/images-projets/Dossier de conception Casa De Mila (1).pdf">
                <img src="https://davidphilippe.fr/images-projets/dossier-mila-fabula.PNG" alt="portfolio-3" class="img-fluid">
              </a>
            </div>
            <div class="title py-4">
              <h4 class="text-uppercase">Dossier sur Mila Fabula</h4>
              <span class="text-secondary">Allez voir</span>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
          <div class="our-project">
            <div class="img">
              <a class="test-popup-link" href="https://davidphilippe.fr/images-projets/Dossier d'analyse de publicité.pdf">
                <img src="https://davidphilippe.fr/images-projets/dossier-pokemon.PNG" alt="portfolio-6" class="img-fluid">
              </a>
            </div>
            <div class="title py-4">
              <h4 class="text-uppercase">Dossier d'analyse de com</h4>
              <span class="text-secondary">Allez voir</span>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
          <div class="our-project">
            <div class="img">
              <a class="test-popup-link" href="https://boss.davidphilippe.fr/">
                <img src="https://davidphilippe.fr/images-projets/site-charriere.PNG" alt="portfolio-2" class="img-fluid">
              </a>
            </div>
            <div class="title py-4">
              <h4 class="text-uppercase">Site réalisé en 48h</h4>
              <span class="text-secondary">Allez voir</span>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
          <div class="our-project">
            <div class="img">
              <a class="test-popup-link" href="https://www.youtube.com/watch?v=hQwfrgkZh0o">
                <img src="https://davidphilippe.fr/images-projets/video-recette.PNG" alt="portfolio-4" class="img-fluid">
              </a>
            </div>
            <div class="title py-4">
              <h4 class="text-uppercase">Vidéo montage cuisine</h4>
              <span class="text-secondary">Allez voir</span>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
          <div class="our-project">
            <div class="img">
              <a class="test-popup-link" href="https://rondedubosmont.davidphilippe.fr/#/">
                <img src="https://davidphilippe.fr/images-projets/site-ronde.PNG" alt="portfolio-5" class="img-fluid">
              </a>
            </div>
            <div class="title py-4">
              <h4 class="text-uppercase">Site pour un événement sportif</h4>
              <span class="text-secondary">Allez voir</span>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
          <div class="our-project">
            <div class="img">
              <a class="test-popup-link" href="https://www.youtube.com/watch?v=wagSY8qWebo">
                <img src="https://davidphilippe.fr/images-projets/video-the-red-hand.PNG" alt="portfolio-7" class="img-fluid">
              </a>
            </div>
            <div class="title py-4">
              <h4 class="text-uppercase">Court métrage</h4>
              <span class="text-secondary">Allez voir</span>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
          <div class="our-project">
            <div class="img">
              <a class="test-popup-link" href="https://davidphilippe.fr/images-projets/Dossier de projet S2 (1).pdf">
                <img src="https://davidphilippe.fr/images-projets/dossier-vita-run.PNG" alt="portfolio-8" class="img-fluid">
              </a>
            </div>
            <div class="title py-4">
              <h4 class="text-uppercase">Dossier de préalabilité</h4>
              <span class="text-secondary">Allez voir</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Projets",
  data(){
    return{
      show: false
    }
  }
}
</script>

<style scoped>

</style>
