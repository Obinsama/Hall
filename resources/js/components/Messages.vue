<template>
    <div class="page-content msg">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><router-link to="/">Home</router-link></li>
                <li class="breadcrumb-item active" aria-current="page">Messages</li>
            </ol>
        </nav>
        <div class="row inbox-wrapper">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 email-aside border-lg-right">
                                <div class="aside-content">
                                    <div class="aside-header">
                                        <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button"><span class="icon"><i data-feather="chevron-down"></i></span></button><span class="title">Messages</span>
                                        <p class="description" style="margin: 10px 0px">{{user.email}}</p>
                                    </div>
                                    <div class="aside-compose"><router-link class="btn btn-primary btn-block" to="/message/compose">Compose Email</router-link></div>
                                    <div class="aside-nav collapse">
                                        <ul class="nav">
                                            <li class="active"><router-link to="/messages"><span class="icon"><i data-feather="inbox"></i></span>Inbox<span class="badge badge-danger-muted text-white font-weight-bold float-right">{{unread}}</span></router-link></li>

                                        </ul>
                                        <span class="title">Labels</span>
                                        <ul class="nav nav-pills nav-stacked">
                                            <li>
                                                <a href="#"><i data-feather="tag" class="text-warning"></i> Important </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 email-content">
                                <div class="email-inbox-header">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="email-title mb-2 mb-md-0"><span class="icon"><i data-feather="inbox"></i></span> Inbox <span class="new-messages">({{unread}} new messages)</span> </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="email-search">
                                                <div class="input-group input-search">
                                                    <input class="form-control" type="text" placeholder="Search mail..."><span class="input-group-btn">
                                                <button class="btn btn-outline-secondary" type="button"><i data-feather="search"></i></button></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-filters d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="email-filters-left flex-wrap d-none d-md-flex">
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                        <div class="btn-group ml-3">
                                            <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" type="button"> With selected <span class="caret"></span></button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="#">Mark as read</a>
                                                <a class="dropdown-item" href="#">Mark as unread</a><a class="dropdown-item" href="#">Spam</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1 mb-md-0">
                                            <button class="btn btn-outline-primary" type="button">Archive</button>
                                            <button class="btn btn-outline-primary" type="button">Span</button>
                                            <button class="btn btn-outline-primary" type="button">Delete</button>
                                        </div>
                                        <div class="btn-group mb-1 mb-md-0 d-none d-xl-block">
                                            <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" type="button">Order by <span class="caret"></span></button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <a class="dropdown-item" href="#">Date</a>
                                                <a class="dropdown-item" href="#">From</a>
                                                <a class="dropdown-item" href="#">Subject</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Size</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="email-filters-right"><span class="email-pagination-indicator">1-50 of 253</span>
                                        <div class="btn-group email-pagination-nav">
                                            <button class="btn btn-outline-secondary btn-icon" type="button"><i data-feather="chevron-left"></i></button>
                                            <button class="btn btn-outline-secondary btn-icon" type="button"><i data-feather="chevron-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-list">

                                    <div v-for="message in messages">
                                        <div v-if="message.status==10" >
                                            <div class="email-list-item email-list-item--unread">
                                                <div class="email-list-actions">
                                                    <div class="form-check form-check-flat form-check-primary">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input form-control">
                                                        </label>
                                                    </div>
                                                    <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                                                </div>
                                                <router-link :to="'/message/'+message.id" class="email-list-detail" @click.native="updateMessage(message)" >
                                                    <div >
                                                        <span class="from">{{message.receiver}}</span>
                                                        <p class="msg">{{message.message}}</p>
                                                    </div>
                                                    <span class="date"><span class="icon"><i data-feather="paperclip"></i> </span>{{message.created_at}}</span>
                                                </router-link>
                                            </div>
                                        </div>
                                        <div v-else>
                                            <div class="email-list-item" >
                                                <div class="email-list-actions">
                                                    <div class="form-check form-check-flat form-check-primary">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input form-control">
                                                        </label>
                                                    </div>
                                                    <a class="favorite active" href="#"><span><i data-feather="star"></i></span></a>
                                                </div>
                                                <router-link :to="'/message/'+message.id" class="email-list-detail" @click.native="updateMessage(message)">
                                                    <div >
                                                        <span class="from">{{message.receiver}}</span>
                                                        <p class="msg">{{message.message}}</p>
                                                    </div>
                                                    <span class="date">{{message.created_at}}</span>
                                                </router-link>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import feather from 'feather-icons'
    export default {
        name: "Messages",
        data(){
            return{
                info: document.querySelector("meta[name='user']").getAttribute('content')
            }
        },
        created(){
            this.$store.dispatch('allMessagesFromDatabase');
        },
        mounted(){
            feather.replace();
        },
        methods:{
            updateMessage(data){
                this.$store.dispatch('makeReaded',data);
                this.$store.commit('UPDATE_MESSAGE',data);

            }
        },
        computed:{
            user(){
                return JSON.parse(this.info)
            },
            messages(){
                return this.$store.getters.getMessages;
            },
            unread(){
                return this.$store.getters.getUnread;
            },

        }
    }
</script>

<style scoped>

</style>