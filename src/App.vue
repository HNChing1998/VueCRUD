<template>
<div id="app">
  
  <router-view></router-view>
  <!--<LoginForm/>-->
  <!--<SignUp/>-->
</div> 
</template>
<script>


//import LoginForm from './components/LoginForm.vue';
//import SignUp from './components/SignUp.vue';
export default {
  components:{  
    //LoginForm,
    //SingUp
   
  },
  data() 
  {
    return{
      showPassword: false
    }
  }
}
</script>
