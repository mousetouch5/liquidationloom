<x-app-layout>
      
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
        AOS.init();
      </script>


    <div class="flex h-full min-h-screen">
        <!-- Sidebar -->
        <aside class="w-full bg-gray-100 shadow-lg">
            <div class="py-4 px-6">
              <!-- <div class="text-lg font-semibold">Liquidation Loom</div> -->
            </div>
            <nav class="mt-4">
                <a href="{{ route('dashboard') }}" class="flex items-center px-6 py-3 text-gray-600 hover:bg-blue-100" style="background: rgba(205, 243, 255, 1);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6818 6.22623L4.00032 14.362V23.1428C4.00032 23.3701 4.07055 23.5882 4.19556 23.7489C4.32058 23.9097 4.49013 24 4.66693 24L9.33574 23.9845C9.51196 23.9833 9.68066 23.8925 9.80495 23.7319C9.92925 23.5712 9.99902 23.3539 9.99902 23.1272V17.9993C9.99902 17.772 10.0693 17.5539 10.1943 17.3932C10.3193 17.2324 10.4888 17.1421 10.6656 17.1421H13.3321C13.5089 17.1421 13.6784 17.2324 13.8035 17.3932C13.9285 17.5539 13.9987 17.772 13.9987 17.9993V23.1235C13.9984 23.2363 14.0155 23.348 14.0489 23.4524C14.0822 23.5567 14.1313 23.6515 14.1932 23.7314C14.2551 23.8113 14.3287 23.8747 14.4097 23.9179C14.4908 23.9611 14.5776 23.9834 14.6653 23.9834L19.3325 24C19.5093 24 19.6788 23.9097 19.8038 23.7489C19.9289 23.5882 19.9991 23.3701 19.9991 23.1428V14.3561L12.3193 6.22623C12.229 6.13265 12.1165 6.08161 12.0005 6.08161C11.8846 6.08161 11.7721 6.13265 11.6818 6.22623ZM23.8155 11.756L20.3324 8.06394V0.642929C20.3324 0.472414 20.2797 0.308882 20.186 0.18831C20.0922 0.0677371 19.965 0 19.8324 0H17.4993C17.3667 0 17.2395 0.0677371 17.1457 0.18831C17.052 0.308882 16.9993 0.472414 16.9993 0.642929V4.53319L13.2692 0.586673C12.9112 0.207869 12.462 0.000757234 11.9984 0.000757234C11.5349 0.000757234 11.0857 0.207869 10.7277 0.586673L0.181444 11.756C0.130818 11.8098 0.0889323 11.8759 0.0581813 11.9505C0.0274303 12.0251 0.00841634 12.1068 0.00222573 12.1909C-0.00396488 12.275 0.00278923 12.3598 0.0221021 12.4406C0.041415 12.5213 0.0729083 12.5963 0.114782 12.6614L1.1772 14.3223C1.21896 14.3876 1.27033 14.4417 1.32835 14.4814C1.38638 14.5212 1.44994 14.5458 1.51538 14.5539C1.58082 14.562 1.64686 14.5535 1.70973 14.5287C1.77259 14.5039 1.83104 14.4635 1.88173 14.4097L11.6818 4.02956C11.7721 3.93597 11.8846 3.88494 12.0005 3.88494C12.1165 3.88494 12.229 3.93597 12.3193 4.02956L22.1198 14.4097C22.1704 14.4635 22.2287 14.504 22.2915 14.5288C22.3543 14.5537 22.4202 14.5624 22.4856 14.5544C22.551 14.5464 22.6145 14.522 22.6726 14.4824C22.7306 14.4429 22.782 14.389 22.8239 14.3239L23.8863 12.663C23.9281 12.5976 23.9595 12.5222 23.9786 12.4411C23.9976 12.36 24.0041 12.2749 23.9975 12.1906C23.9909 12.1063 23.9714 12.0245 23.9402 11.9499C23.909 11.8753 23.8666 11.8094 23.8155 11.756Z" fill="#7166F9"/>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
                
                </a>
                <a href="{{ route('Resident.Event.index') }}" class="flex items-center px-6 py-3 text-gray-600 hover:bg-blue-100">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6H16V4H2V6ZM2 20C1.45 20 0.979167 19.8042 0.5875 19.4125C0.195833 19.0208 0 18.55 0 18V4C0 3.45 0.195833 2.97917 0.5875 2.5875C0.979167 2.19583 1.45 2 2 2H3V0H5V2H13V0H15V2H16C16.55 2 17.0208 2.19583 17.4125 2.5875C17.8042 2.97917 18 3.45 18 4V9.675C17.6833 9.525 17.3583 9.4 17.025 9.3C16.6917 9.2 16.35 9.125 16 9.075V8H2V18H8.3C8.41667 18.3667 8.55417 18.7167 8.7125 19.05C8.87083 19.3833 9.05833 19.7 9.275 20H2ZM15 21C13.6167 21 12.4375 20.5125 11.4625 19.5375C10.4875 18.5625 10 17.3833 10 16C10 14.6167 10.4875 13.4375 11.4625 12.4625C12.4375 11.4875 13.6167 11 15 11C16.3833 11 17.5625 11.4875 18.5375 12.4625C19.5125 13.4375 20 14.6167 20 16C20 17.3833 19.5125 18.5625 18.5375 19.5375C17.5625 20.5125 16.3833 21 15 21ZM16.675 18.375L17.375 17.675L15.5 15.8V13H14.5V16.2L16.675 18.375Z" fill="black"/>
                        </svg>
                        
                    <span class="ml-4">Events</span>
                </a>
                <a href="{{ route('Resident.Project.index')}}" class="flex items-center px-6 py-3 text-gray-600 hover:bg-blue-100">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_2256_1225" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_2256_1225)">
                        <path d="M2 21V9L10 3L15.375 7.05C14.9583 7.1 14.5667 7.19583 14.2 7.3375C13.8333 7.47917 13.4833 7.66667 13.15 7.9L10 5.5L4 10V19H8V21H2ZM10 21V19.1C10 18.75 10.0875 18.4208 10.2625 18.1125C10.4375 17.8042 10.675 17.5583 10.975 17.375C11.7417 16.925 12.5458 16.5833 13.3875 16.35C14.2292 16.1167 15.1 16 16 16C16.9 16 17.7708 16.1167 18.6125 16.35C19.4542 16.5833 20.2583 16.925 21.025 17.375C21.325 17.5583 21.5625 17.8042 21.7375 18.1125C21.9125 18.4208 22 18.75 22 19.1V21H10ZM12.15 19H19.85C19.2667 18.6667 18.65 18.4167 18 18.25C17.35 18.0833 16.6833 18 16 18C15.3167 18 14.65 18.0833 14 18.25C13.35 18.4167 12.7333 18.6667 12.15 19ZM16 15C15.1667 15 14.4583 14.7083 13.875 14.125C13.2917 13.5417 13 12.8333 13 12C13 11.1667 13.2917 10.4583 13.875 9.875C14.4583 9.29167 15.1667 9 16 9C16.8333 9 17.5417 9.29167 18.125 9.875C18.7083 10.4583 19 11.1667 19 12C19 12.8333 18.7083 13.5417 18.125 14.125C17.5417 14.7083 16.8333 15 16 15ZM16 13C16.2833 13 16.5208 12.9042 16.7125 12.7125C16.9042 12.5208 17 12.2833 17 12C17 11.7167 16.9042 11.4792 16.7125 11.2875C16.5208 11.0958 16.2833 11 16 11C15.7167 11 15.4792 11.0958 15.2875 11.2875C15.0958 11.4792 15 11.7167 15 12C15 12.2833 15.0958 12.5208 15.2875 12.7125C15.4792 12.9042 15.7167 13 16 13Z" fill="black"/>
                        </g>
                        </svg>
                        
                        
                        
                    <span class="ml-4">Projects</span>
                </a>
            </nav>
            
            <div class="absolute bottom-4 w-full">
                <a href="#" class=" px-6 py-3 flex items-center text-gray-600 ">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0014 5.71408C16.0014 5.41876 15.8972 5.13283 15.7097 4.92189L11.6302 0.328126C11.4427 0.117188 11.1885 0 10.9218 0H10.6676V6.00002H16.0014V5.71408ZM23.7937 14.4375L19.8059 9.91878C19.385 9.44534 18.6641 9.77815 18.6641 10.4485V13.5H15.9972V16.5H18.6641V19.5563C18.6641 20.2266 19.385 20.5594 19.8059 20.086L23.7937 15.5625C24.0688 15.2532 24.0688 14.7469 23.7937 14.4375ZM8.00069 15.75V14.25C8.00069 13.8375 8.30072 13.5 8.66742 13.5H16.0014V7.50002H10.3342C9.78418 7.50002 9.33414 6.99377 9.33414 6.37502V0H1.00009C0.445872 0 0 0.501564 0 1.125V22.8751C0 23.4985 0.445872 24.0001 1.00009 24.0001H15.0013C15.5555 24.0001 16.0014 23.4985 16.0014 22.8751V16.5H8.66742C8.30072 16.5 8.00069 16.1625 8.00069 15.75Z" fill="black"/>
                        </svg>
                        
                        
                        
                        
                    <span class="ml-4">Log out</span>
                </a>
                </div>
        </aside>







           
        <div class="flex flex-col lg:flex-row lg:space-x-6">
            <!-- Content Section -->
            <main class="flex-1 px-8 py-6 space-y-6 bg-gray-50">
                <!-- Events Section -->
                <section>
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold" 
                        data-aos="fade-up"
                                data-aos-duration="2000">Projects</h2>
                        <div class="flex space-x-4">
                            <button class="px-4 py-2  text-black rounded-lg " style="background: rgba(205, 243, 255, 1);">Recent Projects</button>
                            <button class="px-4 py-2 bg-gray-200 rounded-lg">Ongoing Events</button>
                            <button class="px-4 py-2 bg-gray-200 rounded-lg">Upcoming Events</button>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4 mt-4"
                    data-aos="fade-in"
                            data-aos-duration="2000">



                                                <!--card 3 -->
                        <!-- Event Cards -->
                    <div class="bg-white shadow-lg rounded-lg p-4">
                        <img src="{{ asset('logo/card1.png') }}" alt="Event" class="rounded-lg">
                        <h3 class="mt-4 text-md font-semibold">Community Outreach</h3>

                        <p class="text-sm text-gray-500">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block ml-2">
                                <path d="M7.89556 17C6.80334 17 5.77691 16.7769 4.81629 16.3306C3.85566 15.8844 3.02005 15.2788 2.30945 14.5138C1.59885 13.7488 1.03629 12.8492 0.621775 11.815C0.207258 10.7808 0 9.67583 0 8.5C0 7.32417 0.207258 6.21917 0.621775 5.185C1.03629 4.15083 1.59885 3.25125 2.30945 2.48625C3.02005 1.72125 3.85566 1.11563 4.81629 0.669375C5.77691 0.223125 6.80334 0 7.89556 0C8.98777 0 10.0142 0.223125 10.9748 0.669375C11.9354 1.11563 12.7711 1.72125 13.4817 2.48625C14.1923 3.25125 14.7548 4.15083 15.1693 5.185C15.5839 6.21917 15.7911 7.32417 15.7911 8.5C15.7911 8.8825 15.7714 9.25792 15.7319 9.62625C15.6924 9.99458 15.6266 10.3558 15.5345 10.71C15.3503 10.4833 15.1364 10.2921 14.893 10.1363C14.6495 9.98042 14.3831 9.87417 14.0936 9.8175C14.133 9.605 14.1627 9.38896 14.1824 9.16938C14.2021 8.94979 14.212 8.72667 14.212 8.5C14.212 6.60167 13.6001 4.99375 12.3763 3.67625C11.1525 2.35875 9.6589 1.7 7.89556 1.7C6.13221 1.7 4.63864 2.35875 3.41483 3.67625C2.19102 4.99375 1.57911 6.60167 1.57911 8.5C1.57911 10.3983 2.19102 12.0063 3.41483 13.3238C4.63864 14.6413 6.13221 15.3 7.89556 15.3C8.56668 15.3 9.20819 15.1938 9.8201 14.9813C10.432 14.7688 10.9946 14.4713 11.5078 14.0888C11.6657 14.3296 11.8598 14.5421 12.0901 14.7263C12.3204 14.9104 12.5671 15.0521 12.8303 15.1513C12.1592 15.7321 11.4058 16.1854 10.5702 16.5113C9.73456 16.8371 8.84302 17 7.89556 17ZM13.6198 13.6C13.3435 13.6 13.1099 13.4973 12.9191 13.2919C12.7283 13.0865 12.6329 12.835 12.6329 12.5375C12.6329 12.24 12.7283 11.9885 12.9191 11.7831C13.1099 11.5777 13.3435 11.475 13.6198 11.475C13.8962 11.475 14.1298 11.5777 14.3206 11.7831C14.5114 11.9885 14.6068 12.24 14.6068 12.5375C14.6068 12.835 14.5114 13.0865 14.3206 13.2919C14.1298 13.4973 13.8962 13.6 13.6198 13.6ZM10.5011 12.495L7.106 8.84V4.25H8.68511V8.16L11.6065 11.305L10.5011 12.495Z" fill="#767676"/>
                            </svg>
                            16 Jul 2024, 8:30 AM
                            
                        </p>
                    </div>

                    <!-- Event Cards -->
                    <div class="bg-white shadow-lg rounded-lg p-4 ease-in duration-300">
                        <img src="{{ asset('logo/card2.png') }}" alt="Event" class="rounded-lg">
                        <h3 class="mt-4 text-md font-semibold">Community Outreach</h3>
                        <p class="text-sm text-gray-500">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block ml-2">
                                <path d="M7.89556 17C6.80334 17 5.77691 16.7769 4.81629 16.3306C3.85566 15.8844 3.02005 15.2788 2.30945 14.5138C1.59885 13.7488 1.03629 12.8492 0.621775 11.815C0.207258 10.7808 0 9.67583 0 8.5C0 7.32417 0.207258 6.21917 0.621775 5.185C1.03629 4.15083 1.59885 3.25125 2.30945 2.48625C3.02005 1.72125 3.85566 1.11563 4.81629 0.669375C5.77691 0.223125 6.80334 0 7.89556 0C8.98777 0 10.0142 0.223125 10.9748 0.669375C11.9354 1.11563 12.7711 1.72125 13.4817 2.48625C14.1923 3.25125 14.7548 4.15083 15.1693 5.185C15.5839 6.21917 15.7911 7.32417 15.7911 8.5C15.7911 8.8825 15.7714 9.25792 15.7319 9.62625C15.6924 9.99458 15.6266 10.3558 15.5345 10.71C15.3503 10.4833 15.1364 10.2921 14.893 10.1363C14.6495 9.98042 14.3831 9.87417 14.0936 9.8175C14.133 9.605 14.1627 9.38896 14.1824 9.16938C14.2021 8.94979 14.212 8.72667 14.212 8.5C14.212 6.60167 13.6001 4.99375 12.3763 3.67625C11.1525 2.35875 9.6589 1.7 7.89556 1.7C6.13221 1.7 4.63864 2.35875 3.41483 3.67625C2.19102 4.99375 1.57911 6.60167 1.57911 8.5C1.57911 10.3983 2.19102 12.0063 3.41483 13.3238C4.63864 14.6413 6.13221 15.3 7.89556 15.3C8.56668 15.3 9.20819 15.1938 9.8201 14.9813C10.432 14.7688 10.9946 14.4713 11.5078 14.0888C11.6657 14.3296 11.8598 14.5421 12.0901 14.7263C12.3204 14.9104 12.5671 15.0521 12.8303 15.1513C12.1592 15.7321 11.4058 16.1854 10.5702 16.5113C9.73456 16.8371 8.84302 17 7.89556 17ZM13.6198 13.6C13.3435 13.6 13.1099 13.4973 12.9191 13.2919C12.7283 13.0865 12.6329 12.835 12.6329 12.5375C12.6329 12.24 12.7283 11.9885 12.9191 11.7831C13.1099 11.5777 13.3435 11.475 13.6198 11.475C13.8962 11.475 14.1298 11.5777 14.3206 11.7831C14.5114 11.9885 14.6068 12.24 14.6068 12.5375C14.6068 12.835 14.5114 13.0865 14.3206 13.2919C14.1298 13.4973 13.8962 13.6 13.6198 13.6ZM10.5011 12.495L7.106 8.84V4.25H8.68511V8.16L11.6065 11.305L10.5011 12.495Z" fill="#767676"/>
                            </svg>
                            16 Jul 2024, 8:30 AM</p>
                    </div>

                    <!-- Event Cards -->
                    <div class="bg-white shadow-lg rounded-lg p-4 ease-in duration-300">
                        <img src="{{ asset('logo/card3.png') }}" alt="Event" class="rounded-lg">
                        <h3 class="mt-4 text-md font-semibold">Community Outreach</h3>
                        <p class="text-sm text-gray-500">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block ml-2">
                                <path d="M7.89556 17C6.80334 17 5.77691 16.7769 4.81629 16.3306C3.85566 15.8844 3.02005 15.2788 2.30945 14.5138C1.59885 13.7488 1.03629 12.8492 0.621775 11.815C0.207258 10.7808 0 9.67583 0 8.5C0 7.32417 0.207258 6.21917 0.621775 5.185C1.03629 4.15083 1.59885 3.25125 2.30945 2.48625C3.02005 1.72125 3.85566 1.11563 4.81629 0.669375C5.77691 0.223125 6.80334 0 7.89556 0C8.98777 0 10.0142 0.223125 10.9748 0.669375C11.9354 1.11563 12.7711 1.72125 13.4817 2.48625C14.1923 3.25125 14.7548 4.15083 15.1693 5.185C15.5839 6.21917 15.7911 7.32417 15.7911 8.5C15.7911 8.8825 15.7714 9.25792 15.7319 9.62625C15.6924 9.99458 15.6266 10.3558 15.5345 10.71C15.3503 10.4833 15.1364 10.2921 14.893 10.1363C14.6495 9.98042 14.3831 9.87417 14.0936 9.8175C14.133 9.605 14.1627 9.38896 14.1824 9.16938C14.2021 8.94979 14.212 8.72667 14.212 8.5C14.212 6.60167 13.6001 4.99375 12.3763 3.67625C11.1525 2.35875 9.6589 1.7 7.89556 1.7C6.13221 1.7 4.63864 2.35875 3.41483 3.67625C2.19102 4.99375 1.57911 6.60167 1.57911 8.5C1.57911 10.3983 2.19102 12.0063 3.41483 13.3238C4.63864 14.6413 6.13221 15.3 7.89556 15.3C8.56668 15.3 9.20819 15.1938 9.8201 14.9813C10.432 14.7688 10.9946 14.4713 11.5078 14.0888C11.6657 14.3296 11.8598 14.5421 12.0901 14.7263C12.3204 14.9104 12.5671 15.0521 12.8303 15.1513C12.1592 15.7321 11.4058 16.1854 10.5702 16.5113C9.73456 16.8371 8.84302 17 7.89556 17ZM13.6198 13.6C13.3435 13.6 13.1099 13.4973 12.9191 13.2919C12.7283 13.0865 12.6329 12.835 12.6329 12.5375C12.6329 12.24 12.7283 11.9885 12.9191 11.7831C13.1099 11.5777 13.3435 11.475 13.6198 11.475C13.8962 11.475 14.1298 11.5777 14.3206 11.7831C14.5114 11.9885 14.6068 12.24 14.6068 12.5375C14.6068 12.835 14.5114 13.0865 14.3206 13.2919C14.1298 13.4973 13.8962 13.6 13.6198 13.6ZM10.5011 12.495L7.106 8.84V4.25H8.68511V8.16L11.6065 11.305L10.5011 12.495Z" fill="#767676"/>
                            </svg>
                            16 Jul 2024, 8:30 AM</p>
                    </div>



                    <div class="bg-white shadow-lg rounded-lg p-4">
                        <img src="{{ asset('logo/card1.png') }}" alt="Event" class="rounded-lg">
                        <h3 class="mt-4 text-md font-semibold">Community Outreach</h3>

                        <p class="text-sm text-gray-500">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block ml-2">
                            <path d="M7.89556 17C6.80334 17 5.77691 16.7769 4.81629 16.3306C3.85566 15.8844 3.02005 15.2788 2.30945 14.5138C1.59885 13.7488 1.03629 12.8492 0.621775 11.815C0.207258 10.7808 0 9.67583 0 8.5C0 7.32417 0.207258 6.21917 0.621775 5.185C1.03629 4.15083 1.59885 3.25125 2.30945 2.48625C3.02005 1.72125 3.85566 1.11563 4.81629 0.669375C5.77691 0.223125 6.80334 0 7.89556 0C8.98777 0 10.0142 0.223125 10.9748 0.669375C11.9354 1.11563 12.7711 1.72125 13.4817 2.48625C14.1923 3.25125 14.7548 4.15083 15.1693 5.185C15.5839 6.21917 15.7911 7.32417 15.7911 8.5C15.7911 8.8825 15.7714 9.25792 15.7319 9.62625C15.6924 9.99458 15.6266 10.3558 15.5345 10.71C15.3503 10.4833 15.1364 10.2921 14.893 10.1363C14.6495 9.98042 14.3831 9.87417 14.0936 9.8175C14.133 9.605 14.1627 9.38896 14.1824 9.16938C14.2021 8.94979 14.212 8.72667 14.212 8.5C14.212 6.60167 13.6001 4.99375 12.3763 3.67625C11.1525 2.35875 9.6589 1.7 7.89556 1.7C6.13221 1.7 4.63864 2.35875 3.41483 3.67625C2.19102 4.99375 1.57911 6.60167 1.57911 8.5C1.57911 10.3983 2.19102 12.0063 3.41483 13.3238C4.63864 14.6413 6.13221 15.3 7.89556 15.3C8.56668 15.3 9.20819 15.1938 9.8201 14.9813C10.432 14.7688 10.9946 14.4713 11.5078 14.0888C11.6657 14.3296 11.8598 14.5421 12.0901 14.7263C12.3204 14.9104 12.5671 15.0521 12.8303 15.1513C12.1592 15.7321 11.4058 16.1854 10.5702 16.5113C9.73456 16.8371 8.84302 17 7.89556 17ZM13.6198 13.6C13.3435 13.6 13.1099 13.4973 12.9191 13.2919C12.7283 13.0865 12.6329 12.835 12.6329 12.5375C12.6329 12.24 12.7283 11.9885 12.9191 11.7831C13.1099 11.5777 13.3435 11.475 13.6198 11.475C13.8962 11.475 14.1298 11.5777 14.3206 11.7831C14.5114 11.9885 14.6068 12.24 14.6068 12.5375C14.6068 12.835 14.5114 13.0865 14.3206 13.2919C14.1298 13.4973 13.8962 13.6 13.6198 13.6ZM10.5011 12.495L7.106 8.84V4.25H8.68511V8.16L11.6065 11.305L10.5011 12.495Z" fill="#767676"/>
                        </svg>
                        16 Jul 2024, 8:30 AM

                        </p>
                        </div>

                        <!-- Event Cards -->
                        <div class="bg-white shadow-lg rounded-lg p-4 ease-in duration-300">
                        <img src="{{ asset('logo/card2.png') }}" alt="Event" class="rounded-lg">
                        <h3 class="mt-4 text-md font-semibold">Community Outreach</h3>
                        <p class="text-sm text-gray-500">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block ml-2">
                            <path d="M7.89556 17C6.80334 17 5.77691 16.7769 4.81629 16.3306C3.85566 15.8844 3.02005 15.2788 2.30945 14.5138C1.59885 13.7488 1.03629 12.8492 0.621775 11.815C0.207258 10.7808 0 9.67583 0 8.5C0 7.32417 0.207258 6.21917 0.621775 5.185C1.03629 4.15083 1.59885 3.25125 2.30945 2.48625C3.02005 1.72125 3.85566 1.11563 4.81629 0.669375C5.77691 0.223125 6.80334 0 7.89556 0C8.98777 0 10.0142 0.223125 10.9748 0.669375C11.9354 1.11563 12.7711 1.72125 13.4817 2.48625C14.1923 3.25125 14.7548 4.15083 15.1693 5.185C15.5839 6.21917 15.7911 7.32417 15.7911 8.5C15.7911 8.8825 15.7714 9.25792 15.7319 9.62625C15.6924 9.99458 15.6266 10.3558 15.5345 10.71C15.3503 10.4833 15.1364 10.2921 14.893 10.1363C14.6495 9.98042 14.3831 9.87417 14.0936 9.8175C14.133 9.605 14.1627 9.38896 14.1824 9.16938C14.2021 8.94979 14.212 8.72667 14.212 8.5C14.212 6.60167 13.6001 4.99375 12.3763 3.67625C11.1525 2.35875 9.6589 1.7 7.89556 1.7C6.13221 1.7 4.63864 2.35875 3.41483 3.67625C2.19102 4.99375 1.57911 6.60167 1.57911 8.5C1.57911 10.3983 2.19102 12.0063 3.41483 13.3238C4.63864 14.6413 6.13221 15.3 7.89556 15.3C8.56668 15.3 9.20819 15.1938 9.8201 14.9813C10.432 14.7688 10.9946 14.4713 11.5078 14.0888C11.6657 14.3296 11.8598 14.5421 12.0901 14.7263C12.3204 14.9104 12.5671 15.0521 12.8303 15.1513C12.1592 15.7321 11.4058 16.1854 10.5702 16.5113C9.73456 16.8371 8.84302 17 7.89556 17ZM13.6198 13.6C13.3435 13.6 13.1099 13.4973 12.9191 13.2919C12.7283 13.0865 12.6329 12.835 12.6329 12.5375C12.6329 12.24 12.7283 11.9885 12.9191 11.7831C13.1099 11.5777 13.3435 11.475 13.6198 11.475C13.8962 11.475 14.1298 11.5777 14.3206 11.7831C14.5114 11.9885 14.6068 12.24 14.6068 12.5375C14.6068 12.835 14.5114 13.0865 14.3206 13.2919C14.1298 13.4973 13.8962 13.6 13.6198 13.6ZM10.5011 12.495L7.106 8.84V4.25H8.68511V8.16L11.6065 11.305L10.5011 12.495Z" fill="#767676"/>
                        </svg>
                        16 Jul 2024, 8:30 AM</p>
                        </div>

                       <!-- Event Cards -->
                       <div class="bg-white shadow-lg rounded-lg p-4 ease-in duration-300">
                        <img src="{{ asset('logo/card3.png') }}" alt="Event" class="rounded-lg">
                        <h3 class="mt-4 text-md font-semibold">Community Outreach</h3>
                        <p class="text-sm text-gray-500">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block ml-2">
                            <path d="M7.89556 17C6.80334 17 5.77691 16.7769 4.81629 16.3306C3.85566 15.8844 3.02005 15.2788 2.30945 14.5138C1.59885 13.7488 1.03629 12.8492 0.621775 11.815C0.207258 10.7808 0 9.67583 0 8.5C0 7.32417 0.207258 6.21917 0.621775 5.185C1.03629 4.15083 1.59885 3.25125 2.30945 2.48625C3.02005 1.72125 3.85566 1.11563 4.81629 0.669375C5.77691 0.223125 6.80334 0 7.89556 0C8.98777 0 10.0142 0.223125 10.9748 0.669375C11.9354 1.11563 12.7711 1.72125 13.4817 2.48625C14.1923 3.25125 14.7548 4.15083 15.1693 5.185C15.5839 6.21917 15.7911 7.32417 15.7911 8.5C15.7911 8.8825 15.7714 9.25792 15.7319 9.62625C15.6924 9.99458 15.6266 10.3558 15.5345 10.71C15.3503 10.4833 15.1364 10.2921 14.893 10.1363C14.6495 9.98042 14.3831 9.87417 14.0936 9.8175C14.133 9.605 14.1627 9.38896 14.1824 9.16938C14.2021 8.94979 14.212 8.72667 14.212 8.5C14.212 6.60167 13.6001 4.99375 12.3763 3.67625C11.1525 2.35875 9.6589 1.7 7.89556 1.7C6.13221 1.7 4.63864 2.35875 3.41483 3.67625C2.19102 4.99375 1.57911 6.60167 1.57911 8.5C1.57911 10.3983 2.19102 12.0063 3.41483 13.3238C4.63864 14.6413 6.13221 15.3 7.89556 15.3C8.56668 15.3 9.20819 15.1938 9.8201 14.9813C10.432 14.7688 10.9946 14.4713 11.5078 14.0888C11.6657 14.3296 11.8598 14.5421 12.0901 14.7263C12.3204 14.9104 12.5671 15.0521 12.8303 15.1513C12.1592 15.7321 11.4058 16.1854 10.5702 16.5113C9.73456 16.8371 8.84302 17 7.89556 17ZM13.6198 13.6C13.3435 13.6 13.1099 13.4973 12.9191 13.2919C12.7283 13.0865 12.6329 12.835 12.6329 12.5375C12.6329 12.24 12.7283 11.9885 12.9191 11.7831C13.1099 11.5777 13.3435 11.475 13.6198 11.475C13.8962 11.475 14.1298 11.5777 14.3206 11.7831C14.5114 11.9885 14.6068 12.24 14.6068 12.5375C14.6068 12.835 14.5114 13.0865 14.3206 13.2919C14.1298 13.4973 13.8962 13.6 13.6198 13.6ZM10.5011 12.495L7.106 8.84V4.25H8.68511V8.16L11.6065 11.305L10.5011 12.495Z" fill="#767676"/>
                        </svg>
                        16 Jul 2024, 8:30 AM</p>
                        </div>
                    </div>

                       <!-- Expenses Table Section -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden w-full mt-5"
    data-aos="fade-up"
            data-aos-duration="2000">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-200 text-gray-600 text-left text-sm font-semibold">
                    <th class="py-3 px-4">Expenses</th>
                    <th class="py-3 px-4">Date</th>
                    <th class="py-3 px-4">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-gray-50">
                    <td class="py-3 px-4">Morning Snacks</td>
                    <td class="py-3 px-4">16 Jul 10:00am</td>
                    <td class="py-3 px-4 text-red-500">-₱2,000.00</td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-3 px-4">Lunch</td>
                    <td class="py-3 px-4">16 Jul 12:00nn</td>
                    <td class="py-3 px-4 text-red-500">-₱6,000.00</td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-3 px-4">Afternoon Snacks</td>
                    <td class="py-3 px-4">16 Jul 4:00pm</td>
                    <td class="py-3 px-4 text-red-500">-₱2,000.00</td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-3 px-4">Performance Cost</td>
                    <td class="py-3 px-4">16 Jul 12:00nn</td>
                    <td class="py-3 px-4 text-red-500">-₱5,000.00</td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-3 px-4">Gift for Youth</td>
                    <td class="py-3 px-4">16 Jul 5:00pm</td>
                    <td class="py-3 px-4 text-red-500">-₱3,000.00</td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-3 px-4">Prizes for Games</td>
                    <td class="py-3 px-4">16 Jul 5:00pm</td>
                    <td class="py-3 px-4 text-red-500">-₱2,000.00</td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-3 px-4">Emergency Funds</td>
                    <td class="py-3 px-4">16 Jul 9:00am</td>
                    <td class="py-3 px-4 text-red-500">-₱1,000.00</td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="bg-gray-200">
                    <td colspan="2" class="py-3 px-4 font-semibold text-right">Total:</td>
                    <td class="py-3 px-4 font-semibold text-red-600">₱21,000.00</td>
                </tr>
            </tfoot>
        </table>
    </div>

                </section>
            </main>
        


           
           





















            <!-- Right-Side Content Section -->
            <aside class="w-full lg:w-1/3 grid grid-cols-1 gap-6 mt-5">

                 <!-- Barangay Officials -->
                 <div class="bg-white shadow-lg rounded-lg p-6" 
                 data-aos="fade-left"
                         data-aos-duration="2000">
                    <h4 class="text-lg font-semibold">Barangay Officials</h4>
                    <ul class="mt-4 space-y-4">
                        <li class="flex items-center space-x-4">
                            <img src="https://via.placeholder.com/40" alt="Official" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="text-sm font-semibold">Maria Catarina Agoncillo</p>
                                <p class="text-xs text-gray-500">Barangay Captain</p>
                            </div>
                        </li>
                        <li class="flex items-center space-x-4">
                            <img src="https://via.placeholder.com/40" alt="Official" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="text-sm font-semibold">Joshua Cabatuan</p>
                                <p class="text-xs text-gray-500">Barangay Secretary</p>
                            </div>
                        </li>
                        <li class="flex items-center space-x-4">
                            <img src="https://via.placeholder.com/40" alt="Official" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="text-sm font-semibold">Dominic Tangco</p>
                                <p class="text-xs text-gray-500">Barangay Treasurer</p>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="bg-white shadow-md rounded-lg w-80 p-4"
                data-aos="fade-left"
                        data-aos-duration="2000">
                    <!-- Community Outreach Budget -->
                    <div class="bg-cyan-500 text-white rounded-lg p-4 text-center mb-4">
                        <h2 class="text-sm font-semibold">Community Outreach</h2>
                        <p class="text-xs">Total Budget</p>
                        <p class="text-2xl font-bold">₱22,000.00</p>
                    </div>
            
                    <!-- Pie Chart Placeholder -->
                    <div class="text-center">
                        <h3 class="text-sm font-semibold text-gray-700 mb-2">Construction of Brgy Hall</h3>
                       
                            <!-- Simulated Pie Chart -->
                            <canvas id="pieChart" class="mt-4 h-72"></canvas>
                      
            
                        <!-- Feedback -->
                        <div class="mt-4 space-y-2">
                            <div class="flex items-center justify-center space-x-2">
                                <span class="text-2xl">😊</span>
                                <span class="text-sm font-semibold text-gray-700">80%</span>
                            </div>
                            <div class="flex items-center justify-center space-x-2">
                                <span class="text-2xl">😞</span>
                                <span class="text-sm font-semibold text-gray-700">20%</span>
                            </div>
                        </div>
                    </div>
            
                          <!--survey boss -->
                                    <!-- Button to Open the Modal Survey -->
                                    <button class="btn bg-cyan-500 w-full mt-5"
                                   
                                             onclick="Survey.showModal()">Answer Question</button>

                                    <!-- Modal Structure with Survey Questions -->
                                    <dialog id="Survey" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl" >
                                        <h3 class="text-lg font-bold">Barangay Events and Projects Survey</h3>
                                        <p class="py-4">This survey aims to understand your experience with events and projects held in our barangay. Your responses will help us improve future initiatives and better serve the community.</p>

                                        <!-- Survey Form -->
                                        <form id="surveyForm" >
                                        <!-- Question 1: How often do you participate in barangay events? -->
                                        <div class="mb-6">
                                            <p class="text-sm font-semibold text-gray-700">1. How often do you participate in barangay events?</p>
                                            <div class="mt-2 space-y-2">
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="participation" value="never" class="form-radio">
                                                <span class="ml-2">Never</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="participation" value="rarely" class="form-radio">
                                                <span class="ml-2">Rarely (once or twice a year)</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="participation" value="sometimes" class="form-radio">
                                                <span class="ml-2">Sometimes (3-5 times a year)</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="participation" value="often" class="form-radio">
                                                <span class="ml-2">Often (6 or more times a year)</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="participation" value="always" class="form-radio">
                                                <span class="ml-2">Always</span>
                                            </label>
                                            </div>
                                        </div>

                                        <!-- Question 2: What types of barangay events do you find most interesting or valuable? -->
                                        <div class="mb-6">
                                            <p class="text-sm font-semibold text-gray-700">2. What types of barangay events do you find most interesting or valuable? (select all that apply)</p>
                                            <div class="mt-2 space-y-2">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_types" value="cultural_celebrations" class="form-checkbox">
                                                <span class="ml-2">Cultural celebrations (fiestas, etc.)</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_types" value="sports_tournaments" class="form-checkbox">
                                                <span class="ml-2">Sports tournaments</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_types" value="health_fairs" class="form-checkbox">
                                                <span class="ml-2">Health fairs/medical missions</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_types" value="clean_up_drives" class="form-checkbox">
                                                <span class="ml-2">Clean-up drives/environmental projects</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_types" value="skills_workshops" class="form-checkbox">
                                                <span class="ml-2">Skills workshops (e.g., livelihood training)</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_types" value="youth_programs" class="form-checkbox">
                                                <span class="ml-2">Youth development programs</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_types" value="community_forums" class="form-checkbox">
                                                <span class="ml-2">Community forums/meetings</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_types" value="social_events" class="form-checkbox">
                                                <span class="ml-2">Social events (e.g., movie nights)</span>
                                            </label>
                                            </div>
                                        </div>

                                        <!-- Question 3: How do you usually find out about upcoming barangay events? -->
                                        <div class="mb-6">
                                            <p class="text-sm font-semibold text-gray-700">3. How do you usually find out about upcoming barangay events? (select all that apply)</p>
                                            <div class="mt-2 space-y-2">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_info" value="barangay_announcements" class="form-checkbox">
                                                <span class="ml-2">Barangay announcements (posters, flyers)</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_info" value="social_media" class="form-checkbox">
                                                <span class="ml-2">Barangay social media page</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_info" value="barangay_website" class="form-checkbox">
                                                <span class="ml-2">Barangay website</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_info" value="text_alerts" class="form-checkbox">
                                                <span class="ml-2">Community text message alerts</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_info" value="community_meetings" class="form-checkbox">
                                                <span class="ml-2">Announcements during community meetings</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="event_info" value="word_of_mouth" class="form-checkbox">
                                                <span class="ml-2">Word-of-mouth</span>
                                            </label>
                                            </div>
                                        </div>

                                        <!-- Question 4: In your opinion, how have these projects impacted the barangay? -->
                                        <div class="mb-6">
                                            <p class="text-sm font-semibold text-gray-700">4. In your opinion, how have these projects impacted the barangay? (select all that apply)</p>
                                            <div class="mt-2 space-y-2">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="impact" value="improved_infrastructure" class="form-checkbox">
                                                <span class="ml-2">Improved infrastructure (roads, drainage, etc.)</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="impact" value="enhanced_safety" class="form-checkbox">
                                                <span class="ml-2">Enhanced safety and security</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="impact" value="environmental_sustainability" class="form-checkbox">
                                                <span class="ml-2">Increased environmental sustainability</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="impact" value="improved_services" class="form-checkbox">
                                                <span class="ml-2">Improved access to basic services (water, sanitation)</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" name="impact" value="community_development" class="form-checkbox">
                                                <span class="ml-2">Boosted community development and livelihood opportunities</span>
                                            </label>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="flex justify-center mt-6">
                                            <button type="submit" class="btn bg-cyan-500 text-white hover:bg-cyan-600 rounded-lg px-6 py-2">Submit</button>
                                        </div>
                                        
                                        </form>

                                        <!-- Close Button -->
                                        <div class="modal-action">
                                        <form method="dialog">
                                            <button class="btn">Close</button>
                                        </form>
                                        </div>
                                    </div>
                                    </dialog>
                </div>
            </aside>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [''],
            datasets: [{
                label: 'Community Outreach',
                data: [40, 30, 30], // Example data points, adjust as needed
                backgroundColor: ['#4CD7F6', '#CDF3FF'],
                borderColor: '#ffffff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                        }
                    }
                }
            }
        } // Close the options object
    }); // Close the Chart initialization
</script>



            <!-- JavaScript for Modal Survey -->
                <script>
                    const my_modal_4 = document.getElementById("Survey");
                
                    // Show the modal
                    document.querySelector("[onclick='my_modal_4.showModal()']").addEventListener("click", function() {
                    Survey.showModal();
                    });
                
                    // Close the modal when the close button is clicked
                    document.querySelector("form[method='dialog']").addEventListener("submit", function() {
                    Survey.close();
                    });
                </script>

</x-app-layout>
