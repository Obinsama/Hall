<template>
    <div class="page-content">
        <div>
            <h4 class="mb-3 mb-md-0">Gestion du budget</h4>
        </div>
        <br>
        <div class="row">
            <div class="card col-md-12">
                <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-line-tab" data-toggle="tab" href="#budget" role="tab" aria-controls="home" aria-selected="true">Budget</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-line-tab" data-toggle="tab" href="#recettes" role="tab" aria-controls="profile" aria-selected="false">Recettes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-line-tab" data-toggle="tab" href="#depenses" role="tab" aria-controls="contact" aria-selected="false">Dépenses</a>
                    </li>

                </ul>
                <div class="tab-content mt-3" id="lineTabContent">
                    <div class="tab-pane fade show active" id="budget" role="tabpanel" aria-labelledby="home-line-tab">
                        <!--                        <h4>Budget</h4>-->
                        <br>

                        <button class="btn btn-success" data-toggle="modal" data-target="#budgetModal"> Nouveau Budget</button>
                        <br>
                        <br><br>
                        <h6>Historique</h6>
                        <div class="table-responsive">
                            <table class="table " style="text-align:center">
                                <thead>
                                <tr>
                                    <!--                                    <th>#</th>-->
                                    <th>Libelle</th>
                                    <th>Montant</th>
                                    <th>Execution</th>
                                    <th>Reste</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>2021</td>
                                    <td>7 054 000 FCFA</td>
                                    <td>204 000 FCFA</td>
                                    <td>6 850 000 FCFA</td>
                                    <td>
                                        <a class="mx-2 " href="#" title="Arreter l'exécution">
                                            <feather-icon type="x-circle" stroke="red"></feather-icon>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="recettes" role="tabpanel" aria-labelledby="profile-line-tab">
                        <br>
                        <button class="btn btn-success" data-toggle="modal" data-target="#budgetModal"> Nouvelle recette</button>
                        <br>
                        <br><br>
                        <h6>Historique</h6>
                        <div class="table-responsive">
                            <table class="table " style="text-align:center">
                                <thead>
                                <tr>
                                    <!--                                    <th>#</th>-->
                                    <th>Origine</th>
                                    <th>Montant</th>
                                    <th>Statut</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>vente timbre</td>
                                    <td>7 054 000 FCFA</td>
                                    <td>Termine</td>
                                    <td>
                                        <a class="mx-2 " href="#" title="Arreter l'exécution">
                                            <feather-icon type="x-circle" stroke="red"></feather-icon>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="depenses" role="tabpanel" aria-labelledby="contact-line-tab">
                        <br>
                        <button class="btn btn-success" data-toggle="modal" data-target="#budgetModal"> Nouvelle dépense</button>
                        <br>
                        <br><br>
                        <h6>Historique</h6>
                        <div class="table-responsive">
                            <table class="table " style="text-align:center">
                                <thead>
                                <tr>
                                    <!--                                    <th>#</th>-->
                                    <th>Motif</th>
                                    <th>Montant</th>
                                    <th>Statut</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>achat de terrain</td>
                                    <td>7 054 000 FCFA</td>
                                    <td>Termine</td>
                                    <td>
                                        <a class="mx-2 " href="#" title="Arreter l'exécution">
                                            <feather-icon type="x-circle" stroke="red"></feather-icon>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade newModal" id="budgetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nouveau Budget</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label class="control-label col-md-12">Libelle
                                            <input type="text" class="form-control" name="libelle" placeholder="label"  ></label>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-12">Periode
                                            <input type="number" class="form-control" name="periode"  placeholder="Entrer la periode"></label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12">Montant
                                            <input type="number" class="form-control" name="montant" placeholder="Entrer le montant" ></label>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal"
                                @click.prevent="saveBudget">Enregistrer</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "GestionBudget"
    }
</script>

<style scoped>

</style>