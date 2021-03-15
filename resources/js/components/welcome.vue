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
        <div class='row'>
            <div class='column'>
                <movies  
                @add-favorite='addFavorite' 
                @sort-handler='sortHandler'
                :favorites='favorites'
                :movies='movies' 
                :user='user'
                />
            </div>
            <div class='column'>
                <favorites  
                :favorites="favorites" 
                @remove-favorite='removeFavorite'
                :user='user'
                />
            </div>
        </div>
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
            favorites: [],
            original: []
        }
    },
    props: ['user'],
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
                this.original = data.Search
            })
        },
        clearSearch: function() {
            this.movies = []
            this.original= []
            this.title = ""
        },
        addFavorite(id){
            let movie = this.movies.find(movie => movie.imdbID === id)
            this.favorites = [...this.favorites, movie]
        },
        removeFavorite(id){
            this.favorites = this.favorites.filter(favorite => favorite.imdbID !== id)
        },
        sortHandler(value){
            let spread = [...this.movies]

            if(value === 'Date Ascending'){
                this.movies = spread.sort((a,b) => (a.Year < b.Year ? -1 : 1));
            } else if(value === 'Date Descending'){
                this.movies = spread.sort((a,b) => (a.Year > b.Year ? -1 : 1));
            } else if(value === 'None'){
                this.movies = this.original
            }
        }
    }
}
</script>