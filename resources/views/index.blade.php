@extends('Layouts.layout')

@section('content')
    {{--    banner section --}}
    <div class="carousel h-full relative">
        <?php
        $images = [
            asset('assets/images/slider/1black.png'),
            asset('assets/images/slider/4black.png'),
            asset('assets/images/slider/3black.png'),
        ];
        ?>
        <?php foreach($images as $image): ?>
        <div>
            <img src="{{$image}}" alt="Image" class="lg:h-[100vh] w-full object-cover">
        </div>
        <?php endforeach; ?>


    </div>
    {{--banner section ends here--}}


    {{--about me section--}}
    <div id="about" class="w-full  flex flex-col items-center relative h-full bg-center bg-cover bg-no-repeat"
         style="background-image: url({{asset('assets/images/aboutMe/bg1.png')}})">
        {{--        <img src="{{asset('assets/images/award/bg1.png')}}" class="absolute left-0 top-0 w-56" alt="">--}}
        <div
            class="lg:w-[70%] md:w-[90%] w-full grid lg:grid-cols-3 md:grid-cols-3  sm:grid-cols-2 grid-cols-1 gap-4 px-4 py-12">
            <div class="w-full lg:h-max md:h-max sm:h-max h-48 flex justify-center ">
                <img src="{{asset('assets/images/aboutMe/leftSideImage.png')}}" alt="" class="">
            </div>
            <div class="lg:col-span-2 md:col-span-2 flex flex-col ">
                <span class="overflow-y-hidden font-medium text-sm text-primaryColor">About Me</span>
                <span class="overflow-y-hidden font-bold lg:text-4xl md:text-4xl sm:text-3xl text-2xl text-black mt-1">Dr. Samira Kosar</span>
                <span
                    class="overflow-y-hidden font-medium text-sm text-black/60 mt-1">Distinguished Kathak Exponent</span>
                <p id="aboutDescription" class="text-black/50 font-medium mt-6 h-[190px] overflow-hidden">Vice-President
                    and Nritya Vidha Pramukh of Sanskar Bharti, Chandigarh Vand Deputy Registrar, Pracheen Kala Kendra,
                    Chandigarh - Dr. Samira VKoser, PhD. in Psychology and dance, from Panjab University, Vis a
                    Prominent Kathak dance exponent, working in the eld of applied VKathak and unfolding the cognitive
                    angle of our classical arts and Vtrying to connect Kathak Dance style to the young and tender Vminds
                    of next generation. For her every art should be Vaesthetically beautiful Vand existentially
                    Vmeaningful. All Varts should have Va purpose, it Vshould Vadvance Vand Velevat Ve humanity and be
                    instrumental in building a healthy, Vprosperous, happy and well cultured society. VKathak is a dance
                    form where graceful movements, Vsubtle bhava and controlled yet abandoned rhythm Vcoalesce into
                    vividness and grace, vitality and charm. A Vdemanding art requiring both skill and dedication. And
                    Vit is just this combination that makes Samira Koser one of Vthe brightest and young exponents of
                    Kathak. VBorn in an aesthetically disciplined family, Dr. Samira had a Vsense of dance since
                    childhood and she participated in Vvarious dance competitions during her school and college
                    Veducation winning accolades everywhere. She received her initial training into the essentials of
                    this classical dance from Late Guru Kanhiya Lal, the doyen of the Jaipur gharana. Samira's
                    unshakable loyality to the art and dedication to the object got another life when she got the
                    opportunity to have taleem of Kathak dance under Kathak wizard Guru Shobha Koser, offered her
                    unstinted support and guidance. The expert training imparted by Guru Shobha Koser moulded Samira
                    into an accomplished dancer. She was introduced to the intricacies of the Jaipur Gharana of Kathak
                    including the presentation of pure dance (nritta) items like tukre, tode, gats, parans, etc.
                    Presently, she is learning ner nuances and intricacies of Kathak from Guru Brij Mohan Gangani, a
                    doyen of Jaipur Gharana of Kathak.
                </p>
                <button id="showMoreDescriptionBtn"
                        class=" w-max mt-2 overflow-y-hidden font-medium text-sm text-primaryColor"
                        onclick="
                     document.getElementById('aboutDescription').classList.toggle('h-[190px]');

                        if(document.getElementById('aboutDescription').classList.contains('h-[190px]')){
                            document.getElementById('showMoreDescriptionBtn').innerText = 'See More';
                        }else{
                            document.getElementById('showMoreDescriptionBtn').innerText = 'See Less';
                        }
                     ">See More
                </button>

                <div class="w-full flex justify-between overflow-hidden mt-8">
                    <span class=" font-bold text-2xl w-max text-black">Scintillating Performances</span>
                    <button class="font-normal text-lg text-primaryColor w-max">See All</button>
                </div>

                <div class="aboutMe mt-6 relative w-full">
                    <div class="h-full ml-6 mr-6">
                        <div class="bg-black h-48 overflow-hidden rounded-md relative">
                            <img src="{{asset('assets/images/aboutMe/p1.png')}}" class="rounded-md" alt="">
                            <div
                                class="w-full h-full bg-black/60 absolute top-0 left-0 p-4 flex flex-col justify-between">
                                <span class="text-sm text-white font-normal">Classic</span>
                                <div class="h-max flex flex-col">
                                    <span class="text-sm text-white font-normal">Ritu Rass</span>
                                    <span class="text-xs text-white/60 font-normal">4 Hours</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="h-full ml-6 mr-6">
                        <div class="bg-black h-48 overflow-hidden rounded-md relative">
                            <img src="{{asset('assets/images/aboutMe/p2.png')}}" class="rounded-md" alt="">
                            <div
                                class="w-full h-full bg-black/60 absolute top-0 left-0 p-4 flex flex-col justify-between">
                                <span class="text-sm text-white font-normal">Classic</span>
                                <div class="h-max flex flex-col">
                                    <span class="text-sm text-white font-normal">Ritu Rass</span>
                                    <span class="text-xs text-white/60 font-normal">4 Hours</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="h-full ml-6 mr-6">
                        <div class="bg-black h-48 overflow-hidden rounded-md relative">
                            <img src="{{asset('assets/images/aboutMe/p3.png')}}" class="rounded-md" alt="">
                            <div
                                class="w-full h-full bg-black/60 absolute top-0 left-0 p-4 flex flex-col justify-between">
                                <span class="text-sm text-white font-normal">Classic</span>
                                <div class="h-max flex flex-col">
                                    <span class="text-sm text-white font-normal">Ritu Rass</span>
                                    <span class="text-xs text-white/60 font-normal">4 Hours</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="h-full ml-6 mr-6">
                        <div class="bg-black h-48 overflow-hidden rounded-md relative">
                            <img src="{{asset('assets/images/aboutMe/p1.png')}}" class="rounded-md" alt="">
                            <div
                                class="w-full h-full bg-black/60 absolute top-0 left-0 p-4 flex flex-col justify-between">
                                <span class="text-sm text-white font-normal">Classic</span>
                                <div class="h-max flex flex-col">
                                    <span class="text-sm text-white font-normal">Ritu Rass</span>
                                    <span class="text-xs text-white/60 font-normal">4 Hours</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="h-full ml-6 mr-6">
                        <div class="bg-black h-48 overflow-hidden rounded-md relative">
                            <img src="{{asset('assets/images/aboutMe/p2.png')}}" class="rounded-md" alt="">
                            <div
                                class="w-full h-full bg-black/60 absolute top-0 left-0 p-4 flex flex-col justify-between">
                                <span class="text-sm text-white font-normal">Classic</span>
                                <div class="h-max flex flex-col">
                                    <span class="text-sm text-white font-normal">Ritu Rass</span>
                                    <span class="text-xs text-white/60 font-normal">4 Hours</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="h-full ml-6 mr-6">
                        <div class="bg-black h-48 overflow-hidden rounded-md relative">
                            <img src="{{asset('assets/images/aboutMe/p3.png')}}" class="rounded-md" alt="">
                            <div
                                class="w-full h-full bg-black/60 absolute top-0 left-0 p-4 flex flex-col justify-between">
                                <span class="text-sm text-white font-normal">Classic</span>
                                <div class="h-max flex flex-col">
                                    <span class="text-sm text-white font-normal">Ritu Rass</span>
                                    <span class="text-xs text-white/60 font-normal">4 Hours</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    {{--about me section ends here--}}


    {{--education section--}}
    <div class="w-full bg-cover bg-right h-full bg-black"
         style="background-image: url({{asset('assets/images/education/educationBg.png')}})">
        <div class="w-full h-full flex justify-center py-16">
            <div class="lg:w-[70%] md:w-[90%] w-full px-4 flex flex-col items-center h-full ">
                 <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2">
                       <div class="w-full p-2 bg-white rounded-md h-max">
                           <iframe  class="w-full h-[400px]" src="https://www.youtube.com/embed/DrszduN0JF8?si=yK0udcH8DTp9gN39" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                       </div>
                     <div class="w-full p-2">
                         <span class="overflow-y-hidden font-bold text-4xl text-white">EDUCATION</span>
                         <p  class="text-white font-medium mt-6 text-lg">Holding doctorate degrees in Psychology & dance,
                             Dr. Samira Koser has imparted training in dance to a
                             number of students while working as the Guest
                             faculty at Government Home Science College,
                             Chandigarh. She has also worked as Lecturer of
                             Psychology in the Government College and as a
                             counselor in one of the DAV organizations.
                             Presently, she holds the charge of Deputy Registrar
                             of Pracheen Kala Kendra.
                         </p>
                         <button class="font-semibold flex items-center gap-2 px-6 py-4 rounded-full bg-primaryColor text-white mt-6 hover:scale-105 transition ease-in duration-2000">Mission
                           <i class="fa fa-arrow-right"></i>
                         </button>

                     </div>
                 </div>
            </div>
        </div>
    </div>
    {{--education section ends here--}}

    {{--gallery section--}}
    <div id="gallery" class="w-full bg-black flex flex-col items-center relative bg-center bg-cover bg-no-repeat border-t-[1px] border-b-[1px] border-white/60"
{{--         style="background-image: url({{asset('assets/images/gallery/bg3.png')}})"--}}
    >
        {{--        <img src="{{asset('assets/images/gallery/bg1.png')}}" class="absolute top-0 left-0" alt="">--}}
        {{--        <img src="{{asset('assets/images/gallery/bg2.png')}}" class="absolute top-0 right-0" alt="">--}}

        <div class=" w-full lg:hidden md:hidden sm:hidden grid grid-cols-1 gap-4 px-4 py-12 bg-black">
            <div class="w-full flex justify-center">
                <span class="overflow-y-hidden font-bold text-3xl text-primaryColor">GALLERY</span>
            </div>
            <div class="w-full ">
                <img src="{{asset('assets/images/gallery/p1black.png')}}" class="w-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt="">
            </div>
            <div class="w-full ">
                <img src="{{asset('assets/images/gallery/p2black.png')}}" class="w-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt="">
            </div>
            <div class="w-full ">
                <img src="{{asset('assets/images/gallery/p4black.png')}}" class="w-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt="">
            </div>
            <div class="w-full ">
                <img src="{{asset('assets/images/gallery/p5black.png')}}" class="w-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt="">
            </div>
            <div class="w-full ">
                <img src="{{asset('assets/images/gallery/p3black.png')}}" class="w-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt="">
            </div>
            <div class="w-full ">
                <img src="{{asset('assets/images/gallery/p7black.png')}}" class="w-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt="">
            </div>
            <div class="w-full relative">
                <img src="{{asset('assets/images/gallery/p6black.png')}}" class="w-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt="">
                <div
                    class="absolute left-[50%] translate-x-[-50%] bottom-4 h-max w-max z-40 bg-black/60 border-[1px] border-white/50 shadow-lg shadow-white/20 px-8 py-2 font-semibold  text-white">
                    <a href="">
                        <div class="flex flex-col items-center justify-center">
                            <span>See More</span>
                            <i class="fas fa-arrow-right "></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class=" w-full px-4 py-12 lg:flex  md:flex sm:flex flex-col hidden">
            <div class="w-full flex justify-center">
                <span class="overflow-y-hidden font-bold text-3xl text-primaryColor">GALLERY</span>
            </div>
            <table class="w-full mt-12">
                <tr>
                    <td class="p-2" rowspan="2"><img src="{{asset('assets/images/gallery/p1black.png')}}"
                                                     class="w-full h-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt=""></td>
                    <td class="p-2"><img src="{{asset('assets/images/gallery/p2black.png')}}" class="w-full h-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt="">
                    </td>
                    <td class="p-2" rowspan="4"><img src="{{asset('assets/images/gallery/p4black.png')}}"
                                                     class="w-full h-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt=""></td>
                    <td class="p-2" rowspan="2"><img src="{{asset('assets/images/gallery/p5black.png')}}"
                                                     class="w-full h-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt=""></td>
                    <td class="p-2"><img src="{{asset('assets/images/gallery/p7black.png')}}" class="w-full h-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt="">
                    </td>
                </tr>
                <tr>
                    {{--                    2nd--}}
                    <td class="p-2"><img src="{{asset('assets/images/gallery/p3black.png')}}" class="w-full h-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt="">
                    </td>
                    {{--                     5th--}}
                    <td class="p-2" rowspan="3"><img src="{{asset('assets/images/gallery/p8black.png')}}"
                                                     class="w-full h-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt=""></td>
                </tr>
                <tr>
                    {{--                    1st--}}
                    <td class="p-2 " colspan="2" rowspan="2">
                        <div class="relative">
                            <img src="{{asset('assets/images/gallery/p7black.png')}}" class="w-full h-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt="">
                            <div
                                class="absolute left-[50%] translate-x-[-50%] bottom-4 h-max w-max z-40 bg-black/60 border-[1px] border-white/50 shadow-lg shadow-white/20 px-8 py-2 font-semibold  text-white">
                                <a href="">
                                    <div class="flex flex-col items-center justify-center">
                                        <span>See More</span>
                                        <i class="fas fa-arrow-right "></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </td>
                    {{--                     4th--}}
                    <td class="p-2" rowspan="2"><img src="{{asset('assets/images/gallery/p6black.png')}}"
                                                     class="w-full h-full border-[1px] border-white/20 shadow-lg shadow-white/10 rounded-sm" alt=""></td>
                </tr>

                <tr>
                </tr>

            </table>
        </div>
    </div>
    {{--gallery section ends here--}}

    {{--performances section--}}
    <div id="performance" class="w-full bg-cover bg-center h-full bg-black">
        <div class="w-full h-full flex justify-center lg:py-32 md:py-28 py-16">
            <div class="lg:w-[70%] md:w-[90%] w-full px-4 flex flex-col items-center h-full ">
                <span
                    class="overflow-y-hidden font-bold lg:text-4xl md:text-4xl sm:text-3xl text-2xl text-center  tracking-widest text-white">OUT TOP PERFORMANCES</span>
                <span
                    class="lg:w-[55%] overflow-y-hidden font-normal lg:text-xl md:text-xl text-md text-center text-white lg:mt-4 md:mt-4 mt-2">Several successful performances throughout the country and abroad. Some of them are...</span>
                <button class="font-medium text-xl flex items-center gap-2 px-10 py-4 rounded-full bg-primaryColor text-white mt-6 hover:scale-105 transition ease-in duration-2000">
                    Learn Kathak
                    <i class="fa fa-arrow-right"></i>
                </button>

                <div class="performances mt-12 relative w-full h-full">
                    <div class="h-full ml-6 mr-6 bg-white rounded-md p-4 bg-white/20">
                        <div class="  flex flex-col ">
                            <iframe class="w-full" height="315"
                                    src="https://www.youtube.com/embed/y-YUEvT6Bfw?si=tQjT_E38I4JpbTDS"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="p-2 flex flex-col items-center">
                                <p class="font-semibold text-white text-xl">Ritu Rass</p>
                                <p class=" font-medium text-white text-xs mt-6">21 April 2015 at Chandigarh -Part - XL</p>
                                <button class="px-10 py-2 mt-4 rounded-md border-[1px] border-white font-semibold text-white text-md hover:scale-105 transition ease-in duration-2000">Contact</button>
                            </div>
                        </div>
                    </div>
                    <div class="h-full ml-6 mr-6 bg-white rounded-md p-4 bg-white/20">
                        <div class="  flex flex-col ">
                            <iframe class="w-full" height="315"
                                    src="https://www.youtube.com/embed/y-YUEvT6Bfw?si=tQjT_E38I4JpbTDS"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="p-2 flex flex-col items-center">
                                <p class="font-semibold text-white text-xl">Ritu Rass</p>
                                <p class=" font-medium text-white text-xs mt-6">21 April 2015 at Chandigarh -Part - XL</p>
                                <button class="px-10 py-2 mt-4 rounded-md border-[1px] border-white font-semibold text-white text-md hover:scale-105 transition ease-in duration-2000">Contact</button>
                            </div>
                        </div>
                    </div>
                    <div class="h-full ml-6 mr-6 bg-white rounded-md p-4 bg-white/20">
                        <div class="  flex flex-col ">
                            <iframe class="w-full" height="315"
                                    src="https://www.youtube.com/embed/y-YUEvT6Bfw?si=tQjT_E38I4JpbTDS"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="p-2 flex flex-col items-center">
                                <p class="font-semibold text-white text-xl">Ritu Rass</p>
                                <p class=" font-medium text-white text-xs mt-6">21 April 2015 at Chandigarh -Part - XL</p>
                                <button class="px-10 py-2 mt-4 rounded-md border-[1px] border-white font-semibold text-white text-md hover:scale-105 transition ease-in duration-2000">Contact</button>
                            </div>
                        </div>
                    </div>
                    <div class="h-full ml-6 mr-6 bg-white rounded-md p-4 bg-white/20">
                        <div class="  flex flex-col ">
                            <iframe class="w-full" height="315"
                                    src="https://www.youtube.com/embed/y-YUEvT6Bfw?si=tQjT_E38I4JpbTDS"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="p-2 flex flex-col items-center">
                                <p class="font-semibold text-white text-xl">Ritu Rass</p>
                                <p class=" font-medium text-white text-xs mt-6">21 April 2015 at Chandigarh -Part - XL</p>
                                <button class="px-10 py-2 mt-4 rounded-md border-[1px] border-white font-semibold text-white text-md hover:scale-105 transition ease-in duration-2000">Contact</button>
                            </div>
                        </div>
                    </div>
                    <div class="h-full ml-6 mr-6 bg-white rounded-md p-4 bg-white/20">
                        <div class="  flex flex-col ">
                            <iframe class="w-full" height="315"
                                    src="https://www.youtube.com/embed/y-YUEvT6Bfw?si=tQjT_E38I4JpbTDS"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="p-2 flex flex-col items-center">
                                <p class="font-semibold text-white text-xl">Ritu Rass</p>
                                <p class=" font-medium text-white text-xs mt-6">21 April 2015 at Chandigarh -Part - XL</p>
                                <button class="px-10 py-2 mt-4 rounded-md border-[1px] border-white font-semibold text-white text-md hover:scale-105 transition ease-in duration-2000">Contact</button>
                            </div>
                        </div>
                    </div>
                    <div class="h-full ml-6 mr-6 bg-white rounded-md p-4 bg-white/20">
                        <div class="  flex flex-col ">
                            <iframe class="w-full" height="315"
                                    src="https://www.youtube.com/embed/y-YUEvT6Bfw?si=tQjT_E38I4JpbTDS"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="p-2 flex flex-col items-center">
                                <p class="font-semibold text-white text-xl">Ritu Rass</p>
                                <p class=" font-medium text-white text-xs mt-6">21 April 2015 at Chandigarh -Part - XL</p>
                                <button class="px-10 py-2 mt-4 rounded-md border-[1px] border-white font-semibold text-white text-md hover:scale-105 transition ease-in duration-2000">Contact</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--performances section ends here--}}

    {{--awards section--}}
    <div class="w-full  flex flex-col items-center relative h-full bg-center bg-cover bg-no-repeat"
         style="background-image: url({{asset('assets/images/award/bg2.png')}})">
        {{--        <img src="{{asset('assets/images/award/bg1.png')}}" class="absolute left-0 top-0 w-56" alt="">--}}
        <div
            class="lg:w-[70%] md:w-[90%] w-full grid lg:grid-cols-3 md:grid-cols-3  sm:grid-cols-2 grid-cols-1 gap-4 px-4 pt-12">
            <div class="lg:col-span-2 md:col-span-2">
                <span class="overflow-y-hidden font-bold text-2xl text-primaryColor">AWARDS AND TITLES</span>
                <ul class="mt-6 pl-6 flex flex-col gap-4" style="list-style-type: disc">
                    <li class="font-medium">
                        Gold Medal in Kathak by Punjab University 1992
                    </li>
                    <li class="font-medium">
                        Sangeet Kala Gaurav by Sangeet Kala Kendra Agra, 2011,
                    </li>
                    <li class="font-medium">
                        Brahaspati Nritya Shilpi Samman by Sanskar Bharti in
                        Aacharya Brihaspati Sammelan 2016
                    </li>
                    <li class="font-medium">
                        Kala Guru Samman by Sanskar Bharti, Chandigarh
                    </li>
                    <li class="font-medium">
                        Pandit Manmohan Bhatt Memorial Award in a glittering ceremony at Jaipur by Grammy Award Winner
                        Pandit Vishwa Mohan Bhatt.
                    </li>
                    <li class="font-medium">
                        <span class="overflow-y-hidden font-bold  text-primaryColor">State Award 2024</span>
                        on the occasion of Republic Day conferred upon by Administration of Chandigarh for outstanding
                        contribution in the eld of Classical Dance.
                    </li>

                </ul>

                <div class="w-full flex justify-between mt-6">
                    <span class="overflow-y-hidden font-bold text-2xl text-black">AWARDS</span>
                    <button class="overflow-y-hidden font-normal text-lg text-primaryColor">See All</button>
                </div>
                <div class="awards mt-12 relative w-full h-full pb-12">
                      @php

                       $awardImages =[
                            asset('assets/images/award/a4.png'),
                            asset('assets/images/award/a5.png'),
                            asset('assets/images/award/a6.png'),
                            asset('assets/images/award/a7.png'),
                            asset('assets/images/award/a8.png'),
                            asset('assets/images/award/a9.png'),
                            asset('assets/images/award/a10.png'),
]

                      @endphp
                    @foreach ($awardImages as $awardImage)
                        <div class="flex justify-center ml-4 mr-4 p-2 border-[1px] border-primaryColor rounded-md">
                            <img src="{{$awardImage}}" alt="" class="w-[300px] h-[300px] rounded-md">
                        </div>
                    @endforeach
                </div>



            </div>

            <div class="w-full h-full flex lg:justify-end  md:justify-end  sm:justify-end  justify-center">
                <img src="{{asset('assets/images/award/rightImage2.png')}}" alt="" class="h-auto w-[60%]">
            </div>
        </div>
    </div>
    {{--awards section ends here--}}

    {{--testimonials section--}}
    <div id="testimonials" class="w-full bg-cover bg-center h-full"
         style="background-image: url({{asset('assets/images/slider/1black.png')}})">
        <div class="w-full h-full flex justify-center lg:py-32 md:py-28 py-16 bg-black/80">
            <div class="lg:w-[70%] md:w-[90%] w-full px-4 flex flex-col items-center h-full ">
                <span
                    class="overflow-y-hidden font-normal lg:text-3xl md:text-3xl sm:text-2xl text-xl tracking-widest text-primaryColor">TESTIMONIALS</span>
                <span
                    class="overflow-y-hidden font-normal lg:text-4xl md:text-4xl sm:text-3xl text-2xl text-white lg:mt-4 md:mt-4 mt-2">What people say about us</span>

                <?php
                $testimonials = [
                    [
                        'image' => asset('assets/images/slider/1black.png'),
                        'name' => 'Isabella Chavez',
                        'date' => '30 Aug 2024',
                        'content' => 'What I love about Samira dance is that it has always been a place where I could just go and live my passion...'
                    ],
                    [
                        'image' => asset('assets/images/slider/1black.png'),
                        'name' => 'Liam Johnson',
                        'date' => '25 Aug 2024',
                        'content' => 'Samira dance has given me the freedom to express myself in ways I never thought possible. It\'s truly a special place.'
                    ],
                    [
                        'image' => asset('assets/images/slider/1black.png'),
                        'name' => 'Olivia Brown',
                        'date' => '20 Aug 2024',
                        'content' => 'The community at Samira dance is incredible. I\'ve made lifelong friends and grown so much as a dancer.'
                    ],
                    [
                        'image' => asset('assets/images/slider/1black.png'),
                        'name' => 'Noah Smith',
                        'date' => '15 Aug 2024',
                        'content' => 'Every class at Samira dance is an opportunity to learn something new and exciting. I can\'t recommend it enough!'
                    ],
                    [
                        'image' => asset('assets/images/slider/1black.png'),
                        'name' => 'Ava Williams',
                        'date' => '10 Aug 2024',
                        'content' => 'Samira dance is more than just a studio; it\'s a family. The support and encouragement I\'ve received are unmatched.'
                    ],
                ];
                ?>

                <div class="testimonials lg:mt-28 md:mt-24 mt-12 relative w-full h-full">

                    @foreach ($testimonials as $testimonial)
                        <div class="h-full ml-6 mr-6 bg-white rounded-md ">
                            <div class="bg-white  flex flex-col p-6 rounded-md">
                                <img src="{{$testimonial['image']}}" class="h-16 w-16 rounded-full" alt="">
                                <p class="mt-6 font-medium text-black/60 text-xl">
                                    {{substr($testimonial['content'], 0, 80)}}.....
                                </p>
                                <p class="mt-6 font-medium text-black/60 text-sm">{{$testimonial['date']}}</p>
                                <p class="font-medium text-black text-md">{{$testimonial['name']}}</p>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>
    </div>
    {{--testimonials section ends here--}}



    @push('scripts')
        <script>
            $(document).ready(function () {
                $('.carousel').slick({
                    slidesToShow: 1, // Number of visible slides at a time
                    slidesToScroll: 1,
                    prevArrow: '<button class="opacity-0  slick-prev absolute top-10 left-10 text-white">Previous</button>',
                    nextArrow: '<button class="opacity-0  slick-next">Next</button>',
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1, // Adjust for smaller screens
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
            $(document).ready(function () {
                $('.testimonials').slick({
                    slidesToShow: 3, // Number of visible slides at a time
                    slidesToScroll: 1,
                    prevArrow: '<button class="opacity-0  slick-prev absolute top-10 left-10 text-white">Previous</button>',
                    nextArrow: '<button class="opacity-0  slick-next">Next</button>',
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2, // Adjust for smaller screens
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 500,
                            settings: {
                                slidesToShow: 1, // Adjust for smaller screens
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
            $(document).ready(function ()
            {
                $('.performances').slick({
                    slidesToShow: 3, // Number of visible slides at a time
                    slidesToScroll: 1,
                    prevArrow: '<button class="opacity-0  slick-prev absolute top-10 left-10 text-white absolute top-[50%] left-20 translate-y-[-50%] opacity-0">Previous</button>',
                    nextArrow: '<button class="opacity-0  slick-next absolute top-[50%] right-20 translate-y-[-50%] opacity-0">Next</button>',
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2, // Adjust for smaller screens
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 500,
                            settings: {
                                slidesToShow: 1, // Adjust for smaller screens
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
            $(document).ready(function () {
                $('.aboutMe').slick({
                    slidesToShow: 3, // Number of visible slides at a time
                    slidesToScroll: 1,
                    prevArrow: '<button class="opacity-0  slick-prev absolute top-10 left-10 text-white">Previous</button>',
                    nextArrow: '<button class="opacity-0  slick-next">Next</button>',
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2, // Adjust for smaller screens
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 500,
                            settings: {
                                slidesToShow: 1, // Adjust for smaller screens
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
            $(document).ready(function () {
                $('.awards').slick({
                    slidesToShow: 3, // Number of visible slides at a time
                    slidesToScroll: 1,
                    prevArrow: '<button class="opacity-0  slick-prev absolute top-10 left-10 text-white">Previous</button>',
                    nextArrow: '<button class="opacity-0  slick-next">Next</button>',
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2, // Adjust for smaller screens
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 500,
                            settings: {
                                slidesToShow: 1, // Adjust for smaller screens
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
        </script>
    @endpush
@endsection
