<template>
    <div>
        <div v-if="successRegistration">
            <div>
                <div class="registration__title_success">Поздравляю, вы успешно зарегистрировались!</div>
                <div class="col-sm-6 offset-3">
                    <router-link class="form-control btn btn-register" tag="button" to="/login">Залогиниться</router-link>
                </div>
            </div>
        </div>
        <form v-else="" @submit="sendForm">

            <div class="form-group">

                <div class="inpute__message_error" v-if="checkLength">
                    <ul>
                        <li v-for="error in errors.login"><b>{{ error }}</b></li>
                    </ul>
                </div>

                <input v-model="model.login" type="text" name="login" id="login" tabindex="1" class="form-control"
                       placeholder="Логин" value="">
            </div>
            <div class="form-group">

                <div class="inpute__message_error" v-if="checkLength">
                    <ul>
                        <li v-for="error in errors.name"><b>{{ error }}</b></li>
                    </ul>
                </div>

                <input v-model="model.name" type="text" name="name" id="name" tabindex="1" class="form-control"
                       placeholder="Имя" value="">
            </div>
            <div class="form-group">

                <div class="inpute__message_error" v-if="checkLength">
                    <ul>
                        <li v-for="error in errors.surname"><b>{{ error }}</b></li>
                    </ul>
                </div>

                <input v-model="model.surname" type="text" name="surname" id="surname" tabindex="1" class="form-control"
                       placeholder="Фамилия" value="">
            </div>
            <div class="form-group">

                <div class="inpute__message_error" v-if="checkLength">
                    <ul>
                        <li v-for="error in errors.midname"><b>{{ error }}</b></li>
                    </ul>
                </div>

                <input v-model="model.midname" type="text" name="midname" id="midname" tabindex="1" class="form-control"
                       placeholder="Отчество" value="">
            </div>
            <div class="form-group">

                <div class="inpute__message_error" v-if="checkLength">
                    <ul>
                        <li v-for="error in errors.password"><b>{{ error }}</b></li>
                    </ul>
                </div>

                <input v-model="model.password" type="password" name="password" id="password" tabindex="2"
                       class="form-control" placeholder="Пароль">
            </div>
            <div class="form-group">

                <div class="inpute__message_error" v-if="checkLength">
                    <ul>
                        <li v-for="error in errors.password_confirm"><b>{{ error }}</b></li>
                    </ul>
                </div>

                <input v-model="model.password_confirm" type="password" name="password_confirm" id="password_confirm"
                       tabindex="2"
                       class="form-control" placeholder="Подтвердите пароль">
            </div>
            <div class="form-group">
                <div class="col-sm-6 offset-3">
                    <input type="submit"
                           tabindex="4" class="form-control btn btn-register"
                           value="Зарегистрироваться">
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                model:{login:null,
                    name: null,
                    surname: null,
                    midname: null,
                    password: null,
                    password_confirm: null},
                errors: {},
                successRegistration: false,
            }
        },
        methods: {
            sendForm: function (e) {
                e.preventDefault();
                this.errors = {};
                this.$http.post('/registration',this.model).then(response => {
                    this.successRegistration = true;
                }, response => {
                    this.errors = response.body.errors;
                });
            }
        },
        computed: {
            checkLength(){
                return !this.$_.isEmpty(this.errors);
            }
        }
    }
</script>
