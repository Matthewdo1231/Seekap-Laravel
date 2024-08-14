<x-layout>
    <!--To add more input create a unique id to input element and it's pen font and them to the same group id-->


 <form class="flex flex-row justify-center ">
    @csrf

   <div class="flex flex-col w-[64rem] ">

       <div class="w-[100%] mb-[-2px] flex justify-end">
        <img class="w-[50%]" src="{{asset('images/formarts/form2.jpg')}}">
      </div>

     <p class="text-2xl mx-48 font-bold">Overview</p>
     
     <div class="relative flex flex-col">
        <p class="text-lg mx-48 mt-4">Job Title</p>
        <input data-group="input" id="jobtitle-input" class="mx-48 mt-2 outline-none border-2 rounded-md p-2" placeholder="Edit jobtitle">
        <i data-group="pen" id="jobtitle-edit-js" class="fa-solid fa-pen absolute right-60 bottom-4 text-md hover:cursor-pointer"></i>
     </div>
     
     <div class="relative flex flex-col">
        <p class="text-lg mx-48 mt-4">Company Name</p>
        <input data-group="input" id="companyname-input" class="mx-48 mt-2 outline-none border-2 rounded-md p-2" placeholder="Edit jobtitle">
        <i data-group="pen" id="companyname-edit-js" class="fa-solid fa-pen absolute right-60 bottom-4 text-md hover:cursor-pointer"></i>
     </div>  

     <div class="relative flex flex-col">
        <p class="text-lg mx-48 mt-4">Job Address</p>
        <input data-group="input" id="jobaddress-input" class="mx-48 mt-2 outline-none border-2 rounded-md p-2" placeholder="Edit jobtitle">
        <i data-group="pen" id="jobaddress-edit-js" class="fa-solid fa-pen absolute right-60 bottom-4 text-md hover:cursor-pointer"></i>
     </div>  

     <div class="relative flex flex-col">
        <p class="text-lg mx-48 mt-4">Employement Type</p>
        <input data-group="input" id="jobtype-input" class="mx-48 mt-2 outline-none border-2 rounded-md p-2" placeholder="Edit jobtitle">
        <i data-group="pen" id="jobtype-edit-js" class="fa-solid fa-pen absolute right-60 bottom-4 text-md hover:cursor-pointer"></i>
     </div>  

     <div class="relative flex flex-col">   
        <p class="text-lg mx-48 mt-4">Niche</p>
        <input data-group="input" id="niche-input" class="mx-48 mt-2 outline-none border-2 rounded-md p-2" placeholder="Edit jobtitle">
        <i data-group="pen" id="niche-edit-js" class="fa-solid fa-pen absolute right-60 bottom-4 text-md hover:cursor-pointer"></i>
     </div>  
    
      <div class="flex">
        <a href="form2" class="flex w-[64rem] mx-56 mt-24 justify-end"><i class="fa-solid fa-arrow-right text-4xl text-orange-500 hover:cursor-pointer active:opacity-50"></i></a>
      </div>
       
    </div>
 </form>
</x-layout>



<script>
    let penElem = document.querySelectorAll('[data-group="pen"]');
    let inputElem = document.querySelectorAll('[data-group="input"]');


    penElem.forEach((elem)=>{
              elem.addEventListener('click',()=>{
                 showPen();
                 removeBorder();
                 activateBorder(elem.getAttribute('id'));
                 elem.classList.add('invisible');
              })
        })

    inputElem.forEach((elem)=>{
              elem.addEventListener('click',()=>{
                 removeBorder();
                 removePen(elem.getAttribute('id'));
                 elem.classList.add('border-blue-500');
              })
        })
    

    function showPen(){
        penElem.forEach((elem)=>{
              elem.classList.remove('invisible')
        })
    }    

    function removePen(id){
        let elem = (id.split('-'));
        let currentElem = document.querySelector(`#${elem[0]}-edit-js`);
        showPen();
        currentElem.classList.add('invisible');
    }

    function activateBorder(id){
        let elem = (id.split('-'));
        let currentElem = document.querySelector(`#${elem[0]}-input`);
        currentElem.focus();
        currentElem.classList.add('border-blue-500');
    }

    function removeBorder(){
        inputElem.forEach((elem)=>{
           elem.classList.remove('border-blue-500')
        })
    }

  

</script>