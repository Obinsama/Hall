<template>

    <div class="sidebar-body ps ps--active-y">
        <ul class="nav">
<!--            TODO Gerer les autorisations par utilisateurs et roles-->
            <li class="nav-item nav-category">Administration</li>
            <li class="nav-item " :class="{active: menu==='/'}" >
                <router-link to="/" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Tableau de bord</span>
                </router-link>
            </li>
            <li class="nav-item " :class="{active: menu==='/personnel'}" >
                <router-link to="/personnel" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Gestion du personnel</span>
                </router-link>
            </li>
            <li class="nav-item " :class="{active: menu==='/roles'}" >
                <router-link to="/roles" class="nav-link">
                    <i class="link-icon" data-feather="award"></i>
                    <span class="link-title">Gestion des roles</span>
                </router-link>
            </li>
            <li class="nav-item " :class="{active: menu==='/budget'}" >
                <router-link to="/budget" class="nav-link">
                    <i class="link-icon" data-feather="dollar-sign"></i>
                    <span class="link-title">Gestion du budget</span>
                </router-link>
            </li>

            <li class="nav-item nav-category">Services</li>
            <li class="nav-item " :class="{active: menu==='/ventes'}" >
                <router-link to="/ventes" class="nav-link">
                    <i class="link-icon" data-feather="shopping-cart"></i>
                    <span class="link-title">Gestion Encheres</span>
                </router-link>
            </li>
            <li class="nav-item "  :class="{active: menu==='/equipements'}" >
                <router-link to="/equipements" class="nav-link">
                    <i class="link-icon" data-feather="truck"></i>
                    <span class="link-title">Gestion Equipements</span>
                </router-link>
            </li>
            <li class="nav-item " :class="{active: menu==='/prestations'}" >
                <router-link to="/prestations" class="nav-link">
                    <i class="link-icon" data-feather="package"></i>
                    <span class="link-title">Gestion Prestations</span>
                </router-link>
            </li>
            <li class="nav-item " :class="{active: menu==='/commandes'}">
                <router-link to="/commandes" class="nav-link">
                    <i class="link-icon" data-feather="clipboard"></i>
                    <span class="link-title">Gestion Commandes</span>
                </router-link>
            </li>
        </ul>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 592px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 500px;"></div></div></div>
</template>

<script>
    export default {
        name: "MenuTemplate",
        props:{
            route: String,
        },
        data(){
            return {

            };
        },
        methods:{
            changeMenu(value){
                this.$store.commit('CHANGE_MENU',value);
            }
        },
        computed:{
            menu(){
                return this.$route.path;
            }
        }
    }
</script>

<style scoped>

</style>