<template>
<form class= "flex justify-center">
    <div class="min-h-full w-1/2   text-gray-800 antialiased px-4 py-30  sm:py-12 border-width:30px">
        <div class="relative py-3 sm:max-w-xl mx-auto text-center ">
            <div class="relative mt-4 bg-white shadow-md sm:rounded-lg text-left">
                <div class="h-2 bg-green-700 rounded-t-md" ></div>
                <div class="py-6 ps-8">      
                 <center><img src="../assets/dnsc_bg.png" id="img">
                              <span id="signup">Sign in Account</span>
                </center>
                <div class="mx-4">
                    <div class="mx-4">
                        <label class="block font-normal  ml-1">Email</label>
                        <input type="email" placeholder="Email" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-green-600 rounded-md text-gray-500">
                    </div>
                    
                    <div class="mx-4">
                        <label class="block mt-3 font-normal  ml-1">Password</label>
                        <input type="password" placeholder="Password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-green-600 rounded-md text-gray-500">
                    </div>
                     <div class="flex justify-center items-baseline mx-4">
                        <button class="mt-4 w-full bg-green-700 text-white py-2 px-6 rounded-lg text-my-50">SIGN IN</button>
                    </div>
                    <div class="flex justify-center items-baseline">
                        <router-link class="text-sm hover:underline mt-4 mr-6 nav-link" :to="{name: 'SignUp'}">Create Account</router-link>
                        

                    </div>

                </div>
                    
                </div>

            </div>   
        </div>
    </div>
   
</form>


  
</template>

<script>

export default {
  name: 'LoginForm'

}
</script>

<style>
#img{
  width: 200px;
  height: 190px;
}
#signup{
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-size: 35px;}

</style>