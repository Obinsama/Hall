class Vente {
    constructor() {
        this.Equipement = {
            id: '',
            nom_equipement: 'machette',
            type: 'outil',
            valeur: 2000,
            etat: 'neuf',
            description: 'aaaaaaa',
            caracteristiques: 'aaaabbb',
            duree_de_vie: 365,
            carted: false
        };
        this.cout = 25000;
        this.montant = 0;
        this.reste = 0;
        this.statut = 'en cours';
    };

    update(data) {
        this.Equipement.id = data.Equipement.id;
        this.Equipement.nom_equipement = data.Equipement.nom_equipement;
        this.Equipement.type = data.Equipement.type;
        this.Equipement.valeur = data.Equipement.valeur;
        this.Equipement.etat = data.Equipement.etat;
        this.Equipement.description = data.Equipement.description;
        this.Equipement.caracteristiques = data.Equipement.caracteristiques;
        this.Equipement.duree_de_vie = data.Equipement.duree_de_vie;
        this.Equipement.carted = true;
        this.cout = data.cout;
        this.montant = data.montant;
        this.reste = data.reste;
        this.statut = data.statut;
    }
}

export default {

    state: {
        date: new Date(),
        ListePersonnel:[{}],
        ListeCompletePersonnel:[],
        ListeRoles:[],
        ListePermissions:[],
        Personnel:{
            photo:'',
            email:'radius@radius.com',
            nom:'Nguiamba',
            password:'Obinsama',
            prenom:'Christian',
            date_naissance:'',
            salarie:false,
            salaire:'200000',
            poste:'Manager',
            cni:'65518521',
            date_embauche:'',
            duree_contrat:'200',
            telephone:'693568612',
            api_token:'$2y$10$hV8QWCz5TFzEgnaGdYHuzuKhJvHmszgC6hH/BpghbT1vi69/hjorC',
            roles:''

        },
        user:{
            photo:'',
            email:'',
            nom:'',
            password:'',
            prenom:'',
            date_naissance:'',
            salarie:'',
            salaire:'',
            poste:'',
            cni:'',
            date_embauche:'',
            duree_contrat:'',
            telephone:'',
            api_token:'',
            roles:''
        },
        budget:[],
        depenses:[],
        messages:[],
        message:0,
        unread:0,
        ListeEquipements: {},
        role:{
            name:'',
            permissions:[]
        },
        permission:{
            name:''
        },
        ListeVentes: {},
        ListeCommandes: {},
        ListePrestations: {},
        ListeFactures: {},
        Equipement: {
            nom_equipement: 'machette',
            type: 'outil',
            valeur: 2000,
            etat: 'neuf',
            description: 'aaaaaaa',
            caracteristiques: 'aaaabbb',
            duree_de_vie: 365,
            carted: false
        },
        Vente: {
            Equipements: [],
            cout: 0,
            montant: 0,
            reste: 0,
            statut: 'en cours'
        },
        Panier: [],
        // Commande: {},
        // Prestation: {},
        FactureData: {},
        Facture: {
            service_id: '',
            Vente: {
                Equipements: [{
                    equipement_id: 1,
                    nom_equipement: 'machette',
                    type: 'outil',
                    valeur: 2000,
                    etat: 'neuf',
                    description: 'aaaaaaa',
                    caracteristiques: 'aaaabbb',
                    duree_de_vie: 365
                }],
                cout: 25000,
                montant: 0,
                reste: 0,
                description: 'rien a dire',
                statut: 'en cours'
            },
            ref: 'FA-006M65565',
            date_facturation: '',
            date_limite: '',
            statut: 'en cours',
            fichier: '/storage/facture.pdf',
            // date.setDate(date.getDate()+7).toISOString().split('T')[0],
        }
    },
    getters: {
        getCategoryFormGetters(state) { //take parameter state
            return state.category
        },
        getEquipement(state) {
            return state.Equipement;
        },
        getEquipementList(state) {
            return state.ListeEquipements;
        },
        getVente(state) {
            return state.Vente;
        },
        getVenteList(state) {
            return state.ListeVentes;
        },
        getFacture(state) {
            return state.Facture;
        },
        getCommande(state) {
            return state.Commande;
        },
        getPrestation(state) {
            return state.Prestation;
        },
        getValeurAchats(state) {
            let somme = 0;
            state.Vente.Equipements.forEach(function (element) {
                somme = somme + parseInt(element.valeur);
            });

            return somme
        },
        getVentesFacture(state) {
            return state.Vente.Equipements
        },
        getFactureData(state) {
            return state.FactureData;
        },
        getAllWorkers(state){
            return state.ListeCompletePersonnel;
        },
        getWorkers(state){
            return state.ListePersonnel;
        },
        getPersonnel(state){
            return state.Personnel;
        },
        getTotalSalaires(state){
            let somme = 0;
            state.ListePersonnel.data.forEach(function (element) {
                somme = somme + parseInt(element.salaire);
            });

            return somme
        },
        getRoles(state){
            return state.ListeRoles;
        },
        getRole(state){
            return state.role;
        },
        getPermissions(state){
            return state.ListePermissions;
        },
        getPermission(state){
            return state.permission
        },
        getUser(state){
            return state.user;
        },
        getRevenu(state){
            let montant=0;
            if(state.ListeVentes.data.length!=0){
                state.ListeVentes.data.forEach(function (element) {
                montant = montant + parseInt(element.montant);
            });
            }
            return montant;
        },
        getMasseSalariale(state){
            let total_salaires=0;
            state.ListeCompletePersonnel.forEach(function (element) {
                total_salaires = total_salaires + parseInt(element.salaire);
            });
            return total_salaires
        },
        getDepenses(state){
            return state.depenses;
        },
        getBudget(state){
            return state.budget;
        },
        getMessages(state){
            return state.messages;
        },
        getUnread(state){
            var nbr=0;
            state.messages.forEach(function (obj) {
                if(obj.status==10){
                    nbr=nbr+1;
                }
            });
            return nbr;
        },
        getMessage(state){
            return state.message;
        }
    },

    actions: {
        allRolesFromDatabase(context){
            axios.get("/roles")
                .then((response) => {
                    // console.log(response.data.data);
                    context.commit("LOAD_ROLES_LIST", response.data.data) //categories will be run from mutation
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        allPermissionsFromDatabase(context){
            axios.get("/roles/create")
                .then((response) => {
                    // console.log(response.data);
                    context.commit("LOAD_PERMISSION_LIST", response.data) //categories will be run from mutation
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        allWorkersFromDatabase(context){
            axios.get("/users")
                .then((response) => {
                     console.log('allworkers',response);
                    context.commit("LOAD_FULL_WORKER_LIST", response.data);
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        listWorkersFromDatabase(context,data){
            // console.log('search',data);
            axios.post('/users/list',data).then((response) => {
                console.log('listworker',response);
                context.commit("LOAD_WORKER_LIST", response.data)
                console.log('listworker',response)
            }, (error) => {
                console.log(error)
            });
        },
        getWorkersResultsFromDataBase(context, data) {
            axios.post('/users/list?page=' + data).then((response) => {
                console.log(response.data);
                context.commit("LOAD_WORKER_LIST", response.data) //categories will be run from mutation
            }, (error) => {
                console.log(error)
            });
        },
        allEquipementFromDatabase(context) {
            axios.get("/equipements")
                .then((response) => {
                    response.data.data.forEach(function (element) {
                        element.carted = false;
                    });
                    context.commit("LOAD_EQUIPEMENT_LIST", response.data) //categories will be run from mutation
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        allCommandesFromDatabase(context) {
            axios.get("/commandes")
                .then((response) => {
                    context.commit("LOAD_COMMANDE_LIST", response.data) //categories will be run from mutation
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        allVentesFromDatabase(context) {
            axios.get("/ventes")
                .then((response) => {
                    context.commit("LOAD_VENTE_LIST", response.data) ;//categories will be run from mutation
                     console.log('liste des ventes',response.data.data);
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        tenVentesFromDatabase(context) {
            axios.get("/ventes/ten")
                .then((response) => {
                    context.commit("LOAD_VENTE_LIST", response.data) //categories will be run from mutation
                    // console.log(response);
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        allPrestationsFromDatabase(context) {
            axios.get("/prestations")
                .then((response) => {
                    context.commit("LOAD_PRESTATION_LIST", response.data) //categories will be run from mutation
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        allVentesFromFacture(context, data) {
            // console.log(data)
            axios.get("/factures/details/" + data.id, data)
                .then((response) => {
                    context.commit('UPDATE_VENTE', response.data);
                    // context.commit("LOAD_PRESTATION_LIST", response.data) //categories will be run from mutation
                    // console.log('ventes',response);
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        allFactureData(context, data) {
            axios.get("/factures/data/" + data, data)
                .then((response) => {
                    // console.log('facture', response.data)
                    context.commit('UPDATE_FACTURE_DATA', response.data);
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        AllDepensesFromDatabase(context){
            axios.get("/depense")
                .then((response) => {
                    // console.log('depense', response.data)
                    context.commit('UPDATE_DEPENSES_DATA', response.data);
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        AllBudgetFromDatabase(context){
            axios.get("/budget")
                .then((response) => {
                    // console.log('budget', response.data)
                    context.commit('UPDATE_BUDGET_DATA', response.data);
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        allMessagesFromDatabase(context){
            axios.get("/message")
                .then((response) => {
                    // console.log('messages', response.data)
                    context.commit('UPDATE_MESSAGES_DATA', response.data);
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        logout(){
            axios.post("/logout")
                .then((response) => {
                    // console.log('response', response)
                    windows.location.href('/home')
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        makeReaded(context, data){

            axios.patch("/message/"+data.id,data)
                .then((response) => {
                    console.log('massageUpdated', response.data);
                    // context.commit('UPDATE_MESSAGES_DATA', response.data);
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        getConnectedUser(context){
            // axios.get("/users/connected")
            //     .then((response) => {
            //         console.log('response', response)
            //         context.commit('UPDATE_USER', response);
            //     })
            //     .catch(() => {
            //         console.log("Error........")
            //     })

            axios.get('api/user',{
                headers: {
                    'Authorization': `Basic $2y$10$hV8QWCz5TFzEgnaGdYHuzuKhJvHmszgC6hH/BpghbT1vi69/hjorC`
                }
            }).then(response => {
                console.log(response.body);
            })
        },
        saveEquipementData(context, data) {
            axios.post('/equipements', data).then((response) => {
                // console.log(response);
            }, (error) => {
                console.log(error)
            });
        },
        saveSingleWorker(context, data) {
            axios.post('/users', data).then((response) => {
                console.log('role',response);
            }, (error) => {
                console.log(error)
            });
        },
        saveRole(context, data) {
            axios.post('/roles', data).then((response) => {
                console.log('role',response);
            }, (error) => {
                console.log(error)
            });
        },
        savePermission(context, data) {
            axios.post('/roles/permission', data).then((response) => {
                console.log('role',response);
            }, (error) => {
                console.log(error)
            });
        },
        saveCommandeData(context, data) {
            axios.post('/commande', data).then((response) => {
            }, (error) => {
                console.log(error)
            });
        },
        saveVenteData(context, data) {
            axios.post('/ventes', data).then((response) => {
                console.log(response);
                // context.dispatch('saveFactureData',response);
                context.commit('CLEAR_CART')
                context.dispatch('allEquipementFromDatabase')
            }, (error) => {
                console.log(error)
            });
        },
        saveFactureData(context, data) {
            axios.post('/factures', data).then((response) => {
                console.log('facture request')
                console.log(response)
                context.dispatch('saveVenteData', response)
            }, (error) => {
                console.log(error)
            });
        },
        savePrestationData(context, data) {
            //context.commit("EDIT_RESA", data); //categories will be run from mutation
            axios.post('/prestation', data).then((response) => {
                // context.commit("EDIT_EQUIPEMENT_LIST", response.data);//categories will be run from mutation
                // this.reservations = response.data;
            }, (error) => {
                console.log(error)
            });
        },
        saveBudget(context,data){
            axios.post('/budget', data).then((response) => {
            }, (error) => {
                console.log(error)
            });
        },
        saveRecette(context,data){
            axios.post('/recette', data).then((response) => {
            }, (error) => {
                console.log(error)
            });
        },
        saveDepense(context,data){
            axios.post('/depense', data).then((response) => {
            }, (error) => {
                console.log(error)
            });
        },
        updateEquipementData(context, data) {
            axios.put('/equipements/' + data.id, data).then((response) => {
            }, (error) => {
                console.log(error)
            });
        },
        updateSingleWorkerData(context, data) {
            axios.put('/users/' + data.id, data).then((response) => {
            }, (error) => {
                console.log(error)
            });
        },
        annulerVente(context, data) {
            axios.delete('/factures/' + data.id, data).then((response) => {
                // this.reservations = response.data;
                context.dispatch("getVentesResultsFromDataBase") //categories will be run from mutation
            }, (error) => {
                console.log(error)
            });
        },
        confirmVente(context, data) {
            axios.put('/factures/' + data.id, data).then((response) => {
                context.dispatch("getVentesResultsFromDataBase") //categories will be run from mutation
            }, (error) => {
                console.log(error)
            });
        },
        getEquipementResultsFromDataBase(context, data) {
            axios.get('/equipements?page=' + data).then((response) => {
                response.data.data.forEach(function (element) {
                    element.carted = false
                });
                console.log(response.data);
                context.commit("LOAD_EQUIPEMENT_LIST", response.data) //categories will be run from mutation
            }, (error) => {
                console.log(error)
            });
        },
        getVentesResultsFromDataBase(context, data) {
            axios.get('/ventes?page=' + data).then((response) => {
                // this.reservations = response.data;
                context.commit("LOAD_VENTE_LIST", response.data) //categories will be run from mutation
            }, (error) => {
                console.log(error)
            });
        },
        searchWorkers(context,data){
            // console.log('search',data);
            axios.post('/users/search',data).then((response) => {
                context.commit("LOAD_WORKER_LIST", response.data) //categories will be run from mutation

                // console.log('worker',response)
            }, (error) => {
                console.log(error)
            });
        },

        test(){
            const options = {
                headers: {'X-Custom-Header': 'value'}
            };

            axios.post('/save', { a: 10 }, options);
        }
    },

    mutations: {
        EDIT_EQUIPEMENT(state, data) {
            return state.Equipement = data;
        },
        EDIT_COMMANDE(state, data) {
            return state.Commande = data;
        },
        EDIT_FACTURE(state, data) {
            return state.Facture = data;
        },
        EDIT_VENTE(state, data) {
            return state.Vente = data;
        },
        EDIT_PRESTATION(state, data) {
            return state.Prestation = data;
        },
        EDIT_EQUIPEMENT_LIST(state, data) {
            return state.ListeEquipements.data.push(data);
        },
        REMOVE_FROM_EQUIPEMENT_LIST(state, data) {
            state.ListeEquipements.data.filter(function (obj) {
                return obj.id == data.id;
            });
        },
        UPDATE_MESSAGE(state,data){
            state.message=data;
        },
        UPDATE_MESSAGES_DATA(state,data){
            state.messages=data;
        },
        UPDATE_BUDGET_DATA(state,data){
            state.budget=data;
        },
        UPDATE_DEPENSES_DATA(state,data){
            state.depenses=data;
        },
        UPDATE_VENTE(state, data) {
            state.Vente.Equipements = data;
        },
        UPDATE_PERSONNEL_PICTURE(state,data){
            state.Personnel.photo=data;
        },
        LOAD_EQUIPEMENT_LIST(state, data) {
            return state.ListeEquipements = data;
        },
        LOAD_COMMANDE_LIST(state, data) {
            return state.ListeCommandes = data;
        },
        LOAD_VENTE_LIST(state, data) {
            return state.ListeVentes = data;
        },
        LOAD_WORKER_LIST(state, data) {
            return state.ListePersonnel = data;
        },
        LOAD_FULL_WORKER_LIST(state, data) {
            return state.ListeCompletePersonnel = data;
        },
        LOAD_PERMISSION_LIST(state, data) {
            return state.ListePermissions = data;
        },
        LOAD_PRESTATION_LIST(state, data) {
            return state.ListePrestations = data;
        },
        LOAD_ROLES_LIST(state, data) {
            return state.ListeRoles = data;
        },
        CLEAR_CART(state) {
            return state.Vente.Equipements = [];
        },
        CLEAR_ITEM(state) {
            return state.Equipement = {};
        },
        CLEAR_PERSONNEL(state) {
            return state.Personnel = {
                photo:'',
                email:'',
                nom:'',
                password:'',
                prenom:'',
                date_naissance:'',
                salarie:false,
                salaire:'',
                poste:'',
                cni:'',
                date_embauche:'',
                duree_contrat:'',
                telephone:'',
                api_token:'$2y$10$hV8QWCz5TFzEgnaGdYHuzuKhJvHmszgC6hH/BpghbT1vi69/hjorC',
                roles:''
            };
        },
        UPDATE_USER(state,data){
            state.user=data;
        },
        CLEAR_USER(state){
            state.user={
                photo:'',
                email:'',
                nom:'',
                password:'',
                prenom:'',
                date_naissance:'',
                salarie:false,
                salaire:'',
                poste:'',
                cni:'',
                date_embauche:'',
                duree_contrat:'',
                telephone:'',
                api_token:'',
                roles:''
            };
        },
        RELOAD_PERSONNEL(state,data) {
            // console.log('personnel',data);
            return state.Personnel = data;
        },
        ADD_TO_CART(state, data) {
            let check=false;
            for (var i = 0; i < state.Vente.Equipements.length; i++) {
                if (state.Vente.Equipements[i].id == data.id) {
                    check = true;
                    break;
                }
            }
            if (!check) {
                state.Vente.Equipements.push(data);
                state.Vente.cout += data.valeur;
            }

            return state.Vente;
        },
        UPDATE_FACTURE(state, data) {
            state.Facture.service_id = data.service_id;
            state.Facture = data;
        },
        UPDATE_FACTURE_DATA(state, data) {
            state.FactureData = data;
        },
        // ADD_TO_CART(state,data){
        //     let x=new Vente();
        //     x.update(data);
        //     state.Panier.push(x);
        //     // state.ListeEquipements.data.pop(x.Equipement);
        // },
        REMOVE_FROM_CART(state, data) {
            state.Vente.Equipements=state.Vente.Equipements.filter(function (obj) {
                return obj.id != data.id;
            });
            state.Vente.cout-=data.valeur
        },

    }
}