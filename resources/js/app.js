/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
import axios from "axios";
import InstructRegisterComponent from "./components/InstructRegisterComponent.vue";

const app = createApp({});
app.config.globalProperties.axios = axios;


app.component('instruct-register-component', InstructRegisterComponent);
app.mount('#app');
