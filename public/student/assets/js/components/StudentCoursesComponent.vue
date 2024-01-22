<template>
    <div class="col-md-4 col-lg-4 mb-3"  v-for="course in courses" :key="course.id">
        <div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-lg-12 h-auto">
                        <img v-if="course.courses.courseImage" class="card-img card-img-left p-4" :src="getImagePath(course.courses.courseImage)" alt="Kurs Image" />
                    </div>
                    <div class="col-lg-12">
                        <div class="card-body">
                            <a :href="'http://localhost/kurs-sitesi/public/student/course/' + course.courses.courseSlug"><h5 class="card-title text-primary">{{ course.courses.title }}</h5></a>
                            <br>
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
            courses: [],
            userId: document.querySelector("meta[name='studentId']").getAttribute('content')
        };
    },
    methods: {
        getImagePath(imageFileName) {
            return `http://localhost/kurs-sitesi/storage/app/public/${imageFileName}`;
        }
    },
    mounted() {
        const userId = this.userId;
        axios.get(`http://localhost/kurs-sitesi/public/api/student/courses/${userId}`)
            .then(response => {
                this.courses = response.data.courses;
                console.log(response.data.courses);
            })
            .catch(error => {
                console.error('Error fetching courses:', error);
            });
    },
};
</script>

<style></style>
