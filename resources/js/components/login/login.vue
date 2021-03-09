<template>
    <div>
        <form>
            <input v-model='username' type='text' placeholder='username' />
            <input v-model='password' type='password' placeholder='password' />
            <input type='submit'/>
        </form>
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
    }
}
</script>