<template>
    <div>
        {{user.name}}'s Profile
        <div>
            <h3>Favorites</h3>
            <div v-for='favorite in favorites' :key='favorite.imdbID'>
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
    </div>
</template>

<script>
export default {
    name: 'profile',
    props:['user', 'favorites']
}
</script>