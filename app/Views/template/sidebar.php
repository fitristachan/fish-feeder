<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 shadow-lg">
   <div class="px-3 py-3 lg:px-5 lg:pl-3 bg-blue-900">
      <div class="flex items-center justify-between">

         <div class="flex items-center justify-start">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
               <span class="sr-only"> Open sidebar </span>
               <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
               </svg>
            </button>
            <img src="https://cdn-icons-png.flaticon.com/512/4191/4191509.png" class="h-8 mr-3" alt="Logo" />
            <span class="self-center text-xl font-bold text-white sm:text-2xl whitespace-nowrap"> Fish Feeder </span>
            </a>
         </div>

      </div>
   </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
      <ul class="space-y-2 font-medium">
        <li>
            <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 <?= url_is('/') ? 'bg-blue-800 text-white hover:bg-blue-800' : ''; ?>">
               <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 <?= url_is('/') ? 'text-white' : ''; ?>" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="/log" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 <?= url_is('/log*') ? 'bg-blue-800 text-white hover:bg-blue-800' : ''; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
               <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625ZM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H8.25Z" clip-rule="evenodd" />
               <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
            </svg>
               <span class="ml-3"> Riwayat </span>
            </a>
         </li>
      </ul>
   </div>
</aside>