<template>
    <form @submit="sendForm">
        <div class="form-group">
            <div class="inpute__message_error" v-if="checkLengthMessage">
                <ul>
                    <li><b>{{ errorMessage }}</b></li>
                </ul>
            </div>
            <div class="inpute__message_error" v-if="checkLengthError">
                <ul>
                    <li v-for="error in errors.login"><b>{{ error }}</b></li>
                </ul>
            </div>

            <input v-model="model.login"  type="text" name="login" tabindex="1" class="form-control"
                   placeholder="Логин" value="">
        </div>
        <div class="form-group">

            <div class="inpute__message_error" v-if="checkLengthError">
                <ul>
                    <li v-for="error in errors.password"><b>{{ error }}</b></li>
                </ul>
            </div>

            <input v-model="model.password"  type="password" name="password" tabindex="2"
                   class="form-control" placeholder="Пароль">
        </div>
        <div class="form-group">
            <div class="col-sm-6 offset-3">
                <input type="submit"
                       tabindex="4" class="form-control btn btn-register"
                       value="Войти">
            </div>
        </div>
    </form>
</template>

<script>
    export default{
        data(){
            return{
                model:{login:null,
                        password: null,
                        },
                errors: {},
                errorMessage:''
            }
        },
        methods: {
            sendForm: function (e) {
                e.preventDefault();
                this.errors = {};
                this.errorMessage ='';
                this.$http.post('/login',this.model).then(response => {
                    window.location.href = response.body.redirect;
                }, response => {
                    this.errors = response.body.errors;
                    if(this.$_.isEmpty(response.body.errors)){
                        this.errorMessage = response.body.message;
                    }
                });
            }
        },
        computed: {
            checkLengthError(){
                return !this.$_.isEmpty(this.errors);
            },
            checkLengthMessage(){
                return !this.$_.isEmpty(this.errorMessage);
            }
        }
    }
</script>
