<template>
    <div>
        <div class="content-header">
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li>
                        <i class="fa fa-home" aria-hidden="true"></i><a href="#">Brand</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row animated fadeInRight">
            <div class="col-lg-8">
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-condensed">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th style="width: 5px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(slider, index) in getSliders" :key="index">
                                    <td><img :src="slider.slider_img" style="width:40px;height: 40px;"> </td>
                                    <td>{{slider.title}}</td>
                                    <td>{{slider.description}}</td>
                                    <td>
                                        <span v-show="slider.status == '1'" class="badge x-success">Active</span>
                                        <span v-show="slider.status == '0'" class="badge x-danger">Inactive</span>

                                    </td>
                                    <td></td>

                                    <td class="text-center">
                                        <a href="#"  ><i class="fa fa-edit text-danger"></i> </a>
                                        <a href="#"  ><i class="fa fa-trash text-danger"></i> </a>
                                    </td>
                                </tr>
                                <tr v-if="emptyData()">
                                    <td colspan="6" class="text-center text-danger">Data not found</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="panel">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-12">
                                <form @submit.prevent=" editMode ? updateBrand() : addSlider()">

                                    <div class="form-group">
                                        <label for="text">Slider Title</label>
                                        <input type="text" class="form-control"  v-model="form.title" :class="{'b-danger': form.errors.has('title')}"  placeholder="Brand Name English" />
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Slider Description</label>
                                        <input type="text" class="form-control" v-model="form.description" :class="{'b-danger': form.errors.has('description')}"  placeholder="Brand Name Bangla" />
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Image</label>
                                        <input type="file" class="form-control" @change="sliderimage($event)" :class="{'b-danger': form.errors.has('slider_img')}" />
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" v-if="editMode">Update</button>
                                        <button type="submit" class="btn btn-primary" v-if="!editMode">Create</button>
                                        <a class="btn btn-warning" style="margin-top: 10px" @click="formReset">Reset</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "slider",
    data: function (){
        return{
            form: new Form({
                'id'                :null,
                'slider_img'        :null,
                'title'             :null,
                'description'       :null,
            }),
            editMode: false,
        }
    },
    mounted() {
        return this.$store.dispatch("getSliders")
    },
    methods:{
        formReset(){
            this.form.reset();
            this.editMode = false;
        },
        sliderimage($event){
            let file = event.target.files[0];
            if(file.size>1048576){
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href>Why do I have this issue?</a>'
                })
            }else{
                let reader = new FileReader();
                reader.onload = event => {
                    this.form.slider_img = event.target.result
                };
                reader.readAsDataURL(file);
            }
        },
        addSlider:function (){
            this.form.post('api/v1/slider/store')
                .then((res)=>{
                    this.$store.dispatch("getSliders");
                    this.form.reset();
                    toastr.options.closeButton = true;
                    toastr.success('slider Successfully Created')
                })
        },
        editBrand(slug){
            axios.get('api/v1/brand/edit/'+slug)
                .then((res)=>{
                    this.form.reset();
                    this.form.fill(res.data.data);
                    this.editMode = true;
                })
        },
        updateBrand(){
            this.form.put('api/v1/brand/update/'+ this.form.id)
                .then((res)=>{
                    this.$store.dispatch("getSliders");
                    this.form.reset();
                    this.editMode = false;
                    toastr.options.closeButton = true;
                    toastr.success('Brand Successfully Updated')
                })
        },
        deleteBrand:function (id){

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete('api/v1/brand/delete/'+id)
                        .then(()=>{
                            this.$store.dispatch("getSliders");
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }).catch(()=>{

                    })
                }
            })


        },
        emptyData(){
            return (this.getSliders.length < 1);
        }
    },

    computed:{
        getSliders(){
            return this.$store.getters.getSliders;
        }

    }
};
</script>

<style scoped></style>
