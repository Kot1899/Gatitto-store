<template>

  <div class="post" >
    <div>
      <div> Naming: {{post.title}} </div>
      <div> Body: {{post.body}}</div>
    </div>

    <div class="post__buttons">
      <button>DELETE </button>
    </div>
  </div>

</template>

<script>
export default {
  props: {
    post: {
      type: Object,
      required: true,
    }
  }
}
</script>

<style scoped>

*{
  margin: 0px;
}

.post{
  margin: 8px;
  padding: 8px;
  border: 2px solid teal;
  display: flex;
  align-items: center;
  justify-content: space-between;
}



</style>