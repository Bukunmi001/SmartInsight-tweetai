<template>
    <div>
        <h1>List of Autobots</h1>
        <ul>
            <li v-for="autobot in autobots" :key="autobot.id">{{ autobot.name }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            autobots: [],
        };
    },
    mounted() {
        this.fetchAutobots();
    },
    methods: {
        fetchAutobots() {
            axios.get('/api/autobots')
                .then(response => {
                    this.autobots = response.data;
                })
                .catch(error => {
                    console.error("There was an error fetching the autobots:", error);
                });
        }
    }
}
</script>
