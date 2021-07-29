export default {
    state: {
        brands:[],
        categories:[],
        subcategories:[],
        subsubcategories:[],
        products:[],
        slider:[],

    },
    getters:{
        getBrands(state){
            return state.brands
        },
        getCategories(state){
            return state.categories;
        },
        getSubcategories(state) {
            return state.subcategories;
        },
        getSubsubcategory(state){
            return state.subsubcategories;
        },
        getSliders(state){
            return state.slider;
        },

        
    },
    actions:{
        getBrands(data){
            axios.get("api/v1/brand").then((res)=>{
                data.commit("brands",res.data.data)
            }).catch((error)=>{

            })
        },
        getCategories(data) {
            axios.get('api/v1/category').then((res)=>{
                data.commit("categories",res.data.data)
            }).catch((res)=>{

            })
        },
        getSubcategories(data) {
            axios.get('api/v1/subcategory').then((res)=>{
                data.commit("subcategories",res.data.data)
            }).catch((res)=>{

            })
        },
        getSubsubcategory(data) {
            axios.get('api/v1/subsubcategory').then((res)=>{
                data.commit("subsubcategories",res.data.data);
            })
        },
        getSliders(data){
            axios.get('api/v1/slider/index').then((res)=>{
                data.commit("sliders",res.data.data);
            })
        },

        
    },
    mutations: {
        brands(state,data){
            return state.brands = data;
        },
        categories(state,data){
            return state.categories = data;
        },
        subcategories(state,data){
            return state.subcategories = data;
        },
        subsubcategories(state,data){
            return state.subsubcategories = data;
        },
        sliders(state,data){
            return state.slider = data;
        },

    },

}
