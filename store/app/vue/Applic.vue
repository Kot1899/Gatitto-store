<template>
  <main class="container mt-5" >
    <h3 class="mb-5">Gattino</h3>
    <div class="d-flex flex-wrap" >
        <div class="card mb-4 rounded-3 shadow-sm" v-for="one_goods in this.goods">
          <div class="card-header py-3">
            <h4 class="my-0 ">{{ one_goods.name }}</h4>
          </div>
          <div class="card-body">
            <img :src="`images/${one_goods.name}.jpg`" class="img-thumbnail">
            <ul class="fontMedium list-unstyled mt-3 mb-4">
              <li>Breed     -  {{ one_goods.breed }}</li>
              <li>Age       - {{ one_goods.age }} month</li>
              <li>Character -{{ one_goods.character_cat}} </li>
              <li>Soldi     - {{ one_goods.soldi }}</li>
            </ul>
            <div class="centerQ">
              <a class="btn btn-primary" :href="`/product/${ one_goods.id }`">Detail</a>
            </div>
          </div>
        </div>
    </div>
  </main>
</template>

<script>
export default {
  name: "GoodsList",
  data() {
    return {
      goods: [
      ],
    }
  },

  methods: {
    async fetchGoods() {
      // try {
        const response = await fetch("http://mysite.test/app");
        this.goods = await response.json();
      // } catch (e) {
      //   console.error("Fetching error");
      // }
    },
  },

  mounted() {
    this.fetchGoods();
  },
}
</script>

<style >
</style>