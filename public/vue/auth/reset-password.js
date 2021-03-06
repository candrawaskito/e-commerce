new Vue({
    el: '#reset-password',
    data: function() {
        return {
            remember_token: '',
            email: '',
            password: '',
            password_confirmation: '',
            status: '',
            message: ''
        }
    },
    methods: {
        /**
         * Untuk mengambil token dari url
         * @return {token} token untuk reset password
         */
        getToken: function() {
            return this.remember_token
        },
        /**
         * Fungsi untuk reset password
         * @return {status} Apabila reset password berhasil maka user akan diarahkan ke halaman login
         */
        resetPassword: function() {
            var token   = this.getToken()
            var credentials = {
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation,
                remember_token: token
            }

            this.$http.post(API_URL + '/auth/reset-password', credentials, (data) => {
                if (data.status == 'success') {
                    window.location.assign(LOGIN_USER)
                } else {
                    this.status     = data.status
                    this.message    = data.message
                }
            }).error((err) => {
                console.log(err)
                this.message = err.message
            })
        },
        /**
         * Fungsi untuk menghapus value status dan messsage saat alert diclose
         * @return {[type]} [description]
         */
        clearMessage: function() {
            this.status     = ''
            this.message    = ''
        }        
    }
})
