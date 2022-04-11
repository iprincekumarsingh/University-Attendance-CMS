 <li class="nav-item">
     <a href="{{ route('student') }}" class="nav-link d-flex justify-content-between">
         <span>
             <span class="sidebar-icon">
                 <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path
                         d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                     </path>
                 </svg>
             </span>
             <span class="sidebar-text">Student</span>
         </span>
         <span>
             {{-- <span class="badge badge-sm bg-secondary ms-1 text-gray-800">Pro</span> --}}
         </span>
     </a>
 </li>
 <li class="nav-item ">
     <a href="{{ route('branch') }}" class="nav-link">
         <span class="sidebar-icon">
             <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                 <path fill-rule="evenodd"
                     d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                     clip-rule="evenodd"></path>
             </svg>
         </span>
         <span class="sidebar-text">Branch</span>
     </a>
 </li>
 <li class="nav-item ">
     <a href="{{ route('profile.show') }}" class="nav-link">
         <span class="sidebar-icon">
             <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path fill-rule="evenodd"
                     d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                     clip-rule="evenodd"></path>
             </svg>
         </span>
         <span class="sidebar-text">Profile</span>
     </a>
 </li>
