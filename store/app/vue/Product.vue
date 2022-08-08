<template>
  <main class="container col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p9-4 d-flex flex-column position-static" >
        <strong class="d-inline-block mb-2 text-primary fontBig"> {{ product.name }} </strong>
        <h3 class="mb-0">About me </h3>
        <p class="card-text marginb-2" > {{ product.story }} </p>
        <div class="marginb-1">Age - {{ product.age }} month</div>
        <p class="card-text marginb-1"> Character - {{ product.character_cat }}  </p>
        <p class="card-text marginb-1"> Soldi - {{ product.soldi }} </p>
        <a class="btn2 btn2-outline-primary" :href="`/contact/${ product.name }`">Take me</a>
        <div class="col-auto d-none d-lg-block">
          <img id="object-position-1" :src="`/images/${ product.name }.jpg`" class="img-product" width="300" height="214">
        </div>
      </div>
    </div>
  </main>
</template>




<script>
export default {
  name: "product",
  props:{
    id:{
      type: Number,
      isRequired: true,
    },
  },
  data() {
    return {
      product: [
      ],
    }
  },

  methods: {
    async fetchProduct() {
      try {
        const response = await fetch(`http://mysite.test/prod/${this.id}`);
        this.product = await response.json();
      } catch (e) {
        console.error("Fetching error");
      }
    },
  },

  mounted() {
    this.fetchProduct();
  },
}
</script>





<style >

</style>