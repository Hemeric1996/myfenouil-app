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
              <h5 class="modal-title" id="exampleModalCenterTitle">Nouvelle publicité</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <h4>Cible de routage</h4>
                <div class="container">
                  <div class="row pt-3">
                    <div class="col-5">
                      <h6>Individus déjà client?</h6>
                    </div>
                    <div class="col-7">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="oui" value="oui">
                        <label class="form-check-label" for="oui">Oui</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="non" value="non">
                        <label class="form-check-label" for="non">Non</label>
                      </div>
                    </div>
                  </div>
                  <div class="row pt-3">
                    <div class="col">
                      <label for="inputState">Cat. socio-professionnelle</label>
                      <select id="inputState" class="form-control">
                        <option value="prospection" selected>Industrie</option>
                        <option value="assiS">Décoration</option>
                        <option value="gestA">Banque</option>
                        <option value="resD">Edition</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="inputState">Tranche d'âge</label>
                      <select id="inputState" class="form-control">
                        <option value="prospection" selected>16-25 ans</option>
                        <option value="assiS">26-45 ans</option>
                        <option value="gestA">46-68 ans</option>
                        <option value="resD">69 et plus</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="inputState">Dep. de résidence</label>
                      <select id="inputState" class="form-control">
                        <option value="prospection" selected>Evry</option>
                        <option value="assiS">Paris</option>
                        <option value="gestA">Bordeaux</option>
                        <option value="resD">Caen</option>
                      </select>
                    </div>
                  </div>
                </div>
                <h4 class="pt-4">Méthode d'envoie de la publicité</h4>
                <div class="container">
                  <div class="row pt-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="mail" value="mail">
                      <label class="form-check-label" for="mail">Mail</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="sms" value="sms">
                      <label class="form-check-label" for="sms">SMS</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="papier" value="papier">
                      <label class="form-check-label" for="papier">Catalogue Papier</label>
                    </div>
                    <div class="form-check-inline">
                      <select id="inputState" class="form-control">
                        <option value="prospection" selected>Moyenne qualité d'impression</option>
                        <option value="assiS">Bonne qualité d'impression</option>
                        <option value="gestA">Faible qualité d'impression</option>
                      </select>
                    </div>
                  </div>
                  <div class="row pt-3">

                  </div>
                </div>
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
                      <h4>Cible de routage</h4>
                      <div class="container">
                        <div class="row pt-3">
                          <div class="col-5">
                            <h6>Individus déjà client?</h6>
                          </div>
                          <div class="col-7">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="oui" value="oui">
                              <label class="form-check-label" for="oui">Oui</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="non" value="non">
                              <label class="form-check-label" for="non">Non</label>
                            </div>
                          </div>
                        </div>
                        <div class="row pt-3">
                          <div class="col">
                            <label for="inputState">Cat. socio-professionnelle</label>
                            <select id="inputState" class="form-control">
                              <option value="prospection" selected>Industrie</option>
                              <option value="assiS">Décoration</option>
                              <option value="gestA">Banque</option>
                              <option value="resD">Edition</option>
                            </select>
                          </div>
                          <div class="col">
                            <label for="inputState">Tranche d'âge</label>
                            <select id="inputState" class="form-control">
                              <option value="prospection" selected>16-25 ans</option>
                              <option value="assiS">26-45 ans</option>
                              <option value="gestA">46-68 ans</option>
                              <option value="resD">69 et plus</option>
                            </select>
                          </div>
                          <div class="col">
                            <label for="inputState">Dep. de résidence</label>
                            <select id="inputState" class="form-control">
                              <option value="prospection" selected>Evry</option>
                              <option value="assiS">Paris</option>
                              <option value="gestA">Bordeaux</option>
                              <option value="resD">Caen</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <h4 class="pt-4">Méthode d'envoie de la publicité</h4>
                      <div class="container">
                        <div class="row pt-3">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="mail" value="mail">
                            <label class="form-check-label" for="mail">Mail</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="sms" value="sms">
                            <label class="form-check-label" for="sms">SMS</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="papier" value="papier">
                            <label class="form-check-label" for="papier">Catalogue Papier</label>
                          </div>
                          <div class="form-check-inline">
                            <select id="inputState" class="form-control">
                              <option value="prospection" selected>Moyenne qualité d'impression</option>
                              <option value="assiS">Bonne qualité d'impression</option>
                              <option value="gestA">Faible qualité d'impression</option>
                            </select>
                          </div>
                        </div>
                        <div class="row pt-3">

                        </div>
                      </div>
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
