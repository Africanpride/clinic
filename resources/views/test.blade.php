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

                    <div class="flex-0 flex items-center gap-2">


{{ Auth::user()->firstName ?? 'Welcome!' }}

                        <div class="dropdown dropdown-end"><label tabindex="0"
                                class="btn btn-ghost btn-circle avatar">
                                <div class="w-10 rounded-full"><img src="https://placeimg.com/80/80/people"></div>
                            </label>
                            <ul tabindex="0"
                                class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                                <li><a class="justify-between">Profile
                                        <span class="badge">New</span></a></li>
                                <li><a>Settings</a></li>
                                <li><a>Logout</a></li>
                            </ul>
                        </div>

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
                        <section>
                            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                                <!-- Card -->
                                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                    <div
                                        class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
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
                                    <div
                                        class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
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
                                    <div
                                        class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
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
                                    <div
                                        class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
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
                        </section>
                        <section class="max-w-9xl my-8 mx-auto px-4 md:px-24 w-full md:my-10 ">
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
                                    <fontsninja-text id="fontsninja-text-64" class="fontsninja-family-1770">
                                        {{ __('The 20th Anniversary celebration.') }}</fontsninja-text>
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
