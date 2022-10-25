<section class="bg-white">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
        <section class="relative flex items-center h-32 bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6">
            <img alt="Night" src="{{ asset('../images/keys.jpg') }}"
                class="absolute inset-0 object-cover object-left w-full h-full opacity-80" />

            <div class="hidden md:block lg:relative md:p-12 relative">
                <a class="block text-white" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16">
                        <path d="M21.721 12.752a9.711 9.711 0 00-.945-5.003 12.754 12.754 0 01-4.339 2.708 18.991 18.991 0 01-.214 4.772 17.165 17.165 0 005.498-2.477zM14.634 15.55a17.324 17.324 0 00.332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 00.332 4.647 17.385 17.385 0 005.268 0zM9.772 17.119a18.963 18.963 0 004.456 0A17.182 17.182 0 0112 21.724a17.18 17.18 0 01-2.228-4.605zM7.777 15.23a18.87 18.87 0 01-.214-4.774 12.753 12.753 0 01-4.34-2.708 9.711 9.711 0 00-.944 5.004 17.165 17.165 0 005.498 2.477zM21.356 14.752a9.765 9.765 0 01-7.478 6.817 18.64 18.64 0 001.988-4.718 18.627 18.627 0 005.49-2.098zM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 001.988 4.718 9.765 9.765 0 01-7.478-6.816zM13.878 2.43a9.755 9.755 0 016.116 3.986 11.267 11.267 0 01-3.746 2.504 18.63 18.63 0 00-2.37-6.49zM12 2.276a17.152 17.152 0 012.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0112 2.276zM10.122 2.43a18.629 18.629 0 00-2.37 6.49 11.266 11.266 0 01-3.746-2.504 9.754 9.754 0 016.116-3.985z" />
                      </svg>

                </a>

                <h1 class="mt-6 text-xl font-bold text-white sm:text-3xl md:text-4xl">
                    Welcome to "{{  config('app.fullname') }}"
                </h1>

                <blockquote class="relative my-5">


                    <div class="relative z-10">
                      <p class="text-gray-800 sm:text-xl text-3xl dark:text-yellow-500 my-5"><em>
                        "This is the one activity we will not stop doing in Heaven as well as during the millennial reign of
                        Christ on earth."                              </p></em>
                    </div>
                  </blockquote>

            </div>
            <div class="absolute inset-0 bg-gray-900 opacity-10"></div>
        </section>

        <main class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:py-12 lg:px-16 xl:col-span-6">
            <div class="max-w-xl lg:max-w-3xl">
                <div class="relative block -mt-16 lg:hidden">
                    <a class="inline-flex items-center justify-center w-16 h-16 text-yellow-600 bg-white rounded-full sm:w-20 sm:h-20"
                        href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-24 h-24">
                            <path d="M21.721 12.752a9.711 9.711 0 00-.945-5.003 12.754 12.754 0 01-4.339 2.708 18.991 18.991 0 01-.214 4.772 17.165 17.165 0 005.498-2.477zM14.634 15.55a17.324 17.324 0 00.332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 00.332 4.647 17.385 17.385 0 005.268 0zM9.772 17.119a18.963 18.963 0 004.456 0A17.182 17.182 0 0112 21.724a17.18 17.18 0 01-2.228-4.605zM7.777 15.23a18.87 18.87 0 01-.214-4.774 12.753 12.753 0 01-4.34-2.708 9.711 9.711 0 00-.944 5.004 17.165 17.165 0 005.498 2.477zM21.356 14.752a9.765 9.765 0 01-7.478 6.817 18.64 18.64 0 001.988-4.718 18.627 18.627 0 005.49-2.098zM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 001.988 4.718 9.765 9.765 0 01-7.478-6.816zM13.878 2.43a9.755 9.755 0 016.116 3.986 11.267 11.267 0 01-3.746 2.504 18.63 18.63 0 00-2.37-6.49zM12 2.276a17.152 17.152 0 012.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0112 2.276zM10.122 2.43a18.629 18.629 0 00-2.37 6.49 11.266 11.266 0 01-3.746-2.504 9.754 9.754 0 016.116-3.985z" />
                          </svg>


                    </a>
                    <h1 class="mt-6 text-2xl font-bold text-current sm:text-3xl md:text-4xl">
                        Welcome to <br /> "{{  config('app.fullname') }}"
                    </h1>

                    <p class="mt-4 leading-relaxed text-current text-lg relative mb-5">
                        <blockquote class="relative">


                            <div class="relative z-10">
                              <p class="text-gray-800 sm:text-xl dark:text-gray-500 my-5"><em>
                               " This is the one activity we will not stop doing in Heaven as well as during the millennial reign of
                                Christ on earth."                              </p></em>
                            </div>
                          </blockquote>


                    </p>
                </div>

                {{ $slot }}
            </div>
        </main>
    </div>
</section>
