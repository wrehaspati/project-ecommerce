<x-branch-layout>
    <?php 
    if(!isset($_GET['page'])){    
    ?>
    <div class="container">
        <div class="w-full mx-7 my-10">
            <img src="img/blog.jpg" class="w-fit" alt="">
        </div>
        <div id="blog1" class="p-2 ml-5 -mt-7">
            <span class="material-symbols-rounded text-base text-black/50">calendar_today</span>
            <span class="text-sm font-serif text-black/40 relative -top-1">Jun 31,2050</span>
            <p class="text-xl"><a href="#">Fakta Batu Akik Melukosa</a></p>
            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis distinctio quo deleniti
                assumenda
                ipsum ex aliquid beatae ullam quis! Natus, atque voluptatem. Rem provident dicta doloremque numquam
                culpa minus quibusdam iusto eveniet, magni quae autem reiciendis perferendis voluptate eaque in voluptas
                labore quidem alias praesentium dolorum sit ipsam laborum est.
            </p>
            <p
                class="text-lg font-serif after:content-[''] after:border-b after:border-black after:absolute after:mt-7 after:-ml-16 after:w-12">
                <a href="#">+ See Detail</a>
            </p>
        </div>
        <div class="w-full mx-7 my-10">
            <img src="img/blog.jpg" class="w-fit" alt="">
        </div>
        <div class="p-2 ml-5 -mt-7">
            <span class="material-symbols-rounded text-base text-black/50">calendar_today</span>
            <span class="text-sm font-serif text-black/40 relative -top-1">Jun 31,2050</span>
            <p class="text-xl"><a href="#">Fakta Batu Akik Melukosa</a></p>
            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis distinctio quo deleniti
                assumenda
                ipsum ex aliquid beatae ullam quis! Natus, atque voluptatem. Rem provident dicta doloremque numquam
                culpa minus quibusdam iusto eveniet, magni quae autem reiciendis perferendis voluptate eaque in voluptas
                labore quidem alias praesentium dolorum sit ipsam laborum est.
            </p>
            <p
                class="text-lg font-serif after:content-[''] after:border-b after:border-black after:absolute after:mt-7 after:-ml-16 after:w-12">
                <a href="#">+ See Detail</a>
            </p>
        </div>
    </div>
    <?php 
    }
    ?>
    <?php
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 1) {
    ?>
    <div class="container">
        <div class="w-full mx-7 my-10">
            <img src="img/blog.jpg" class="w-fit" alt="">
        </div>
        <div class="p-2 ml-5 -mt-7">
            <span class="material-symbols-rounded text-base text-black/50">calendar_today</span>
            <span class="text-sm font-serif text-black/40 relative -top-1">Jun 31,2050</span>
            <p class="text-xl"><a href="#">Fakta Batu Akik Melukosa</a></p>
            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis distinctio quo deleniti
                assumenda
                ipsum ex aliquid beatae ullam quis! Natus, atque voluptatem. Rem provident dicta doloremque numquam
                culpa minus quibusdam iusto eveniet, magni quae autem reiciendis perferendis voluptate eaque in voluptas
                labore quidem alias praesentium dolorum sit ipsam laborum est.
            </p>
            <p
                class="text-lg font-serif after:content-[''] after:border-b after:border-black after:absolute after:mt-7 after:-ml-16 after:w-12">
                <a href="#">+ See Detail</a>
            </p>
        </div>
        <div class="w-full mx-7 my-10">
            <img src="img/blog.jpg" class="w-fit" alt="">
        </div>
        <div class="p-2 ml-5 -mt-7">
            <span class="material-symbols-rounded text-base text-black/50">calendar_today</span>
            <span class="text-sm font-serif text-black/40 relative -top-1">Jun 31,2050</span>
            <p class="text-xl"><a href="#">Fakta Batu Akik Melukosa</a></p>
            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis distinctio quo deleniti
                assumenda
                ipsum ex aliquid beatae ullam quis! Natus, atque voluptatem. Rem provident dicta doloremque numquam
                culpa minus quibusdam iusto eveniet, magni quae autem reiciendis perferendis voluptate eaque in voluptas
                labore quidem alias praesentium dolorum sit ipsam laborum est.
            </p>
            <p
                class="text-lg font-serif after:content-[''] after:border-b after:border-black after:absolute after:mt-7 after:-ml-16 after:w-12">
                <a href="#">+ See Detail</a>
            </p>
        </div>
    </div>
    <?php 
        } else if($_GET['page']== 2){
    ?>
    <div class="w-full mx-7 my-10">
        <img src="img/blog.jpg" class="w-fit" alt="">
    </div>
    <div class="p-2 ml-5 -mt-7">
        <span class="material-symbols-rounded text-base text-black/50">calendar_today</span>
        <span class="text-sm font-serif text-black/40 relative -top-1">Jun 31,2050</span>
        <p class="text-xl"><a href="#">Fakta Batu Akik Melukosa</a></p>
        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis distinctio quo deleniti
            assumenda
            ipsum ex aliquid beatae ullam quis! Natus, atque voluptatem. Rem provident dicta doloremque numquam
            culpa minus quibusdam iusto eveniet, magni quae autem reiciendis perferendis voluptate eaque in voluptas
            labore quidem alias praesentium dolorum sit ipsam laborum est.
        </p>
        <p
            class="text-lg font-serif after:content-[''] after:border-b after:border-black after:absolute after:mt-7 after:-ml-16 after:w-12">
            <a href="#">+ See Detail</a>
        </p>
    </div>
    </div>
    <?php 
    }
}
    ?>
    <div class="justify-center flex">
        <div class="focus:text-black">
            <p><a href="learn?page=1">1</a></p>
        </div>
        <div class="ml-10 ">
            <p><a href="learn?page=2" class="text-black/75">2</a></p>
        </div>
    </div>
    <div class="container mt-5">
        <div class="p-2 ml-5">
            <p
                class="text-xl after:content-[''] after:absolute after:w-full after:-ml-[6.7rem] after:mt-8 after:border-b-2 after:border-black/20">
                Recent
                Post</p>
            <div class="flex mt-4">
                <div class="w-1/2">
                    <img src="img/blog.jpg" alt="">
                </div>
                <div class="ml-4">
                    <p><a href="#blog1">Fakta Batu Akik Melukosa</a></p>
                    <span class="material-symbols-rounded text-base text-black/50">calendar_today</span>
                    <span class="text-sm font-serif text-black/40 relative -top-1">Jun 31,2050</span>
                </div>
            </div>
            <div class="flex mt-4">
                <div class="w-1/2">
                    <img src="img/blog.jpg" alt="">
                </div>
                <div class="ml-4">
                    <p><a href="#">Fakta Batu Akik Melukosa</a></p>
                    <span class="material-symbols-rounded text-base text-black/50">calendar_today</span>
                    <span class="text-sm font-serif text-black/40 relative -top-1">Jun 31,2050</span>
                </div>
            </div>
            <div class="flex mt-4">
                <div class="w-1/2">
                    <img src="img/blog.jpg" alt="">
                </div>
                <div class="ml-4">
                    <p><a href="#">Fakta Batu Akik Melukosa</a></p>
                    <span class="material-symbols-rounded text-base text-black/50">calendar_today</span>
                    <span class="text-sm font-serif text-black/40 relative -top-1">Jun 31,2050</span>
                </div>
            </div>
        </div>
    </div>
</x-branch-layout>
