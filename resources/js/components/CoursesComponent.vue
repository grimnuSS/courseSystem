<template>
        <div v-if="wishlisted" class="alert alert-primary">Kurs Başarıyla Favorilere Eklendi!</div>
        <div class="mb-3" v-for="course in courses" :key="course.id">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-10 mx-md-auto h-auto">
                            <img v-if="course.courseImage" class="img-fluid card-img card-img-left p-4" :src="getImagePath(course.courseImage)" alt="{{ course.title }}" />
                        </div>
                        <div class="col-lg-8 col-md-8 mx-md-auto">
                            <div class="card-body">
                                <a :href="'course/' + course.courseSlug"><h5 class="card-title text-dark-emphasis">{{ course.title }}</h5></a>
                                <h6 class="card-title text-secondary">{{ limitText(course.description, 230) }}</h6>
                                <br>
                                <div v-if="user_id">
                                    <form :action="laravelRouteUrl" method="POST">
                                        <button type="submit" class="btn col-md-4 col-lg-3 float-end btn-primary m-lg-2 m-md-1 mb-2 float-lg-right">
                                            <i class="icon icon-shopping_cart"></i>
                                            {{ course.price }}₺
                                        </button>
                                    </form>
                                    <button class="btn col-md-4 col-lg-2 float-end btn-primary m-lg-2 m-md-1 mb-2 float-lg-right" @click="addToWishlist(course.id)"><i class="icon icon-heart-o"></i> </button>
                                </div>
                                <div v-else>
                                    <button class="btn col-md-4 col-lg-3 float-end btn-primary m-lg-2 m-md-1 mb-2 float-lg-right disabled"><i class="icon icon-shopping_cart"></i>{{ course.price }}₺</button>
                                </div>
                        </div>
                        </div>
                        <div class="crd-footer">
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
            courseId: null,
            wishlisted: false,
            wishlist: [],
            message: null,
            user_id: document.querySelector("meta[name='user_id']").getAttribute('content')
        };
    },
    methods: {
        addToWishlist(courseId) {
            const applicationData = {
                user_id: this.user_id,
            };
            axios.post(`http://localhost/kurs-sitesi/public/api/wishlist/add/${courseId}`, applicationData)
                .then(response => {
                    this.wishlisted = true;
                    this.message = response.data.message;
                })
                .catch(error => {
                    console.error('Error fetching courses:', error);
                });
        },
        getImagePath(imageFileName) {
            return `http://localhost/kurs-sitesi/storage/app/public/${imageFileName}`;
        },
        limitText(text, limit) {
            if (text.length > limit) {
                return text.slice(0, limit) + '...';
            } else {
                return text;
            }
        },
        isWishlisted(courseId) {
            this.wishlisted = this.courses.some((course) => course.id === courseId);
        }
    },
    mounted() {
        axios.get(`http://localhost/kurs-sitesi/public/api/courses`)
            .then(response => {
                this.courses = response.data.courses;

            })
            .catch(error => {
                console.error('Error fetching courses:', error);
            });
        let user_id = this.user_id;
        axios.get(`http://localhost/kurs-sitesi/public/api/wishlist/${user_id}/`)
            .then(response => {
                this.wishlist = response.data.wishlist.map(item => item.courses);
            })
            .catch(error => {
                console.error('Error fetching courses:', error);
            });
    },
};
</script>

<style></style>
