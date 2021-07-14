<template>
  

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <hooper  style="height: 400px" :progress="true" :autoPlay="true" :playSpeed="2000" >
                        <slide v-for="(slide, indx) in homeslider" :key="indx" :index="indx">
                            <img :src="slide.slider_img" />
                        </slide>
                            <hooper-navigation slot="hooper-addons"></hooper-navigation>
                            
                        </hooper>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-promo">
                            <a href="#"
                                ><img
                                    src="/frontend/images/promo/home/04.jpg"
                                    alt="promo"
                            /></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-promo">
                            <a href="#"
                                ><img
                                    src="/frontend/images/promo/home/05.jpg"
                                    alt="promo"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
        
</template>
<script>
import { Hooper, Slide, Navigation as HooperNavigation } from "hooper";
import "hooper/dist/hooper.css";
export default {
    components: {
        Hooper,
        Slide,
        HooperNavigation
    },
    name: "Slider",

    mounted() {
        this.$store.dispatch("homeslider");
    },

    computed: {
        homeslider() {
            return this.$store.getters.homeslider;
        }
    }
};
</script>

<style scoped></style>
