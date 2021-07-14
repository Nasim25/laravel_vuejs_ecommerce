<template>
    <div class="row animated fadeInUp">

        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-content">
                    <form @submit.prevent="addProduct">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Brand Select <span class="text-danger">*</span></label>
                                <select class="form-control" v-model="form.brand_id" :class="{'b-danger': form.errors.has('brand_id')}">
                                    <option v-for="brand in getBrands" :value="brand.id" :key="brand.id" >{{ brand.brand_name_en }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Category Select <span class="text-danger">*</span></label>
                                <select class="form-control" v-model="form.category_id" :class="{'b-danger': form.errors.has('category_id')}" >
                                    <option v-for="category in getCategory" :value="category.id" :key="category.id" @click="categoryBySubcategory(category.id)">{{ category.category_name_en }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">SubCategory Select <span class="text-danger">*</span></label>
                                <select class="form-control" v-model="form.subcategory_id" :class="{'b-danger': form.errors.has('subcategory_id')}">
                                    <option v-for="subcategory in subcategories" :value="subcategory.id" :key="subcategory.id" @click="subcategoryBySusubbcategory(subcategory.id)">{{ subcategory.subcategory_name_en }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Sub Sub Category Select <span class="text-danger">*</span></label>
                                <select class="form-control" v-model="form.subsubcategory_id" :class="{'b-danger': form.errors.has('subsubcategory_id')}">
                                    <option v-for="subsubcategory in subsubcategories" :value="subsubcategory.id" :key="subsubcategory.id">{{ subsubcategory.subsubcategory_name_en }}</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Product Name EN <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" v-model="form.product_name_en" id="inputMaxLength" placeholder="Product name English" maxlength="20" :class="{'b-danger': form.errors.has('product_name_en')}">
                               
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Product Name BN <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" v-model="form.product_name_bn" :class="{'b-danger': form.errors.has('product_name_bn')}" id="inputMaxLength" placeholder="Product Name Bangla" maxlength="20">
                                
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Product Code  <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputMaxLength" v-model="form.product_code" placeholder="Product Code" maxlength="20" :class="{'b-danger': form.errors.has('product_code')}">
                                
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Product Quantity  <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputMaxLength" v-model="form.product_qty"  placeholder="Product Quantity" :class="{'b-danger': form.errors.has('product_qty')}">
                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Product Tag En  <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputMaxLength" v-model="form.product_tags_en" placeholder="Product Tag English" :class="{'b-danger': form.errors.has('product_tags_en')}">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Product Tag Bn  <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputMaxLength" placeholder="Product Tag Bangla" v-model="form.product_tags_bn" :class="{'b-danger': form.errors.has('product_tags_bn')}" >
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Product Size En  <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" v-model="form.product_size_en" id="inputMaxLength" placeholder="Product Size English" :class="{'b-danger': form.errors.has('product_size_en')}">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Product Size Bn  <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputMaxLength" placeholder="Product Size Bangla" v-model="form.product_size_bn" :class="{'b-danger': form.errors.has('product_size_bn')}">
                                
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Product Color En  <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputMaxLength" placeholder="Product Color English" v-model="form.product_color_en" :class="{'b-danger': form.errors.has('product_color_en')}">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Product Color Bn  <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputMaxLength" placeholder="Product Color Bangla" v-model="form.product_color_bn" :class="{'b-danger': form.errors.has('product_color_bn')}">
                                
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Product Selling Price  <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputMaxLength" placeholder="Selling Price" v-model="form.selling_price" :class="{'b-danger': form.errors.has('selling_price')}">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Product Discount Price  <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputMaxLength" placeholder="Discount Price" v-model="form.discount_price" :class="{'b-danger': form.errors.has('discount_price')}">
                                
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Main Thambnail  <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" @change="singleImage($event)" :class="{'b-danger': form.errors.has('product_thambnail')}">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Multiple Image  <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" multiple @change="multiImage($event)" :class="{'b-danger': form.errors.has('multi_image')}" >
                                
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="short_descp_en" class="control-label">Short Description English</label>
                               <vue-editor v-model="form.short_descp_en"></vue-editor>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Short Description Bangla</label>
                                <vue-editor v-model="form.short_descp_bn"></vue-editor>
                                
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="long_descp_en" class="control-label">Long Description English</label>
                                <vue-editor v-model="form.long_descp_en"></vue-editor>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputMaxLength" class="control-label">Long Description Bangla</label>
                               
                                <vue-editor v-model="form.long_descp_bn"></vue-editor>
                            </div>
                        </div>
                        
                        <div class="col-md-6" style="margin-top:25px;">
                            <div class="form-check">
                            <input class="control-label" type="checkbox" v-model="form.hot_deals" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Hot Deals
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" v-model="form.featured">
                            <label class="form-check-label" for="flexCheckDefault">
                                Featured
                            </label>
                            </div>
                        </div>

                        <div class="col-md-6" style="margin-top:25px;">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" v-model="form.special_offer">
                            <label class="form-check-label" for="flexCheckDefault">
                                Special Offer
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" v-model="form.special_deals">
                            <label class="form-check-label" for="flexCheckDefault">
                                Special Deals
                            </label>
                            </div>
                        </div>

                        <div class="col-md-6" style="margin-top:30px;">
                            <input type="submit" class="btn btn-md btn-success" value="Add Product" >
                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import { VueEditor } from "vue2-editor";
export default {
    components: {
    VueEditor
  },
    name: "ProductCreate",
    data(){
        return{
            form: new Form({
                'id'                :null,
                'brand_id'          :null,
                'category_id'       :null,
                'subcategory_id'    :null,
                'subsubcategory_id' :null,
                'product_name_en'   :null,
                'product_name_bn'   :null,
                'product_code'      :null,
                'product_qty'       :null,
                'product_tags_en'   :null,
                'product_tags_bn'   :null,
                'product_size_en'   :null,
                'product_size_bn'   :null,
                'product_color_en'  :null,
                'product_color_bn'  :null,
                'selling_price'     :null,
                'discount_price'    :null,
                'short_descp_en'    :null,
                'short_descp_bn'    :null,
                'long_descp_en'     :null,
                'long_descp_bn'     :null,
                'product_thambnail' :null,
                'hot_deals'         :null,
                'featured'          :null,
                'special_offer'     :null,
                'special_deals'     :null,
                'multi_image' :[],
            }),
            subcategories:{},
            subsubcategories:{}
        }
    },

    mounted(){
        this.$store.dispatch("getBrands");
        this.$store.dispatch("getCategories");
    },
    computed:{
        getBrands(){
            return this.$store.getters.getBrands;
        },
        getCategory(){
            return this.$store.getters.getCategories;
        }
        
        // brandArrar(){
        //     return _.map(this.brands,function(num,key){
        //          return num.brand_name_bn
        //         })
        // },
    },
    methods:{
       categoryBySubcategory(id){
            axios.get('api/v1/subcategory/getById/'+id)
            .then((res)=>{
                this.subcategories =  res.data.data;
            })
        },
        subcategoryBySusubbcategory(id){
            axios.get('api/v1/subsubcategory/getByid/'+id)
            .then((res)=>{
                this.subsubcategories =  res.data.data;
            })
        },
        singleImage(event){
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
                         this.form.product_thambnail = event.target.result
                     };
                     reader.readAsDataURL(file);
                 }
            },
        multiImage(e){
            
            var selectedFiles = e.target.files;
            for (let i = 0; i < selectedFiles.length; i++) {
                this.form.multi_image.push(selectedFiles[i]);
            }
            for (let i = 0; i < this.form.multi_image.length; i++) {
                let reader = new FileReader();
                reader.onload = (e) => {
                    this.form.multi_image[i].src = reader.result;
                };
                reader.readAsDataURL(this.form.multi_image[i]);
            }

                
            },
        addProduct(){
            this.form.post('api/v1/product/store')
                        .then((res)=>{
                            this.form.reset();
                            console.log(res.data);
                            toastr.options.closeButton = true;
                  toastr.success('Product Successfully Created')
                        })
        }

    }
}
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style scoped>

</style>
