<template>
    <div>
        {{user.name}}'s Profile Vue
    </div>
</template>

<script>
export default {
    name: 'profile',
    props:['user']
}
</script>