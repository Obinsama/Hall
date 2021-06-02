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
        ListeEquipements: {},
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
        Commande: {},
        Prestation: {},
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
        }
    },
    actions: {
        allWorkersFromDatabase(){
            axios.get("/users")
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
            console.log(data)
            axios.get("/factures/details/" + data.id, data)
                .then((response) => {
                    context.commit('UPDATE_VENTE', response.data);
                    // context.commit("LOAD_PRESTATION_LIST", response.data) //categories will be run from mutation
                    console.log(response);
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        allFactureData(context, data) {
            axios.get("/factures/data/" + data, data)
                .then((response) => {
                    console.log('response', response.data)
                    context.commit('UPDATE_FACTURE_DATA', response.data);
                })
                .catch(() => {
                    console.log("Error........")
                })
        },
        saveEquipementData(context, data) {
            axios.post('/equipements', data).then((response) => {
                // console.log(response);
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
        updateEquipementData(context, data) {
            axios.put('/equipements/' + data.id, data).then((response) => {
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
        UPDATE_VENTE(state, data) {
            state.Vente.Equipements = data;
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
        LOAD_PRESTATION_LIST(state, data) {
            return state.ListePrestations = data;
        },
        CLEAR_CART(state) {
            return state.Vente.Equipements = [];
        },
        CLEAR_ITEM(state) {
            return state.Equipement = {};
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
        },

    }
}