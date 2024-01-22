/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import { createApp } from 'vue';
import axios from "axios";
import StudentCoursesComponent from "./components/StudentCoursesComponent.vue";
import CourseContentComponent from "./components/CourseContentComponent.vue";

const app = createApp({});

app.component('student-course-component', StudentCoursesComponent);
app.component('course-content-component', CourseContentComponent);
app.config.globalProperties.$axios = axios;
app.mount('#app');
