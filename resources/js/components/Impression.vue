<template>
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Special pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Invoice</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-3 pl-0">
                                <a href="#" class="noble-ui-logo d-block mt-3">Noble<span>UI</span></a>
                                <p class="mt-1 mb-1"><b>NobleUI Themes</b></p>
                                <p>108,<br> Great Russell St,<br>London, WC1B 3NA.</p>
                                <h5 class="mt-5 mb-2 text-muted">Client  :</h5>
                                <p>Joseph&nbsp;E&nbsp;Carr,<br> 102, 102  Crown Street,<br> London, W3 3PR.</p>
                            </div>
                            <div class="col-lg-4 pr-0">
                                <h4 class="font-weight-medium text-uppercase text-right mt-4 mb-2">Facture</h4>
                                <h6 class="text-right mb-5 pb-4"><code># {{Produits.facture[0].ref}}</code></h6>
                                <p class="text-right mb-1">Total a Payer</p>
                                <h4 class="text-right font-weight-normal">{{ (Produits.facture[0].montant).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}} </h4>
                                <h6 class="mb-0 mt-3 text-right font-weight-normal mb-2"><span class="text-muted">Date Facturation :</span> {{Produits.facture[0].date_facturation}}</h6>
                                <h6 class="text-right font-weight-normal"><span class="text-muted">Date Limite :</span> {{Produits.facture[0].date_limite}}</h6>
                            </div>
                        </div>
                        <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                            <div class="table-responsive w-100">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NOM</th>
                                        <th class="text-right">TYPE</th>
                                        <th class="text-right">VALEUR</th>
                                        <th class="text-right">ETAT</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="text-right" v-for="item in Produits.vente">
                                        <td class="text-left">{{item.id}}</td>
                                        <td class="text-left">{{item.nom_equipement}}</td>
                                        <td>{{item.type}}</td>
                                        <td>{{(item.valeur).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}}</td>
                                        <td>{{item.etat}}</td>
                                    </tr>
                                    <tr class="font-weight-medium" >
                                        <td style="font-size:25px" >TOTAL</td>
                                        <td class="text-right" colspan="4" style="font-size:25px" >{{(Produits.facture[0].montant ).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}} </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="container-fluid w-100">
                            <a href="#" class="btn btn-primary float-right mt-4 ml-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send mr-3 icon-md"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>Envoyer Facture</a>
                            <a href="#" class="btn btn-outline-primary float-right mt-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer mr-2 icon-md"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>Imprimer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Impression",
        created(){
            this.$store.dispatch('allFactureData',this.$route.params.id);
        },
        methods:{

        },
        computed:{
            Produits(){

                // console.log('Produits',this.$store.getters.getFactureData)
                return this.$store.getters.getFactureData;
            }
        },
    }
</script>

<style scoped>

</style>