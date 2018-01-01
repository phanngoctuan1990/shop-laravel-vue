<template>
    <div>
        <div class="w3-container w3-padding-32 w3-theme-d1">
            <h1>Products</h1>
        </div>
        <div class="w3-row-padding w3-theme">
            <div v-for="product in products" class="w3-third w3-section">
                <div class="w3 card-4">
                    <img :src="product.file" style="width:100%;">
                    <div class="w3-container w3-white">
                        <h4>{{ product.name }}</h4>
                        <p>{{ product.details }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3-container w3-theme-d4">
            <p class="w3-large"></p>
        </div>
    </div>
</template>
<style>
    
</style>
<script>
export default {
    data () {
        return {
            products: [],
            endpoint: 'api/products'
        };
    },
    created () {
        this.fetchProducts();
    },
    methods: {
        fetchProducts () {
            axios.get(this.endpoint).then(response => {
                this.products = response.data.data;
            });
        }
    }
}
</script>
