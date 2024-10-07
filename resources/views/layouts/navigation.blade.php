<nav class="bg-white border-b border-gray-200">

    <!-- Primary Navigation Menu -->
    <div class="container">
        <div class="flex justify-between py-4">
            <div class="flex items-center justify-between w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <img src="{{ asset('assets/images/logo.webp') }}" alt="" class="max-w-32 lg:max-w-48">
                    </a>
                </div>

                <div x-data="{ open: false, title: 'Language'  }" @click.outside="open = false"
                     class="relative inline-block text-left z-10">
                    <div>
                        <button @click="open = !open" type="button"
                                class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                id="menu-button" aria-expanded="true" aria-haspopup="true">
                            <span x-text="title"></span>
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                      d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>

                    <div x-show="open"
                         class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                         role="menu" aria-orientation="vertical" aria-labelledby="menu-button">
                        <div class="py-1 overflow-y-scroll h-28" role="none">
                            <a @click="title = 'Русский', open = false" href="#"
                               class="flex items-center px-4 py-2 text-sm text-gray-700">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 640 480">
                                      <defs>
                                        <clipPath id="bs-a">
                                          <path fill-opacity=".7" d="M-12 0h640v480H-12z"/>
                                        </clipPath>
                                      </defs>
                                      <g fill-rule="evenodd" clip-path="url(#bs-a)" transform="translate(12)">
                                        <path fill="#fff" d="M968.5 480h-979V1.8h979z"/>
                                        <path fill="#ffe900" d="M968.5 344.5h-979V143.3h979z"/>
                                        <path fill="#08ced6" d="M968.5 480h-979V320.6h979zm0-318.7h-979V2h979z"/>
                                        <path fill="#000001" d="M-11 0c2.3 0 391.8 236.8 391.8 236.8L-12 479.2z"/>
                                      </g>
                                    </svg>
                                </span>
                                Русский
                            </a>
                            <a @click="title = 'English', open = false" href="#"
                               class="flex items-center block px-4 py-2 text-sm text-gray-700">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 640 480">
                                        <path fill="#fff" d="M0 0h640v480H0z"/>
                                        <path fill="#000091" d="M0 0h213.3v480H0z"/>
                                        <path fill="#e1000f" d="M426.7 0H640v480H426.7z"/>
                                    </svg>
                                </span>
                                English
                            </a>
                            <a @click="title = 'Italiano', open = false" href="#"
                               class="flex items-center block px-4 py-2 text-sm text-gray-700">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 640 480">
                                      <g fill-rule="evenodd" stroke-width="1pt">
                                        <path fill="#0000b4" d="M0 0h640v480H0z"/>
                                        <path fill="#fff" d="M0 75.4h640v322.3H0z"/>
                                        <path fill="#d90000" d="M0 157.7h640v157.7H0z"/>
                                      </g>
                                    </svg>
                                </span>
                                Italiano
                            </a>
                            <a @click="title = 'Spanish', open = false" href="#"
                               class="flex items-center block px-4 py-2 text-sm text-gray-700">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 640 480">
                                      <g fill-rule="evenodd" stroke-width="1pt">
                                        <path fill="#000001" d="M0 0h213.3v480H0z"/>
                                        <path fill="#ffd90c" d="M213.3 0h213.4v480H213.3z"/>
                                        <path fill="#f31830" d="M426.7 0H640v480H426.7z"/>
                                      </g>
                                    </svg>
                                </span>
                                Spanish
                            </a>
                            <a @click="title = 'Chinese', open = false" href="#"
                               class="flex items-center block px-4 py-2 text-sm text-gray-700">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 640 480">
                                      <defs>
                                        <clipPath id="bv-a">
                                          <path fill-opacity=".7" d="M0 0h640v480H0z"/>
                                        </clipPath>
                                      </defs>
                                      <g fill-rule="evenodd" stroke-width="1pt" clip-path="url(#bv-a)">
                                        <path fill="#fff" d="M-28 0h699.7v512H-28z"/>
                                        <path fill="#d72828"
                                              d="M-53-77.8h218.7v276.2H-53zM289.4-.6h381v199h-381zM-27.6 320h190.4v190.3H-27.6zm319.6 2.1h378.3v188.2H292z"/>
                                        <path fill="#003897" d="M196.7-25.4H261v535.7h-64.5z"/>
                                        <path fill="#003897" d="M-27.6 224.8h698v63.5h-698z"/>
                                      </g>
                                    </svg>
                                </span>
                                Chinese
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
