@php
  $locations = ["Cebu", "Manila", "Davao"];
 @endphp

<div class="flex flex-cols gap-10 mt-4 justify-center lg:justify-start md:ml-4 xl:w-[72rem] xl:mx-auto"> 

  <div class="
      text-sm text-gray-600 py-2 px-10 rounded-md bg-light-gray
      lg:p-3">Job Type &#x25BE
      @foreach($locations as $location)<div></div>@endforeach
    </div>
  <div class="
  text-sm text-gray-600 py-2 px-10 rounded-md bg-light-gray
   lg:p-3">Location &#x25BE
    @foreach($locations as $location)<div></div>@endforeach
   </div>
  <div class="
  text-sm text-gray-600 py-2 px-10 rounded-md bg-light-gray
   lg:p-3">Company &#x25BE
    @foreach($locations as $location)<div></div>@endforeach
  </div>

</div>

<script>
  
     /** document.getElementById('address-js').addEventListener('click', function(event) {
      let url = new URL(window.location.href);
      url.searchParams.set('tag', 'AK');
      window.location.href = url;
  });**/
</script>