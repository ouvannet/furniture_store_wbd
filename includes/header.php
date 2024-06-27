<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>
<body>
  <section class="relative mx-auto">
      <!-- navbar -->
    <nav class="flex justify-between bg-gray-900 text-white w-screen">
      <div class="px-5 xl:px-8 py-3 flex w-full items-center">
        <a class="text-3xl font-bold font-heading" href="#">
          <img class="h-[70px]" src="assets/images/logo.png" alt="logo">
          <!-- <svg class="h-10 mr-3" width="51" height="70" viewBox="0 0 51 70" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M1 53H27.9022C40.6587 53 51 42.7025 51 30H24.0978C11.3412 30 1 40.2975 1 53Z" fill="#76A9FA"></path><path d="M-0.876544 32.1644L-0.876544 66.411C11.9849 66.411 22.4111 55.9847 22.4111 43.1233L22.4111 8.87674C10.1196 8.98051 0.518714 19.5571 -0.876544 32.1644Z" fill="#A4CAFE"></path><path d="M50 5H23.0978C10.3413 5 0 15.2975 0 28H26.9022C39.6588 28 50 17.7025 50 5Z" fill="#1C64F2"></path></g><defs><clipPath id="clip0"><rect width="51" height="70" fill="white"></rect></clipPath></defs></svg> -->

        </a>
        <!-- Nav Links -->
        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
        <li>
            <a href="index.php" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:text-blue-700 md:p-0 rounded focus:outline-none" aria-current="page">Home</a>
            </li>
            <li>
              <div x-data="{ open: false }" class="relative inline-block text-left">
                <button @mouseover="open = true" @mouseout="open = false"  class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto"> Menu <svg class="h-5 w-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <div x-show="open" @click.away="open = false" @mouseover="open = true" class="origin-top-left absolute left-0 mt-0 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 px-2 py-2">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Save</a>
                  <div x-data="{ subMenuOpen: false }" class="relative">
                    <button @mouseover="subMenuOpen = true" @mouseover="subMenuOpen = false" class="flex justify-between items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 relative rounded-md"> Share to <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5 ml-2" transform="matrix(1, 0, 0, 1, 0, 0)rotate(270)">
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
                    <div x-show="subMenuOpen" @click.away="subMenuOpen = false"  @mouseover="subMenuOpen = true" class="absolute top-0 left-full ml-4 w-full rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 px-2 py-2">
                      <a target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Ftailwindcomponents.com%2Fu%2Fdhaifullah&amp;text=" class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Twitter</a>
                      <a target="_blank" rel="noopener" href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftailwindcomponents.com%2Fu%2Fdhaifullah" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Facebook</a>
                      <a target="_blank" rel="noopener" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Ftailwindcomponents.com%2Fu%2Fdhaifullah&amp;title=&amp;summary=&amp;source=https%3A%2F%2Ftailwindcomponents.com%2Fu%2Fdhaifullah" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">LinkedIn</a>
                      <a target="_blank" rel="noopener" href="https://www.tumblr.com/widgets/share/tool?posttype=link&amp;title=&amp;caption=&amp;content=https%3A%2F%2Ftailwindcomponents.com%2Fu%2Fdhaifullah&amp;canonicalUrl=https%3A%2F%2Ftailwindcomponents.com%2Fu%2Fdhaifullah&amp;shareSource=tumblr_share_button" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tumblr</a>
                      <a target="_blank" rel="noopener" href="https://reddit.com/submit/?url=https%3A%2F%2Ftailwindcomponents.com%2Fu%2Fdhaifullah&amp;resubmit=true&amp;title=" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Reddit</a>
                      <!-- Add more sub-menu items as needed -->
                    </div>
                  </div>
                  <a href="#" class="block px-4 py-2 text-sm text-red-500 hover:bg-red-100 rounded-md">Report</a>
                </div>
              </div>
            </li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Category <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                        <?php $category=['Chairs','Bed','Tables']; 
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
                        <?php foreach ($category as $cat) { ?>
                            <li>
                                <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"><?= $cat; ?></a>
                            </li>
                         
                        <?php } ?>
                    </ul>
                </div>
            </li>
            <li>
            <a href="#" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Services</a>
            </li>
            <li>
<<<<<<< HEAD
            <a href="#" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Pricing</a>
            </li>
            <li>
            <a href="contact.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Contact</a>
=======
            <a href="#" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Contact</a>
>>>>>>> 32bb6b43023b638cad93017beef7ae4e8b465b7a
            </li>
            <li>
            <a href="about.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">About us</a>
            </li>
        </ul>
        <!-- Header Icons -->
        <div class="hidden xl:flex items-center space-x-5 items-center">
          <a class="hover:text-gray-200" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
          </a>
          <a class="flex items-center hover:text-gray-200" href="#">
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
      <a class="xl:hidden flex mr-6 items-center" href="#">
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
