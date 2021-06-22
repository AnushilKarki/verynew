require('./bootstrap');
import { createWebHistory, createRouter } from "vue-router";
import { createApp } from 'vue'
import ExampleComponent from './components/ExampleComponent.vue'

const routes = [
    { path: '/example', component: ExampleComponent },
   
  ]
  const router = createRouter({
    // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
    history: createWebHistory(),
    routes, // short for `routes: routes`
  })
  export default router;
const app=createApp({
    data() {
        return {
         product : 'sock',
        }
    },
components:{
    ExampleComponent
}
}).use(router).mount('#app')

