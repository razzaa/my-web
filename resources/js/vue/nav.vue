<template>
<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-white h-14 shadow-4xl top-0">
  <div class="px-6 flex my-auto">
    <img class="h-16 w-78" src="https://webdev.imgix.net/images/lockup.svg" alt="logo">
    <div class="pl-10 my-auto">
      <a class="px-4 h-full" href="#">Learn</a>
      <a class="px-4 h-full" href="#">Measure</a>
      <a class="px-4 h-full" href="#">Blog</a>
      <a class="px-4 h-full" href="#">About</a>
    </div>
    <form class="my-auto">
      <input type="text" name="search" placeholder="Search..">
    </form>
  </div>
</nav>
</template>
<script>
export default {
    data: function() {
        return {
          
        }
    },
    methods : {
       
    }
}
</script>
<style scoped>
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('/assets/images/search.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}

</style>