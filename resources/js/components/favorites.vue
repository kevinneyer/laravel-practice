<template>
    <div>
    <div class='content-header'>
        <h1>Favorites</h1>
    </div>
        <div class='cards'  v-if="favorites.length > 0">
            <div v-for="favorite in favorites" :key="favorite.imdbID">
                <div class='cards__item'> 
                    <a  :href="`/${ favorite.imdbID }`">
                        <img class='cards__item__image' :src="favorite.Poster" />
                    </a>
                    <h5>{{ favorite.Title }}</h5>
                    <h3 class='cards__item__title'>{{ favorite.Year }}</h3>
                    <button @click='removeFavorite(favorite.imdbID)'>Remove from Favorites</button>
                </div>
            </div>
        </div>
        <div v-else class='else'>
            <h3>No Favorites. Add some!</h3>
        </div>
    </div>
</template>

<script>
export default{
    name: 'favorites',
    props: ['favorites', 'user'],
    methods: {
        removeFavorite(id){
            this.$emit('remove-favorite', id)
        }
    }
}
</script>