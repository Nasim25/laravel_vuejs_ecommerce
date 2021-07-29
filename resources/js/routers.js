import AdminHome from "./components/backend/Home.vue";
import BrandIndex from "./components/backend/brand/Index";
import Category from "./components/backend/category/Category";
import Subcategory from "./components/backend/subcategory/Subcategory";
import Subsubcategory from "./components/backend/subsubcategory/Subsubcategory";
import ProductCreate from "./components/backend/product/ProductCreate";
import ProductList from "./components/backend/product/ProductList";
import slider from "./components/backend/slider/slider";

export const routes = [
    {
        path: '/home',
        component: AdminHome
    },
    {
      path: '/brand',
      component: BrandIndex
    },
    {
        path: '/category',
        component: Category
    },
    {
        path: '/subcategory',
        component: Subcategory
    },
    {
        path: '/subsubcategory',
        component: Subsubcategory
    },
    {
      path: '/product-create',
      component: ProductCreate
    },
    {
        path: '/product-list',
        component: ProductList
    },
    {
        path: '/slider',
        component: slider
    },

]
