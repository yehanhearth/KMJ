<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />

    <title>Document</title>
</head>

<body>

    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="lni lni-home-2"></i>
                        <span class="ms-3">Home</span>
                    </a>
                </li>
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <i class="lni lni-book-1 "></i>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Book</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Atlas</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Mango</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Rathna</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Promate</a>
                        </li>
                    </ul>
                </li>

                <!-- pen dropdown  -->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-pen">
                        <i class="lni lni-pencil-1"></i>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Pens</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-pen" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Atlas</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Mango</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Rathna</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Promate</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="lni lni-cart-1"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">cart</span>
                        <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">0</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                        <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li> -->
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="lni lni-user-4"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="lni lni-box-closed"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">New Products</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            enable-background="new 0 0 30 30" height="30px" id="Capa_1" version="1.1" viewBox="0 0 30 30" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M16.5,10.7H22c0.4,0,0.8-0.3,0.8-0.8S22.4,9.2,22,9.2h-5.4c-0.4,0-0.8,0.3-0.8,0.8S16.1,10.7,16.5,10.7z   M16.5,12.9h3.1c0.4,0,0.8-0.3,0.8-0.8s-0.3-0.8-0.8-0.8h-3.1c-0.4,0-0.8,0.3-0.8,0.8S16.1,12.9,16.5,12.9z M16.5,8.4H22  c0.4,0,0.8-0.3,0.8-0.8S22.4,6.9,22,6.9h-5.4c-0.4,0-0.8,0.3-0.8,0.8S16.1,8.4,16.5,8.4z M24.7,0.6H5.3c-2.8,0-5.1,2.3-5.1,5.1V18  c0,2.8,2.3,5.1,5.1,5.1h4.4l-0.5,4.4c0,1,0.8,1.8,1.8,1.8h8c1,0,1.8-0.8,1.8-1.9l-0.5-4.3h4.4c2.8,0,5.1-2.3,5.1-5.1V5.8  C29.8,2.9,27.5,0.6,24.7,0.6z M19,27.9h-8c-0.2,0-0.3-0.2-0.3-0.2l0.6-4.5h7.6l0.6,4.4C19.3,27.7,19.2,27.9,19,27.9z M28.3,18  c0,2-1.6,3.6-3.6,3.6H5.3c-2,0-3.6-1.6-3.6-3.6V5.8c0-2,1.6-3.6,3.6-3.6h19.4c2,0,3.6,1.6,3.6,3.6V18z M25.2,3.9H4.8  C4.3,3.9,4,4.2,4,4.7v12.7c0,0.4,0.3,0.8,0.8,0.8h20.5c0.4,0,0.8-0.3,0.8-0.8V4.7C26,4.2,25.7,3.9,25.2,3.9z M24.5,16.6h-19V5.4h19  V16.6z M8.8,15.8h6.4c0.6,0,1-0.5,1-1v-0.4c0-0.6-0.8-2.3-2.6-2.4c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.1-0.8,0.3-1.1,0.3  c-0.3,0-0.9-0.2-1.1-0.2c-0.2-0.2-0.4-0.3-0.6-0.3c-1.7,0.1-2.6,1.5-2.6,2.2v0.5C7.8,15.3,8.2,15.8,8.8,15.8z M10.2,13.5  c0.6,0.4,1.6,0.5,1.8,0.5s1.2-0.1,1.8-0.5c0.5,0.1,0.7,0.5,0.8,0.7H9.3C9.3,14.2,9.5,13.7,10.2,13.5z M12,12.1  c1.3,0,2.3-1.3,2.3-2.8c0-1.5-1.1-2.8-2.3-2.8c-1.3,0-2.3,1.3-2.3,2.8C9.6,10.8,10.7,12.1,12,12.1z M12,8c0.4,0,0.8,0.6,0.8,1.3  c0,0.7-0.4,1.3-0.8,1.3c-0.4,0-0.8-0.5-0.8-1.3C11.1,8.5,11.6,8,12,8z" fill="#262324" />
                        </svg>
                        <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                        <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                        <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>



</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>


</html>