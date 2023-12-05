<template>
    <div class="container mt-3 mb-4">
        <div class="card">
            <div class="card-body">
                <div v-if="loading">
                    <div class="text-center">
                        <div class="spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
                <div v-else>
                    <div v-if="formCompleted">
                        <h2 class="card-title">Başvurunuz Alınmıştır!</h2>
                        <p class="card-text">Cevaplarınız tarafımızca incelenip size dönüş yapılacaktır!</p>
                    </div>
                    <div class="form" v-if="!formStarted && !formCompleted">
                        <h2 class="card-title">Eğitmen olmak mı istiyorsunuz?</h2>
                        <p class="card-text">Lütfen aşağıdaki formu doldurunuz. Tarafımızca incelenip size dönülecektir!</p>
                        <button class="btn btn-primary" @click="startForm">Başla</button>
                    </div>
                    <div class="form" v-if="formStarted && !formCompleted">
                        <h2 class="card-title">{{ questions[currentQuestionIndex].question }}</h2>
                        <div class="custom-radio" v-for="(option, index) in questions[currentQuestionIndex].options" :key="index">
                            <input type="radio" :name="questions[currentQuestionIndex].key" :value="option" v-model="answers[currentQuestionIndex]" />
                            {{ option }} <br>
                        </div>
                        <button class="btn btn-primary" @click="nextQuestion">
                            {{ currentQuestionIndex === questions.length - 1 ? 'Bitir' : 'Sonraki' }}
                        </button>
                        <div class="progress mt-3 mb-3">
                            <div class="progress-bar bg-success" :style="{ width: questions[currentQuestionIndex].progress + '%' }" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            userId: document.querySelector("meta[name='user_id']").getAttribute('content'),
            formStarted: false,
            loading: true,
            formCompleted: false,
            currentQuestionIndex: 0,
            answers: {
                egitim_deneyimi: null,
                video_deneyimi: null,
                estetiklik: null,
                kitleniz_buyuklugu: null,
                tecrube_seviyesi: null,
            },
            questions: [
                { question: '1) Daha Önce Ne Şekilde Eğitimler Verdiniz?', key: 'egitim_deneyimi', options: ['Online Eğitim Verdim', 'Yüz Yüze Profesyonel Eğitim Verdim', 'Yüz Yüze Normal Eğitim Verdim', 'Diğer'], progress: 0 },
                { question: '2) Video Çekme Konusunda Ne Kadar Tecrübelisiniz?', key: 'video_deneyimi', options: ['Başlangıç', 'Biraz bilgiliyim', 'Deneyimim var', 'Videolarım hazır bile'], progress: 25 },
                { question: '3) Estetikliğe Uymanız Gerektiğini Kabul Ediyor Musunuz?', key: 'estetiklik', options: ['Evet', 'Biraz', 'Hayır Ne Gerek Var'], progress: 50 },
                { question: '4) Kursunuzu Takip Edecek Halihazırda Bir Kitleniz Var Mı?', key: 'kitleniz_buyuklugu', options: ['Yok', 'Küçük bir kitle', 'Büyük bir takipçi kitlem var'], progress: 75 },
                { question: '5) Kurs Açacağınız Konu Üzerinde Ne Kadar Tecrübeye Sahipsiniz?', key: 'tecrube_seviyesi', options: ['+10 Yıl', '+5 Yıl', '+2 Yıl', 'Yeni Sayılırım', 'Öğretirken Öğreneceğim'], progress: 100 },
            ],
        };
    },
    mounted() {
        const userId = this.userId;
        axios.get(`http://localhost/kurs-sitesi/public/api/instructor/state/${userId})`)
            .then((res) => {
                if (res.data && res.data.length > 0) {
                    this.formCompleted = true;
                } else {
                    this.formCompleted = false;
                }
            })
            .finally(() => {
                this.loading = false;
            });
    },
    methods: {
        startForm() {
            this.formStarted = true;
        },
        nextQuestion() {
            const currentQuestionKey = this.questions[this.currentQuestionIndex].key;
            this.answers[currentQuestionKey] = this.answers[this.currentQuestionIndex];
            if (this.currentQuestionIndex < this.questions.length - 1) {
                this.currentQuestionIndex++;
            } else {
                this.submitApplication();
            }
        },
        submitApplication() {
            const applicationData = {
                user_id: this.userId,
                egitim_deneyimi: this.answers.egitim_deneyimi,
                video_deneyimi: this.answers.video_deneyimi,
                estetiklik: this.answers.estetiklik,
                kitleniz_buyuklugu: this.answers.kitleniz_buyuklugu,
                tecrube_seviyesi: this.answers.tecrube_seviyesi,
            };
            axios.post('http://localhost/kurs-sitesi/public/api/instructor/form', applicationData)
                .then(response => {
                    console.log(response.data);
                    this.formCompleted = true;
                })
                .catch(error => {
                    console.error(error);
                });
        },
    },
};
</script>

<style scoped>
</style>
