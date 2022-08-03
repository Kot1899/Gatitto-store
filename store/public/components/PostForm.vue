<template>
  <div >
    <form @submit.prevent>
      <h4>Creating post</h4>
      <input v-model="post.title"
             class="input"
             type="text" name='naming'
             placeholder="naming">
      <input v-model="post.body"
             class="input"
             type="text" name="body"
             placeholder="body">
      <my-button
            class="btn"
            style="align-self: flex-end"
            @click="createPost">
            Creat
      </my-button>
         </form>
  </div>
</template>

<script>
import MyButton from "./UI/MyButton";
export default {
  components: {
    MyButton
  },
  data(){
    return{
      post:{
        title:'',
        body:'',
      }
    }
  },

  methods: {
    createPost() {
      this.post.id=Date.now();
          this.$emit('create', this.post), //помогает дочернему в родитель передать значения
          this.post= {
            title : '',
            body : '',
          }
    }
  }
}
</script>

<style scoped>
*{
  margin: 0px;
}

.input{
  border: 1px solid skyblue;
  padding: 8px 4px;
  margin: 8px;
}

form{
  display: flex;
  flex-direction: column;
}

</style>