<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" /> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
  <?php 
    function baseURL($morepath){
      return "/ST15_Year3_Se1/WBD/furniture_website/".$morepath;
    }
  ?>
  <section class="relative mx-auto w-full" style="z-index:9999999;">
      <!-- navbar -->
    <nav class="flex justify-between bg-gray-900 text-white">
      <div class="px-5 xl:px-8 py-3 flex w-full items-center">
        <a class="text-3xl font-bold font-heading" href="#">
          <img class="h-[70px]" src="<?= baseURL('assets/images/logo.png') ?>" alt="logo">
        </a>
        <!-- Nav Links -->
        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
        <li>
            <a href="index.php?look=home" class="bg-orange-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:text-orange-700 md:p-0 rounded focus:outline-none" aria-current="page">Home</a>
            </li>
            <li>
              <div x-data="{ open: false }" class="relative inline-block text-left">
                <button @mouseover="open = true" @mouseout="open = false"  class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto"> Category <svg class="h-5 w-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <div @click.away="open = false" @mouseover="open = true" class="pt-3">
                  <div x-show="open" class="origin-top-left absolute left-0 mt-0 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 px-2 py-2">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Save</a>
                    <?php  
                      $furnitureCategories = array(
                          "Seating Furniture" => array(
                              "Chairs",
                              "Sofas",
                              "Benches",
                              "Stools",
                              "Recliners",
                              "Ottomans"
                          ),
                          "Sleeping Furniture" => array(
                              "Beds",
                              "Bunk Beds",
                              "Daybeds",
                              "Futons"
                          ),
                          "Storage Furniture" => array(
                              "Wardrobes",
                              "Dressers",
                              "Cabinets",
                              "Shelves",
                              "Bookcases",
                              "Sideboards"
                          ),
                          "Table Furniture" => array(
                              "Dining Tables",
                              "Coffee Tables",
                              "Side Tables",
                              "Desks",
                              "Console Tables",
                              "Nightstands"
                          ),
                          "Entertainment Furniture" => array(
                              "TV Stands",
                              "Entertainment Centers",
                              "Media Consoles"
                          ),
                          "Office Furniture" => array(
                              "Desks",
                              "Office Chairs",
                              "Filing Cabinets",
                              "Conference Tables"
                          )
                      );
                    ?>
                    <?php foreach ($furnitureCategories as $key => $value) { ?>
                      <div x-data="{ subMenuOpen: false }" class="relative">
                        <button @mouseover="subMenuOpen = true" @mouseout="subMenuOpen = false" class="flex justify-between items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 relative rounded-md"> 
                          <?= $key ?>
                          <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5 ml-2" transform="matrix(1, 0, 0, 1, 0, 0)rotate(270)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                              <g id="Layer_2" data-name="Layer 2">
                                <g id="invisible_box" data-name="invisible box">
                                  <rect width="48" height="48" fill="none"></rect>
                                </g>
                                <g id="icons_Q2" data-name="icons Q2">
                                  <path d="M24,27.2,13.4,16.6a1.9,1.9,0,0,0-3,.2,2.1,2.1,0,0,0,.2,2.7l12,11.9a1.9,1.9,0,0,0,2.8,0l12-11.9a2.1,2.1,0,0,0,.2-2.7,1.9,1.9,0,0,0-3-.2Z"></path>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </button>
                        <div x-show="subMenuOpen" @click.away="subMenuOpen = false"  @mouseover="subMenuOpen = true" class="absolute pl-5 top-0 left-full ml-0 w-full">
                          <div class="  rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 px-2 py-2">
                            <?php foreach ($value as $sub) { ?>
                              <a rel="noopener" href="" class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><?= $sub ?></a>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    <a href="#" class="block px-4 py-2 text-sm text-red-500 hover:bg-red-100 rounded-md">Report</a>
                  </div>

                </div>
              </div>
            </li>
            <li>
            <a href="index.php?look=service" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Services</a>
            </li>
            <li>
            <a href="index.php?look=blog" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Blog</a>
            </li>
            <li>
            <a href="index.php?look=contact" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Contact</a>
            </li>
            <li>
            <a href="index.php?look=about" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">About us</a>
            </li>
        </ul>
        <!-- Header Icons -->
        <div class="hidden xl:flex items-center space-x-5 items-center">
          <a class="hover:text-gray-200" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
          </a>
          <a id="showcart" class="flex items-center hover:text-gray-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            <span class="flex absolute -mt-5 ml-4">
              <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                </span>
              </span>
          </a>
          <!-- Sign In / Register      -->
          <a class="flex items-center hover:text-gray-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
          </a>
          
        </div>
      </div>
      <!-- Responsive navbar -->
      <a id="showcart" class="xl:hidden flex mr-6 items-center" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <span class="flex absolute -mt-5 ml-4">
          <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
          </span>
        </span>
      </a>
      <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
      </a>
    </nav>
    
  </section>
  <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
  </body>
</html>
