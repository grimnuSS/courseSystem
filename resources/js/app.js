/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
import TeacherCreateComponent from "./components/TeacherCreateComponent.vue";

const app = createApp({});

app.component('teacher-create-component', TeacherCreateComponent);
app.mount('#app');
