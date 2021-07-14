<template>
    <div>
        <div class="content-header">
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li>
                        <i class="fa fa-home" aria-hidden="true"></i><a href="#">Category</a>
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
                                    <th>SL</th>
                                    <th>Icon</th>
                                    <th>Category Eng</th>
                                    <th>Category Ban</th>
                                    <th>Create At</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(category, index) in getCategories" :key="index">
                                    <td>{{++index}}</td>
                                    <td><i :class="category.category_icon"></i></td>
                                    <td>{{category.category_name_en}}</td>
                                    <td>{{category.category_name_bn}}</td>
                                    <td>{{category.created_at | time }}</td>
                                    <td></td>
                                    <td>
                                        <a href="#" @click="editCatogory(category.category_slug_en)" ><i class="fa fa-edit text-danger"></i> </a>
                                        <a href="#" @click="deleteCategory(category.category_slug_en)" ><i class="fa fa-trash text-danger"></i> </a>
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
                                <form @submit.prevent=" editMode ? updateCategory() : addCategory()">

                                    <div class="form-group">
                                        <label for="text">Category Name English</label>
                                        <input type="text" class="form-control"  v-model="form.category_name_en" :class="{'b-danger': form.errors.has('category_name_en')}"  placeholder="Category Name English" />
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Category Name Bangla</label>
                                        <input type="text" class="form-control" v-model="form.category_name_bn" :class="{'b-danger': form.errors.has('category_name_bn')}"  placeholder="Category Name Bangla" />
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Category Icon</label>
                                        <input type="text" class="form-control" v-model="form.category_icon" :class="{'b-danger': form.errors.has('category_icon')}"  placeholder="Category Icon" />
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Category Image</label>
                                        <input type="file" @change="categoryImage($event)" :class="{'b-danger': form.errors.has('category_image')}"  class="form-control" required />
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
    name: "Category",
    data: function (){
        return{
            form: new Form({
                'id'                :null,
                'category_name_en'  :null,
                'category_name_bn'  :null,
                'category_icon'     :null,
                'category_image'    :null,
            }),
            editMode: false,
        }
    },
    mounted() {
        return this.$store.dispatch("getCategories")
    },
    methods:{
        formReset(){
            this.form.reset();
            this.editMode = false;
        },
        categoryImage($event){
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
                    this.form.category_image = event.target.result
                };
                reader.readAsDataURL(file);
            }
        },
        addCategory(){
          this.form.post('api/v1/category/store')
              .then(()=>{
                  this.form.reset();
                  this.$store.dispatch("getCategories")
                  toastr.options.closeButton = true;
                  toastr.success('Category Successfully Created')
              }).catch(()=>{

            })
        },
        editCatogory(slug){
            axios.get('api/v1/category/edit/'+slug)
                .then((res)=>{
                    this.form.reset();
                    this.form.fill(res.data.data);
                    this.editMode = true;
                })
        },
        updateCategory(){
            this.form.put('api/v1/category/update/'+ this.form.id)
                .then((res)=>{
                    this.$store.dispatch("getCategories");
                    this.form.reset();
                    this.editMode = false;
                    toastr.options.closeButton = true;
                    toastr.success('Category Successfully Updated')
                })
        },
        deleteCategory:function (id){

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
                    axios.delete('api/v1/category/delete/'+id)
                        .then(()=>{
                            this.$store.dispatch("getCategories");
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
            return (this.getCategories.length < 1);
        }
    },

    computed:{
        getCategories(){
            return this.$store.getters.getCategories;
        }

    }
};
</script>

<style scoped></style>
