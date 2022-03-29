<?php
session_start();
error_reporting(0);

include('../routes/dbconn.php');

if (isset($_POST["submit"])) {
  $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);
  $confirm = mysqli_real_escape_string($conn, $_POST["confirm"]);


  $check_account = mysqli_num_rows(mysqli_query($conn, "SELECT username FROM users WHERE username='$username'"));

  if ($password !== $confirm) {
    echo "<script>alert('Password did not match.');</script>";
  } elseif ($check_account > 0) {
    echo "<script>alert('Username already exists in out database.');</script>";
  } else {
    $query=mysqli_query($conn, "insert into users(username,password) 
                               value('$username','$password')");
    $result = mysqli_query($conn, $query);
     if ($query) {

    $msg="Create Successfully";
    
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
   
  }
}

  ?>
  <template>
  <v-app>
    <v-app-bar app color="blue">
      <v-toolbar-title style="color:white">
        Vue Management System
      </v-toolbar-title>
      <v-spacer> </v-spacer>
      <v-btn text class="btn" style="color:white">Home</v-btn> 
      <a href=""><v-btn text class="btn" style="color:white">Login</v-btn></a>
      
    </v-app-bar>
    <v-content>
      <v-card width="500" class="mx-auto mt-9">
        <v-card-title>Vue Logins Page</v-card-title>
        <v-card-text>
          <v-text-field label="Username" prepend-icon="mdi-account-circle"/>
           <v-text-field label="Password" :type="showPassword ? 'text': 'password' " prepend-icon="mdi-lock" :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'" @click:append="showPassword = ! showPassword"/>
           <v-text-field label="Confirm Password"/>
        </v-card-text>
        <v-divider></v-divider>
        <v-card-actions>
          <v-btn color="primary">Sign in</v-btn>
          <v-btn color="success">Sign up</v-btn>
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