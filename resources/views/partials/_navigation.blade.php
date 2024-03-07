
{{-- full/medium screen --}}
<div class="flex items-center justify-around xl:justify-center mb-10 mt-7 xl:gap-10 md:hidden">
    
    <div class="flex items-center gap-20 xl:gap-10">
        <a class="text-white font-bold" href="/">
            Perfect parts
        </a>
        
        <input class="bg-slate-200 bg-opacity-50 text-black placeholder:text-black
                      w-96 px-7 py-1 focus:outline-none xl:hidden"
                      type="text" name="search" placeholder="ieskoti">

        <i onclick="toggleSearch()" 
        class="fa-solid fa-magnifying-glass hidden xl:block text-white"></i>
    </div>
        
    

    <div class="flex gap-10 text-white font-semibold">
        <a href="/">
            Baldinės plokštės
        </a>
        <a href="/">
            Stiklo gaminiai
        </a>
        <a href="/">
            Kitos dalys
        </a>
        <a href="/company/1">
            D.U.K
        </a>
        <a href="/">
            Prisijungti
        </a>
    </div>
</div>

{{-- full/medium screen end --}}

{{-- medium screen search --}}
<div id="searchBar" class="absolute w-full text-center top-[55px] hidden">
    <input class="bg-slate-200 bg-opacity-50 text-black placeholder:text-black
                      w-96 px-7 py-1 focus:outline-none"
                      type="text" name="search" placeholder="ieskoti">
</div>
{{-- medium screen search end--}}


<script>
    const searchBar = document.getElementById("searchBar");

    function toggleSearch()
    {
        searchBar.classList.toggle("hidden");
    }

</script>


{{-- small screen --}}
<div class=" items-center justify-between m-3 hidden md:flex px-5">
    <div>
        <i class="fa-solid fa-font-awesome cursor-pointer text-xl text-white"></i>
    </div>
    <div>
        <i onclick="onOpenMenu()" id="openMenuButton"
         class="fa-solid fa-bars cursor-pointer text-xl text-white"></i>
        <i onclick="onCloseMenu()" id="closeMenuButton"
         class="fa-solid fa-x text-xl hidden text-white"></i>
    </div>
</div>
{{-- small screen end --}}

{{-- hamburger screen --}}
<div id="navItems"
class="flex flex-col hidden items-center justify-around absolute
 bg-sky-500 text-white right-0 w-1/2 h-1/3 text-lg">

    <input class="bg-slate-200 bg-opacity-50 text-black placeholder:text-black
        w-4/5 px-7 py-1 focus:outline-none"
        type="text" name="search" placeholder="ieskoti">   
    <a href="/">
        Baldinės plokštės
    </a>
    <a href="/">
        Stiklo gaminiai
    </a>
    <a href="/">
        Kitos dalys
    </a>
    <a href="/company/1">
        D.U.K
    </a>
    <a href="/">
        Prisijungti
    </a>

</div>
{{-- hamburger screen end--}}

<script>
    const openBtn = document.getElementById("openMenuButton");
    const closeBtn = document.getElementById("closeMenuButton");
    const navItems = document.getElementById("navItems");

    function onOpenMenu()
    {
        openBtn.classList.add("hidden");
        closeBtn.classList.remove("hidden");

        navItems.classList.remove("hidden");
    }
    function onCloseMenu()
    {
        closeBtn.classList.add("hidden");
        openBtn.classList.remove("hidden");

        navItems.classList.add("hidden");
    }
</script>