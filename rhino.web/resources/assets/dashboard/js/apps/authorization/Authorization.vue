<template>
    <div class="row">
        <div class="col-md-6 offset-sm-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <router-link activeClass="active" class="col-6" to="/login">Войти</router-link>
                        <router-link activeClass="active" class="col-6" to="/register">Зарегистрироваться</router-link>
                    </div>
                    <div class="hr"></div>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import AuthLogin from './AuthLogin.vue'
    import AuthRegister from './AuthRegister.vue'
    import VueRouter from 'vue-router'


    const router = new VueRouter({
        routes: [
            { path: '/login', component: AuthLogin },
            { path: '/register', component: AuthRegister },
        ]
    });

    export default{
        data(){
            return {

            }
        },
        components:{
            AuthLogin,
            AuthRegister
        },
        router,
        created(){
            router.push('login');
        }
    }
</script>
