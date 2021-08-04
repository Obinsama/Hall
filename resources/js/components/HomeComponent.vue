<template>
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Tableau de bord</h4>
            </div>
            <!--            <div class="d-flex align-items-center flex-wrap text-nowrap">-->
            <!--                <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">-->
            <!--                    <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>-->
            <!--                    <input type="text" class="form-control">-->
            <!--                </div>-->
            <!--                <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">-->
            <!--                    <i class="btn-icon-prepend" data-feather="download"></i>-->
            <!--                    Import-->
            <!--                </button>-->
            <!--                <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">-->
            <!--                    <i class="btn-icon-prepend" data-feather="printer"></i>-->
            <!--                    Print-->
            <!--                </button>-->
            <!--                <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">-->
            <!--                    <i class="btn-icon-prepend" data-feather="download-cloud"></i>-->
            <!--                    Download Report-->
            <!--                </button>-->
            <!--            </div>-->
        </div>

        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
                <div class="row flex-grow">
<!--                    TODO Configurer le plot-->
                    <first-min-review></first-min-review>
                    <!--                    <div class="col-md-4 grid-margin stretch-card">-->
                    <!--                        <div class="card">-->
                    <!--                            <div class="card-body">-->
                    <!--                                <div class="d-flex justify-content-between align-items-baseline">-->
                    <!--                                    <h6 class="card-title mb-0">New Orders</h6>-->
                    <!--                                    <div class="dropdown mb-2">-->
                    <!--                                        <button class="btn p-0" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                    <!--                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>-->
                    <!--                                        </button>-->
                    <!--                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">-->
                    <!--                                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>-->
                    <!--                                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>-->
                    <!--                                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>-->
                    <!--                                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>-->
                    <!--                                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="row">-->
                    <!--                                    <div class="col-6 col-md-12 col-xl-5">-->
                    <!--                                        <h3 class="mb-2">35,084</h3>-->
                    <!--                                        <div class="d-flex align-items-baseline">-->
                    <!--                                            <p class="text-danger">-->
                    <!--                                                <span>-2.8%</span>-->
                    <!--                                                <i data-feather="arrow-down" class="icon-sm mb-1"></i>-->
                    <!--                                            </p>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="col-6 col-md-12 col-xl-7">-->
                    <!--                                        <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="col-md-4 grid-margin stretch-card">-->
                    <!--                        <div class="card">-->
                    <!--                            <div class="card-body">-->
                    <!--                                <div class="d-flex justify-content-between align-items-baseline">-->
                    <!--                                    <h6 class="card-title mb-0">Growth</h6>-->
                    <!--                                    <div class="dropdown mb-2">-->
                    <!--                                        <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                    <!--                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>-->
                    <!--                                        </button>-->
                    <!--                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">-->
                    <!--                                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>-->
                    <!--                                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>-->
                    <!--                                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>-->
                    <!--                                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>-->
                    <!--                                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="row">-->
                    <!--                                    <div class="col-6 col-md-12 col-xl-5">-->
                    <!--                                        <h3 class="mb-2">89.87%</h3>-->
                    <!--                                        <div class="d-flex align-items-baseline">-->
                    <!--                                            <p class="text-success">-->
                    <!--                                                <span>+2.8%</span>-->
                    <!--                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>-->
                    <!--                                            </p>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                    <div class="col-6 col-md-12 col-xl-7">-->
                    <!--                                        <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
            </div>
        </div> <!-- row -->

        <!--        <div class="row">-->
        <!--            <div class="col-12 col-xl-12 grid-margin stretch-card">-->
        <!--                <div class="card overflow-hidden">-->
        <!--                    <div class="card-body">-->
        <!--                        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">-->
        <!--                            <h6 class="card-title mb-0">Revenue</h6>-->
        <!--                            <div class="dropdown">-->
        <!--                                <button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
        <!--                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>-->
        <!--                                </button>-->
        <!--                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">-->
        <!--                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>-->
        <!--                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>-->
        <!--                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>-->
        <!--                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>-->
        <!--                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="row align-items-start mb-2">-->
        <!--                            <div class="col-md-7">-->
        <!--                                <p class="text-muted tx-13 mb-3 mb-md-0">Revenue is the income that a business has from its normal business activities, usually from the sale of goods and services to customers.</p>-->
        <!--                            </div>-->
        <!--                            <div class="col-md-5 d-flex justify-content-md-end">-->
        <!--                                <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">-->
        <!--                                    <button type="button" class="btn btn-outline-primary">Today</button>-->
        <!--                                    <button type="button" class="btn btn-outline-primary d-none d-md-block">Week</button>-->
        <!--                                    <button type="button" class="btn btn-primary">Month</button>-->
        <!--                                    <button type="button" class="btn btn-outline-primary">Year</button>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="flot-wrapper">-->
        <!--                            <div id="flotChart1" class="flot-chart"></div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div> &lt;!&ndash; row &ndash;&gt;-->

        <div class="row">
            <div class="col-6 col-xl-6 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h6 class="card-title">Personnel</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <!--                                <tr>-->
                                <!--                                    <td>Effectif du Personnel :</td>-->
                                <!--                                    <td>{{liste_personnel.length}}</td>-->
                                <!--                                </tr>-->
                                <tr>
                                    <td>Personnel Permanents :</td>
                                    <td>{{liste_personnel.length}}</td>
                                    <td>{{(masseSalariale).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}}</td>
                                </tr>
                                <tr>
                                    <td>Personnel Temporaire :</td>
                                    <td>0</td>
                                    <td>{{(0).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Effectif du Personnel :</strong></td>
                                    <td>{{liste_personnel.length}}</td>
                                    <td>{{(masseSalariale).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-6 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h6 class="card-title">Recapitulatif</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Total des Ventes :</td>
                                    <td class="col-md-2">{{liste_ventes.length}}</td>
                                    <td>{{(revenu).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}}</td>
                                </tr>
                                <tr>
                                    <td>Total des Prestations :</td>
                                    <td class="col-md-2">0</td>
                                    <td>0 FCFA</td>
                                </tr>
                                <tr>
                                    <td><strong>Total Revenu :</strong></td>
                                    <td>{{(revenu).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}}</td>
                                    <td></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->


        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h6 class="card-title">5 Dernieres ventes</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                </thead>
                                <tbody>
                                <tr v-for="vente in liste_ventes.slice(0,5)">
                                    <td>{{vente.id}}</td>
                                    <td>
                                        <router-link class=" mx-2" href="#" title="Voir Facture" :to="'/impression/'+vente.id"  v-show="vente.statut=='termine'"> {{vente.ref}}</router-link>
                                    </td>
                                    <td>{{(vente.montant).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}}</td>
                                    <td>{{vente.date}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

    </div>
</template>

<script>
    export default {
        name: "HomeComponent",
        data(){
            return{

            }
        },
        created(){
            this.$store.dispatch('allVentesFromDatabase');
            this.$store.dispatch('allWorkersFromDatabase');
        },
        methods:{

        },
        computed:{
            liste_ventes(){
                var liste=this.$store.getters.getVenteList;
                if (liste.data){
                    return liste.data;
                }
                else{
                    return '';
                }

            },
            ventes(){
                return this.$store.getters.getVente;
            },
            revenu(){
                // return this.$store.getters.getRevenu;
               return   400000;
            },
            liste_personnel(){
                return this.$store.getters.getAllWorkers;
            },
            masseSalariale(){
                return this.$store.getters.getMasseSalariale;
            }
        },
    }
</script>

<style scoped>

</style>