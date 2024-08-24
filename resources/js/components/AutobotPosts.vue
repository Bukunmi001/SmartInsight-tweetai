<template>
    <div>
        <h1>Posts for Autobot {{ autobotId }}</h1>
        <ul>
            <li v-for="post in posts" :key="post.id">{{ post.title }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ['autobotId'],
    data() {
        return {
            posts: [],
        };
    },
    mounted() {
        this.fetchPosts();
    },
    methods: {
        fetchPosts() {
            axios.get(`/api/autobots/${this.autobotId}/posts`)
                .then(response => {
                    this.posts = response.data;
                })
                .catch(error => {
                    console.error("There was an error fetching the posts:", error);
                });
        }
    }
}
</script>
