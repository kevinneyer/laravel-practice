<template>
    <div>
        Hello from {{id}}
        <button v-on:click='getMovie( id )'>Load Me</button>
        <div>
            <h1>{{ movie.Title }} ({{ movie.Year}})</h1>
            <img :src="`${movie.Poster}`" />
            <p>{{ movie.Plot }}</p>
        </div>
    </div>
</template>

<script>
export default {
    // mounted(){
    //     this.$nextTick(this.getMovie())
    // },
    data: function(){
        return{
            movie: {}
        }
    },
    props: ['id'],
    methods: {
        getMovie: function(id){
            fetch(`https://www.omdbapi.com/?apikey=2f01cdaf&i=${id}`)
            .then(res => {
                console.log(res)
            
        })
    }
    }
}
</script>