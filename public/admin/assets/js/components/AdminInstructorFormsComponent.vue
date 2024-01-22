<template>
    <div class="card col-6 p-4 mb-3 mx-auto">
        <div class="card-header">
            <h3 class="card-title">Eğitmen Başvuruları</h3>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped mb-0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Kullanıcı Adı Soyadı</th>
                    <th>Hesap Kayıt Tarihi</th>
                    <th>Form Gönderilme Tarihi</th>
                    <th>Cevaplar</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(form, index) in forms" :key="index">
                    <td>{{ form.user.id }}</td>
                    <td>{{ form.user.name }}</td>
                    <td>{{ formatDate(form.created_at) }}</td>
                    <td>{{ formatDate(form.user.created_at) }}</td>
                    <td>
                        <button @click="showDetailsModal(form)" class="btn btn-sm btn-warning">Görüntüle</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="detailsModalLabel">Eğitmen Başvuru Formu</h3>
                    </div>
                    <hr>
                    <div class="modal-body">
                        <div v-if="selectedForm">
                            <h5>Eğitim Deneyimi: </h5>
                            <p>{{ selectedForm.egitim_deneyimi }}</p>
                            <h5>Video Deneyimi: </h5>
                            <p>{{ selectedForm.video_deneyimi }}</p>
                            <h5>Estetiklik: </h5>
                            <p>{{ selectedForm.estetiklik }}</p>
                            <h5>Kitleniz Büyüklüğü: </h5>
                            <p>{{ selectedForm.kitleniz_buyuklugu }}</p>
                            <h5>Tecrübe Seviyesi: </h5>
                            <p>{{ selectedForm.tecrube_seviyesi }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" @click="confirmForm">Onayla</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" @click="dissmissForm">Reddet</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="hideModal(form)">Kapat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import moment from "moment";
export default {
    data() {
        return {
            forms: [],
            selectedForm: null,
            date: 0,
            userId: document.querySelector("meta[name='adminId']").getAttribute('content')
        };
    },
    methods: {
        confirmForm() {
            axios.post(`http://localhost/kurs-sitesi/public/api/admin/instructors/forms/confirm/${this.selectedForm.id}`)
                .then(response => {
                    this.forms = response.data;
                    $('#detailsModal').modal('hide');
                })
                .catch(error => {
                    console.error('Error confirming form:', error);
                });
        },
        dissmissForm() {
            axios.post(`http://localhost/kurs-sitesi/public/api/admin/instructors/forms/dissmiss/${this.selectedForm.id}`)
                .then(response => {
                    this.forms = response.data;
                    $('#detailsModal').modal('hide');
                })
                .catch(error => {
                    console.error('Error dissmissing form:', error);
                });
        },
        formatDate(date) {
            return moment(date).format('YYYY-MM-DD');
        },
        showDetailsModal(form) {
            this.selectedForm = form;
            $('#detailsModal').modal('show');
        },
        hideModal(form) {
            $('#detailsModal').modal('hide');
        }
    },
    mounted() {
        axios.get(`http://localhost/kurs-sitesi/public/api/admin/instructors/forms`)
            .then(response => {
                this.forms = response.data;
                this.date = this.formatDate(this.forms.created_at);
            })
            .catch(error => {
                console.error('Error fetching forms:', error);
            });
    },
};
</script>

<style></style>
