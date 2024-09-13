<div class="w-[100vw] pt-4 fixed top-0 left-0 z-50  flex justify-center items-center overflow-x-hidden px-2" id="header">
        <div class="lg:w-[80%] flex h-full w-full p-2 lg:px-4 justify-between items-center lg:flex-row flex-col ">
            <div class="lg:w-max w-full flex justify-between items-center h-full">
                <div class="w-max border-b-[2px] border-primaryColor lg:pb-2 pb-0">
                    <a href="/" class="text-primaryColor font-bold  lg:rounded-full rounded-sm lg:text-3xl text-xl">
                        Dr. Samira Koser
                    </a>
                </div>
                <div class="lg:hidden block w-max">
                    <i class="fas fa-bars text-white text-xl "
                       onclick="document.getElementById('navList').classList.toggle('hidden')"
                    ></i>
                </div>

            </div>
            <ul id="navList" class="lg:flex hidden gap-4 lg:items-center items-start lg:flex-row flex-col lg:w-max w-full lg:bg-black/0 bg-black lg:mt-0">
                <a href="/" class="lg:w-max w-full">
                    <li class="{{\Illuminate\Support\Str::contains(request()->path(), '/') ? ' bg-primaryColor font-bold' : ''}} text-white px-4 py-1.5 lg:w-max w-full  rounded-sm hover:bg-white/20 transition ease-in duration-2000 text-md">Home</li>
                </a>
                <a href="#about" class="lg:w-max w-full">
                    <li id="aboutNav" class="text-white px-4 py-1.5 lg:w-max w-full  rounded-sm hover:bg-white/20 transition ease-in duration-2000 text-md">About</li>
                </a>
                <a href="/#gallery" class="lg:w-max w-full">
                    <li class="{{\Illuminate\Support\Str::contains(request()->path(), '/gallery') ? ' bg-primaryColor font-bold' : ''}} text-white px-4 py-1.5 lg:w-max w-full  rounded-sm hover:bg-white/20 transition ease-in duration-2000 text-md">Gallery</li>
                </a>
                <a href="/#performance" class="lg:w-max w-full">
                    <li class="{{\Illuminate\Support\Str::contains(request()->path(), '/videos') ? ' bg-primaryColor font-bold' : ''}} text-white px-4 py-1.5 lg:w-max w-full  rounded-sm hover:bg-white/20 transition ease-in duration-2000 text-md">Videos</li>
                </a>
                <a href="/#testimonials" class="lg:w-max w-full">
                    <li class="{{\Illuminate\Support\Str::contains(request()->path(), '/events') ? ' bg-primaryColor font-bold' : ''}} text-white px-4 py-1.5 lg:w-max w-full  rounded-sm hover:bg-white/20 transition ease-in duration-2000 text-md">Events</li>
                </a>
                <a href="/#footer" class="lg:w-max w-full">
                    <li class="{{\Illuminate\Support\Str::contains(request()->path(), '/contact') ? ' bg-primaryColor font-bold' : ''}} text-white px-4 py-1.5 lg:w-max w-full  rounded-sm hover:bg-white/20 transition ease-in duration-2000 text-md">Contact</li>
                </a>
            </ul>
        </div>
    </div>
