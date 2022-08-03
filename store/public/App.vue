<template>
  <main class="container mt-5" >
    <h3 class="mb-5">Gattino</h3>

  <div class="d-flex flex-wrap" v-for="goods in this.goods">

      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 ">{{ goods.name }}</h4>
        </div>
        <div class="card-body">
          <img :src="`images/${goods.name}.jpg`" class="img-thumbnail">
          <ul class="fontMedium list-unstyled mt-3 mb-4">
            <li>Breed     -  {{ goods.breed }}</li>
            <li>Age       - {{ goods.age }} month</li>
            <li>Character -{{ goods.character_cat}} </li>
            <li>Soldi     - {{ goods.soldi }}</li>
          </ul>
          <div class="centerQ">
            <a class="btn btn-primary" :href="`/product/${ goods.id }`">Detail</a>
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
      try {
        const response = await fetch("http://mysite.test/app");
        console.log(response);
        this.goods = await response.json();
        console.log(this.goods);
      } catch (e) {
        console.error("Fetching error");
      }
    },
  },


  mounted() {
    this.fetchGoods();
  },

}

</script>





<style >

</style>