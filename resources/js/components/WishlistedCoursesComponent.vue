<template>
    <div>
        <div v-if="courses.length === 0" class="alert alert-primary">
            İstek Listesine Eklenen Kursunuz Bulunmamaktadır!
        </div>
        <div v-else class="mb-3" v-for="course in courses" :key="course.id">
            <div class="card">
                <div class="row g-0">
                    <div class="col-lg-4 col-md-10 mx-md-auto h-auto">
                        <img
                            v-if="course.courseImage"
                            class="img-fluid card-img card-img-left p-4"
                            :src="getImagePath(course.courseImage)"
                            :alt="course.title"
                        />
                    </div>
                    <div class="col-lg-7 col-md-8 mx-md-auto">
                        <div class="card-body">
                            <a :href="course.courseSlug">
                                <h5 class="card-title text-dark-emphasis">{{ course.title }}</h5>
                            </a>
                            <h6 class="card-title text-secondary">
                                {{ limitText(course.description, 230) }}
                            </h6>
                            <br />
                        </div>
                    </div>
                    <div class="crd-footer"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            courses: [],
            courseId: null,
            user_id: document
                .querySelector("meta[name='user_id']")
                .getAttribute("content"),
        };
    },
    computed: {
        // Check if courses array is empty
        noCourses() {
            return this.courses.length === 0;
        },
    },
    methods: {
        getImagePath(imageFileName) {
            return `http://localhost/kurs-sitesi/storage/app/public/${imageFileName}`;
        },
        limitText(text, limit) {
            if (text.length > limit) {
                return text.slice(0, limit) + "...";
            } else {
                return text;
            }
        },
    },
    mounted() {
        let user_id = this.user_id;
        axios.get(`http://localhost/kurs-sitesi/public/api/wishlist/${user_id}`)
            .then((response) => {
                this.courses = response.data.wishlist.map(item => item.courses);
                console.log(this.courses);
            })
            .catch((error) => {
                console.error("Error fetching courses:", error);
            });
    },
};
</script>

<style></style>
