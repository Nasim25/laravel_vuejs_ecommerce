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
                      <th>SL</th>
                      <th>Brand Eng</th>
                      <th>Brand Ban</th>
                      <th>Create At</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(brand, index) in getBrands">
                        <td>{{++index}}</td>
                      <td>{{brand.brand_name_en}}</td>
                      <td>{{brand.brand_name_bn}}</td>
                      <td>{{brand.created_at | time }}</td>
                      <td></td>
                      <td>
                          <a href="#" @click="editBrand(brand.brand_slug_en)" ><i class="fa fa-edit text-danger"></i> </a>
                          <a href="#" @click="deleteBrand(brand.brand_slug_en)" ><i class="fa fa-trash text-danger"></i> </a>
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
                <form @submit.prevent=" editMode ? updateBrand() : addBrand()">

                  <div class="form-group">
                    <label for="text">Brand Name English</label>
                    <input type="text" class="form-control"  v-model="form.brand_name_en" :class="{'b-danger': form.errors.has('brand_name_en')}"  placeholder="Brand Name English" />
                  </div>
                  <div class="form-group">
                    <label for="text">Brand Name Bangla</label>
                    <input type="text" class="form-control" v-model="form.brand_name_bn" :class="{'b-danger': form.errors.has('brand_name_bn')}"  placeholder="Brand Name Bangla" />
                  </div>
                    <div class="form-group">
                        <label for="text">Brand Image</label>
                        <input type="text" class="form-control" v-model="form.brand_image"  placeholder="Brand Image" />
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
  name: "Index",
    data: function (){
      return{
          form: new Form({
              'id'              :null,
              'brand_name_en'   :null,
              'brand_name_bn'   :null,
              'brand_image'     :null,
          }),
          editMode: false,
      }
    },
    mounted() {
        return this.$store.dispatch("getBrands")
    },
    methods:{
        formReset(){
          this.form.reset();
          this.editMode = false;
        },
        addBrand:function (){
          this.form.post('api/v1/brand/store')
              .then((res)=>{
                  this.$store.dispatch("getBrands");
                  this.form.reset();
                  toastr.options.closeButton = true;
                  toastr.success('Brand Successfully Created')
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
                this.$store.dispatch("getBrands");
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
                            this.$store.dispatch("getBrands");
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
          return (this.getBrands.length < 1);
        }
    },

    computed:{
      getBrands(){
          return this.$store.getters.getBrands;
      }

    }
};
</script>

<style scoped></style>
