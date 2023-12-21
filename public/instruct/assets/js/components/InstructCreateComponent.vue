<template>
    <div class="card mb-4">
        <h5 class="card-header">Kurs Oluştur</h5>
        <div class="card-body demo-vertical-spacing demo-only-element">
            <div class="input-group">
                <label class="form-label">Kurs Adı</label>
                <div class="input-group input-group-merge">
                    <input type="text" v-model="courseName" class="form-control" placeholder="Kurs Adı"/>
                </div>
            </div>
            <div class="input-group">
                <label for="defaultSelect" class="form-label">Kurs Kategorisi</label>
                <select class="form-select w-100" id="defaultSelect" v-model="selectedCategory">
                    <option v-for="category in courseCategory" :key="category.id" :value="category.id">
                        {{ category.categoryName }}
                    </option>
                </select>
            </div>
            <div class="input-group">
                <label class="form-label">Kurs Fiyatı</label>
                <div class="input-group input-group-merge">
                    <input type="text" class="form-control" v-model="coursePrice" placeholder="Kurs Fiyatı"/>
                </div>
            </div>
            <div class="input-group">
                <label class="form-label">Kurs Açıklaması</label>
                <div class="input-group input-group-merge">
                    <textarea class="form-control" v-model="courseDescription" placeholder="Kursun Ön İzleme Sayfasında Görüntülenecek Olan Açıklamayı Giriniz."></textarea>
                </div>
            </div>
            <div class="input-group">
                <label class="form-label">Kurs Kapak Resmi</label>

                <div class="input-group input-group-merge">
                    <input class="form-control w-100" type="file" @change="handleFileChange">
                </div>
                <div v-if="selectedFile">
                    <p>Boyut: {{ formatBytes(selectedFile.size) }} | Pixel: {{ selectedFileWidth }}x{{ selectedFileHeight }}</p>
                </div>
            </div>
            <div class="mt-3">
                <button v-on:click="store" class="btn btn-primary">Kurs Oluştur</button>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            selectedFile: null,
            selectedFileWidth: 0,
            selectedFileHeight: 0,
            instructorsId: document.querySelector("meta[name='instructorsId']").getAttribute('content'),
            courseName: '',
            courseCategory: [],
            coursePrice: '',
            courseDescription: '',
            selectedCategory: null,
        };
    },
    mounted() {
        axios.get('http://localhost/kurs-sitesi/public/api/categories')
            .then(response => {
                this.courseCategory = response.data.categoryName;
            });
    },
    methods: {
        handleFileChange(event) {
            const file = event.target.files[0];
            const maxSize = 10 * 1024 * 1024; // 10 MB
            if (file.size > maxSize) {
                alert('Dosya boyutu çok büyük. 10 MB\'den küçük bir dosya seçiniz.');
                return;
            }
            const maxWidth = 1920;
            const maxHeight = 1080;
            const img = new Image();
            img.onload = () => {
                if (img.width !== maxWidth || img.height !== maxHeight) {
                    alert('Lütfen 1920x1080 piksel boyutunda bir fotoğraf seçiniz.');
                } else {
                    this.selectedFile = file.name;
                    this.selectedFileWidth = img.width;
                    this.selectedFileHeight = img.height;
                }
            };
            img.src = URL.createObjectURL(file);
        },
        formatBytes(bytes, decimals = 2) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const dm = decimals < 0 ? 0 : decimals;
            const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
        },
        store() {
            if(this.courseName && this.selectedCategory && this.coursePrice && this.courseDescription && this.selectedFile) {
                axios.post('http://localhost/kurs-sitesi/public/api/course/add', {
                    title: this.courseName,
                    instructorsId: this.instructorsId,
                    categoryId: this.selectedCategory,
                    price: this.coursePrice,
                    description: this.courseDescription,
                    courseImage: this.selectedFile,
                })
                    .then(response => {
                        console.log(response);
                    })
                    .catch(error => {
                        console.log(error);
                    });
            } else {
                alert('Lütfen tüm alanları doldurunuz!');
            }
        }
    },
};
</script>

<style></style>
