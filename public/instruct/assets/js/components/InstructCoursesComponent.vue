<template>
    <div class="col-md-12 col-lg-12 mb-3">
        <div class="col-md" v-for="course in courses" :key="course.id">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-5 h-auto">
                        <img v-if="course.courseImage" class="card-img card-img-left p-4" :src="getImagePath(course.courseImage)" alt="Kurs Image" />
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ course.title }}</h5>
                            <h6 class="card-title text-secondary">{{ limitText(course.description, 200) }}</h6>
                            <br>
                            <p class="card-text">
                                ₺{{ course.price }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import moment from 'moment';
import axios from 'axios';

export default {
    data() {
        return {
            courses: [],
            userId: document.querySelector("meta[name='instructorsId']").getAttribute('content')
        };
    },
    methods: {
        getImagePath(imageFileName) {
            return `http://localhost/kurs-sitesi/storage/app/public/${imageFileName}`;
        },
        limitText(text, limit) {
            if (text.length > limit) {
                return text.slice(0, limit) + '...';
            } else {
                return text;
            }
        }
    },
    mounted() {
        const userId = this.userId;
        console.log(userId);
        axios.get(`http://localhost/kurs-sitesi/public/api/instruct/courses/${userId}`)
            .then(response => {
                this.courses = response.data.courses;
            })
            .catch(error => {
                console.error('Error fetching courses:', error);
            });
    },
};
</script>

<style></style>
