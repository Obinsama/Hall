<template>
    <div class="page-content col-12 col-md-12">
        <div>
            <h4 class="mb-3 mb-md-0">Gestion des equipements</h4>
        </div>
        <br>
        <div class="row" >
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">PANIER DE VENTE</h6>
<!--                        <p class="card-description">Add class <code>.table</code></p>-->
                        <div class="table-responsive">
                            <table class="table " style="text-align:center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Valeur</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="item in Vente.Equipements">
                                    <th>{{item.id}}</th>
                                    <td>{{item.nom_equipement}}</td>
                                    <td>{{(item.valeur).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}} </td>
                                    <td>
                                        <div class="px-0" style="text-align:center">
                                            <a class="mx-2 " href="#" title="Supprimer"
                                               @click.prevent="enleverEquipement(item)">
                                                <feather-icon type="trash-2" stroke="red"></feather-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="font-size:30px;font-weight:bold; color:red;background-color:#f9fafb">
                                    <td> </td>
                                    <td>Total : </td>
                                    <td>{{(totalAchats).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}} </td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="my-2">
                                <button class="btn btn-primary mx-auto" style="display:block" v-if="Vente.Equipements.length>=1" data-toggle="modal"
                                        data-target="#venteModal">Vendre</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Equipements
                            <ajout-equipement></ajout-equipement>
                        </h6>
                        <!--            <p class="card-description">Add class <code>.table-bordered</code></p>-->
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                <tr style="text-align:center">
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Type</th>
                                    <th>Valeur</th>
                                    <th>Etat</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="equipement in liste_equipements.data" style="text-align:center">
                                    <td>{{equipement.id}}</td>
                                    <td>{{equipement.nom_equipement}}</td>
                                    <td>{{equipement.type}}</td>
                                    <td>{{(equipement.valeur).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}} </td>
                                    <td>{{equipement.etat}}</td>
                                    <td>
                                        <div class="px-0" style="text-align:center">
                                            <a class="mx-2 " href="#" title="Supprimer"
                                               @click.prevent="deleteEquipement">
                                                <feather-icon type="trash-2" stroke="red"></feather-icon>
                                            </a>
                                            <a class="mx-2" href="#" title="Modifier"
                                               @click.prevent="modifierEquipement(equipement)" data-toggle="modal"
                                               data-target="#exampleModal">
                                                <feather-icon type="edit" stroke="blue"></feather-icon>
                                            </a>
                                            <a class=" mx-2" href="#" title="Vendre"
                                               @click.prevent="ajouterAuPanier(equipement)">
                                                <span><feather-icon type="shopping-cart"
                                                                    stroke="blue"></feather-icon></span>
                                            </a>
                                            <a class="mx-2" href="#" title="Details"
                                               @click.prevent="afficherEquipement">
                                                <span><feather-icon type="eye" stroke="#6a246a"></feather-icon></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <pagination :data="liste_equipements" @pagination-change-page="getResults"
                                        class="mt-5 mx-auto "></pagination>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="venteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">INFOS VENTE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="cart" class="col-form-label">Total Achats</label>
                                <input type="text" class="form-control" id="cart"
                                       v-model="(totalAchats).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})" disabled>
                            </div>
                            <div class="form-group">
                                <label for="montant" class="col-form-label">Versement</label>
                                <input type="text" class="form-control" id="montant"
                                       v-model="Facture.montant=Vente.montant">
                            </div>
                            <div class="form-group">
                                <label for="reste" class="col-form-label">Reste</label>
                                <input type="text" class="form-control" id="reste"
                                       v-model="Facture.reste=Vente.reste=Vente.montant-Vente.cout" disabled>
                            </div>
                            <div class="form-group">
                                <label for="statut" class="col-form-label">Statut</label>
                                <input type="text" class="form-control" id="statut" v-model="Vente.statut" disabled>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal"
                                @click.prevent="vendreEquipements">Vendre</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import pagination from 'laravel-vue-pagination';
    import {Activity} from 'vue-feather-icon'

    export default {
        name: "GestionEquipements",
        components: {
            pagination,
            ActivityIcon: Activity
        },
        mounted(){
            this.$store.commit('CLEAR_CART');
        },
        created() {
            this.$store.dispatch('allEquipementFromDatabase');
        },
        methods: {
            getResults(page = 1) {
                this.$store.dispatch('getEquipementResultsFromDataBase', page)
            },
            modifierEquipement(equipement) {
                console.log(equipement)
                this.$store.commit('EDIT_EQUIPEMENT', equipement)
            },
            ajouterAuPanier(equipement) {
                this.$store.commit("ADD_TO_CART", equipement);
            },
            vendreEquipements() {
                let vente = this.$store.getters.getVente;
                this.$store.dispatch('saveFactureData', vente)

            },
            afficherEquipement(equipement) {
                // this.$router.replace('/')
            },
            enleverEquipement(equipement){
                this.$store.commit('REMOVE_FROM_CART',equipement)
            }
        },computed: {
            liste_equipements() {
                return this.$store.getters.getEquipementList;
            },
            Equipement() {
                return this.$store.getters.getEquipement;
            },
            Vente() {
                return this.$store.getters.getVente;
            },
            Facture() {
                return this.$store.getters.getFacture;
            },
            Panier(){
                return this.$store.getters.getPanier;
            },
            totalAchats(){
                return this.$store.getters.getValeurAchats;
            }
        },

    }
</script>

<style scoped>
    /*.action{*/
    /*    display: inline-block !important;*/
    /*}*/
    td > a {
        display: inline-block !important;
    }
</style>