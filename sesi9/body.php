<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>:)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&family=Raleway:wght@500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind.config.js"></script>
    <style type="text/tailwindcss">
      @layer utilities {
        header {
          @apply pt-5;
          background: linear-gradient(180deg, #ffffff 0%, #eaf4ff 46.08%, #ffffff 100%);
        }
        nav a {
          @apply hover:underline font-nav text-xl ;
        }
        .button-primary {
          @apply bg-primary text-white px-5 py-2 rounded-full;
        }
        .gradient {
          background: -webkit-linear-gradient(left, #e18700 0%, #ff32ad 50%, #0ec5d7 100%);
          color: transparent;
          background-clip: text;
        }
        .img-sponsor {
          height: 50px;
          width: auto;
          margin: 0px 25%;
        }
        .item-services {
          border: none;
          background: #ffffff;
        }
        .item {
          height: 290px;
          width: 400px;
        }
        .frame{
          margin:20%;
        }
        
        .has-child:hover .submenu {
          @apply visible opacity-100;
        }

        .has-child {
          @apply relative cursor-pointer;
        }
        .has-child > span.caret {
          @apply invert absolute h-[26px] w-[12px] -right-3 top-1/2 transform -translate-y-1/2;
          content: url('data:image/svg+xml;charset=UTF-8, <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.666992 0.666748L4.33366 4.66675L8.00033 0.666748" stroke="white"/></svg>');
        }
        .submenu {
          @apply absolute m-0 py-1 bg-primary invisible opacity-0 transition-all ease-in-out;
        }
        .submenu a{
          @apply text-white min-w-[135px] w-full block py-1 px-4 hover:text-white;
        }
        @media screen and (max-width: 1024px) {
        nav {
          left: -100%;
          transition: all 0.3s ease-in-out;
        }
        nav > ul > li {
          @apply w-full p-0;
        }
        .has-child {
          @apply overflow-hidden;
        }
        .has-child > span.caret {
          @apply invert-0 top-4;
        }
        .has-child.active .submenu {
          @apply visible opacity-100 max-h-[1000px];
        }
        nav .submenu {
          @apply visible opacity-100 relative w-full max-h-0;
        }
        nav.active {
          left: 0;
        }
        }
      }
    </style>
  </head>
<body>
<section class="pb-36 py-10 bg-gradient-to-r from-indigo-100 via-purple-100 to-pink-100 ">
      <div class="container mx-auto">
      <div class="font-base ml-10 flex flex-wrap justify-between max-sm: ml-2">
        <div class="max-sm:w-[350px] max-sm:ml-8">
          <h2 class="font-bold text-[35px] max-sm:text-xl ">Services</h2>
          <p class="text-[15px] max-sm:text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab sequi minima accusamus eligendi perferendis veritatis.</p>
        </div>

        <div>
          <button class="button-primary mr-20 mt-10 max-sm: mt-4 max-sm: mr-0 max-sm:ml-8 max-sm:text-sm">Build Design</button>
        </div>

        <div class="grid grid-rows-2 grid-flow-col gap-4 mt-20 text-center mx-auto max-sm:gap-2 max-sm:grid-cols-1 max-sm:grid-rows-6 max-sm:mx-auto">
          <div class="item px-8 py-2 rounded shadow-lg shadow-indigo-500/40 flex flex-wrap items-center justify-center bg-[#ffffff] max-sm:w-[350px]">
            <div class="w-[150px] py-10">
              <img src="shopify.png" alt="" />
            </div>
            <h1 class="font-extrabold text-lg">Shopify Theme Development</h1>
            <p class="py-4 text-sm ">Start from 700 USD for project base or 35 USD per hour</p>
          </div>

          <div class="item px-8 py-2 rounded shadow-lg shadow-indigo-500/40 flex flex-wrap items-center justify-center bg-[#ffffff] max-sm:w-[350px]">
            <div class="w-[150px] py-10">
              <img src="word.png" alt="" />
            </div>
            <h1 class="font-extrabold text-lg">WordPress Theme Development</h1>
            <p class="py-4 text-sm ">Start from 600 USD for project base or 35 USD per hour</p>
          </div>
          
          <div class="item px-8 py-2 rounded shadow-lg shadow-indigo-500/40 flex flex-wrap items-center justify-center bg-[#ffffff] max-sm:w-[350px]">
            <div class="w-[100px] h-[100px] py-10">
              <img src="php.png" alt="" />
            </div>
            <h1 class="font-extrabold text-lg">Web Application Development</h1>
            <p class="py-4 text-sm ">Start from 1000 USD for project base or 35 USD per hour</p>
          </div>
          
          <div class="item px-8 py-2 rounded shadow-lg shadow-indigo-500/40 flex flex-wrap items-center justify-center bg-[#ffffff] max-sm:w-[350px]">
            <div class="w-[150px] py-10 pl-3">
              <img src="www.png" alt="" />
            </div>
            <h1 class="font-extrabold text-lg">Custom App/Plugins Development</h1>
            <p class="py-4 text-sm ">Start from 300 USD for project base or 35 USD per hour</p>
          </div>

          <div class="item px-8 py-2 rounded shadow-lg shadow-indigo-500/40 flex flex-wrap items-center justify-center bg-[#ffffff] max-sm:w-[350px]">
            <div class="w-[180px] pt-8 pl-2">
              <img src="assit.png" alt="" />
            </div>
            <h1 class="font-extrabold text-lg">Assistans Services</h1>
            <p class="py-4 text-sm ">Start from 33 USD for project base or 35 USD per hour</p>
          </div>

          <div class="item px-8 py-2 rounded shadow-lg shadow-indigo-500/40 flex flex-wrap items-center justify-center bg-[#ffffff] max-sm:w-[350px]">
            <h1 class="font-bold text-slate-600 px-10">More Services :</h1>
            <div class=" font-bold">
            <p>Technical Assistans</p>
            <p>Support Assistans</p>
            <p>VIP Assistans</p>
            <p>Social Media Admin</p> 
            </div>
          
          </div>
      </div>
    </div>
    </section>

<!-- WHAT WE DO -->
  <Section class="py-14 ">
    <div class="container mx-auto">
    <div class="text-center justify-center ">
      <h1 class="font-bold text-[35px] max-sm:text-xl">What We Do</h1>
      <p class=" text-slate-600 max-sm:text-sm">Lörem ipsum patev antifili astrokålonat. Vanat aheten. Ekofiering makrora, på trekavis.</p>
      <p class=" text-slate-600 max-sm:text-sm">Makrona tregät plang. Bekässade kast, eftersom sore.</p>
    </div>
    <div class="grid grid-cols-4 gap-4 justify-between mx-auto items-center text-center mr-10 max-sm:gap-0 max-sm:grid-cols-1 max-sm:grid-rows-4  ">
      
      <div class="w-[250px] frame items-center justify-center px-3 py-2 ">
        <div class="px-24">
          <img src="Frame.png" alt="">
        </div>
        <h2 class="text-center font-bold text-m py-2">Design</h2>
        <p class="text-sm ">Create Wireframe Display Designs And Initial UI Designs For Websites</p>
      </div>
      <div class="w-[250px] frame items-center justify-center px-3 py-2">
        <div class="px-24">
          <img src="Frame(1).png" alt="">
        </div>
        <h2 class="text-center font-bold text-m py-2">Front End</h2>
        <p class="text-sm ">Create Wireframe Display Designs And Initial UI Designs For Websites</p>
      </div>
      <div class="w-[250px] frame items-center justify-center px-3 py-2">
        <div class="px-24">
          <img src="Frame(2).png" alt="">
        </div>
        <h2 class="text-center font-bold text-m py-2">Back End</h2>
        <p class="text-sm ">Create Wireframe Display Designs And Initial UI Designs For Websites</p>
      </div>
      <div class="w-[250px] frame items-center justify-center px-3 py-2">
        <div class="px-24">
          <img src="Frame(3).png" alt="">
        </div>
        <h2 class="text-center font-bold text-m py-2">Check Test</h2>
        <p class="text-sm ">Create Wireframe Display Designs And Initial UI Designs For Websites</p>
      </div>
    </div>
  </div>
  </Section>

  <!-- out work -->
  <section class="">
    <div class="container mx-auto">
    <div class="text-center justify-center pt-20 max-sm:pt-0">
      <h1 class="font-bold text-[35px] max-sm:text-xl">Our Work</h1>
      <p class="text-slate-600 max-sm:text-sm">Lörem ipsum patev antifili astrokålonat. Vanat aheten. Ekofiering makrora,</p>
    </div>
    <div class="grid grid-cols-2 gap-4 py-6 max-sm:grid-cols-1 max-sm:gap-2">
      <div class="mx-10">
        <div class="text-left">
          <img src="Frame 101.png" alt="">
        </div>
        <h1 class="font-bold text-xl py-4">Retainer Orely Studio</h1>
        <p class="text-slate-400">https://retainer.orely.co/</p>
        <div class="flex flex-wrap text-center py-4">
          <a href="#" class="border-solid border-2 border-indigo-300 w-28 h-10 mr-4 pt-1">WordPress</a>
          <a href="#" class="border-solid border-2 border-indigo-300 w-28 h-10 mr-4 pt-1">Tailwind</a>
        </div>
      </div>
      <div class="mx-10">
        <div class="text-left">
          <img src="Frame 102.png" alt="">
        </div>
        <h1 class="font-bold text-xl py-4">Beacukai Sangatta</h1>
        <p class="text-slate-400">https://bcsangatta.beacukai.go.id/</p>
        <div class="flex flex-wrap text-center py-4">
          <a href="#" class="border-solid border-2 border-indigo-300 w-28 h-10 mr-4 pt-1">WordPress</a>
          <a href="#" class="border-solid border-2 border-indigo-300 w-28 h-10 mr-4 pt-1">Tailwind</a>
          <a href="#" class="border-solid border-2 border-indigo-300 w-28 h-10 mr-4 pt-1 max-sm:mt-2">Design</a>
        </div>
      </div>
      <div class="mx-10">
        <div class="text-left">
          <img src="Frame 101(1).png" alt="">
        </div>
        <h1 class="font-bold text-xl py-4">Federasi Ice Skating Indonesia</h1>
        <p class="text-slate-400">https://fisid.org/</p>
        <div class="flex flex-wrap text-center py-4">
          <a href="#" class="border-solid border-2 border-indigo-300 w-28 h-10 mr-4 pt-1">WordPress</a>
          <a href="#" class="border-solid border-2 border-indigo-300 w-28 h-10 mr-4 pt-1">Tailwind</a>
          <a href="#" class="border-solid border-2 border-indigo-300 w-28 h-10 mr-4 pt-1 max-sm:mt-2">Design</a>
        </div>
      </div>
      <div class="mx-10">
        <div class="text-left">
          <img src="Frame 101.png" alt="">
        </div>
        <h1 class="font-bold text-xl py-4">Retainer Orely Studio</h1>
        <p class="text-slate-400">https://retainer.orely.co/</p>
        <div class="flex flex-wrap text-center py-4">
          <a href="#" class="border-solid border-2 border-indigo-300 w-28 h-10 mr-4 pt-1">WordPress</a>
          <a href="#" class="border-solid border-2 border-indigo-300 w-28 h-10 mr-4 pt-1">Tailwind</a>
        </div>
      </div>
    </div>
    <div class="mb-5 action flex mx-auto justify-center items-center gap-5">
      <a href="#" class="button-primary">Our Work</a>
      </div>
    </div>
  </section>

<!-- kata kata -->
<section class="my-32 bg-[#F6F9FC] max-sm:my-20">
  <div class="container mx-auto">
  <div class="text-center justify-center py-20 ">
    <h1 class="font-bold text-[35px] max-sm:text-2xl"><span class="gradient"> What people say about</span> <br>
      Mangcoding Team?</h1>
      <p class="mx-auto w-[700px] text-[30px] py-14 max-sm:text-sm max-sm:w-[300px] max-sm:py-8" >“ It was a great experience to work with Mangcoding, we love the details result, and professionalism.
        “</p>
        <div class="mb-5 action flex mx-auto justify-center items-center gap-5 max-sm:mb-2">
          <img src="image 16.png" alt="">
        </div>
        <h2 class="font-bold text-lg max-sm:text-sm">Riko Sapto Dimo </h2>
        <p class="text-slate-600 max-sm:text-sm">Managing Director Orely.co</p>
        <div class="radio-1 pt-10">
          <input type="radio" name="radio-1">
          <input type="radio" name="radio-1">
          <input type="radio" name="radio-1">
        </div>
      </div>
    </div>
  </section>

  <!-- our blog -->

  <section class="pb-20 ">
    <div class="container mx-auto">
    <div class="text-center justify-center">
      <h1 class="font-bold text-[35px] max-sm:text-2xl">Our Blog</h1>
    </div>
    <div class="grid grid-cols-3 gap-1 py-10 mx-20 max-sm:grid-cols-1 max-sm:gap-2">
      <div class="mx-1">
        <div class="">
          <img src="image 19.png" alt="">
        </div>
        <p class="font-bold text-[20px] max-sm:text-xl">8 Alasan Pentingnya Melakukan Pencadangan Situs Web</p>
      </div>
      <div class="">
        <div class="">
          <img src="image 20.png" alt="">
        </div>
        <p class="font-bold text-[20px] max-sm:text-xl">8 Alasan Pentingnya Melakukan Pencadangan Situs Web</p>
      </div>
      <div class="">
        <div class="">
          <img src="image 21.png" alt="">
        </div>
        <p class="font-bold text-[20px] max-sm:text-xl">8 Alasan Pentingnya Melakukan Pencadangan Situs Web</p>
      </div>
    </div>
    <div class="mb-5 action flex mx-auto justify-center items-center gap-5">
      <a href="#" class="button-primary">Our Work</a>
      </div>
    </div>
  </section>

  <!-- sebelum footer -->
  <section class="py-10 bg-gradient-to-r from-indigo-200 via-purple-200 to-pink-200 ">
    <div class="container mx-auto">
    <div class="font-base flex flex-wrap item-center justify-between max-sm:ml-4">
      <div class="">
        <h2 class="font-bold text-[35px] max-sm:text-xl max-sm:py-1">Let's build a website with mangcoding</h2>
        <p class="w-[550px] text-[15px] max-sm:text-sm">Mangcoding team will help you in branding your product</p>
      </div>

      <div class="pt-10 max-sm:pt-2">
        <button class="button-primary mr-20 max-sm:text-sm">Build Website Now</button>
      </div>
    </div>
  </section>
</body>
</html>



