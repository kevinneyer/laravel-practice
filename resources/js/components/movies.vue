<template>
    <div>
        <div class='content-header'>
            <h1>Movies</h1>
        </div>
        <div class='cards'  v-if="movies.length > 0">
            <div v-for="movie in movies" :key="movie.title">
                <div class='cards__item'> 
                    <a  :href="`/${ movie.imdbID }`">
                        <img class='cards__item__image' :src="movie.Poster" />
                    </a>
                    <h3 class='cards__item__title'>{{ movie.Title }}</h3>
                    <h3>{{ movie.Year }}</h3>
                    <button @click='addFavorite(movie.imdbID)'>Add to Favorites</button>
                </div>
            </div>
        </div>
        <div class='else'v-else>
            <h3>Search a Movie!</h3>
        </div>
    </div>
</template>

<script>
export default{
    name: 'movies',
    props: ['movies'],
    methods: {
        addFavorite(id){
            this.$emit('add-favorite', id)
        }
    }
}
</script>