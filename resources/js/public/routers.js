
import FrontendHome from "../components/frontend/FrontendHome";
import Product_by_category from "../components/frontend/ProductByCategory";
import ProductView from "../components/frontend/ProductView";

export const routes = [
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
