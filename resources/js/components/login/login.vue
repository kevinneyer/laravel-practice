<template>
    <div>
    <div class='row'>
        <div class='column'>
            Login 
            <form>
                <input v-model='username' type='text' placeholder='username' />
                <input v-model='password' type='password' placeholder='password' />
                <input type='submit'/>
            </form>
        </div>
        <div class='column'>
            Signup
            <form>
                <input v-model='username' type='text' placeholder='username' />
                <input v-model='password' type='password' placeholder='password' />
                <input type='submit'/>
            </form>
        </div>
    </div>
        <a href='/movies'><button>To Movies</button></a>
    </div>
</template>

<script>
export default {
    name: 'login',
    data: function (){
        return{
            username: '',
            password: ''
        }
    },
    methods: {
        toMovies(){
            redirect: '/movies'
        }
    }
}
</script>