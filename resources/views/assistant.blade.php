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
                              <option class="class_{{$client->prenom .' '. $client->nom}}" value="{{$client->id_individu}}">{{$client->prenom .' '. $client->nom}}</option>
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

                      <!-- <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                          <input type="text" class="form-control sans-bas" name="prix" id="prix" aria-describedby="emailHelp" placeholder="Prix">
                        </div>
                      </div> -->

                      <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                          <input type="text" class="form-control sans-bas" name="quantite" id="quantite" aria-describedby="emailHelp" placeholder="Quantité">
                        </div>
                      </div>

                      <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                          <a id="valider" href="#" class="btn btn-blue-ajout float-right">Valider la commande</a>
                        </div>
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
          <th>Id. Client</th>
          <th>Article</th>
         <!--  <th>Prix</th> -->
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
          <!-- <td><?php //echo $commande->prix; ?></td> -->
          <td><?php echo $commande->quantite; ?></td>
          <!-- <td>
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
            <button type="button" class="btn btn-pro" data-toggle="modal" data-target="#supprimer">
              <i class="fas fa-trash-alt"></i>
            </button>
          </td>
          <td>

          </td>
        </tr> -->
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
    var id_client = $("#id_client").val();
    var article = $('#article').val();
    //var prix = $("#prix").val();
    var quantite = $("#quantite").val();
    


    $("#id_client").change(function(){
      var id_clienttemp = $("#id_client").val();
      id_client=id_clienttemp;
    });


    $("#article").change(function(){
      var articletemp = $("#article").val();
      article = articletemp;
    });


    /*$("#prix").change(function(){
      var prixtemp = $("#prix").val();
      prix = prixtemp;
    });*/


    $("#quantite").change(function(){
      var quantitetemp = $("#quantite").val();
      quantite = quantitetemp;
    });
    

    //var i = 0 ;

    $("#valider").click(function(){

      if (id_client=="" || article=="" || quantite=="") {
          alert("Veuillez remplir tous les champs");
      } else {

//console.log(id_client);
//console.log(article);
//console.log(prix);
//console.log(quantite);

          $.ajax({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
              },
              url:"{{route ('addcommandes')}}",
              method:'POST',
              data:{
                  id_client:id_client,
                  article:article,
                  //prix:prix,
                  quantite:quantite
              },
                success: function(data){
                  window.location = "/";
                }
          });
      }
    });
  });
</script>
@endsection
