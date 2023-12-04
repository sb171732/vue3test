<template>
  <h2>{{ counter }}</h2>
  <img alt="Vue logo" src="./assets/logo.png">
  <HelloWorld msg="Counter"/>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import store from './store/index'
export default {
  name: 'App',
  computed:{
    counter(){
      return store.state.counter
    }
  },
  components: {
    HelloWorld
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
