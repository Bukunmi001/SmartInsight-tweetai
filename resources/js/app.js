import { createApp } from 'vue';
import AutobotCount from './components/AutobotCount.vue';
import AutobotList from './components/AutobotList.vue';
import AutobotPosts from './components/AutobotPosts.vue';

const app = createApp({});
app.component('autobot-count', AutobotCount);
app.component('autobot-list', AutobotList);
app.component('autobot-posts', AutobotPosts);

app.mount('#app');



