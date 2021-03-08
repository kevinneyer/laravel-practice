<template>
    <div v-if='Object.keys(movie).length > 0'>
        <div>
            <h1>{{ movie.Title }} ({{ movie.Year}})</h1>
            <img :src="movie.Poster" />
            <p>{{ movie.Plot }}</p>
            <a href='/'>
                <button >Home</button>
            </a>
        </div>
    </div>
    <div v-else>
        Loading...
    </div>
</template>

<script>
export default {
    data: function(){
        return{
            movie: {}
        }
    },
    props: ['id'],
    methods: {
        getMovie: function(id){
            fetch(`https://www.omdbapi.com/?apikey=2f01cdaf&i=${this.$props.id}`)
            .then(res => res.json())
            .then(data => {
                this.movie = data
            })
        }
    },
    mounted(){
        this.getMovie()
    }
}
</script>