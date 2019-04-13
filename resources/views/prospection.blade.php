@extends('layouts.int')

@section('content')

<div class="container pt-5">
  <div class="row pb-5">
    <div class="col">
      <h1>Publicités</h1>
    </div>
    <div class="col">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-blue" data-toggle="modal" data-target="#exampleModalScrollable">
        Créer une publicité
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Nouvelle publicité : Cible de routage</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

          <div class="modal-body">
           <div class="container">
                <div class="pt-5">
                  <form class="" action="" method="post">
                    @csrf
                    <div class="row">

                  <div class="col-md-4 col-lg-4">
                    <select class="select2 form-control" data-placeholder="Catégorie socio-professionnelle" id="categorie" name="categorie">
                        <option value="">Catégorie socio-pro.</option>
                        <option value="prospect" name="prospect">Prospect</option>
                        <option value="client" name="client">Client</option>
                        <option value="client_interdit" name="client_interdit">Client interdit</option>
                    </select>
                  </div>

                  <div class="col-md-4 col-lg-4">
                    <select class="select2 form-control" data-placeholder="Tranche d'âge" id="age" name="age">
                        <option value="">Tranche d'âge</option>
                        <option value="16-25 ans" name="16-25 ans">16-25 ans</option>
                        <option value="26-45 ans" name="26-45 ans">26-45 ans</option>
                        <option value="46-68 ans" name="46-68 ans">46-68 ans</option>
                        <option value="69 ans et plus" name="69 ans et plus">69 ans et plus</option>
                    </select>
                  </div>

                  <div class="col-md-4 col-lg-4">
                        <select class="select2 form-control" data-placeholder="Département" id="departement" name="departement">
                            <option value="">Département</option>
                            <option value="Alsace" name="Alsace">Alsace</option>
                            <option value="Aquitaine" name="Aquitaine">Aquitaine</option>
                            <option value="Auvergne" name="Auvergne">Auvergne</option>
                            <option value="Basse-Normandie" name="Basse-Normandie">Basse-Normandie</option>
                            <option value="Bourgogne" name="Bourgogne">Bourgogne</option>
                            <option value="Bretagne" name="Bretagne">Bretagne</option>
                            <option value="Centre" name="Centre">Centre</option>
                            <option value="Champagne-Ardenne" name="Champagne-Ardenne">Champagne-Ardenne</option>
                            <option value="Corse" name="Corse">Corse</option>
                            <option value="Franche-Comté" name="Franche-Comté">Franche-Comté</option>
                            <option value="Haute-Normandie" name="Haute-Normandie">Haute-Normandie</option>
                            <option value="Ile-de-France" name="Ile-de-France">Ile-de-France</option>
                            <option value="Languedoc-Roussillon" name="Languedoc-Roussillon">Languedoc-Roussillon</option>
                            <option value="Limousin" name="Limousin">Limousin</option>
                            <option value="Lorraine" name="Lorraine">Lorraine</option>
                            <option value="Midi-Pyrénées" name="Midi-Pyrénées">Midi-Pyrénées</option>
                            <option value="Nord-Pas-de-Calais" name="Nord-Pas-de-Calais">Nord-Pas-de-Calais</option>
                            <option value="Pays de la Loire" name="Pays de la Loire">Pays de la Loire</option>
                            <option value="Picardie" name="Picardie">Picardie</option>
                            <option value="Poitou-Charentes" name="Poitou-Charentes">Poitou-Charentes</option>
                            <option value="Provence-Alpes-Côte d'Azur" name="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>
                            <option value="Rhône-Alpes" name="Rhône-Alpes">Rhône-Alpes</option>
                            <option value="Guadeloupe" name="Guadeloupe">Guadeloupe</option>
                            <option value="Martinique" name="Martinique">Martinique</option>
                            <option value="Guyane" name="Guyane">Guyane</option>
                            <option value="Réunion" name="Réunion">Réunion</option>
                        </select>
                      </div>

                      <div class="col-md-4 col-lg-4">
                        <select class="select2 form-control" data-placeholder="Type d'individu" id="type_individu" name="type_individu">
                            <option value="">Type d'individu</option>
                            <option value="inscrit" name="inscrit">Inscrit</option>
                            <option value="non_inscrit" name="non_inscrit">Non inscrit</option>
                        </select>
                      </div>

                      <div class="col-md-4 col-lg-4">
                        <select class="select2 form-control" data-placeholder="Méthode d'envoie" id="methode_envoie" name="methode_envoie">
                            <option value="">Méthode d'envoie</option>
                            <option value="papier" name="papier">Papier</option>
                            <option value="email" name="email">Email</option>
                            <option value="sms" name="sms">SMS</option>
                            <option value="seo" name="seo">SEO</option>
                        </select>
                      </div>

                      <div class="col-md-4 col-lg-4">
                        <input type="text" class="form-control sans-bas" name="titre" id="titre" aria-describedby="emailHelp" placeholder="Titre de la publicité">
                      </div>

                      <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                          <textarea placeholder="Description de la publicité" class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                      </div>
                </div>
                <div class="col-md-12 col-lg-12">
                  <div class="form-group">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <a id="addad" href="#" class="btn btn-blue-ajout float-right">Ajouter</a>
                  </div>
                </div>
              
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<section>
  <!--for demo wrap-->
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Identifiant</th>
          <th>Titre</th>
          <th>Description</th>
          <th>Mode d'envoi</th>
          <th>Date de création</th>
          <th>Date lim. de validation</th>
          <th>Etat</th>
          <th>Modifier</th>
          <th>Supprimer</th>
        </tr>
      </thead>
    </table>
  </div>

  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php $publicites = DB::table('publicites')->get(); ?>
        @foreach ($publicites as $publicite)
        <tr>
          <td><?php echo $publicite->idPublicite; ?></td>
          <td><?php echo $publicite->titre; ?></td>
          <td><?php echo $publicite->description; ?></td>
          <td><?php echo $publicite->methode_envoie; ?></td>
          <td><?php echo $publicite->date_creation; ?></td>
          <td><?php echo $publicite->date_limite; ?></td>
          <td><?php echo $publicite->etat; ?></td>
          <td>
            <button type="button" class="btn btn-pro" data-toggle="modal" data-target="#modifier">
              <i class="fas fa-pen-square"></i>
            </button>
          </td>
          <td>
            <button type="button" class="btn btn-pro" data-toggle="modal" data-target="#supprimer">
              <i class="fas fa-trash-alt"></i>
            </button>
          </td>
        @endforeach
      </tbody>
    </table>
  </div>
</section>
@endsection


@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    var delay = 2000;
    var categorie = $("#categorie").val();
    var age = $('#age').val();
    var departement = $("#departement").val();
    var type_individu = $("#type_individu").val();
    var methode_envoie = $("#methode_envoie").val();
    var titre = $("#titre").val();
    var description = $("#description").val();
    

    
    $("#description").change(function(){
      var descriptiontemp = $("#description").val();
      description=descriptiontemp;
    });

    $("#categorie").change(function(){
      var categorietemp = $("#categorie").val();
      categorie=categorietemp;
    });

    $("#age").change(function(){
      var agetemp = $("#age").val();
      age = agetemp;
    });


    $("#departement").change(function(){
      var departementtemp = $("#departement").val();
      departement = departementtemp;
    });

    $("#titre").change(function(){
      var titretemp = $("#titre").val();
      titre = titretemp;
    });

    $("#methode_envoie").change(function(){
      var methode_envoietemp = $("#methode_envoie").val();
      methode_envoie = methode_envoietemp;
    });

    $("#type_individu").change(function(){
      var type_individutemp = $("#type_individu").val();
      type_individu = type_individutemp;
    });


    //var i = 0 ;

    $("#addad").click(function(){
      /*console.log(categorie);
      console.log(age);
      console.log(departement);
      console.log(type_individu);
      console.log(methode_envoie);
      console.log(titre);
      console.log(description);*/

      if (categorie=="" || age=="" || departement=="" || type_individu=="" || titre=="" || methode_envoie=="" || description=="") {
          alert("Veuillez remplir tous les champs");
      } else {
          if (methode_envoie=="papier" || methode_envoie=="seo") {

              $.ajax({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                  },
                  url:"{{route ('addadsxml')}}",
                  method:'POST',
                  data:{
                      titre:titre,
                      description:description,
                      methode_envoie:methode_envoie,
                      categorie:categorie,
                      age:age,
                      departement:departement,
                      type_individu:type_individu,
                  },
                    success: function(data){
                     window.location = "/";
                    }
              });
          } else if (methode_envoie=="sms"){
              $.ajax({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                  },
                  url:"{{route ('sendmessages')}}",
                  method:'POST',
                  data:{
                     titre:titre,
                      description:description,
                      methode_envoie:methode_envoie,
                      categorie:categorie,
                      age:age,
                      departement:departement,
                      type_individu:type_individu,
                  },
                    success: function(data){
                     window.location = "/";
                    }
              });
          } else{
            $.ajax({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                },
                url:"{{route ('sendemails')}}",
                method:'POST',
                data:{
                    titre:titre,
                      description:description,
                      methode_envoie:methode_envoie,
                      categorie:categorie,
                      age:age,
                      departement:departement,
                      type_individu:type_individu,
                },
                  success: function(data){
                   window.location = "/";
                  }
            });
          }
      }
    });
  });
</script>
@endsection
