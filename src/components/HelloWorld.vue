<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
     <ul>
      <li v-for="u in users" :key="u.id">
         {{  u.fio  }}
      </li>
     </ul>    
  </div>
</template>

<script>

import store from '../store/index.js'
export default {
  name: 'HelloWorld',
  computed:{
     counter(){
        return store.state.counter
     },
     users(){
        return store.state.users
     }
  },
  methods:{
    Add(){
       store.dispatch('Inc')
    },
    Rem(){
       store.dispatch('Dec')
    }
  },
  props: {
    msg: String
  },
  created(){
    store.dispatch('Select')
       
         
 
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
