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
<footer class="my-20 ">
    <div class="flex flex-wrap ">
      <div class="mx-10 w-[300px] lg:flex-row">
        <div class="flex flex-wrap py-10">
          <img src="Group 2.png" alt="">
        </div>
        <p class="text-slate-400">Mangcoding Team Will Help You In Branding Your Product  asdMangcoding Team Will Help You In Branding Your Product asdMangcoding Team Will Help.</p>
        <div class="flex flex-wrap py-10" >
          <img src="1 (1).png" alt="" class="mr-4">
          <img src="1 (2).png" alt="" class="mr-4">
          <img src="1 (3).png" alt="" class="mr-4">
          <img src="1 (4).png" alt="" class="mr-4">
        </div>
      </div>
      <div class="mt-10 max-sm:ml-10 max-sm:mt-2">
        <h2 class="font-bold text-lg">Mangcoding</h2>
        <ul class="py-6 text-slate-400 max-sm:py-1">
          <li class="pb-6"><a href="#">Home</a></li>
          <li class="pb-6"><a href="#">About</a></li>
          <li class="pb-6"><a href="#">Services</a></li>
          <li class="pb-6"><a href="#">Blog</a></li>
          <li class="pb-6"><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="mt-10 ml-12 max-sm:mt-2 max-sm:ml-10">
        <h2 class="font-bold text-lg">Services</h2>
        <ul class="py-6 text-slate-400 max-sm:py-1">
          <li class="pb-6"><a href="#">Custom WordPress Theme Development </a></li>
          <li class="pb-6"><a href="#">Custom Plugin WordPress </a></li>
          <li class="pb-6"><a href="#">Custom Shopify Theme Development </a></li>
          <li class="pb-6"><a href="#">Custom App for Shopify</a></li>
          <li class="pb-6"><a href="#">Web Application</a></li>
        </ul>
      </div>
      <div class="mt-10 ml-12 max-sm:mt-2 ">
        <h2 class="font-bold text-lg">Trusted partner</h2>
        <div class="py-4 max-sm:py-1 max-sm:flex max-sm:flex-wrap ">
          <img src="orely.png" alt="" class="pb-4 max-sm:px-2 max-sm:w-[100px]">
          <img src="kiwa.png" alt="" class=" max-sm:w-[60px]">
        </div>
      </div>
      <div class="mt-10 ml-12 max-sm:mt-2">
        <h2 class="font-bold text-lg">Services</h2>
        <div class="w-[300px] py-4 flex flex-wrap mx-auto">
          <div class="flex gap-4 items-center mb-4">
            <img class="w-[25px]" src="mail.png" alt="">
            <p class="text-neutral-600">hello@mangcoding.com</p>
        </div>

        <div class="flex gap-4 items-center mb-4">
            <img class="w-[20px]" src="tlp.png" alt="">
            <p class="w-40 text-neutral-600">0266-6532078 WA:0857-5940-2332</p>
        </div>

        <div class="flex gap-4 items-center">
            <img class="w-[20px]" src="gps.png" alt="">
            <p class="w-60 text-neutral-600">PT Anugrah Kreasi Digital. karang tengah, Cibadak - Sukabumi
            </p>
        </div>
        </div>
      </div>
    </div>
  </footer>

  <script>
// popup search dan button get started
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var btnSearch = document.getElementById("myBtn-search");
    var span = document.getElementsByClassName("close")[0];
    
    btn.onclick = function() {
      modal.style.display = "block";
    }

    btnSearch.onclick = function() {
      modal.style.display = "block";
    }
    
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    const buttonMobile = document.querySelector('.mobile-btn');
    const navigation = document.querySelector('nav');

    buttonMobile.addEventListener('click', function (event) {
      this.classList.toggle('active');
      navigation.classList.toggle('active');
    });

    document.querySelectorAll('li.has-child').forEach(function (anchor) {
      anchor.querySelector('.caret').addEventListener('click', (event) => {
        anchor.classList.toggle('active');
      });
    });
    </script>
</body>
</html>



