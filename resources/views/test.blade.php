@include('layouts.head')

<body tabindex="-1">
    <div class="bg-base-100 drawer drawer-mobile"><input id="drawer" type="checkbox" class="drawer-toggle">
        <div class="drawer-content" style="scroll-behavior: smooth; scroll-padding-top: 5rem;">
            <div
                class="
      sticky top-0 z-30 flex h-16 w-full justify-center bg-opacity-90 backdrop-blur transition-all duration-100
      bg-base-100 text-base-content shadow-sm
      ">
                <nav class="navbar w-full">
                    <div class="flex flex-1 md:gap-1 lg:gap-2"><span
                            class="tooltip tooltip-bottom before:text-xs before:content-[attr(data-tip)]"
                            data-tip="Menu"><label for="drawer"
                                class="btn btn-square btn-ghost drawer-button lg:hidden"><svg width="20"
                                    height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    class="inline-block h-5 w-5 stroke-current md:h-6 md:w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg></label></span>
                        <div class="flex items-center gap-2 lg:hidden"><a href="/" aria-current="page"
                                aria-label="Homepage" class="flex-0 btn btn-ghost px-2 ">
                                <div
                                    class="font-title text-primary inline-flex text-lg transition-all duration-200 md:text-3xl">
                                    <span class="lowercase text-primary">{{ config('app.name') }}</span>
                                </div>
                            </a> <a href="/docs/changelog" class="link link-hover font-mono text-xs text-opacity-50 ">
                                <div data-tip="Changelog" class="tooltip tooltip-bottom">v1.0</div>
                            </a></div>

                    </div>

                    <div class="flex-0">
                        <div class="items-center flex-none hidden "><a href="/components"
                                class="btn btn-ghost drawer-button normal-case"><svg width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="inline-block h-6 w-6 fill-current md:mr-2">
                                    <path
                                        d="M6.5,22 C4.01471863,22 2,19.9852814 2,17.5 C2,15.0147186 4.01471863,13 6.5,13 C8.98528137,13 11,15.0147186 11,17.5 C11,19.9852814 8.98528137,22 6.5,22 Z M17.5,22 C15.0147186,22 13,19.9852814 13,17.5 C13,15.0147186 15.0147186,13 17.5,13 C19.9852814,13 22,15.0147186 22,17.5 C22,19.9852814 19.9852814,22 17.5,22 Z M6.5,11 C4.01471863,11 2,8.98528137 2,6.5 C2,4.01471863 4.01471863,2 6.5,2 C8.98528137,2 11,4.01471863 11,6.5 C11,8.98528137 8.98528137,11 6.5,11 Z M17.5,11 C15.0147186,11 13,8.98528137 13,6.5 C13,4.01471863 15.0147186,2 17.5,2 C19.9852814,2 22,4.01471863 22,6.5 C22,8.98528137 19.9852814,11 17.5,11 Z M17.5,9 C18.8807119,9 20,7.88071187 20,6.5 C20,5.11928813 18.8807119,4 17.5,4 C16.1192881,4 15,5.11928813 15,6.5 C15,7.88071187 16.1192881,9 17.5,9 Z M6.5,9 C7.88071187,9 9,7.88071187 9,6.5 C9,5.11928813 7.88071187,4 6.5,4 C5.11928813,4 4,5.11928813 4,6.5 C4,7.88071187 5.11928813,9 6.5,9 Z M17.5,20 C18.8807119,20 20,18.8807119 20,17.5 C20,16.1192881 18.8807119,15 17.5,15 C16.1192881,15 15,16.1192881 15,17.5 C15,18.8807119 16.1192881,20 17.5,20 Z M6.5,20 C7.88071187,20 9,18.8807119 9,17.5 C9,16.1192881 7.88071187,15 6.5,15 C5.11928813,15 4,16.1192881 4,17.5 C4,18.8807119 5.11928813,20 6.5,20 Z">
                                    </path>
                                </svg> Components</a></div>
                        <div title="Change Theme" class="dropdown dropdown-end ">
                            <div tabindex="0" class="btn gap-1 normal-case btn-ghost"><svg width="20"
                                    height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    class="inline-block h-5 w-5 stroke-current md:h-6 md:w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                                    </path>
                                </svg> <span class="hidden md:inline">Theme</span> <svg width="12px" height="12px"
                                    class="ml-1 hidden h-3 w-3 fill-current opacity-60 sm:inline-block"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048">
                                    <path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
                                </svg></div>
                            <div
                                class="dropdown-content bg-base-200 text-base-content rounded-t-box rounded-b-box top-px max-h-96 h-[70vh] w-52 overflow-y-auto shadow-2xl mt-16">
                                <div class="grid grid-cols-1 gap-3 p-3" tabindex="0">
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="light" data-act-class="outline">
                                        <div data-theme="light"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">light</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="dark" data-act-class="outline">
                                        <div data-theme="dark"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">dark</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="cupcake" data-act-class="outline">
                                        <div data-theme="cupcake"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">cupcake</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="bumblebee" data-act-class="outline">
                                        <div data-theme="bumblebee"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">bumblebee</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="emerald" data-act-class="outline">
                                        <div data-theme="emerald"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">emerald</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="corporate" data-act-class="outline">
                                        <div data-theme="corporate"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">corporate</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="synthwave" data-act-class="outline">
                                        <div data-theme="synthwave"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">synthwave</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="retro" data-act-class="outline">
                                        <div data-theme="retro"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">retro</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="cyberpunk" data-act-class="outline">
                                        <div data-theme="cyberpunk"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">cyberpunk</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="valentine" data-act-class="outline">
                                        <div data-theme="valentine"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">valentine</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="halloween" data-act-class="outline">
                                        <div data-theme="halloween"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">halloween</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="garden" data-act-class="outline">
                                        <div data-theme="garden"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">garden</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="forest" data-act-class="outline">
                                        <div data-theme="forest"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">forest</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="aqua" data-act-class="outline">
                                        <div data-theme="aqua"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">aqua</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="lofi" data-act-class="outline">
                                        <div data-theme="lofi"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">lofi</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="pastel" data-act-class="outline">
                                        <div data-theme="pastel"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">pastel</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="fantasy" data-act-class="outline">
                                        <div data-theme="fantasy"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">fantasy</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="wireframe" data-act-class="outline">
                                        <div data-theme="wireframe"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">wireframe</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="black" data-act-class="outline">
                                        <div data-theme="black"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">black</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="luxury" data-act-class="outline">
                                        <div data-theme="luxury"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">luxury</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="dracula" data-act-class="outline">
                                        <div data-theme="dracula"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">dracula</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="cmyk" data-act-class="outline">
                                        <div data-theme="cmyk"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">cmyk</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="autumn" data-act-class="outline">
                                        <div data-theme="autumn"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">autumn</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="business" data-act-class="outline">
                                        <div data-theme="business"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">business</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="acid" data-act-class="outline">
                                        <div data-theme="acid"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">acid</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="lemonade" data-act-class="outline">
                                        <div data-theme="lemonade"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">lemonade</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="night" data-act-class="outline">
                                        <div data-theme="night"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">night</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="coffee" data-act-class="outline">
                                        <div data-theme="coffee"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">coffee</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outline-base-content overflow-hidden rounded-lg outline-2 outline-offset-2"
                                        data-set-theme="winter" data-act-class="outline">
                                        <div data-theme="winter"
                                            class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                                            <div class="grid grid-cols-5 grid-rows-3">
                                                <div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4">
                                                    <div class="flex-grow text-sm font-bold">winter</div>
                                                    <div class="flex flex-shrink-0 flex-wrap gap-1">
                                                        <div class="bg-primary w-2 rounded"></div>
                                                        <div class="bg-secondary w-2 rounded"></div>
                                                        <div class="bg-accent w-2 rounded"></div>
                                                        <div class="bg-neutral w-2 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <a class="outline-base-content overflow-hidden rounded-lg"
                                        href="/theme-generator/">
                                        <div
                                            class="hover:bg-neutral hover:text-neutral-content w-full cursor-pointer font-sans">
                                            <div class="flex gap-2 p-3"><svg width="24" height="24"
                                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current"
                                                    viewBox="0 0 512 512">
                                                    <path d="M96,208H48a16,16,0,0,1,0-32H96a16,16,0,0,1,0,32Z"></path>
                                                    <line x1="90.25" y1="90.25" x2="124.19"
                                                        y2="124.19"></line>
                                                    <path
                                                        d="M124.19,140.19a15.91,15.91,0,0,1-11.31-4.69L78.93,101.56a16,16,0,0,1,22.63-22.63l33.94,33.95a16,16,0,0,1-11.31,27.31Z">
                                                    </path>
                                                    <path
                                                        d="M192,112a16,16,0,0,1-16-16V48a16,16,0,0,1,32,0V96A16,16,0,0,1,192,112Z">
                                                    </path>
                                                    <line x1="293.89" y1="90.25" x2="259.95"
                                                        y2="124.19"></line>
                                                    <path
                                                        d="M260,140.19a16,16,0,0,1-11.31-27.31l33.94-33.95a16,16,0,0,1,22.63,22.63L271.27,135.5A15.94,15.94,0,0,1,260,140.19Z">
                                                    </path>
                                                    <line x1="124.19" y1="259.95" x2="90.25"
                                                        y2="293.89"></line>
                                                    <path
                                                        d="M90.25,309.89a16,16,0,0,1-11.32-27.31l33.95-33.94a16,16,0,0,1,22.62,22.63l-33.94,33.94A16,16,0,0,1,90.25,309.89Z">
                                                    </path>
                                                    <path
                                                        d="M219,151.83a26,26,0,0,0-36.77,0l-30.43,30.43a26,26,0,0,0,0,36.77L208.76,276a4,4,0,0,0,5.66,0L276,214.42a4,4,0,0,0,0-5.66Z">
                                                    </path>
                                                    <path
                                                        d="M472.31,405.11,304.24,237a4,4,0,0,0-5.66,0L237,298.58a4,4,0,0,0,0,5.66L405.12,472.31a26,26,0,0,0,36.76,0l30.43-30.43h0A26,26,0,0,0,472.31,405.11Z">
                                                    </path>
                                                </svg>
                                                <div class="flex-grow text-sm font-bold">Make your theme!</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div title="Change Language" class="dropdown dropdown-end">
                            <div tabindex="0" class="btn btn-ghost gap-1 normal-case"><svg
                                    class="inline-block h-4 w-4 fill-current md:h-5 md:w-5"
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M363,176,246,464h47.24l24.49-58h90.54l24.49,58H480ZM336.31,362,363,279.85,389.69,362Z">
                                    </path>
                                    <path
                                        d="M272,320c-.25-.19-20.59-15.77-45.42-42.67,39.58-53.64,62-114.61,71.15-143.33H352V90H214V48H170V90H32v44H251.25c-9.52,26.95-27.05,69.5-53.79,108.36-32.68-43.44-47.14-75.88-47.33-76.22L143,152l-38,22,6.87,13.86c.89,1.56,17.19,37.9,54.71,86.57.92,1.21,1.85,2.39,2.78,3.57-49.72,56.86-89.15,79.09-89.66,79.47L64,368l23,36,19.3-11.47c2.2-1.67,41.33-24,92-80.78,24.52,26.28,43.22,40.83,44.3,41.67L255,362Z">
                                    </path>
                                </svg> <svg width="12px" height="12px"
                                    class="ml-1 hidden h-3 w-3 fill-current opacity-60 sm:inline-block"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048">
                                    <path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
                                </svg></div>
                            <div
                                class="dropdown-content bg-base-200 text-base-content rounded-t-box rounded-b-box top-px mt-16 w-56 overflow-y-auto shadow-2xl">
                                <ul class="menu menu-compact gap-1 p-3" tabindex="0">
                                    <li><button class="flex active"><img loading="lazy" width="20"
                                                height="20" alt="English"
                                                src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1ec-1f1e7.svg">
                                            <span class="flex flex-1 justify-between">English </span></button> </li>
                                    <li><button class="flex"><img loading="lazy" width="20" height="20"
                                                alt="Español"
                                                src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1ea-1f1f8.svg">
                                            <span class="flex flex-1 justify-between">Español </span></button> </li>
                                    <li><button class="flex"><img loading="lazy" width="20" height="20"
                                                alt="Français"
                                                src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1eb-1f1f7.svg">
                                            <span class="flex flex-1 justify-between">Français </span></button> </li>
                                    <li><button class="flex"><img loading="lazy" width="20" height="20"
                                                alt="Indonesia"
                                                src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1ee-1f1e9.svg">
                                            <span class="flex flex-1 justify-between">Indonesia </span></button> </li>
                                    <li><button class="flex"><img loading="lazy" width="20" height="20"
                                                alt="日本語"
                                                src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1ef-1f1f5.svg">
                                            <span class="flex flex-1 justify-between">日本語 </span></button> </li>
                                    <li><button class="flex"><img loading="lazy" width="20" height="20"
                                                alt="한국어"
                                                src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1f0-1f1f7.svg">
                                            <span class="flex flex-1 justify-between">한국어 </span></button> </li>
                                    <li><button class="flex"><img loading="lazy" width="20" height="20"
                                                alt="Português"
                                                src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1f5-1f1f9.svg">
                                            <span class="flex flex-1 justify-between">Português </span></button> </li>
                                    <li><button class="flex"><img loading="lazy" width="20" height="20"
                                                alt="Русский"
                                                src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1f7-1f1fa.svg">
                                            <span class="flex flex-1 justify-between">Русский </span></button> </li>
                                    <li><button class="flex"><img loading="lazy" width="20" height="20"
                                                alt="中文"
                                                src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1e8-1f1f3.svg">
                                            <span class="flex flex-1 justify-between">中文 </span></button> </li>
                                    <li><button class="flex"><img loading="lazy" width="20" height="20"
                                                alt="繁體中文"
                                                src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1f9-1f1fc.svg">
                                            <span class="flex flex-1 justify-between">繁體中文 </span></button> </li>
                                </ul>
                            </div>
                        </div> <span class="tooltip tooltip-bottom before:text-xs before:content-[attr(data-tip)]"
                            data-tip="GitHub">
                            <div class="flex-none items-center"><a aria-label="Github" target="_blank"
                                    href="https://github.com/saadeghi/daisyui" rel="noopener"
                                    class="btn btn-ghost drawer-button btn-square normal-case"><svg width="20"
                                        height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        class="inline-block h-5 w-5 fill-current md:h-6 md:w-6">
                                        <path
                                            d="M256,32C132.3,32,32,134.9,32,261.7c0,101.5,64.2,187.5,153.2,217.9a17.56,17.56,0,0,0,3.8.4c8.3,0,11.5-6.1,11.5-11.4,0-5.5-.2-19.9-.3-39.1a102.4,102.4,0,0,1-22.6,2.7c-43.1,0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1,1.4-14.1h.1c22.5,2,34.3,23.8,34.3,23.8,11.2,19.6,26.2,25.1,39.6,25.1a63,63,0,0,0,25.6-6c2-14.8,7.8-24.9,14.2-30.7-49.7-5.8-102-25.5-102-113.5,0-25.1,8.7-45.6,23-61.6-2.3-5.8-10-29.2,2.2-60.8a18.64,18.64,0,0,1,5-.5c8.1,0,26.4,3.1,56.6,24.1a208.21,208.21,0,0,1,112.2,0c30.2-21,48.5-24.1,56.6-24.1a18.64,18.64,0,0,1,5,.5c12.2,31.6,4.5,55,2.2,60.8,14.3,16.1,23,36.6,23,61.6,0,88.2-52.4,107.6-102.3,113.3,8,7.1,15.2,21.1,15.2,42.5,0,30.7-.3,55.5-.3,63,0,5.4,3.1,11.5,11.4,11.5a19.35,19.35,0,0,0,4-.4C415.9,449.2,480,363.1,480,261.7,480,134.9,379.7,32,256,32Z">
                                        </path>
                                    </svg></a></div>
                        </span>
                    </div>
                </nav>
            </div>
            <div class="p-6 pb-16">
                <div class="flex flex-col-reverse justify-between gap-6 xl:flex-row">
                    <div class="prose w-full flex-grow">
    <!-- Responsive cards -->
    {{-- <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Responsive cards
    </h4> --}}
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    {{ __('Total Visits') }}
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    6389
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Total Donations
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $ 46,760.89
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Total News Articles
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    376
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Total Ministers
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    35
                </p>
            </div>
        </div>
    </div>
    <section class="max-w-9xl my-8 mx-auto px-8 md:px-24 w-full md:my-10 ">
        <div
            class="flex flex-col items-center text-center bg-green-200 dark:bg-gray-900 rounded-3xl pt-8 pb-10 px-6 md:py-12 lg:py-14">
            <div
                class="flex items-center justify-center w-28 h-28 bg-gradient-to-br from-green-400 to-green-200 rounded-3xl text-gray-900 font-bold text-4xl sm:text-5xl">
                <fontsninja-text id="fontsninja-text-62" class="fontsninja-family-1770">
                    v1.0
                </fontsninja-text>
            </div>
            <h2
                class="mt-8 inline-block bg-gradient-to-r from-yellow-400 to-yellow-200 bg-clip-text text-transparent text-3xl font-bold sm:mt-10 sm:text-4xl md:text-5xl md:leading-tight">
                <fontsninja-text id="fontsninja-text-63" class="fontsninja-family-1770 leading-1">
                    What’s New in <br />{{ config('app.name') }}</fontsninja-text>
            </h2>
            <p class="text-gray-600 dark:text-gray-400 mt-6 font-medium max-w-4xl sm:text-lg">
                <fontsninja-text id="fontsninja-text-64" class="fontsninja-family-1770">{{__('The 20th Anniversary celebration.')}}</fontsninja-text>
            </p>
            <a href="https://www.thenonstop.org"
                class="mt-8 inline-block text-black border-b border-black dark:text-green-300 font-medium transition sm:mt-10 sm:text-lg hover:opacity-50 dark:hover:opacity-80">
                <fontsninja-text id="fontsninja-text-65" class="fontsninja-family-1770">
                   {{ __('Visit the Website for more details. ') }}
                </fontsninja-text>
            </a>
        </div>
    </section>




                    </div>

                </div>
            </div>
            @include('layouts.footer')
        </div>
        <div class="drawer-side" style="scroll-behavior: smooth; scroll-padding-top: 5rem;"><label for="drawer"
                class="drawer-overlay"></label>

            @include('layouts.navigation')

        </div>
    </div>

    <input type="checkbox" id="my-modal" class="modal-toggle" aria-label="Open or close modal">

    <div class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
            <div class="modal-action"><label for="my-modal" class="btn">Yay!</label></div>
        </div>
    </div>
    <div class="modal" id="my-modal-2">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
            <div class="modal-action"><a href="#" class="btn" rel="external">Yay!</a></div>
        </div>
    </div> <input type="checkbox" id="my-modal-3" class="modal-toggle" aria-label="Open or close modal">
    <div class="modal">
        <div class="modal-box relative"><label for="my-modal-3"
                class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
            <h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
        </div>
    </div> <input type="checkbox" id="my-modal-4" class="modal-toggle" aria-label="Open or close modal"> <label
        for="my-modal-4" class="modal cursor-pointer"><label class="modal-box relative" for="">
            <h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
        </label></label> <input type="checkbox" id="my-modal-5" class="modal-toggle"
        aria-label="Open or close modal">
    <div class="modal">
        <div class="modal-box w-11/12 max-w-5xl">
            <h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
            <div class="modal-action"><label for="my-modal-5" class="btn">Yay!</label></div>
        </div>
    </div> <input type="checkbox" id="my-modal-6" class="modal-toggle" aria-label="Open or close modal">
    <div class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
            <div class="modal-action"><label for="my-modal-6" class="btn">Yay!</label></div>
        </div>
    </div>
    <div id="svelte-announcer" aria-live="assertive" aria-atomic="true"
        style="position: absolute; left: 0px; top: 0px; clip: rect(0px, 0px, 0px, 0px); clip-path: inset(50%); overflow: hidden; white-space: nowrap; width: 1px; height: 1px;">
        Hero — Tailwind CSS Components</div>


    </body>

</html>
