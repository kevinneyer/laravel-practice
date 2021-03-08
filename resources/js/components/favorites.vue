<template>
    <div>
        Favorites Vue
        <div v-for='favorite in favorites' :key='favorite.imdbID'>
            {{ favorite.Title}}
        </div>
    </div>
</template>

<script>
export default{
    name: 'favorites',
    props: ['favorites']
}
</script>