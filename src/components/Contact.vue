<template>
  <div id="contact">
    <div class="container-fluid bg-dark px-5">
      <div class="pe-auto py-5 pb-5"><!--col-md-7 col-lg-8-->
        <h6 class="m-md-5 m-sm-1 text-white lead text-center">Pour me contacter,<br> veuillez renseigner le formulaire disponible ci-dessous</h6>
        <form class="needs-validation justify-content-center px-md-5 mx-md-5 mx-sm-1 px-sm-1" action="" method="post">
          <div class="row g-3">

            <div class="col-sm-6">
              <label for="lastName" class="form-label text-white">Nom</label>
              <input type="text" name="firstname" class="form-control" id="firstName" placeholder="Nom" value="" required="">
              <div class="invalid-feedback">
                Le nom  est obligatoire
              </div>
            </div>

            <div class="col-sm-6">
              <label for="firstName" class="form-label text-white">Prénom</label>
              <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Prénom" value="" required="">
              <div class="invalid-feedback">
                Le nom est obligatoire
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label text-white">E - mail</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required="">
                <div class="invalid-feedback">
                  Votre e-mail est obligatoire
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="object" class="form-label text-white">Objet</label>
              <input type="text" class="form-control" name="object" id="object" placeholder="Objet">
              <div class="invalid-feedback text-white">
                Veuillez renseigner l'objet de votre demande
              </div>
            </div>

            <hr class="my-4">

            <div class="col-lg-12 col-md-6 col-sm-4">
              <label class="form-label text-white" for="message">Message</label>
              <textarea class="form-control" name="message" id="message" rows="4" placeholder="Votre message"></textarea>
              <div class="invalid-feedback text-white">
                Veuillez renseigner votre message
              </div>
            </div>
          </div>
          <hr class="my-4">
          <button class="btn btn-outline-primary text-white  btn-lg w-50" href="#" type="submit">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Contact"
}
</script>

<style scoped>

</style>
