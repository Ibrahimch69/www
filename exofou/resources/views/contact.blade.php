<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      
  <nav class="nav">
  <a class="nav-link active" aria-current="page" href="/accueil">accueil</a>
  <a class="nav-link" href="/contact">contact</a>
  <a class="nav-link" href="/apropos">apropos</a>

</nav>

    <div class="container">

<div class="row">

    <div class="col-xl-8 offset-xl-2 py-5">

        <h1>Formulaire de contact</h1>

        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt vitae quam sint nobis dolorum? Expedita voluptatem amet aspernatur nisi earum nam impedit assumenda, qui laboriosam unde facere repellendus, velit cupiditate.</p>


        <form id="contact-form" method="post" action="contact.php" role="form">

            <div class="messages"></div>

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Nom *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Veuillez entrer votre nom *" required="required" data-error="Nom est obligatoire.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Prénom *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Veuillez entre votre prénom *" required="required" data-error="Prénom est obligatoire.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Veuillez entrer votre email *" required="required" data-error="Un email valid est obligatoire.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Veuillez préciser votre besoin *</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="Veuillez préciser votre besoin.">
                                <option value=""></option>
                                <option value="Demande de devis">Demande de devis</option>
                                <option value="Demande générale">Demande générale</option>
                                <option value="Demander une facture">Demander une facture</option>
                                <option value="Autre">Autre</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Votre Message *" rows="4" required="required" data-error="Veuillez remplir le champ Message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send" value="Envoyer">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-muted">
                            <strong>*</strong> Ces champs sont obligatoires.</p>
                    </div>
                </div>
            </div>

        </form>

    </div>
    <!-- /.8 -->

</div>
<!-- /.row-->

</div>

<style>
    body{
        background-color: red;
    }
</style>


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>