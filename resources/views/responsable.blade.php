@extends('layouts.int')

@section('content')


<div class="container pt-5">
  <div class="row pb-5">
    <div class="col">
      <h1>Articles</h1>
    </div>
    <div class="col">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-blue" data-toggle="modal" data-target="#exampleModalScrollable">
        Créer un article
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Insertion d'articles</h5>
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
                          <label for="designation">Désignation</label>
                          <input type="text" class="form-control" name="designation" id="designation"  placeholder="Boîte de peinture" autofocus required="">
                        </div>
                      </div>

                      <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                          <label for="prix">Prix de vente</label>
                          <input type="number" class="form-control" name="prix" id="prix"  placeholder="<?= rand(1,1000) ?>" required="">
                        </div>
                      </div>

                      <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                          <label for="quantite">Quantité</label>
                          <input type="number" class="form-control" name="quantite" id="quantite"  placeholder="<?= rand(1,1000) ?>" required="">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                      <div class="form-group">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <a id="addarticle" href="#" class="btn btn-blue-ajout float-right">Ajouter</a>
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
          <th>Id. Article</th>
          <th>Designation </th>
          <th>Prix de vente</th>
          <th>Quantité Disponible</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php $articles = DB::table('articles')->get(); ?>
        @foreach ($articles as $article)
        <tr>
          <td><?php echo $article->numeroArticle; ?></td>
          <td><?php echo $article->designation; ?></td>
          <td><?php echo $article->prix; ?></td>
          <td><?php echo $article->stock; ?></td>
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
    var designation = $("#designation").val();
    var prix = $('#prix').val();
    var quantite = $("#quantite").val();

    $("#designation").change(function(){
      var designationtemp = $("#designation").val();
      designation=designationtemp;
    });


    $("#prix").change(function(){
      var prixtemp = $("#prix").val();
      prix = prixtemp;
    });


    $("#quantite").change(function(){
      var quantitetemp = $("#quantite").val();
      quantite = quantitetemp;
    });

    //var i = 0 ;

    $("#addarticle").click(function(){
      if (designation=="" || prix=="" || quantite=="") {
          alert("Veuillez remplir tous les champs");
      } else {
          $.ajax({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
              },
              url:"{{route ('addarticles')}}",
              method:'POST',
              data:{
                  designation:designation,
                  prix:prix,
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
