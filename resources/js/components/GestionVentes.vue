<template>
    <div class="page-content col-12 col-md-12">
        <div class="row col-md-12">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Ventes </h6>
                        <!--            <p class="card-description">Add class <code>.table-bordered</code></p>-->
                        <div class="table-responsive pt-3">
                            <table class="table table-striped ">
                                <thead>
                                <tr style="text-align:center">
                                    <th>#</th>
                                    <th>REF FACTURE</th>
                                    <th>VERSEMENT</th>
                                    <th>RESTE</th>
                                    <th>STATUT</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="vente in liste_ventes.data" style="text-align:center">

                                    <td>{{vente.id}}</td>
                                    <td>{{vente.ref}}</td>
                                    <td>{{vente.montant}}</td>
                                    <td>{{vente.reste}} FCFA</td>
                                    <td><span class="badge badge-danger" v-show="vente.statut=='annule'">Annulé</span>
                                        <span class="badge badge-success" v-show="vente.statut=='termine'">Terminé</span>
                                        <span class="badge badge-warning" v-show="vente.statut=='en cours'">En cours</span>
                                    </td>
                                    <td >
                                        <div class="px-0" style="text-align:center">
                                            <a class="mx-2 " href="#" title="Annuler" @click.prevent="annulerVente(vente)" v-show="vente.statut=='en cours'">
                                                <feather-icon type="x" stroke="red" ></feather-icon>
                                            </a>
                                            <a class="mx-2" href="#" title="Confirmer"  @click.prevent="confirmerVente(vente)"  v-show="vente.statut=='en cours'">
                                                <feather-icon type="check" stroke="green"></feather-icon>
                                            </a>
                                            <router-link class=" mx-2" href="#" title="Imprimer" to="/impression" @click.prevent="printbill" v-show="vente.statut=='termine'">
                                                <span><feather-icon type="printer" stroke="blue" ></feather-icon></span>
                                            </router-link>
<!--                                            <a class="mx-2" href="#" title="Details" @click.prevent="updateVente(vente)"  data-toggle="modal" data-target="#factureModal">-->
<!--                                                <span><feather-icon type="eye" stroke="#6a246a" ></feather-icon></span>-->
<!--                                            </a>-->
                                            <a class="mx-2" href="#" title="Details" @click.prevent="detailsFacture(vente)" data-toggle="modal" data-target="#factureModal" >
                                                <span><feather-icon type="eye" stroke="#6a246a" ></feather-icon></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <pagination :data="liste_ventes" @pagination-change-page="getResults" class="mt-5 mx-auto " ></pagination>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="factureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">INFOS VENTE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                <tr style="text-align:center">
                                    <th>#</th>
                                    <th>NOM</th>
                                    <th>VALEUR</th>
                                    <th>ETAT</th>
<!--                                    <th>Actions</th>-->
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="vente in VentesFacture" style="text-align:center">

                                    <td>{{vente.id}}</td>
                                    <td>{{vente.nom_equipement}}</td>
                                    <td>{{vente.valeur}} FCFA</td>
                                    <td>{{vente.etat}} </td>
<!--                                    <td><span class="badge badge-danger" v-show="vente.statut=='annule'">Annulé</span>-->
<!--                                        <span class="badge badge-success" v-show="vente.statut=='termine'">Terminé</span>-->
<!--                                        <span class="badge badge-warning" v-show="vente.statut=='en cours'">En cours</span>-->
<!--                                    </td>-->
<!--                                    <td >-->
<!--                                        <div class="px-0" style="text-align:center">-->
<!--                                            <a class="mx-2 " href="#" title="Annuler" @click.prevent="annulerVente(vente)" v-show="vente.statut=='en cours'">-->
<!--                                                <feather-icon type="x" stroke="red" ></feather-icon>-->
<!--                                            </a>-->
<!--                                            <a class="mx-2" href="#" title="Confirmer"  @click.prevent="confirmerVente(vente)"  v-show="vente.statut=='en cours'">-->
<!--                                                <feather-icon type="check" stroke="green"></feather-icon>-->
<!--                                            </a>-->
<!--                                            <router-link class=" mx-2" href="#" title="Imprimer" to="/impression" @click.prevent="printbill" v-show="vente.statut=='termine'">-->
<!--                                                <span><feather-icon type="printer" stroke="blue" ></feather-icon></span>-->
<!--                                            </router-link>-->
<!--                                            <a class="mx-2" href="#" title="Details" @click.prevent="updateVente(vente)"  data-toggle="modal" data-target="#factureModal">-->
<!--                                                <span><feather-icon type="eye" stroke="#6a246a" ></feather-icon></span>-->
<!--                                            </a>-->
<!--                                            <a class="mx-2" href="#" title="More...." @click.prevent="detailsFacture(vente)"  >-->
<!--                                                <span><feather-icon type="eye" stroke="#6a246a" ></feather-icon></span>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </td>-->
                                </tr>
                                </tbody>
                            </table>
<!--                            <pagination :data="liste_ventes" @pagination-change-page="getResults" class="mt-5 mx-auto " ></pagination>-->
                        </div>
<!--                        <form>-->
<!--                            <div class="form-group">-->
<!--                                <label for="equipement_id" class="col-form-label">Numero Equipement</label>-->
<!--                                <input type="text" class="form-control" id="equipement_id" disabled v-model="Facture.equipement_id">-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="equipement_nom" class="col-form-label">Nom Equipement</label>-->
<!--                                <input type="text" class="form-control" id="equipement_nom" disabled v-model="Facture.nom_equipement">-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="type" class="col-form-label">Valeur</label>-->
<!--                                <input type="text" class="form-control" id="type" v-model="Facture.cout" disabled>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="montant" class="col-form-label">Versement</label>-->
<!--                                <input type="text" class="form-control" id="montant" v-model="Facture.montant" disabled>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="reste" class="col-form-label">Reste</label>-->
<!--                                <input type="text" class="form-control" id="reste" v-model="Facture.reste" disabled>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="statut" class="col-form-label">Statut</label>-->
<!--                                <input type="text" class="form-control" id="statut" v-model="Facture.statut" disabled>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="description" class="col-form-label">Description</label>-->
<!--                                <textarea class="form-control" name="description" disabled id="description" cols="30" rows="10" v-model="Facture.description"></textarea>-->
<!--                            </div>-->
<!--                        </form>-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
<!--                        <button type="button" class="btn btn-danger" data-dismiss="modal" @click.prevent="annulerVente" v-show="Facture.statut=='en cours'">Annuler</button>-->
<!--                        <button type="button" class="btn btn-success" data-dismiss="modal" @click.prevent="confirmerVente" v-show="Facture.statut=='en cours'">Confirmer</button>-->
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import pagination from 'laravel-vue-pagination';
    export default {
        name: "GestionVentes",
        components:{
            pagination,
        },
        data(){
            return{

            }
        },
        mounted(){
            this.$store.dispatch('allVentesFromDatabase');
        },
        methods:{
            getResults(page=1){
                this.$store.dispatch('getVentesResultsFromDataBase',page)
            },
            updateVente(vente){
                this.$store.commit('UPDATE_FACTURE',vente)
            },
            annulerVente(vente){
                this.$store.dispatch('annulerVente',vente)
            },
            confirmerVente(vente){
                this.$store.dispatch('confirmVente',vente)
            },
            detailsFacture(vente){
                console.log(vente)
                this.$store.dispatch('allVentesFromFacture',vente)
            }
        },
        computed:{
            liste_ventes(){
                return this.$store.getters.getVenteList;
            },
            Facture(){
                return this.$store.getters.getFacture;
            },
            VentesFacture(){
                console.log('ventes')
                console.log(this.$store.getters.getVentesFacture)
                return this.$store.getters.getVentesFacture;

            },
            Ventes(){
                return this.$store.getters.getVente;
            }

        },

    }
</script>

<style scoped>

</style>