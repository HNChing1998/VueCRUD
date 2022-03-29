<template>
  <v-app>
    <v-app-bar app color="blue">
      <v-toolbar-title style="color:white">
        Vue Management System
      </v-toolbar-title>
      <v-spacer> </v-spacer>
      <v-btn text style="color:white">Home</v-btn> 
      <v-btn text style="color:white">Login</v-btn>
      
    </v-app-bar>
    <v-content>
      <v-card width="500" class="mx-auto mt-9">
        <v-card-title><h1 style="margin-left:170px;"> Sign In</h1></v-card-title>
        <v-card-text>
          <v-text-field label="Username" prepend-icon="mdi-account-circle"/>
           <v-text-field label="Password" :type="showPassword ? 'text' : 'password' " prepend-icon="mdi-lock" :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'" 
           @click:append="showPassword = ! showPassword"/>
        </v-card-text>
        <v-divider></v-divider>
        <v-card-actions>
          <v-btn color="primary">Sign in</v-btn>
          <v-btn color="success"><router-link to="../views/signup"> Register</router-link> </v-btn>
          
        </v-card-actions>
      </v-card> 
    </v-content>
    <v-footer dark padless>
    <v-card class="flex" flat tile>
     

      <v-card-text class="py-2 white--text text-center">
        {{ new Date().getFullYear() }} — <strong>Vue Management System</strong>
      </v-card-text>
    </v-card>
  </v-footer>
    
  </v-app>
  
</template>
<script>


export default {
  data() 
  {
    return{
      showPassword: false
    }
  }
}
</script>
