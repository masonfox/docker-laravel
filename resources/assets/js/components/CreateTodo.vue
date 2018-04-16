<template>
  <form @submit.prevent="submit">
    <input type="text" class="form-control" v-model="todo" required>
  </form>
</template>

<script>
export default {
  name: 'CreateTodo',
  data () {
    return {
      todo: ''
    }
  },
  methods: {
    submit () {
      
    }
  }
}
</script>
