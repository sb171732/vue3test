import { createStore } from 'vuex'

export default createStore({
  state: {
    counter:0,
    users:[]
  },
  getters: {
  },
  mutations: {
    inc(state){
       state.counter++  
    },
    dec(state){
       state.counter--  
    },
    set_users(state, users){
       state.users = users
    }
  },
  actions: {
    Inc({commit}){
      commit('inc') 
      // console.log(this.state.counter++)
    },
    Dec({commit}){
      commit('dec') 
      // console.log(this.state.counter--)
    },
    Select({commit}){
      var formdata = new FormData();
      formdata.append("select", "");
      formdata.append("table", "users");
      var requestOptions = {
        method: 'POST',
        body: formdata,
        redirect: 'follow'};
   
      fetch("http://localhost/mydb/index.php", requestOptions)
        .then(response => response.json())
        .then(result => {
         commit('set_users', result);
           } )
        .catch(error => console.log('error', error));
    }
  },
  modules: {
  }
})
