<!DOCTYPE html>
<html data-theme="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

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
                                    height="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current md:h-6 md:w-6">
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
                    <div class="prose w-full max-w-4xl flex-grow">

                        <div class="hero min-h-screen bg-base-200">
                            <div class="hero-content text-center">
                                <div class="max-w-md">
                                    <h1 class="text-5xl font-bold">Hello there</h1>
                                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut
                                        assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a
                                        id nisi.</p>
                                    <button class="btn btn-primary">Get Started</button>
                                </div>
                            </div>
                        </div>



                        <div class="not-prose flex justify-center xl:hidden">
                            <div class="flex flex-col gap-2 pb-6">
                                <h3 class="text-base-content/50 text-xs font-bold">Sponsors</h3>
                                <div class="flex gap-2 flex-col sm:flex-row"><a
                                        href="https://www.stackbit.com/?utm_source=daisyui" target="_blank"
                                        rel="nofollow"
                                        class="flex w-[130px] flex-col items-center rounded bg-base-100 border-base-100 border-base-content/10 hover:border-base-content/20 border"><svg
                                            class="fill-base-content mt-2 mb-1" width="110" height="20"
                                            viewBox="0 0 128 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M41.5717 8.50469C41.5717 6.29343 39.955 4.72344 37.3469 4.72344C35.234 4.72344 33.7217 5.68779 33.7217 7.27867C33.7217 11.6864 44.9893 8.11404 44.9893 15.8854C44.9893 19.615 41.7289 21.728 37.5558 21.728C34.0583 21.728 31.1468 20.1863 30.0535 17.3387L33.0178 14.3731C33.0178 17.007 34.7377 18.6728 37.5558 18.6728C39.767 18.6728 41.4157 17.6556 41.4157 16.0131C41.4157 11.5525 30.1481 15.1262 30.1481 7.50962C30.1481 3.9888 33.3826 1.66821 37.3469 1.66821C40.9095 1.66821 43.3935 3.37334 44.364 5.70744L41.5717 8.50469Z">
                                            </path>
                                            <path
                                                d="M50.2694 2.6106V7.7702H54.0777V10.6461H50.2694V16.6975C50.2694 18.2356 50.8173 18.6275 52.122 18.6275C52.7266 18.608 53.3286 18.5381 53.9217 18.4186V21.367C53.4524 21.5488 52.0962 21.6803 51.6527 21.6803C48.5483 21.6803 46.8788 20.3756 46.8788 17.1681V10.6461H44.4219V7.77512H46.8788V6.00365L50.2694 2.6106Z">
                                            </path>
                                            <path
                                                d="M124.192 2.6106V7.7702H128V10.6461H124.192V16.6975C124.192 18.2356 124.74 18.6275 126.044 18.6275C126.649 18.608 127.251 18.5381 127.844 18.4186V21.367C127.375 21.5488 126.018 21.6803 125.575 21.6803C122.471 21.6803 120.801 20.3756 120.801 17.1681V10.6461H118.344V7.77512H120.801V6.00365L124.192 2.6106Z">
                                            </path>
                                            <path
                                                d="M83.6286 11.1374L80.6287 12.8843C80.3167 11.345 78.9088 10.3807 77.2393 10.3807C75.0281 10.3807 73.4569 11.8929 73.4569 14.501C73.4569 17.1091 74.9961 18.6311 77.2393 18.6311C78.856 18.6311 80.2381 17.5611 80.6287 16.2049L83.55 17.9002C82.6373 20.0648 80.2638 21.7343 77.2393 21.7343C72.8831 21.7343 69.936 18.7859 69.936 14.5096C69.936 10.2591 72.9876 7.28493 77.2393 7.28493C80.238 7.27879 82.7417 8.94829 83.6286 11.1374Z">
                                            </path>
                                            <path
                                                d="M87.8767 2.16943V12.7589L92.9626 7.77744H97.5006L91.6579 13.437L97.6308 21.3337H93.4847L89.2845 15.7257L87.8767 17.077V21.3337H84.4861V2.16943H87.8767Z">
                                            </path>
                                            <path
                                                d="M101.688 2.16943V9.20861C102.731 8.03541 104.218 7.27867 106.201 7.27867C110.217 7.27867 113.033 10.4088 113.033 14.5562C113.033 18.6507 110.217 21.728 106.175 21.728C104.192 21.728 102.706 20.9713 101.663 19.7981V21.3337H98.2979V2.16943H101.688ZM105.523 18.6531C107.817 18.6531 109.513 17.0094 109.513 14.5586C109.513 12.055 107.817 10.3597 105.523 10.3597C103.358 10.3597 101.584 12.0022 101.584 14.5586C101.584 17.0598 103.364 18.6507 105.523 18.6507V18.6531Z">
                                            </path>
                                            <path
                                                d="M113.945 2.16943H117.466V5.56003H113.945V2.16943ZM117.385 7.77744V21.3337H113.994V7.77498L117.385 7.77744Z">
                                            </path>
                                            <path
                                                d="M4.00607 0C3.47947 -6.18997e-07 2.95804 0.103822 2.4716 0.30553C1.98516 0.507237 1.54326 0.80287 1.17118 1.17552C0.799101 1.54817 0.504146 1.99052 0.303184 2.47727C0.102222 2.96401 -0.000802714 3.48561 4.70939e-06 4.01221V10.0207C-6.19753e-05 10.5153 0.137136 11.0001 0.396324 11.4213C0.655512 11.8426 1.02652 12.1836 1.46803 12.4064L6.68292 15.0243V6.67678H15.0243L21.6875 0H4.00607Z"
                                                fill="#FF364E"></path>
                                            <path
                                                d="M17.6949 21.7023C18.7572 21.7019 19.7758 21.2797 20.5268 20.5285C21.2778 19.7772 21.6997 18.7585 21.6997 17.6962V11.6865C21.6993 11.1914 21.5612 10.7062 21.3009 10.2852C21.0405 9.86408 20.6682 9.52369 20.2256 9.30201L15.0242 6.67676V15.0243H6.68283L0.0134277 21.7023H17.6949Z"
                                                fill="#FF364E"></path>
                                            <path
                                                d="M69.0011 21.3336H68.377H65.7321L65.7837 19.6334C64.7383 20.8889 63.1953 21.7218 61.129 21.7218C57.075 21.7218 54.2495 18.6359 54.2495 14.5303C54.2495 10.3719 57.048 7.23315 61.102 7.23315C63.0675 7.23315 64.554 7.99113 65.5994 9.14221V7.73437H68.9998L69.0011 21.3336ZM61.7531 18.6371C63.9238 18.6371 65.7284 17.0401 65.7284 14.5315C65.7284 11.9677 63.9238 10.3203 61.7531 10.3203C59.4779 10.3203 57.7777 12.0205 57.7777 14.5315C57.7875 16.9934 59.4816 18.6408 61.7567 18.6408L61.7531 18.6371Z">
                                            </path>
                                        </svg>
                                        <p class="text-base-content/50 px-1.5 py-2 text-xs tracking-tighter">Make your
                                            React site visually editable</p>
                                    </a></div> <a href="https://opencollective.com/daisyui" target="_blank"
                                    rel="nofollow" class="group link link-hover text-xs opacity-80">Become a sponsor
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24"
                                        class="inline-block w-4 fill-current opacity-0 group-hover:opacity-50">
                                        <path fill-rule="evenodd"
                                            d="M19,14 L19,19 C19,20.1045695 18.1045695,21 17,21 L5,21 C3.8954305,21 3,20.1045695 3,19 L3,7 C3,5.8954305 3.8954305,5 5,5 L10,5 L10,7 L5,7 L5,19 L17,19 L17,14 L19,14 Z M18.9971001,6.41421356 L11.7042068,13.7071068 L10.2899933,12.2928932 L17.5828865,5 L12.9971001,5 L12.9971001,3 L20.9971001,3 L20.9971001,11 L18.9971001,11 L18.9971001,6.41421356 Z">
                                        </path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="sticky top-20 xl:mt-32 my-6 xl:my-0 xl:w-[130px]">
                            <div class="hidden xl:block ">
                                <div class="flex flex-col gap-2 pb-6">
                                    <h3 class="text-base-content/50 text-xs font-bold">Sponsors</h3>
                                    <div class="flex gap-2 flex-col"><a
                                            href="https://www.stackbit.com/?utm_source=daisyui" target="_blank"
                                            rel="nofollow"
                                            class="flex w-[130px] flex-col items-center rounded bg-base-100 border-base-100 border-base-content/10 hover:border-base-content/20 border"><svg
                                                class="fill-base-content mt-2 mb-1" width="110" height="20"
                                                viewBox="0 0 128 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M41.5717 8.50469C41.5717 6.29343 39.955 4.72344 37.3469 4.72344C35.234 4.72344 33.7217 5.68779 33.7217 7.27867C33.7217 11.6864 44.9893 8.11404 44.9893 15.8854C44.9893 19.615 41.7289 21.728 37.5558 21.728C34.0583 21.728 31.1468 20.1863 30.0535 17.3387L33.0178 14.3731C33.0178 17.007 34.7377 18.6728 37.5558 18.6728C39.767 18.6728 41.4157 17.6556 41.4157 16.0131C41.4157 11.5525 30.1481 15.1262 30.1481 7.50962C30.1481 3.9888 33.3826 1.66821 37.3469 1.66821C40.9095 1.66821 43.3935 3.37334 44.364 5.70744L41.5717 8.50469Z">
                                                </path>
                                                <path
                                                    d="M50.2694 2.6106V7.7702H54.0777V10.6461H50.2694V16.6975C50.2694 18.2356 50.8173 18.6275 52.122 18.6275C52.7266 18.608 53.3286 18.5381 53.9217 18.4186V21.367C53.4524 21.5488 52.0962 21.6803 51.6527 21.6803C48.5483 21.6803 46.8788 20.3756 46.8788 17.1681V10.6461H44.4219V7.77512H46.8788V6.00365L50.2694 2.6106Z">
                                                </path>
                                                <path
                                                    d="M124.192 2.6106V7.7702H128V10.6461H124.192V16.6975C124.192 18.2356 124.74 18.6275 126.044 18.6275C126.649 18.608 127.251 18.5381 127.844 18.4186V21.367C127.375 21.5488 126.018 21.6803 125.575 21.6803C122.471 21.6803 120.801 20.3756 120.801 17.1681V10.6461H118.344V7.77512H120.801V6.00365L124.192 2.6106Z">
                                                </path>
                                                <path
                                                    d="M83.6286 11.1374L80.6287 12.8843C80.3167 11.345 78.9088 10.3807 77.2393 10.3807C75.0281 10.3807 73.4569 11.8929 73.4569 14.501C73.4569 17.1091 74.9961 18.6311 77.2393 18.6311C78.856 18.6311 80.2381 17.5611 80.6287 16.2049L83.55 17.9002C82.6373 20.0648 80.2638 21.7343 77.2393 21.7343C72.8831 21.7343 69.936 18.7859 69.936 14.5096C69.936 10.2591 72.9876 7.28493 77.2393 7.28493C80.238 7.27879 82.7417 8.94829 83.6286 11.1374Z">
                                                </path>
                                                <path
                                                    d="M87.8767 2.16943V12.7589L92.9626 7.77744H97.5006L91.6579 13.437L97.6308 21.3337H93.4847L89.2845 15.7257L87.8767 17.077V21.3337H84.4861V2.16943H87.8767Z">
                                                </path>
                                                <path
                                                    d="M101.688 2.16943V9.20861C102.731 8.03541 104.218 7.27867 106.201 7.27867C110.217 7.27867 113.033 10.4088 113.033 14.5562C113.033 18.6507 110.217 21.728 106.175 21.728C104.192 21.728 102.706 20.9713 101.663 19.7981V21.3337H98.2979V2.16943H101.688ZM105.523 18.6531C107.817 18.6531 109.513 17.0094 109.513 14.5586C109.513 12.055 107.817 10.3597 105.523 10.3597C103.358 10.3597 101.584 12.0022 101.584 14.5586C101.584 17.0598 103.364 18.6507 105.523 18.6507V18.6531Z">
                                                </path>
                                                <path
                                                    d="M113.945 2.16943H117.466V5.56003H113.945V2.16943ZM117.385 7.77744V21.3337H113.994V7.77498L117.385 7.77744Z">
                                                </path>
                                                <path
                                                    d="M4.00607 0C3.47947 -6.18997e-07 2.95804 0.103822 2.4716 0.30553C1.98516 0.507237 1.54326 0.80287 1.17118 1.17552C0.799101 1.54817 0.504146 1.99052 0.303184 2.47727C0.102222 2.96401 -0.000802714 3.48561 4.70939e-06 4.01221V10.0207C-6.19753e-05 10.5153 0.137136 11.0001 0.396324 11.4213C0.655512 11.8426 1.02652 12.1836 1.46803 12.4064L6.68292 15.0243V6.67678H15.0243L21.6875 0H4.00607Z"
                                                    fill="#FF364E"></path>
                                                <path
                                                    d="M17.6949 21.7023C18.7572 21.7019 19.7758 21.2797 20.5268 20.5285C21.2778 19.7772 21.6997 18.7585 21.6997 17.6962V11.6865C21.6993 11.1914 21.5612 10.7062 21.3009 10.2852C21.0405 9.86408 20.6682 9.52369 20.2256 9.30201L15.0242 6.67676V15.0243H6.68283L0.0134277 21.7023H17.6949Z"
                                                    fill="#FF364E"></path>
                                                <path
                                                    d="M69.0011 21.3336H68.377H65.7321L65.7837 19.6334C64.7383 20.8889 63.1953 21.7218 61.129 21.7218C57.075 21.7218 54.2495 18.6359 54.2495 14.5303C54.2495 10.3719 57.048 7.23315 61.102 7.23315C63.0675 7.23315 64.554 7.99113 65.5994 9.14221V7.73437H68.9998L69.0011 21.3336ZM61.7531 18.6371C63.9238 18.6371 65.7284 17.0401 65.7284 14.5315C65.7284 11.9677 63.9238 10.3203 61.7531 10.3203C59.4779 10.3203 57.7777 12.0205 57.7777 14.5315C57.7875 16.9934 59.4816 18.6408 61.7567 18.6408L61.7531 18.6371Z">
                                                </path>
                                            </svg>
                                            <p class="text-base-content/50 px-1.5 py-2 text-xs tracking-tighter">Make
                                                your React site visually editable</p>
                                        </a></div> <a href="https://opencollective.com/daisyui" target="_blank"
                                        rel="nofollow" class="group link link-hover text-xs opacity-80">Become a
                                        sponsor
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24"
                                            class="inline-block w-4 fill-current opacity-0 group-hover:opacity-50">
                                            <path fill-rule="evenodd"
                                                d="M19,14 L19,19 C19,20.1045695 18.1045695,21 17,21 L5,21 C3.8954305,21 3,20.1045695 3,19 L3,7 C3,5.8954305 3.8954305,5 5,5 L10,5 L10,7 L5,7 L5,19 L17,19 L17,14 L19,14 Z M18.9971001,6.41421356 L11.7042068,13.7071068 L10.2899933,12.2928932 L17.5828865,5 L12.9971001,5 L12.9971001,3 L20.9971001,3 L20.9971001,11 L18.9971001,11 L18.9971001,6.41421356 Z">
                                            </path>
                                        </svg></a>
                                </div>
                            </div>
                            <div class="mx-auto items-center carbonads-responsive flex justify-center">
                                <script async="" type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CEAI423U&amp;placement=daisyuicom"
                                    id="_carbonads_js"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="drawer-side" style="scroll-behavior: smooth; scroll-padding-top: 5rem;"><label for="drawer"
                class="drawer-overlay"></label>
            <aside class="bg-base-200 w-80">
                <div
                    class="z-20 bg-base-200 bg-opacity-90 backdrop-blur sticky top-0 items-center gap-2 px-4 py-2 hidden lg:flex ">
                    <a href="/" aria-current="page" aria-label="Homepage" class="flex-0 btn btn-ghost px-2">
                        <div
                            class="font-title text-primary inline-flex text-lg transition-all duration-200 md:text-3xl">
                            <span class="lowercase">{{ config('app.name') }}</span> <span
                                class="text-base-content uppercase">- UI</span>
                        </div>
                    </a> <a href="/docs/changelog" class="link link-hover font-mono text-xs text-opacity-50">
                        <div data-tip="Changelog" class="tooltip tooltip-bottom">{{ config('app.version') }}</div>
                    </a>
                </div>
                <div class="h-4"></div>
                <ul class="menu menu-compact flex flex-col p-0 px-4">
                    <li>
                        <a href="{{ url('/dashboard') }}" id="" class="flex gap-4   ">
                            <span class="flex-none">
                                <x-heroicon-o-building-office-2 class="w-6 h-6 text-current" />
                            </span>
                            <span class="flex-1">Dashboard</span>
                        </a>
                    </li>
                </ul>

                <ul class="menu menu-compact flex flex-col p-0 px-4"> </ul>
                <div
                    class="from-base-200 pointer-events-none sticky bottom-0 flex h-20 bg-gradient-to-t to-transparent">
                </div>
            </aside>
        </div>
    </div> <input type="checkbox" id="my-modal" class="modal-toggle" aria-label="Open or close modal">
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
