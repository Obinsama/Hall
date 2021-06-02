<template>

<div>

    <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#exampleModal" @click="clearItem" data-whatever="@mdo">Ajout Equipement</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Infos Equipement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nom" class="col-form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" v-model="Equipement.nom_equipement">
                        </div>
                        <div class="form-group">
                            <label for="type" class="col-form-label">Type</label>
                            <input type="text" class="form-control" id="type" v-model="Equipement.type">
                        </div>
                        <div class="form-group">
                            <label for="valeur" class="col-form-label">Valeur</label>
                            <input type="text" class="form-control" id="valeur" v-model="Equipement.valeur">
                        </div>
                        <div class="form-group">
                            <label for="etat" class="col-form-label">Etat</label>
                            <input type="text" class="form-control" id="etat" v-model="Equipement.etat">
                        </div>
                        <div class="form-group">
                            <label for="lifetime" class="col-form-label">Durée de vie (en mois)</label>
                            <input type="text" class="form-control" id="lifetime" v-model="Equipement.duree_de_vie">
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10" v-model="Equipement.description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="caracteristiques" class="col-form-label">Caracteristiques</label>
                            <textarea class="form-control" name="caracteristiques" id="caracteristiques" cols="30" rows="10" v-model="Equipement.caracteristiques"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal" @click.prevent="saveEquipement">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>



</div>
</template>

<script>
    export default {
        name: "AjoutEquipement",
        methods:{
            clearItem(){
                this.$store.commit("CLEAR_ITEM")
            },
            saveEquipement(){

                console.log(this.$store.getters.getEquipement.id)
               let equipement=this.$store.getters.getEquipement;
                if(equipement.id){
                    this.$store.dispatch('updateEquipementData',equipement);
                }else{
                    this.$store.dispatch('saveEquipementData',equipement);
                }
                this.$store.dispatch('allEquipementFromDatabase');
            }
        },
        computed:{
            Equipement(){
                return this.$store.getters.getEquipement;
            }
        }
    }
</script>

<style scoped>

</style>