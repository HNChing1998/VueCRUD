<template>
<form class= "flex justify-center">
  <div class="min-h-full w-1/2   text-gray-800 antialiased px-4 py-30  sm:py-12 border-width:30px">
        <div class="relative py-3 sm:max-w-xl mx-auto text-center ">
            <div class="relative mt-4 bg-white shadow-md sm:rounded-lg text-left">
                <div class="h-2 bg-green-700 rounded-t-md" ></div>
                <div class="py-6 ps-8">
                      <center><img src="../assets/dnsc_bg.png" id="img">
                              <span id="signup">Sign up Account</span>
                      </center>
                    <div class="mx-4">
                      <div class="">
                        <label class="block font-normal ml-1">Fullname</label>
                        <input type="text" placeholder="Fullname" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-green-600 rounded-md text-gray-500">
                    </div>
                    <label class="block mt-3 font-normal ml-1">Gender</label>
                    <div class="">
                        <select class="border w-full h-100 px-3 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-green-600 rounded-md text-gray-500">
                       <option value="">-- Choose Gender--</option>
                        <option value="">Female</option>
                        <option value="">Male</option>
                      </select>
                    </div>
                     <label class="block mt-3 font-normal ml-1">Email</label>
                    <div class="">
                        <input type="email" placeholder="Email" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-green-600 rounded-md text-gray-500">
                    </div>
                     <label class="block mt-3 font-normal ml-1">Password</label>
                    <div class="">
                        <input type="password" placeholder="Password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-green-600 rounded-md text-gray-500">
                    </div>
                    <div></div>
                     
                    <div class="">
                      <label class="block mt-3 font-normal ml-1">Institute</label>
                       <select class="border w-full h-100 px-3 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-green-600 rounded-md text-gray-500">
                          <option value="">-- Choose Institute--</option>
                        <option value="">Institute of Aquatic and Applied Sciences</option>
                        <option value="">Institute of Computing</option>
                         <option value="">Institute of Leadership, Entrepreneurship and Good Governance</option>
                        <option value="">Institute of Teacher Education</option>
                       </select>
                    </div>
                     <label class="block mt-3 font-normal ml-4">Type: </label>
                    <div class="">
                      <select class="border w-full h-100 px-3 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-green-600 rounded-md text-gray-500">
                       <option value="">-- Choose Type--</option>
                        <option value="">Student</option>
                        <option value="">Instructor</option>
                      </select>
                       
                    </div>
                     <div class="flex justify-center items-baseline mx-4">
                        <button class="mt-4 w-full bg-green-700 text-white py-2 px-6 rounded-lg">SIGNUP</button>
                    </div>
                    <div class="flex justify-center items-baseline">
                       
                        <router-link class="text-sm hover:underline mt-4 mr-6 nav-link" :to="{name: 'LoginForm'}">Have Account? <span class="click">Click Here!</span> </router-link>
                        

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
  font-size: 35px;

}
.click{
  color: blue;
}

</style>