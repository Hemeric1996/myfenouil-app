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
                          <input type="text" class="form-control sans-bas" name="id_client" id="id_client" aria-describedby="emailHelp" placeholder="Identifiant du client" required>
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
              <button type="button" class="btn btn-primary">Valider</button>
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
          <th>Faire valider</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
          <td>01</td>
          <td>Table basse de jardin</td>
          <td>$2.38</td>
          <td>-0.01</td>
          <td>-1.36%</td>
          <td>15-05-2019</td>
          <td>En attente de validation</td>
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
        </tr>
      </tbody>
    </table>
  </div>
</section>
@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    // var etat = document.getElementById('exampleModalScrollable').getAttribute('class');
    // console.log(etat);
    var delay = 2000;
    var id_client = $("#id_client").val();
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
        })
        $.post("{{route ('addelem')}}", commande, function(data) {
          // alert(data);
          commande.prix = data;
          // prix = data;
          console.log(prix);
          commandes.push(commande);
          // console.log(commandes);
          console.log(commandes);
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

              var lacmd = action + identifiant + designationArt + thePrice + theQuantity;
        			$("#yourcmd").append("<tr>" + lacmd +  "</tr>");
        });

      };
    });
    $(".mdl-checkbox").click(function(){
      var _tableRow = $(this).parents("tr:first");
      if ($(this).hasClass("is-checked") === false) {
        _tableRow.addClass("is-selected");
      } else {
        _tableRow.removeClass("is-selected");
      }
    });

  });
</script>
@endsection
