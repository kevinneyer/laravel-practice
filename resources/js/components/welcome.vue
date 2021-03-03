<template>
    <div>
        <div class='welcome'>
            <h1 class='welcome__header'>Welcome</h1>
            <input v-model="title" placeholder="Search Movies..." />
            <button v-on:click='getMovies(title)'>Search</button>
            <button v-on:click='clearSearch()'>Clear Search</button>
        </div> 
        <div v-if="movies">
            <div>
                <div v-for="movie in movies" :key="movie.title">
                    <a :href="`/${ movie.imdbID }`">{{ movie.Title }}</a>
                </div>
            </div>
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