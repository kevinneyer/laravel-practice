<template>
    <div>
        <div class='content-header'>
            <h1>Movies</h1>
        </div>
        <div class='cards'  v-if="movies.length > 0">
            <div v-for="movie in movies" :key="movie.imdbID">
                <div class='cards__item'> 
                    <a  :href="`/movies/${ movie.imdbID }`">
                        <img class='cards__item__image' :src="movie.Poster" />
                    </a>
                    <h5>{{ movie.Title }}</h5>
                    <h4 class='cards__item__title'>{{ movie.Year }}</h4>
                    <div v-if='favorites.includes(movie)'>
                        <button disabled>Add to Favorites</button>
                    </div>
                    <div v-else>
                        <button @click='addFavorite(movie.imdbID)'>Add to Favorites</button>
                    </div>
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
    props: ['movies', 'favorites','user'],
    methods: {
        addFavorite(id){
            this.$emit('add-favorite', id)
        }
    }
}
</script>