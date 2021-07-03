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
                        <p class="" style="float: right"><a class="btn btn-success pull-right" href="" data-target=".newModal" data-toggle="modal" @click="createWorker"> Nouvel Employe</a>
                        </p>
                        <div class="col-lg-6">
                            <div class="email-search">
                                <div class="input-group input-search">
                                    <input class="form-control" type="text" placeholder="Search user..." v-model="recherche" @keyup="rechercher"><span class="input-group-btn">
                            <button class="btn btn-outline-secondary  custom-search" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button></span>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table " style="text-align:center">
                                <thead>
                                <tr>
                                    <!--                                    <th>#</th>-->
                                    <th>Utilisateur</th>
                                    <th>Nom</th>
                                    <th>Poste</th>
                                    <th>Salaire</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="people in peoples">
                                    <!--                                    <td>{{people.id}}</td>-->
                                    <td><img :src="people.photo" alt="Photo" width="10px" style="border-radius:50%"></td>
                                    <td>{{people.nom}}</td>
                                    <td>{{people.poste}} </td>
                                    <td>{{(people.salaire).toLocaleString('fr-FR',{style:'currency',currency:'XAF'})}} </td>
                                    <td>
                                        <div class="px-0" style="text-align:center">
                                            <a class="mx-2 " href="#" title="Voir le profil"
                                               @click="editProfile(people)" data-toggle="modal" data-target=".newModal">
                                                <feather-icon type="edit" stroke="blue"></feather-icon>
                                            </a>
                                            <a class="mx-2 " href="#" title="Licencier"
                                               @click.prevent="licencier(people)">
                                                <feather-icon type="trash-2" stroke="red"></feather-icon>
                                            </a>

                                        </div>

                                    </td>
                                </tr>
                                <tr style="font-size:30px;font-weight:bold; color:red;background-color:#f9fafb">
                                    <td> </td>
                                    <td>Masse Salariale : </td>
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
        <div class="modal fade newModal" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nouvel Employe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mx-auto " style="display:flex">
                                        <label class="control-label mx-auto" style="text-align:center" >  <img id="image" class="image center" width="100px" height="100px"  style="border-radius:50%" :src="profile_pic" alt="apercu">
                                            <br> Apercu</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12">Photo de profil
                                            <input type="file" class="form-control" name="photo" @change.prevent="preview"  ></label>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-12">Email
                                            <input type="text" class="form-control" name="email"  placeholder="Entrer l'adresse email" v-model="personnel.email"></label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12">Password
                                            <input type="password" class="form-control" name="password" placeholder="Entrer un mot de passe"  v-model="personnel.password"></label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12">Nom
                                            <input type="text" class="form-control" name="nom" placeholder="Entrer le nom de l'employer"  v-model="personnel.nom"></label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12">Prenom
                                            <input type="text" class="form-control" name="prenom" placeholder="Entrer le prénom" v-model="personnel.prenom"></label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12">Date de naissance
                                            <input id="date_naissance" type="date" class="form-control" name="date_naissance" placeholder="Entrer la date de naissance"  value="personnel.date_naissance" v-model="personnel.date_naissance"></label>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label ">Salarie
                                            <input type="checkbox" class="form-control" name="salarie"   v-model="personnel.salarie" ></label>
                                    </div>
                                    <div class="form-group" v-show="personnel.salarie==true">
                                        <label class="control-label col-md-12">Salaire
                                            <input type="text" class="form-control" name="salaire" placeholder="Entrer le salaire"  v-model="personnel.salaire"></label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12">CNI
                                            <input type="text" class="form-control" name="cni" placeholder="Entrer le numero de CNI"  v-model="personnel.cni"></label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12">Poste
                                            <input type="text" class="form-control" name="poste" placeholder="Entrer le poste d'affectation" v-model="personnel.poste"></label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12">Date d'embauche
                                            <input id="date_embauche" type="date" class="form-control" name="date_embauche" placeholder="Date d'embauche"  v-model="personnel.date_embauche"></label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12">Durée contrat
                                            <input type="number" class="form-control" name="duree_contrat" placeholder="Entrer la duree du contrat"  v-model="personnel.duree_contrat"></label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12">Téléphone
                                            <input type="number" class="form-control" name="telephone" placeholder="Entrer le numero de tel"  v-model="personnel.telephone"></label>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Role:</strong>
                                    <br/>
                                    <select class="form-control" name="roles"  v-model="personnel.roles">
                                        <option v-for="role in Listeroles" :value="role.name">{{role.name}}</option>
                                    </select>
                                    <br/>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                        <button v-show="update==false" type="button" class="btn btn-success" data-dismiss="modal"
                                @click.prevent="saveProfile">Enregistrer</button>
                        <button v-show="update==true" type="button" class="btn btn-success" data-dismiss="modal"
                                @click.prevent="updateProfile">Mettre a jour</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "GestionPersonnel",
        data(){

            return{
                profile_pic:'../assets/images/index.jpg',
                update:false,
                recherche:''


            }
        },
        methods:{
            preview(e){
                var image=document.getElementById('image');
                let comp=e.target;
                var selectedFiles = comp.files;
                let reader = new FileReader();
                reader.addEventListener('load', function(){
                    this.profile_pic=reader.result;
                    image.src=this.profile_pic;
                    this.personnel.photo=this.profile_pic;
                }.bind(this), false);
                reader.readAsDataURL(selectedFiles[0]);
            },
            rechercher(){
                if(this.recherche.length>=1){
                    let data={
                        content:this.recherche
                    };
                    this.$store.dispatch('searchWorkers',data);
                }else if(this.recherche.length==0){
                    this.$store.dispatch('allWorkersFromDatabase');
                }


            },
            saveProfile(){
                let personnel=this.$store.getters.getPersonnel;
                this.$store.dispatch('saveSingleWorker',personnel);
                this.$store.commit('CLEAR_PERSONNEL');
                this.$store.dispatch('allWorkersFromDatabase');
            },
            updateProfile(){
                let personnel=this.$store.getters.getPersonnel;
                this.$store.dispatch('updateSingleWorkerData',personnel);
                this.$store.commit('CLEAR_PERSONNEL');
                this.$store.dispatch('allWorkersFromDatabase');
            },
            editProfile(people){
                var image=document.getElementById('image');
                this.$store.commit('RELOAD_PERSONNEL',people);
                this.update=true;
                image.src=people.photo;
            },
            createWorker(){
                this.update=false;
                this.$store.commit('CLEAR_PERSONNEL');
                var image=document.getElementById('image');
                image.src=this.profile_pic;
            }


        },
        created(){
            this.$store.dispatch('allWorkersFromDatabase');
            this.$store.dispatch('allRolesFromDatabase');
        },
        computed:{

            peoples(){
                    return this.$store.getters.getAllWorkers;
            },
            Listeroles(){
                return this.$store.getters.getRoles;
            },
            personnel(){
                return this.$store.getters.getPersonnel;
            },
            totalSalaires(){
                return this.$store.getters.getTotalSalaires;
            }
        }
    }
</script>

<style scoped>

</style>