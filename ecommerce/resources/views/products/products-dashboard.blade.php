<x-branch-layout>
   <style>
      .material-symbols-rounded {
        font-variation-settings:
        'FILL' 0,
        'wght' 300,
        'GRAD' -25,
        'opsz' 48
      }
      </style>
      
   {{-- Sidebar(Filter Mobile)  --}}
   <div id="background" class="absolute w-full opacity-1 -z-1 h-full bg-black/50"></div>
   <div id="sidebar" class="fixed w-[60%] h-[90%] overflow-scroll -z-1 -left-9 opacity-1 bg-white">
      <button id="close" class="relative top-2 left-[80%]">
         <span class="material-symbols-rounded text-[2.5rem]">close</span>
      </button>
      <div class="ml-5">
         <h1 class="font-serif text-lg mb-2">Search</h1>
         <a href="#"><span class="material-symbols-rounded absolute top-[5.2rem] left-52 text-black/60">search</span></a><input type="text" class="border-0 border-b-[1.5px] focus:outline-none focus:ring-0 focus:border-black border-black/60 rounded-md mb-9" placeholder="Necklace of Darkness">
         <h1 class="font-serif text-lg">Categories</h1>
         <div class="overflow-scroll w-[85%] h-52 mb-8">
            <ul class="mt-2 ml-4 text-black/80">
               <li class="mt-4"><a href="#">Necklace Light</a></li>
               <li class="mt-4"><a href="#">Necklace Dark</a></li>
               <li class="mt-4"><a href="#">Liontin Purif</a></li>
               <li class="mt-4"><a href="#">Alchemist Engine</a></li>
               <li class="mt-4"><a href="#">Necklace Light</a></li>
               <li class="mt-4"><a href="#">Necklace Dark</a></li>
               <li class="mt-4"><a href="#">Liontin Purif</a></li>
               <li class="mt-4"><a href="#">Alchemist Engine</a></li>
            </ul>
         </div>
         <h1 class="font-seirf text-lg mb-2">Types</h1>
         <div class="mb-5">
            <ul class="mt-2 ml-4 text-black/80">
               <li class="mt-4"><a href="#">Necklace</a></li>
               <li class="mt-4"><a href="#">Liontin</a></li>
               <li class="mt-4"><a href="#">Ring</a></li>
            </ul>
         </div>
      </div>
   </div>
   {{-- Filter --}}
   <div class="container max-w-full bg-slate-300">
      <div class="flex p-4">
         <span id="single" class="material-symbols-rounded cursor-pointer">grid_view</span>
         <span id="multiple" class="material-symbols-rounded cursor-pointer ml-3">view_list</span>
         <a href="#" id="filter" class="text-md font-serif ml-auto"><span class="material-symbols-rounded">filter_alt</span><span class="relative -top-1">Filters</span></a>
      </div>
   </div>
   {{-- Content --}}
   <div class="container mt-6 ml-5 handphone:max-w-[90%] tablet:max-w-[92%] laptop:max-w-[95%]">
      <div id="sort" class="grid grid-cols-2 tablet:grid-cols-3 gap-4">
        <x-content-product konten="Necklace"/>
        <x-content-product konten="Ring"/>
        <x-content-product konten="Liontin"/>
        <x-content-product konten="Bracelet"/>
      </div>
   </div>
   <div id="solo" class="container hidden mt-6 ml-10 handphone:max-w-[80%] tablet:max-w-[82%] laptop:max-w-[95%]">
      <div class="grid grid-cols-1 tablet:grid-cols-1 gap-4">
         <div class="bg-slate-200 handphone:grid tablet:hidden">
            <span class="material-symbols-rounded absolute text-3xl bg-slate-100 mt-3 ml-[0.5rem] cursor-pointer handphone:rounded-full tablet:rounded-none">favorite</span>
            <img class="w-full" src="img/model2.jpeg" alt="">
            <p class="p-2">Cincin</p>
            <p class="text-sm text-black/85 p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam neque repellat, non ex cumque, quis obcaecati tempora porro hic consequatur impedit facere nisi numquam repudiandae ullam corrupti. Non accusamus a incidunt nulla eos, cumque sint et. Eos harum unde dolorem deserunt tempora accusantium, quod dolore molestias, voluptate quis et aperiam.</p>
            <p class="p-2">$192.80</p>
            <p class="text-md bg-blue-400 p-2 text-center text-white"><a href="#">Add To Cart</a></p>
         </div>
         <div class="bg-slate-200 handphone:hidden tablet:flex">
            <div class="w-fit my-auto block">
            <span class="material-symbols-rounded absolute text-2xl bg-slate-100 mt-3 ml-[0.5rem] cursor-pointer handphone:rounded-full tablet:rounded-none">favorite</span>
            <img class="w-full" src="img/model2.jpeg" alt="">
            </div>
            <div class="inline-block w-[75%]">
            <p class="p-2">Batu</p>
            <p class="text-sm text-black/85 p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam neque repellat, non ex cumque, quis obcaecati tempora porro hic consequatur impedit facere nisi numquam repudiandae ullam corrupti. Non accusamus a incidunt nulla eos, cumque sint et. Eos harum unde dolorem deserunt tempora accusantium, quod dolore molestias, voluptate quis et aperiam.</p>
            <p class="p-2">$192.80</p>
            <p class="text-md flex-row bg-blue-400 p-2 text-center text-white"><a href="#">Add To Cart</a></p>
            </div>
         </div>
         <div class="bg-slate-200 handphone:hidden tablet:flex">
            <div class="w-fit my-auto block">
            <span class="material-symbols-rounded absolute text-2xl bg-slate-100 mt-3 ml-[0.5rem] cursor-pointer handphone:rounded-full tablet:rounded-none">favorite</span>
            <img class="w-full" src="img/model.jpeg" alt="">
            </div>
            <div class="inline-block w-[75%]">
            <p class="p-2">Besi</p>
            <p class="text-sm text-black/85 p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam neque repellat, non ex cumque, quis obcaecati tempora porro hic consequatur impedit facere nisi numquam repudiandae ullam corrupti. Non accusamus a incidunt nulla eos, cumque sint et. Eos harum unde dolorem deserunt tempora accusantium, quod dolore molestias, voluptate quis et aperiam.</p>
            <p class="p-2">$192.80</p>
            <p class="text-md flex-row bg-blue-400 p-2 text-center text-white"><a href="#">Add To Cart</a></p>
            </div>
         </div>
         <div class="bg-slate-200 handphone:hidden tablet:flex">
            <div class="w-fit my-auto block">
            <span class="material-symbols-rounded absolute text-2xl bg-slate-100 mt-3 ml-[0.5rem] cursor-pointer handphone:rounded-full tablet:rounded-none">favorite</span>
            <img class="w-full" src="img/model3.jpeg" alt="">
            </div>
            <div class="inline-block w-[75%]">
            <p class="p-2">Emas</p>
            <p class="text-sm text-black/85 p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam neque repellat, non ex cumque, quis obcaecati tempora porro hic consequatur impedit facere nisi numquam repudiandae ullam corrupti. Non accusamus a incidunt nulla eos, cumque sint et. Eos harum unde dolorem deserunt tempora accusantium, quod dolore molestias, voluptate quis et aperiam.</p>
            <p class="p-2">$192.80</p>
            <p class="text-md flex-row bg-blue-400 p-2 text-center text-white"><a href="#">Add To Cart</a></p>
            </div>
         </div>
         <div class="bg-slate-200 handphone:hidden tablet:flex">
            <div class="w-[50%] my-auto block">
            <span class="material-symbols-rounded absolute text-2xl bg-slate-100 mt-3 ml-[0.5rem] cursor-pointer handphone:rounded-full tablet:rounded-none">favorite</span>
            <img class="w-fit" src="img/model4.jpg" alt="">
            </div>
            <div class="inline-block w-[60%]">
            <p class="p-2">Perak</p>
            <p class="text-sm text-black/85 p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam neque repellat, non ex cumque, quis obcaecati tempora porro hic consequatur impedit facere nisi numquam repudiandae ullam corrupti. Non accusamus a incidunt nulla eos, cumque sint et. Eos harum unde dolorem deserunt tempora accusantium, quod dolore molestias, voluptate quis et aperiam.</p>
            <p class="p-2">$192.80</p>
            <p class="text-md flex-row bg-blue-400 p-2 text-center text-white"><a href="#">Add To Cart</a></p>
            </div>
         </div>
      </div>
   </div>
   {{-- Sidebar Content --}}
   
</x-branch-layout>
