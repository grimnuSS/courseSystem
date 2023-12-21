/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import { createApp } from 'vue';
import axios from "axios";
import TeacherCreateComponent from "./components/InstructCreateComponent.vue";
import InstructCoursesComponent from "./components/InstructCoursesComponent.vue";

const app = createApp({});

app.config.globalProperties.$axios = axios;
app.component('teacher-create-component', TeacherCreateComponent);
app.component('instruct-courses-component', InstructCoursesComponent);
app.mount('#app');
