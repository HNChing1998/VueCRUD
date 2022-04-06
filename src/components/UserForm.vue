<template>

  <div class="h-screen flex items-center justify-center" >
     
      <form class="">
          <!--FULLNAME-->
          <div class="">
            <label>Fullname
            <input type="text"  placeholder="Enter fullname" class="px-8  w-full border rounded py-2 text-gray-700 focus:outline-none items-center">
          </label>
          </div>
          <!--GENDER-->
          <div>
            <label class="">Email
            <select>
                <option>Female</option>
                <option>Male</option>
            </select>
          </label>
          </div>
           <!--INSTITUTE-->
          <div>
            <label>Institute
            <select>
                <option>Institute of Advanced Studies</option>
                <option>Institute of Aquatic and Applied Sciences </option>
                <option>Institute of Computing</option>
                <option>Institute of Leadership, Entrepreneurship and Good Governance</option> 
            </select>
          </label>
          </div>
          <!--Corse/Program-->
          <div>
            <label>Programs
            <select>
                <h3>IC</h3>
                <option>Bachelor of Science in Information System</option>
                <option>Bachelor of Science in Information Technology</option>
                <option>Bachelor of Science in Agro-Forestry</option>
                <option>Bachelor of Science in Fishiries and Aquatic Science</option>
                <option>Bachelor of Science in Food Technology</option>
                <option>Bachelor of Public     Administration </option>
                <option>Bachelor of Science in Disaster Resiliency and management</option>
                <option>Bachelor of Science in Entrepreneurship</option>

                <option>Bachelor of Science in Social Work</option>
                <option>Bachelor of Science in Tourism Management</option>
                <option>Bachelor of Arts    in Communication</option>
                <option>Bachelor of Secondary  Education</option>
                <option>Bachelor of Technology and Livelihood Education </option>
                
                
                 
            </select>
          </label>
          </div>
            <!--TYPE:ADMIN/USER-->
          <div>
            <label>User type
            <select type-text class="form control">
                <option></option>
                <option><b>Admin</b></option>
                <option><b>User</b></option>
            </select>
          </label>
          </div>
           <!--EMAIL-->
          <div>
            <label>Email
            <input type="email" class="form-control" placeholder="Enter email address">
          </label>
          </div>
          <!--PASSWORD-->
          <div>
            <label>Password
            <input type="password" class="form-control" placeholder="*********">
          </label>
          </div>
          
          
        

      </form>
  </div>
</template>

<script>
export default {
    name : 'UserForm'

}
</script>

<style>

</style>