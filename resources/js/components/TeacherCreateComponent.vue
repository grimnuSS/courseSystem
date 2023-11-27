<template>
    <div class="row justify-content-center mt-3">
        <h2>Kurs Oluştur</h2>
        <div class="mt-2">
            <div class="row">
                <div class="col-md-4">
                    <label>Kurs Adı</label>
                    <input type="text" v-model="courseName" class="form-control" placeholder="Kurs Adı">
                </div>
                <div class="col-md-4">
                    <label>Kurs Kategorisi</label>
                    <select class="form-control" v-model="selectedCategory">
                        <option v-for="category in courseCategory" :key="category.id" :value="category.id">
                            {{ category.categoryName }}
                        </option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Kurs Fiyatı</label>
                    <input type="text" v-model="coursePrice" class="form-control" placeholder="Kurs Fiyatı">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Kurs Açıklaması</label>
                    <textarea cols="40" rows="4" v-model="courseDescription" type="text" class="form-control" placeholder="Kurs Açıklaması"></textarea>
                </div>
                <div class="col-md-6">
                    <label>Öğrenim İçeriği Kategorileri</label>
                    <textarea cols="40" rows="4" v-model="courseEduCategory" type="text" class="form-control" placeholder="Öğrenim Kategorileri bkz(1. Kısım: Gerekli Uygulamaların Kurulumu, 2. Kısım: Uygulamaların İşlevleri vb)"></textarea>
                </div>
            </div>
            <div class="row col-md-3 mt-3">
                <button v-on:click="store" class="btn btn-primary">Kurs Oluştur</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            courseName: '',
            courseCategory: [], // Bu veri öğesinin adı ile Laravel'den gelen JSON'daki anahtar aynı olmalı
            coursePrice: '',
            courseDescription: '',
            courseEduCategory: '',
            selectedCategory: null, // Seçilen kategori ID'sini tutacak değişken
        };
    },
    mounted() {
        axios.get('http://localhost/kurs-sitesi/public/api/categories')
            .then(response => {
                this.courseCategory = response.data.categoryName;
            });
    },
    methods: {
        store() {
            if(this.courseName && this.selectedCategory && this.coursePrice && this.courseDescription && this.courseEduCategory) {
                axios.post('http://localhost/kurs-sitesi/public/api/course/add', {
                    title: this.courseName,
                    categoryId: this.selectedCategory,
                    price: this.coursePrice,
                    description: this.courseDescription,
                    descriptionCategories: this.courseEduCategory,
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
        },
    },
};
</script>

<style></style>
