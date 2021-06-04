<template>
    <div class="roles index page-content">
        <div>
            <h4 class="mb-3 mb-md-0">Gestion des roles</h4>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Liste des Roles</h6>
                        <p class="" style="float: right"><a class="btn btn-success pull-right" href="" data-target=".roleModal" data-toggle="modal"> Nouveau Role</a>
                        </p>
                        <!--                      <p class="card-description">Add class <code>.table</code></p>-->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ROLE NAME</th>
                                    <th>GUARD NAME</th>
                                    <th colspan="1">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="role in roles">
                                    <td>{{role.id}}</td>
                                    <td>{{role.name}}</td>
                                    <td>{{role.guard_name}}</td>
                                    <td><a class="mr-2" href="" title="Show" style="" > <span><feather-icon type="eye" stroke="blue"></feather-icon></span></a>
                                    <a class="mx-2"  href="" style="" title="edit" ><span><feather-icon type="edit" stroke="green"></feather-icon></span></a>
                                    <a class="mx-2" href="" title="delete" style="color: red" data-method="DELETE"><span><feather-icon type="trash-2" stroke="red"></feather-icon></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade roleModal" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nouveau Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Name
                                            <input type="text" class="form-control" name="name" placeholder="Enter role name" value=""></label>
                                    </div>
                                </div><!-- Col -->

                            </div><!-- Row -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Permission:</strong>
                                    <br/>
                                    <div v-for="permission in permissions">
                                        <label ><input type="checkbox" class="name" value="permission.id" > <strong>{{permission.name}}</strong></label>
                                    </div>
                                    <br/>
                                </div>
                            </div>
                            <!--                            <button type="submit" class="btn btn-primary submit" @click.prevent="saveRole">Create Role</button>-->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal"
                                @click.prevent="saveRole">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
    import {Activity} from 'vue-feather-icon'
    export default {
        name: "GestionRoles",
        ActivityIcon: Activity,
        created(){
            this.$store.dispatch('allRolesFromDatabase');
            this.$store.dispatch('allPermissionsFromDatabase')
        },
        methods:{
            saveRole(){
                console.log('RoleSAVED')
            }
        },
        computed:{
            roles(){
                return this.$store.getters.getRoles;
            },
            permissions(){
                return this.$store.getters.getPermissions
            }
        }
    }
</script>

<style scoped>

</style>