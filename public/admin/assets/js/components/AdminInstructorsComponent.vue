<template>
    <div class="card col-5 p-4 mb-3 mx-auto">
        <div class="card-header">
            <h3 class="card-title">Eğitmenler</h3>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped mb-0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Adı Soyadı</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(form, index) in forms" :key="index">
                    <td>{{ index + 1 }}</td>
                    <td>{{ form.user.name }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            forms: [],
            date: 0,
            userId: document.querySelector("meta[name='adminId']").getAttribute('content')
        };
    },
    methods: {
    },
    mounted() {
        axios.get(`http://localhost/kurs-sitesi/public/api/instructors`)
            .then(response => {
                this.forms = response.data;
            })
            .catch(error => {
                console.error('Error fetching forms:', error);
            });
    },
};
</script>

<style></style>
