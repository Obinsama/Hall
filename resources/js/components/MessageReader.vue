<template>
    <div class="page-content msg">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item"><a href="">Messages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Inbox</li>
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
                                        <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button"><span class="icon"><i data-feather="chevron-down"></i></span></button><span class="title">Mail Service</span>
                                        <p class="description">amiahburton@gmail.com</p>
                                    </div>
                                    <div class="aside-compose"><a class="btn btn-primary btn-block" href="compose.html">Compose Email</a></div>
                                    <div class="aside-nav collapse">
                                        <ul class="nav">
                                            <li class="active"><router-link to="/messages"><span class="icon"><i data-feather="inbox"></i></span>Inbox<span class="badge badge-danger-muted text-white font-weight-bold float-right">{{unread}}</span></router-link></li>

                                        </ul>
                                        <span class="title">Labels</span>
                                        <ul class="nav nav-pills nav-stacked">
                                            <li>
                                                <a href="#"><i data-feather="tag" class="text-warning"></i> Important </a>
                                            </li>
                                            <li class="active"><a href="#">
                                                <i data-feather="tag" class="text-primary"></i> Business </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i data-feather="tag" class="text-info"></i> Inspiration </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 email-content" v-if="message!=null">
                                <div class="email-head">
                                    <div class="email-head-subject">
                                        <div class="title d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <a class="active" href="#"><span class="icon"><i data-feather="star" class="text-primary-muted"></i></span></a>
                                                <span>{{message[0].object}}</span>
                                            </div>
                                            <div class="icons">
                                                <a href="#" class="icon"><i data-feather="share" class="text-muted hover-primary-muted" data-toggle="tooltip" title="Forward"></i></a>
                                                <a href="#" class="icon"><i data-feather="printer" class="text-muted" data-toggle="tooltip" title="Print"></i></a>
                                                <a href="#" class="icon"><i data-feather="trash" class="text-muted" data-toggle="tooltip" title="Delete"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="email-head-sender d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
<!--                                                <img src="../assets/images/faces/face5.jpg" alt="Avatar" class="rounded-circle user-avatar-md">-->
                                            </div>
                                            <div class="sender d-flex align-items-center">
                                                <a href="#">{{message[0].receiver}}</a>
                                                <div class="actions dropdown">
                                                    <a class="icon" href="#" data-toggle="dropdown"><i data-feather="chevron-down"></i></a>
                                                    <div class="dropdown-menu" role="menu">
                                                        <a class="dropdown-item" href="#">Mark as read</a>
                                                        <a class="dropdown-item" href="#">Mark as unread</a>
                                                        <a class="dropdown-item" href="#">Spam</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="date">{{message[0].created_at}}</div>
                                    </div>
                                </div>
                                <div class="email-body">

                                    <p>{{message[0].message}}</p>
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
        name: "MessageReader",
        created(){
         this.$store.dispatch('allMessagesFromDatabase')
        },
        mounted(){
            feather.replace();
        },
        methods:{

        },
        computed:{
            message(){
                var id=this.$route.params.id;
                //console.log('itemid',id)
                return this.messages.filter(function (item) {
                    return item.id==id;
                })
            },
            messages(){
                return this.$store.getters.getMessages;
            },
            unread(){
                return this.$store.getters.getUnread;
            }
        }
    }
</script>

<style scoped>

</style>