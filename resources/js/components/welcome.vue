<template>
    <div>
        <div class='welcome'>
            <h1 class='welcome__header'>Welcome to MOOOOvies</h1>
            <div class='welcome__search'>
                <input v-model="title" placeholder="Search Movies..." />
                <button v-on:click='getMovies(title)'>Search</button>
                <button v-on:click='clearSearch()'>Clear Search</button>
            </div>
        </div> 
        <movies  @add-favorite='addFavorite' :movies='movies' />
        <favorites :favorites="favorites" />
    </div>
</template>

<script>
import favorites from './favorites'
import movies from './movies'

export default {
    data: function (){
        return {
            title: '',
            movies: [],
            favorites: []
        }
    },
    components: {
        favorites,
        movies
    },
    methods: {
        getMovies: function(title) {
            fetch(`https://www.omdbapi.com/?apikey=2f01cdaf&s=${title}`)
            .then(res => res.json())
            .then(data => {
                this.movies = data.Search
            })
        },
        clearSearch: function() {
            this.movies = []
            this.title = ""
        },
        addFavorite(id){
            let movie = this.movies.find(movie => movie.imdbID === id)
            this.favorites = [...this.favorites, movie]
        }
    }
}
</script>