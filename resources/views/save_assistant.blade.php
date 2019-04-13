@extends('layouts.int')

@section('content')

<div class="container pt-5">
  <div class="row pb-5">
    <div class="col">
      <h1>Commandes</h1>
    </div>
    <div class="col">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-blue" data-toggle="modal" data-target="#exampleModalScrollable">
        Créer une nouvelle commande
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Nouvelle commande</h5>
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
                      <div class="col-md-5 col-lg-5">
                        <div class="form-group">
                          <?php
                            $clients = DB::table('individu')
                            ->where([
                              ['carac_socio_com', '=', 'client'],
                            ])
                            ->get();
                          ?>
                          <select class="select2 form-control" data-placeholder="Choisissez l'article" id="id_client" name="id_client">
                            @foreach ($clients as $client)
                              <option class="class_{{$client->nom}}" value="{{$client->id_individu}}">{{$client->nom}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 col-lg-5">
                        <div class="form-group">
                          <?php
                            $articles = DB::table('articles')->get();
                          ?>
                          <select class="select2 form-control" data-placeholder="Choisissez l'article" id="article" name="article">
                            @foreach ($articles as $article)
                              <option class="class_{{$article->numeroArticle}}" value="{{$article->numeroArticle}}">{{$article->designation}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-1 col-lg-1" style="padding-top: 10px;">
                        <span>X</span>
                      </div>
                      <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                          <input type="text" class="form-control sans-bas" name="quantite" id="quantite" aria-describedby="emailHelp" placeholder="Quantité">
                        </div>
                      </div>
                      <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                          <!-- <button class="btn btn-blue-ajout" id="add" type="submit">Ajouter</button> -->
                          <a id="add" href="#" class="btn btn-blue-ajout">Ajouter</a>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="message_box" style="margin:10px 0px;">
                  </div>

                  <div class="">
                    <table class="tabadd">
                      <thead>
                        <tr>
                          <th>
                            <!-- <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select mdl-js-ripple-effect--ignore-events is-upgraded" for="checkbox-all" data-upgraded=",MaterialCheckbox,MaterialRipple">
                              <input type="checkbox" id="checkbox-all" class="mdl-checkbox__input">
                              <span class="mdl-checkbox__focus-helper"></span>
                              <span class="mdl-checkbox__box-outline">
                                <span class="mdl-checkbox__tick-outline"></span>
                              </span>
                              <span class="mdl-checkbox__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple">
                                <span class="mdl-ripple">
                                </span>
                              </span>
                            </label> -->
                          </th>
                            <th class="mdl-data-table__cell--non-numeric">Identifiant du client</th>
                            <th class="mdl-data-table__cell--non-numeric">Désignation Article</th>
                            <th class="mdl-data-table__cell--non-numeric">Prix</th>
                            <th class="mdl-data-table__cell--non-numeric">Quantité</th>
                          </tr>
                      </thead>
                      <tbody id="yourcmd">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              <a data-dismiss="modal" id="valider" href="#" class="btn btn-primary">Valider</a>
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
          <th>Id. Client</th>
          <th>Article</th>
          <th>Prix</th>
          <th>Quantité</th>
          <th>Modifier</th>
          <th>Supprimer</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php $commandes = DB::table('commandes')->get(); ?>
        @foreach ($commandes as $commande)
        <tr>
          <td><?php echo $commande->identifiantClient; ?></td>
          <td><?php echo $commande->numeroArticle; ?></td>
          <td><?php echo $commande->prix; ?></td>
          <td><?php echo $commande->quantite; ?></td>
          <td>
            <button type="button" class="btn btn-pro" data-toggle="modal" data-target="#modifier">
              <i class="fas fa-pen-square"></i>
            </button>
            <div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Détails publicité 01</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="pt-4">
                        <div class="form-group">
                          <input type="text" class="form-control sans-bas" id="exampleInputTitle" aria-describedby="emailHelp" placeholder="Titre de la publicité">
                        </div>
                        <div class="form-group">
                          <textarea placeholder="Le texte de votre publicité" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                      </div>
                      <div class="pt-4">
                        <label for="avatar">Ajoutez 5 images au plus:</label>
                        <br>
                        <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Abandonner</button>
                    <button type="button" class="btn btn-primary">Modifier</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td>

          </td>
        </tr>
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
    var id_client = $("#id_client").val();
    var id_client_long = document.getElementsByClassName('class_'+id_client);
    var id_client_crt = id_client_long[0];
    var nom_cli = id_client_crt.innerText || id_client_crt.textContent
    var article = $('#article').val();
    var designation_longue = document.getElementsByClassName('class_'+article);
    var designation_crt = designation_longue[0];
    var designation = designation_crt.innerText || designation_crt.textContent
    console.log(designation);
     console.log(article);
    var quantite = $("#quantite").val();
    var commande = {
      id_client: '',
      article: '',
      prix: '',
      quantite: '',
    };
    var commandes = [];
    console.log();
    var prix = '';
    $("#id_client").change(function(){
      var id_clienttemp = $("#id_client").val();
      id_client=id_clienttemp;
    });
    $("#article").change(function(){
      var articletemp = $("#article").val();
      article = articletemp;
    });
    $("#quantite").change(function(){
      var quantitetemp = $("#quantite").val();
      quantite = quantitetemp;
    });
    var i = 0 ;
    $("#add").click(function(){
      if (id_client=="" || article=="" || quantite=="") {
          alert("Veuillez remplir tous les champs");
          console.log(article);
      }else {
        var designation_longue = document.getElementsByClassName('class_'+article);
        var designation_crt = designation_longue[0];
        var designation = designation_crt.innerText || designation_crt.textContent;
        console.log(designation);
        console.log(id_client);
        console.log(article);
        console.log(quantite);
        commande = {
          id_client: id_client,
          article: article,
          prix: '',
          quantite: quantite,
        };
        // console.log(commande);
        // console.log(prix);
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
          }
        });
        $.post("{{route ('addelem')}}", commande, function(data) {
          // alert(data);
          // alert(commande);
          commande.prix = data;
          // prix = data;
          console.log(prix);
          commandes.push(commande);
          // console.log(commandes);
          var action = "<td>\
                <label class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select mdl-js-ripple-effect--ignore-events is-upgraded\" for=\"checkbox-all\" data-upgraded=\",MaterialCheckbox,MaterialRipple\">\
                  <input type=\"checkbox\" id=\"checkbox-all\" class=\"mdl-checkbox__input\">\
                  <span class=\"mdl-checkbox__focus-helper\"></span>\
                  <span class=\"mdl-checkbox__box-outline\">\
                    <span class=\"mdl-checkbox__tick-outline\"></span>\
                  </span>\
                  <span class=\"mdl-checkbox__ripple-container mdl-js-ripple-effect mdl-ripple--center\" data-upgraded=\",MaterialRipple\">\
                    <span class=\"mdl-ripple\">\
                    </span>\
                  </span>\
                </label>\
              </td>";
          // var action = "<td><button class='del'>X</button></td>";
              var identifiant = "<td style=\"text-align:left;\">\
                <span class=\"mdl-data-table__label add-table-content\" title=\"barcode\">" + id_client + "</span>\
              </td>";
              var designationArt = "<td class=\"mdl-data-table__cell--non-numeric\">\
                <span class=\"mdl-data-table__label add-table-content\" title=\"product name\">" + designation + "</span>\
              </td>";
        			var thePrice = "<td class=\"mdl-data-table__cell--non-numeric\">\
                <span class=\"mdl-data-table__label add-table-content\" title=\"brand\">" + commande.prix + "</span>\
              </td>"
        			var theQuantity = "<td class=\"mdl-data-table__cell--non-numeric\">\
                <span class=\"mdl-data-table__label add-table-content\" title=\"details\">" + quantite + "</span>\
              </td>"
              console.log(commandes);

              var lacmd = action + identifiant + designationArt + thePrice + theQuantity;
        			$("#yourcmd").append("<tr>" + lacmd +  "</tr>");
              i++;
              // var children = document.getElementById(i).children;
              // console.log(children[0]);
            });
          console.log(commandes);
      };
    });
    $("#valider").click(function(){
      if (commandes.length == 0) {
        alert("Veuillez ajouter des commandes");
      }else {
        $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                  }
                });
        $.post("{{route ('validate')}}",{commandes:commandes}, function(data) {
          // alert(data);
          alert("Commandes bien enregistrées");
          // alert(commande);
          // commande.prix = data;
          // prix = data;
          console.log(commandes);
        });
      }
    });
  });
</script>
@endsection
