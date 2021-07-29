export default {
    state: {
        
        frontlang:'',
        category:[],
        subcategory:[],
        subsubcategory:[],
        homeslider:[],
        productHotDeal:[],
        featuredproducts:[],
        newproduct:[],
        fbrands:[],
    },
    getters:{
        
        frontlang(state){
            return state.frontlang;
        },
        category(state){
            return state.category;
        },
        subcategory(state){
            return state.subcategory;
        },
        subsubcategory(state){
            return state.subsubcategory;
        },
        homeslider(state){
            return state.homeslider;
        },
        productHotDeal(state){
            return state.productHotDeal;
        },
        getFeaturedproducts(state){
            return state.featuredproducts;
        },
        getnewProduct(state){
            return state.newproduct;
        },
        fbrands(state){
            return state.fbrands;
        },
    },
    actions:{
        
        frontlang(data){
            let la = localStorage.getItem('frontlang');
            data.commit("frontlang", la );
        },
        category(data){
            axios.get('api/api/v1/category').then((res)=>{
                data.commit("category",res.data.data);
            })
        },
        subcategory(data){
            axios.get('api/api/v1/subcategory').then((res)=>{
                data.commit("subcategory",res.data.data);
            })
        },
        subsubcategory(data){
            axios.get('api/api/v1/subsubcategory').then((res)=>{
                data.commit("subsubcategory",res.data.data);
            })
        },
        fbrands(data){
            axios.get('api/api/v1/frontend/brand').then((res)=>{
                data.commit("fbrands",res.data.data);
            })
        },
        homeslider(data){
            axios.get('api/api/v1/home/slider').then((res)=>{
                data.commit("homeslider",res.data.data);
            })
        },
        productHotDeal(data){
            axios.get('api/api/v1/frontend/hotdeal-product').then((res)=>{
                data.commit("productHotDeal",res.data.data);
            })
        },
        getnewProduct(data){
            axios.get('api/api/v1/frontend/new-product').then((res)=>{
                data.commit("newproduct",res.data.data);
            })
        },
        getFeaturedproducts(data){
            axios.get('api/api/v1/frontend/featured-products').then((res)=>{
                data.commit("featuredproducts",res.data.data);
            })
        },
    },
    mutations: {
        
        frontlang(state,data){
            return state.frontlang = data;
        },
        category(state,data){
            return state.category = data;
        },
        subcategory(state,data){
            return state.subcategory = data;
        },
        subsubcategory(state,data){
            return state.subsubcategory = data;
        },
        homeslider(state,data){
            return state.homeslider = data;
        },
        productHotDeal(state,data){
            return state.productHotDeal = data;
        },
        featuredproducts(state,data){
            return state.featuredproducts = data;
        },
        newproduct(state,data){
            return state.newproduct = data;
        },
        fbrands(state,data){
            return state.fbrands = data;
        },
    },

}
