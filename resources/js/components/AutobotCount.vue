<template>
    <div>
        <h1>Autobot Count: {{ autobotCount }}</h1>
    </div>
</template>

<script>
export default {
    data() {
        return {
            autobotCount: 0,
        };
    },
    mounted() {
        this.fetchAutobotCount();
    },
    methods: {
        fetchAutobotCount() {
            axios.get('/api/autobots/count')
                .then(response => {
                    this.autobotCount = response.data.count;
                })
                .catch(error => {
                    console.error("There was an error fetching the autobot count:", error);
                });
        }
    }
}
</script>

