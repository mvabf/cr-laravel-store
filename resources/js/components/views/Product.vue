<template lang="">
    <div>
        <nav-component></nav-component>

        <div class="container mb-5 mt-5">
            <div class="row">
                <!-- cards -->
                <div v-for="product in products" :key="index" class="col-md-4">
                    <div @click="getClickedProduct(product)" class="card mt-3">
                        <div class="product align-items-center p-2 text-center">
                            <img :src="product.image" alt="image" class="product-image">
                            <h5 class="product-text mt-2">{{ product.title }}</h5>
                            <!-- info -->
                            <div class="mt-3 info">
                                <span class="text d-block">{{ product.category }}</span>
                            </div>

                            <div class="cost mt-3 text-dark">
                                <span>$ {{ product.price }}</span>
                            </div>

                            <div class="star mt-3 align-items-center">
                                <i v-for="index in Math.round(product.rating.rate)" :key="index" class="bi bi-star-fill"></i>
                            </div>

                            <div class="add-cart p-3 text-center text-white mt-3 cursor">
                                <span class="text-uppercase"> Add to cart </span>
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
  props: {
    products: Array,
  },
  data() {
      return {
          product: {}
      }
  },
  methods: {
      getClickedProduct(product) {
          console.log(product);
      }
  }
};
</script>
<style>

.product-image {
    width: 160px;
    height: 200px;
}

.product-text {
    font-size: 14px;
}

.container {
    margin-top: 110px !important;
}

.card {
    border: none;
    outline: none;
    background-color: #fff;
    border-radius: 20px;
    transition: transform .3s;
}

.card:hover {
    transform: translateY(-15px);
    transition: transform .3s;
}

.product {
    font-size: 13px;
    color: #cbcbcb
}

.info {
    line-height: 17px;
}

.cost {
    font-size: 13px;
}

.star {
    color: #fbc02d
}

</style>
