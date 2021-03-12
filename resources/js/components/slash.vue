<template>
    <div>
        <welcome :user='user'></welcome>
    </div>
</template>

<script>
import welcome from './welcome'

export default{
    components: {
        welcome
    },
    props: ['user']
}
</script>