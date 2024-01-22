/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import { createApp } from 'vue';
import axios from "axios";
import AdminInstructorFormsComponent from "./components/AdminInstructorFormsComponent.vue";
import AdminInstructorsComponent from "./components/AdminInstructorsComponent.vue";

const app = createApp({});

app.config.globalProperties.$axios = axios;
app.component('admin-instructors-component', AdminInstructorsComponent);
app.component('admin-instructor-forms-component', AdminInstructorFormsComponent);
app.mount('#app');
