import AdminHome from "./components/backend/Home.vue";
import FrontendHome from "./components/frontend/FrontendHome";
import BrandIndex from "./components/backend/brand/Index";
import Category from "./components/backend/category/Category";
import Subcategory from "./components/backend/subcategory/Subcategory";
import Subsubcategory from "./components/backend/subsubcategory/Subsubcategory";
import ProductCreate from "./components/backend/product/ProductCreate";
import ProductList from "./components/backend/product/ProductList";
import slider from "./components/backend/slider/slider";
import Product_by_category from "./components/frontend/ProductByCategory";
import ProductView from "./components/frontend/ProductView";

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


    // frontend routes
    {
        path: '/',
        component: FrontendHome
    },
    {
        path: '/product-by-category/:cat_id',
        component: Product_by_category
    },
    {
        path: '/product-view/:product_slug_en',
        component: ProductView
    }
]
