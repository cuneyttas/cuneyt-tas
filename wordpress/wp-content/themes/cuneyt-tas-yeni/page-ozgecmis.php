<?php

get_header();

if (have_posts()) :

	while (have_posts()) : the_post();
?>

<section class="bg-white dark:bg-gray-900 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">

    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Özgeçmiş</h1>
    <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>

</section>

<section class="bg-white dark:bg-gray-900 py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">

    <div class="md:flex">
        <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0 w-1/5" id="ozgecmis-sekmeleri" data-tabs-toggle="#ozgecmis-sekmeleri-icerigi" role="sekmeListesi">
            <li role="presentation">
                <a href="#" class="inline-flex items-center px-4 py-3 text-white bg-blue-700 rounded-lg active w-full dark:bg-blue-600" id="genel-bilgiler-sekmesi" data-tabs-target="#genel-bilgiler" type="button" role="tab" aria-controls="genel-bilgiler">
                    <svg class="w-4 h-4 me-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                    </svg>
                    Genel Bilgiler
                </a>
            </li>
            <li role="presentation">
                <a href="#" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" id="is-deneyimleri-sekmesi" data-tabs-target="#is-deneyimleri" type="button" role="tab" aria-controls="is-deneyimleri">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 22">
                        <path d="M21.728 12.686C19.348 14.942 15.575 16.067 11.853 16.067C8.131 16.067 4.453 14.941 2.282 12.696L2 12.437V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H20C20.5304 22 21.0391 21.7893 21.4142 21.4142C21.7893 21.0391 22 20.5304 22 20V12.4L21.728 12.686Z" fill="currentColor"/>
                        <path d="M2.135 9.847L3.677 11.264C7.277 14.976 16.424 14.964 20.312 11.274L21.605 9.9C21.7148 9.78678 21.8503 9.70171 22 9.652V8C22 7.46957 21.7893 6.96086 21.4142 6.58579C21.0391 6.21071 20.5304 6 20 6H17V5C17 4.20435 16.6839 3.44129 16.1213 2.87868C15.5587 2.31607 14.7956 2 14 2H10C9.20435 2 8.44129 2.31607 7.87868 2.87868C7.31607 3.44129 7 4.20435 7 5V6H4C3.46957 6 2.96086 6.21071 2.58579 6.58579C2.21071 6.96086 2 7.46957 2 8V9.765C2.04703 9.78885 2.09216 9.81626 2.135 9.847ZM12 12.25C11.7528 12.25 11.5111 12.1767 11.3055 12.0393C11.1 11.902 10.9398 11.7068 10.8452 11.4784C10.7505 11.2499 10.7258 10.9986 10.774 10.7561C10.8222 10.5137 10.9413 10.2909 11.1161 10.1161C11.2909 9.9413 11.5137 9.82225 11.7561 9.77402C11.9986 9.72579 12.2499 9.75054 12.4784 9.84515C12.7068 9.93976 12.902 10.1 13.0393 10.3055C13.1767 10.5111 13.25 10.7528 13.25 11C13.25 11.3315 13.1183 11.6495 12.8839 11.8839C12.6495 12.1183 12.3315 12.25 12 12.25ZM9 5C9 4.73478 9.10536 4.48043 9.29289 4.29289C9.48043 4.10536 9.73478 4 10 4H14C14.2652 4 14.5196 4.10536 14.7071 4.29289C14.8946 4.48043 15 4.73478 15 5V6H9V5Z" fill="currentColor"/>
                    </svg>
                    İş Deneyimleri
                </a>
            </li>
            <li role="presentation">
                <a href="#" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" id="egitim-bilgileri-sekmesi" data-tabs-target="#egitim-bilgileri" type="button" role="tab" aria-controls="egitim-bilgileri">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 16V4C20 3.46957 19.7893 2.96086 19.4142 2.58579C19.0391 2.21071 18.5304 2 18 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V19C4 19.7956 4.31607 20.5587 4.87868 21.1213C5.44129 21.6839 6.20435 22 7 22H19C19.2652 22 19.5196 21.8946 19.7071 21.7071C19.8946 21.5196 20 21.2652 20 21C20 20.7348 19.8946 20.4804 19.7071 20.2929C19.5196 20.1054 19.2652 20 19 20H18V18C18.5304 18 19.0391 17.7893 19.4142 17.4142C19.7893 17.0391 20 16.5304 20 16ZM8 4H10V16H8V4ZM16 20H7C6.73478 20 6.48043 19.8946 6.29289 19.7071C6.10536 19.5196 6 19.2652 6 19C6 18.7348 6.10536 18.4804 6.29289 18.2929C6.48043 18.1054 6.73478 18 7 18H16V20Z" fill="currentColor"/>
                    </svg>
                    Eğitim Bilgileri
                </a>
            </li>
            <li role="presentation">
                <a href="#" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" id="yetenekler-sekmesi" data-tabs-target="#yetenekler" type="button" role="tab" aria-controls="yetenekler">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21.924 9.62499C21.8367 9.35216 21.6742 9.10948 21.4552 8.92481C21.2363 8.74014 20.9696 8.62097 20.686 8.58099L15.635 7.84699L13.376 3.26999C13.2494 3.0131 13.0534 2.79677 12.8102 2.6455C12.567 2.49423 12.2864 2.41406 12 2.41406C11.7136 2.41406 11.4329 2.49423 11.1897 2.6455C10.9465 2.79677 10.7506 3.0131 10.624 3.26999L8.36497 7.84699L3.31397 8.58099C3.03035 8.62203 2.76388 8.74164 2.54472 8.9263C2.32556 9.11095 2.16247 9.35326 2.07391 9.62581C1.98535 9.89836 1.97486 10.1903 2.04362 10.4685C2.11238 10.7467 2.25764 11.0001 2.46297 11.2L6.11897 14.763L5.25597 19.794C5.207 20.0762 5.23815 20.3666 5.34587 20.632C5.45359 20.8974 5.63358 21.1274 5.8654 21.2957C6.09722 21.4639 6.37158 21.5639 6.65733 21.5841C6.94308 21.6043 7.22878 21.544 7.48197 21.41L12 19.033L16.518 21.408C16.7713 21.5412 17.0569 21.601 17.3424 21.5804C17.628 21.5598 17.902 21.4597 18.1336 21.2914C18.3652 21.1232 18.5451 20.8935 18.653 20.6283C18.7609 20.3632 18.7924 20.0731 18.744 19.791L17.881 14.761L21.537 11.2C21.7433 11.0006 21.8891 10.7469 21.9576 10.4683C22.026 10.1896 22.0144 9.89731 21.924 9.62499Z" fill="currentColor"/>
                    </svg>
                    Yetenekler
                </a>
            </li>
            <li role="presentation">
                <a href="#" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" id="sinavlar-sekmesi" data-tabs-target="#sinavlar" type="button" role="tab" aria-controls="sinavlar">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5.00001 5V0.13C4.51204 0.264979 4.06686 0.522863 3.70701 0.879L0.879005 3.707C0.522868 4.06685 0.264984 4.51204 0.130005 5H5.00001Z" fill="currentColor"/>
                        <path d="M6.73701 11.061C6.85136 10.4871 7.13322 9.95986 7.54701 9.546L13.664 3.43C14.3065 2.78992 15.1159 2.34327 16 2.141V2C16.0083 1.47862 15.8094 0.975242 15.4471 0.600299C15.0847 0.225355 14.5884 0.00946778 14.067 0H7.00001V5C7.00001 5.53043 6.78929 6.03914 6.41422 6.41421C6.03915 6.78929 5.53044 7 5.00001 7H5.36305e-06V18C-0.00829023 18.5214 0.190567 19.0248 0.55295 19.3997C0.915333 19.7746 1.41165 19.9905 1.93301 20H14.067C14.5884 19.9905 15.0847 19.7746 15.4471 19.3997C15.8094 19.0248 16.0083 18.5214 16 18V14.907L14.454 16.453C14.0408 16.8665 13.5143 17.1484 12.941 17.263L9.54101 17.942C9.34843 17.9808 9.15245 18.0002 8.95601 18C8.51813 17.9997 8.08577 17.9022 7.69011 17.7146C7.29445 17.527 6.94534 17.254 6.66794 16.9152C6.39055 16.5764 6.19178 16.1802 6.08596 15.7553C5.98014 15.3304 5.96991 14.8873 6.05601 14.458L6.73701 11.061Z" fill="currentColor"/>
                        <path d="M8.96101 16C9.02449 16.0001 9.08782 15.9938 9.15001 15.981L12.55 15.302C12.7357 15.2645 12.9062 15.173 13.04 15.039L19.158 8.922C19.6928 8.37985 19.9915 7.64818 19.9888 6.88666C19.9862 6.12513 19.6824 5.39556 19.1439 4.85714C18.6053 4.31873 17.8757 4.01517 17.1141 4.01271C16.3526 4.01024 15.621 4.30908 15.079 4.844L8.96201 10.961C8.82774 11.0951 8.73622 11.2659 8.69901 11.452L8.02001 14.852C7.99239 14.9912 7.99595 15.1348 8.03043 15.2725C8.0649 15.4101 8.12944 15.5385 8.21941 15.6482C8.30938 15.758 8.42254 15.8464 8.55076 15.9073C8.67898 15.9681 8.81909 15.9998 8.96101 16ZM16.438 6.2C16.5272 6.11066 16.6333 6.03984 16.75 5.99161C16.8667 5.94339 16.9917 5.91871 17.118 5.919C17.309 5.91781 17.496 5.97356 17.6552 6.07914C17.8144 6.18472 17.9384 6.33533 18.0116 6.51175C18.0848 6.68817 18.1038 6.88239 18.0661 7.06964C18.0284 7.25688 17.9358 7.42864 17.8 7.563L17.485 7.878L16.125 6.518L16.438 6.2ZM10.527 12.111L14.763 7.875L16.122 9.234L11.886 13.471L10.186 13.81L10.527 12.111Z" fill="currentColor"/>
                    </svg>
                    Sınavlar
                </a>
            </li>
            <li role="presentation">
                <a href="#" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" id="sertifikalar-sekmesi" data-tabs-target="#sertifikalar" type="button" role="tab" aria-controls="sertifikalar">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21.1917 9.87892L20.2937 8.97992C20.1037 8.79092 19.9997 8.53892 19.9997 8.27192V6.99992C19.9997 5.34592 18.6537 3.99992 16.9997 3.99992H15.7277C15.4647 3.99992 15.2067 3.89292 15.0207 3.70692L14.1217 2.80792C12.9517 1.63792 11.0497 1.63792 9.87971 2.80792L8.97871 3.70692C8.79271 3.89292 8.53471 3.99992 8.27171 3.99992H6.99971C5.34571 3.99992 3.99971 5.34592 3.99971 6.99992V8.27192C3.99971 8.53892 3.89571 8.79092 3.70671 8.97992L2.80771 9.87792C2.24071 10.4449 1.92871 11.1989 1.92871 11.9999C1.92871 12.8009 2.24171 13.5549 2.80771 14.1209L3.70571 15.0199C3.89571 15.2089 3.99971 15.4609 3.99971 15.7279V16.9999C3.99971 18.6539 5.34571 19.9999 6.99971 19.9999H8.27171C8.53471 19.9999 8.79271 20.1069 8.97871 20.2929L9.87771 21.1929C10.4627 21.7769 11.2307 22.0689 11.9987 22.0689C12.7667 22.0689 13.5347 21.7769 14.1197 21.1919L15.0187 20.2929C15.2067 20.1069 15.4647 19.9999 15.7277 19.9999H16.9997C18.6537 19.9999 19.9997 18.6539 19.9997 16.9999V15.7279C19.9997 15.4609 20.1037 15.2089 20.2937 15.0199L21.1917 14.1219C21.7577 13.5549 22.0707 12.8019 22.0707 11.9999C22.0707 11.1979 21.7587 10.4449 21.1917 9.87892ZM16.5547 10.8319L10.5547 14.8319C10.3857 14.9449 10.1917 14.9999 9.99971 14.9999C9.74171 14.9999 9.48571 14.8999 9.29271 14.7069L7.29271 12.7069C6.90171 12.3159 6.90171 11.6839 7.29271 11.2929C7.68371 10.9019 8.31571 10.9019 8.70671 11.2929L10.1267 12.7129L15.4447 9.16792C15.9057 8.86092 16.5257 8.98492 16.8317 9.44492C17.1387 9.90492 17.0147 10.5259 16.5547 10.8319Z" fill="currentColor"/>
                    </svg>
                    Sertifikalar
                </a>
            </li>
            <li role="presentation">
                <a href="#" class="inline-flex items-center px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-50 hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" id="askerlik-bilgileri-sekmesi" data-tabs-target="#askerlik-bilgileri" type="button" role="tab" aria-controls="askerlik-bilgileri">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="15.96 0 528.04 512">
                        <path fill="currentColor" d="M265.2 192c25.4 0 49.8 7.1 70.8 19.9V512H144V337.7l-53.6 90.6c-11.2 19-35.8 25.3-54.8 14.1s-25.3-35.8-14.1-54.8l76.2-128.8c24.5-41.4 69-66.8 117.1-66.8h50.4zM160 80a80 80 0 1 1 160 0a80 80 0 1 1-160 0zM448 0c8.8 0 16 7.2 16 16v116.3c9.6 5.5 16 15.9 16 27.7v109.3l16-5.3v-56c0-8.8 7.2-16 16-16h16c8.8 0 16 7.2 16 16v84.5c0 6.9-4.4 13-10.9 15.2L480 325.3V352h48c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16h-44l23 92.1c2.5 10.1-5.1 19.9-15.5 19.9H432c-8.8 0-16-7.2-16-16v-96h-16c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32v-32c0-11.8 6.4-22.2 16-27.7V32c-8.8 0-16-7.2-16-16s7.2-16 16-16h32z"></path>
                    </svg>
                    Askerlik Bilgileri
                </a>
            </li>
        </ul>
        <div class="w-full" id="ozgecmis-sekmeleri-icerigi">
            <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" id="genel-bilgiler" role="tabpanel" aria-labelledby="genel-bilgiler-sekmesi">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Genel Bilgiler</h3>

                <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
                <h2 id="accordion-color-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                    <span>What is Flowbite?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                </div>
                <h2 id="accordion-color-heading-2">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                    <span>Is there a Figma file available?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
                <h2 id="accordion-color-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                    <span>What are the differences between Flowbite and Tailwind UI?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                    <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                        <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                        <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                    </ul>
                    </div>
                </div>
                </div>

            </div>
            <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" id="is-deneyimleri" role="tabpanel" aria-labelledby="is-deneyimleri-sekmesi">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">İş Deneyimleri</h3>
                <ol class="relative border-s border-gray-200 dark:border-gray-700">
                    <li class="mb-10 ms-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February 2022</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI code in Tailwind CSS</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn more <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg></a>
                    </li>
                    <li class="mb-10 ms-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2022</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.</p>
                    </li>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April 2022</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">E-Commerce UI code in Tailwind CSS</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements built on top of Tailwind CSS.</p>
                    </li>
                </ol>
            </div>
            <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" id="egitim-bilgileri" role="tabpanel" aria-labelledby="egitim-bilgileri-sekmesi">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Eğitim Bilgileri</h3>
                <ol class="relative border-s border-gray-200 dark:border-gray-700">
                    <li class="mb-10 ms-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February 2022</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Fırat Üniversitesi</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
                        <button data-modal-target="small-modal" data-modal-toggle="small-modal" class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dersler <svg class="w-3 h-3 ms-2 rtl:rotate-180 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg></button>
                        <div id="small-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                            Small modal
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="small-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5 space-y-4">

                                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                                                <li class="me-2" role="presentation">
                                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                                                </li>
                                                <li class="me-2" role="presentation">
                                                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                                                </li>
                                                <li class="me-2" role="presentation">
                                                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                                                </li>
                                                <li role="presentation">
                                                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="default-tab-content">
                                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                                            </div>
                                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                                            </div>
                                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                                            </div>
                                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                                                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="small-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                                        <button data-modal-hide="small-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="mb-10 ms-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2022</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.</p>
                    </li>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April 2022</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">E-Commerce UI code in Tailwind CSS</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements built on top of Tailwind CSS.</p>
                    </li>
                </ol>
            </div>
            <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" id="yetenekler" role="tabpanel" aria-labelledby="yetenekler-sekmesi">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Yetenekler</h3>
                <h4>Frontend</h4>
                <div class="gap-8 sm:grid sm:grid-cols-2">
                    <div>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Staff</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Comfort</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Free WiFi</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Facilities</dt>
                            <dd class="flex items-center">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 54%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">5.4</span>
                            </dd>
                        </dl>
                    </div>
                    <div>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Value for money</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Cleanliness</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 70%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">7.0</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Location</dt>
                            <dd class="flex items-center">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
                            </dd>
                        </dl>
                    </div>
                </div>
                <h4>Backend</h4>
                <div class="gap-8 sm:grid sm:grid-cols-2">
                    <div>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Staff</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Comfort</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Free WiFi</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Facilities</dt>
                            <dd class="flex items-center">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 54%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">5.4</span>
                            </dd>
                        </dl>
                    </div>
                    <div>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Value for money</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Cleanliness</dt>
                            <dd class="flex items-center mb-3">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 70%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">7.0</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Location</dt>
                            <dd class="flex items-center">
                                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
                            </dd>
                        </dl>
                    </div>
                </div>

            </div>
            <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" id="sinavlar" role="tabpanel" aria-labelledby="sinavlar-sekmesi">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Sınavlar</h3>
                <p class="mb-2">This is some placeholder content the Profile tab's associated content, clicking another tab will toggle the visibility of this one for the next.</p>
                <p>The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" id="sertifikalar" role="tabpanel" aria-labelledby="sertifikalar-sekmesi">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Sertifikalar</h3>
                <p class="mb-2">This is some placeholder content the Profile tab's associated content, clicking another tab will toggle the visibility of this one for the next.</p>
                <p>The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" id="askerlik-bilgileri" role="tabpanel" aria-labelledby="askerlik-bilgileri-sekmesi">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Askerlik Bilgileri</h3>
                <p class="mb-2">This is some placeholder content the Profile tab's associated content, clicking another tab will toggle the visibility of this one for the next.</p>
                <p>The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
        </div>

    </div>

</section>

<?php

	endwhile;

else :

	echo "<p>İçerik bulunamadı.</p>";

endif;

get_footer();

?>
