<head>
   <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>


<form x-data="{currentPage: '1'}" class="">
   <div x-show="currentPage === '1' ">1
     
      <div @click = "currentPage= '2'">next</div>
   </div>

   <div x-show="currentPage === '2' ">2
  
      <div @click = "currentPage= '3'">next</div>
   </div>

   <div x-show="currentPage === '3' ">3

   </div>
    
</form>




<script>
   

</script>