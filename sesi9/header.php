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

<div class="sponsor mt-10 font-base items-stretch py-14 max-sm:mt-5">
      <div class="container mx-auto">
      <h2 class="text-center text-[#636363] my-3 leading-tight max-sm:text-sm">Brands that trust us</h2>
      <div class="ml-20 mt-10 grid grid-cols-6 gap-6 max-sm:ml-0 max-sm:p-1">
        <div class="scroll-ml-6 snap-start">
          <img src="blech.png" alt="" />
        </div>
        <div class="scroll-ml-6 snap-start"><img src="ceria.png" alt="" /></div>
        <div class="scroll-ml-6 snap-start"><img src="jfx.png" alt="" /></div>
        <div class="scroll-ml-6 snap-start"><img src="pizza.png" alt="" /></div>
        <div class="scroll-ml-6 snap-start"><img src="rata.png" alt="" /></div>
        <div class="scroll-ml-6 snap-start"><img src="plant.png" alt="" /></div>
      </div>
    </div>
    </div>
</body>
</html>

