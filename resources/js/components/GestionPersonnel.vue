<template>
    <div  class="page-content col-12 col-md-12">
        <div>
            <h4 class="mb-3 mb-md-0">Gestion du personnel</h4>
        </div>
        <br>
        <div class="row" >
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">LISTE DU PERSONNEL</h6>
                        <!--                        <p class="card-description">Add class <code>.table</code></p>-->
                        <div class="table-responsive">
                            <table class="table " style="text-align:center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Poste</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="people in peoples">
                                    <th>{{people.id}}</th>
                                    <td>{{people.nom}}</td>
                                    <td>{{people.poste}} </td>
                                    <td>
                                        <div class="px-0" style="text-align:center">
                                            <a class="mx-2 " href="#" title="Supprimer"
                                               @click.prevent="licencier(people)">
                                                <feather-icon type="trash-2" stroke="red"></feather-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="font-size:30px;font-weight:bold; color:red;background-color:#f9fafb">
                                    <td> </td>
                                    <td>Total : </td>
                                    <td>{{(totalSalaires).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}} </td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "GestionPersonnel",
        methods:{},
        created(){
           this.$store.dispatch('allWorkersFromDatabase');
        },
        computed:{
            peoples(){
                return this.$store.getters('getAllWorkers');
            }
        }
    }
</script>

<style scoped>

</style>