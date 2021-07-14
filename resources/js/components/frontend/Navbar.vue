<template>
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw"> 
                                    <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                    </li>
                                <li class="dropdown yamm mega-menu" v-for="( category, index) in categories" :key="index">
                                    <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">{{ category.category_name_en }}</a>
                                    <ul class="dropdown-menu container">
                                        <li>
                                            <div class="yamm-content ">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu" v-for="(subcategory, index) in category.subcategories" :key="index">
                                                        <h2 class="title">{{subcategory.subcategory_name_en}}</h2>
                                                        
                                                        <ul class="links">
                                                            <li v-for="(subsubcategory, index) in subcategory.subsubcategories" :key="index">
                                                                <a href="#">{{subsubcategory.subsubcategory_name_en}}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.col -->


                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                                    <ul class="dropdown-menu pages">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-xs-12 col-menu">
                                                        <ul class="links">
                                                            <li><a href="#">About</a></li>
                                                            <li><a href="#">Contact</a></li>
                                                            <li><a href="#">Terms and Condition</a></li>
                                                            <li><a href="#">FAQ</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown  navbar-right special-menu"> <a href="#">Todays offer</a> </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.nav-outer -->
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Navbar",

    mounted() {
        this.$store.dispatch("category")
        this.$store.dispatch("frontlang")
    },

    computed:{
        categories(){
            return this.$store.getters.category;
        },
        frontlang(){
            return this.$store.getters.frontlang;
        }

    }
}
</script>

<style scoped>

</style>
