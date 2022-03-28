import {createRouter, createWebHistory} from "vue-router";


import MainComponent from "./components/MainComponent";
import Container from "./components/Container";

/**
 *
 * @type array
 */
const routes = [
    {
        'path': '/',
        'name': MainComponent,
        'component': MainComponent
    },
    {
        'path': '/container',
        'name': Container,
        'component': Container
    }
];


const router = createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL)
});

export default router;


