<template>
    <div>
        <div class="content-header">
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li>
                        <i class="fa fa-home" aria-hidden="true"></i><a href="#">Sub-Category</a>
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
                                    <th>Category</th>
                                    <th>Sub-Category</th>
                                    <th>Sub-Sub-Category Eng</th>
                                    <th>Sub-Sub-Category Ban</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr v-for="(subsubcategory, index) in getSubsubcategory">
                                    <td>{{++index}}</td>
                                    <td>{{subsubcategory.category.category_name_en}}</td>
                                    <td>{{subsubcategory.subcategory.subcategory_name_en}}</td>
                                    <td>{{subsubcategory.subsubcategory_name_en}}</td>
                                    <td>{{subsubcategory.subsubcategory_name_bn}}</td>
                                    <td></td>
                                    <td>
                                        <a href="#" @click="editSubsubcatogory(subsubcategory.subsubcategory_slug_en)" ><i class="fa fa-edit text-primary"></i> </a>
                                        <a href="#" @click="deleteSubsubcategory(subsubcategory.subsubcategory_slug_en)" ><i class="fa fa-trash text-danger"></i> </a>
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
                                <form @submit.prevent=" editMode ? updateCategory() : addSubsubCategory()">
                                    <div class="form-group">
                                        <label>Select Category</label>
                                        <select class="form-control"  v-model="form.category_id" :class="{'b-danger': form.errors.has('category_id')}">
                                            <option v-for="category in getCategories" :value="category.id" @click="categoryBySubcategory(category.id)" >{{ category.category_name_en }} - {{ category.category_name_bn }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Sub-Category</label>
                                        <select class="form-control" v-model="form.subcategory_id" :class="{'b-danger': form.errors.has('subcategory_id')}">
                                            <option v-for="subcategory in subcategories" :value="subcategory.id" :key="subcategory.id" >{{ subcategory.subcategory_name_en }} - {{ subcategory.subcategory_name_bn }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Sub-Sub-Category Name English</label>
                                        <input type="text" class="form-control"  v-model="form.subsubcategory_name_en" :class="{'b-danger': form.errors.has('subsubcategory_name_en')}"  placeholder="Sub-Category Name English" />
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Sub-Sub-Category Name Bangla</label>
                                        <input type="text" class="form-control" v-model="form.subsubcategory_name_bn" :class="{'b-danger': form.errors.has('subsubcategory_name_bn')}"  placeholder="Sub-Category Name Bangla" />
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
    name: "Subsubcategory",
    data: function (){
        return{
            form: new Form({
                'id'                    :null,
                'category_id'           :null,
                'subcategory_id'        :null,
                'subcategory_name_en'   :null,
                'subcategory_name_bn'   :null,
                'subcategory_slug_en'   :null,
            }),
            editMode: false,
            subcategories:{},
        }
    },
    mounted() {
        this.$store.dispatch("getCategories")
        this.$store.dispatch("getSubsubcategory")
    },
    computed:{
        getCategories(){
            return this.$store.getters.getCategories;
        },
        getSubsubcategory(){
            return this.$store.getters.getSubsubcategory;
        }

    },
    methods:{
        formReset(){
            this.form.reset();
            this.editMode = false;
        },
        categoryBySubcategory(id){
            axios.get('api/v1/subcategory/getById/'+id)
            .then((res)=>{
                this.subcategories =  res.data.data;
            })
        },
        addSubsubCategory(){
            this.form.post('api/v1/subsubcategory/store')
                .then(()=>{
                    this.form.reset();
                    this.$store.dispatch("getSubsubcategory");
                    toastr.options.closeButton = true;
                    toastr.success('Sub-Category Successfully Created')
                }).catch(()=>{

            })
        },
        editSubsubcatogory(slug){
            axios.get('api/v1/subsubcategory/edit/'+slug)
                .then((res)=>{
                    this.form.reset();
                    this.form.fill(res.data.data);
                    this.editMode = true;
                })
        },
        updateCategory(){
            this.form.put('api/v1/subcategory/update/'+ this.form.id)
                .then((res)=>{
                    this.$store.dispatch("getSubcategories");
                    this.form.reset();
                    this.editMode = false;
                    toastr.options.closeButton = true;
                    toastr.success('Sub-Category Successfully Updated')
                })
        },
        deleteSubcategory:function (id){

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
                    axios.delete('api/v1/subcategory/delete/'+id)
                        .then(()=>{
                            this.$store.dispatch("getSubcategories");
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
            return (this.getSubsubcategory.length < 1);
        }
    },


};
</script>


