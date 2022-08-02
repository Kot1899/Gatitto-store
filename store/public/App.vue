<template>
<div class="app">
  <post-form
      @create="createPostApp"
  />
  <post-list
      :posts="posts"
  />
</div>
</template>




<script>
import PostForm from "./components/PostForm";
import PostList from "./components/PostList";
export default {
  components:{
    PostList, PostForm
  },

  data() {
    return {
      posts: [
          { id:1 , title: 'some title1', body: 'some description1'},
          { id:2 , title: 'some title2', body: 'some description2'},
          { id:3 , title: 'some title3', body: 'some description3'},
          ],
    }
  },


  methods: {
   createPostApp(post){
     this.posts.push(post);//получили от ребенка и запушили в data
   }

  }
}
</script>





<style >

</style>