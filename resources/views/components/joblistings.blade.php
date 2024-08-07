<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{--parent container--}}
<div class="mt-6 lg:grid lg:grid-cols-[3fr_4fr] lg:max-w-[1280px] lg:mx-auto lg:gap-4"> 
   {{--job listing column container--}}
  <div class="flex flex-col justify-center mx-6 gap-4">

    <div id="address-js">Alaska</div>
    
  @foreach($joblistings as $joblisting)
  <a href="/?id={{$joblisting -> hashId}}">
   <article class="group relative flex flex-col p-8 rounded-lg border-2 border-gray-300 hover:cursor-pointer">
     <i class="absolute right-4 fa-regular fa-bookmark text-blue-900"></i>
     <div class="flex py-8">
      <img class="w-24" src="images/companylogo/company.png">
     </div>
     <div class="hover:group font-bold text-gray-700 mb-1 group-hover:underline">{{$joblisting -> role}}</div>
     <div class="text-md text-gray-600 mb-3">{{$joblisting -> companyname}}</div>
     <div>{{$joblisting -> jobaddress}}</div>
   </article>
  </a> 
  @endforeach
  </div>


  {{--job full description column container--}}
<div x-init="init()" class="hidden relative min-w-[380px] max-w-[460] lg:inline">  
  <article id="fullJobDesc" class="flex flex-col bg-yellow-200 ">
    @foreach($joblistingFullDesc as $joblisting)
   <div>{{$joblisting -> role}}</div>
   <div>{{$joblisting -> about}}</div>
   <div></div>
   <div></div>
   @endforeach
  </article>  
</div>
</div>
 </div>

 <script>
    function init(){
      window.addEventListener('scroll',()=>{
         const fullJobDesc = document.querySelector('#fullJobDesc');
         if(window.scrollY >= 175){
            fullJobDesc.classList.add('fixed','top-2');
         }
         else{
          fullJobDesc.classList.remove('fixed','top-2')
         }
      })

    }

  document.getElementById('address-js').addEventListener('click', function(event) {
      let url = new URL(window.location.href);
      url.searchParams.set('tag', 'AK');
      window.location.href = url;
  });
  </script>
