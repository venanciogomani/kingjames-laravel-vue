<template>
<div class="container">
    <div class="row">

        <MultipleFilter />
        <div class="col-9">
            <PopularCategories/>
            <ShopByBrands/>
            <ProductsHome />
        </div>
    </div>

     <CategoriesProducts
            v-for="category in categories"
            :key="category.id"
            :category="category"
    />

</div>

</template>
<script>
import { mapState } from 'vuex';

export default {
    components: {
        PopularCategories: () => import('../comonents/Category/PopularCategories'),
        CategoriesProducts: () => import('../comonents/Category/CategoriesProducts'),
        ProductsHome : () => import('../comonents/Product/Products.vue'),
        ShopByBrands: () => import('../comonents/Brand/ShopByBrands')
    },
    computed:{
      ...mapState("categoriesStoreIndex",["categories"])
    }
}
</script>
