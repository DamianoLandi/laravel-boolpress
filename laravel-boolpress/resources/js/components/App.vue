<template>
    <div class="container">

                    <div class="card-header">Titolo</div>

                    <div class="card-body">
                        Work in Progress
                    </div>
                    <div class="post" v-for="post in posts" :key="post.index">
                        <p>{{post.title}}</p>
                    </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts:[],
            }
        },
        methods: {
            getPosts(){
                axios
                    .get(`http://localhost:8000/api/posts`)
                    .then((res) => {
                        const response = res.data;
                        this.posts = response;
                    }).catch(err => console.error(err));
            },
        },
        created() {
            this.getPosts();
        }
    };
</script>
