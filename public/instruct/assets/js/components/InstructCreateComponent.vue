<template>
    <div v-if="!success" class="card mb-4">
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
                    <textarea class="form-control" v-model="courseDescription" maxlength="299" placeholder="Kursun Ön İzleme Sayfasında Görüntülenecek Olan Açıklamayı Giriniz."></textarea>
                </div>
            </div>
            <div class="input-group">
                <label class="form-label">Kurs Kapak Resmi</label>

                <div class="input-group input-group-merge">
                    <input class="form-control w-100" type="file" @change="onChange">
                </div>
            </div>
            <div class="mt-3">
                <button v-on:click="store" class="btn btn-primary">Kurs Oluştur</button>
            </div>
        </div>
    </div>
    <div v-if="success" class="card mb-4">
        <div class="card-body demo-vertical-spacing demo-only-element">
            <div class="alert alert-secondary" role="alert">
                Kurs Başarıyla Oluşturuldu. Kurslarınızı <a href="http://localhost/kurs-sitesi/public/instructor/courses">buradan</a> görebilirsiniz.
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            file: null,
            selectedFileWidth: 0,
            selectedFileHeight: 0,
            instructorsId: document.querySelector("meta[name='instructorsId']").getAttribute('content'),
            courseName: '',
            courseCategory: [],
            coursePrice: '',
            courseDescription: '',
            selectedCategory: null,
            success: null,
        };
    },
    mounted() {
        axios.get('http://localhost/kurs-sitesi/public/api/categories')
            .then(response => {
                this.courseCategory = response.data.categoryName;
            });
    },
    methods: {
        onChange(e) {
            this.file = e.target.files[0];
        },
        store(e) {
            if(this.courseName && this.selectedCategory && this.coursePrice && this.courseDescription && this.file) {
                e.preventDefault();
                let existingObj = this;
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }
                let data = new FormData();
                data.append('_token', '{{ csrf_token() }}');
                data.append('file', this.file);
                data.append('title', this.courseName);
                data.append('instructorsId', this.instructorsId);
                data.append('categoryId', this.selectedCategory);
                data.append('price', this.coursePrice);
                data.append('description', this.courseDescription);
                axios.post('http://localhost/kurs-sitesi/public/api/instruct/course/add', data, config)
                    .then(response => {
                            this.success = response.data.success;
                        })
                    .catch(error => {
                        alert('Kurs Oluşturulurken Bir Hata Oluştu.');
                    });
            } else {
                alert('Lütfen Tüm Alanları Doldurunuz.');
            }
        }
    },
};
</script>

<style></style>
