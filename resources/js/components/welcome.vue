<template>
    <div>
        <div class='welcome'>
            <h1 class='welcome__header'>Welcome</h1>
            <div class='welcome__search'>
                <input v-model="title" placeholder="Search Movies..." />
                <button v-on:click='getMovies(title)'>Search</button>
                <button v-on:click='clearSearch()'>Clear Search</button>
            </div>
        </div> 
        <div class='cards'  v-if="movies.length > 0">
            <div v-for="movie in movies" :key="movie.title">
                <div class='cards__item'> 
                    <a  :href="`/${ movie.imdbID }`">
                        <img class='cards__item__image' :src="movie.Poster" />
                    </a>
                    <h3 class='cards__item__title'>{{ movie.Title }}</h3>
                    <h3>{{ movie.Year }}</h3>
                </div>
            </div>
        </div>
        <div class='else'v-else>
            <h1>Search a Movie!</h1>
        </div>
    </div>
</template>

<script>
export default {
    data: function (){
        return {
            title: '',
            movies: []
        }
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
        }
    }
}
</script>