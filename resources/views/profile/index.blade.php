<x-app-layout>
    <section class="mb-4">
        <div class="p-6 sm:p-12 dark:bg-gray-900 dark:text-gray-100 rounded-lg">
            <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
                <img src="https://source.unsplash.com/75x75/?portrait" alt=""
                    class="self-center flex-shrink-0 w-24 h-24 border rounded-full md:justify-self-start dark:bg-gray-500 dark:border-gray-700">
                <div class="flex flex-col">
                    <h4 class="text-lg font-semibold text-center md:text-left">{{ Auth::user()->firstName }} {{ Auth::user()->lastName }}</h4>
                    <p class="dark:text-gray-400">{{ Auth::user()->profile->profile_details ?? 'Sed non nibh iaculis, posuere diam vitae, consectetur neque. Integer velit ligula, semper sed nisl in, cursus commodo elit. Pellentesque sit amet mi luctus ligula euismod lobortis ultricies et nibh.' }}</p>
                </div>
            </div>

        </div>
    </section>
    <section>
        <!-- component -->
        <div class="flex items-center justify-center p-12">
            <!-- Author: FormBold Team -->
            <!-- Learn More: https://formbold.com -->
            <div class="mx-auto w-full md:max-w-6xl">
                <form action="https://formbold.com/s/FORM_ID" method="POST">
                    <div class="mb-5 flex justify-between items-center gap-x-2">
                        <div class="flex-1">
                            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                First Name
                            </label>
                            <input type="text" name="firstName" id="firstName" placeholder="First Name" value="{{ Auth::user()->firstName }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white
                                    py-3 px-6 text-base font-medium text-[#6B7280]
                                    outline-none focus:border-[#6A64F1]
                                    focus:shadow-md" />
                        </div>
                        <div class="flex-1">
                            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                Last Name
                            </label>
                            <input type="text" name="lastName" id="lastName" placeholder="Last Name" value="{{ Auth::user()->lastName }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white
                                    py-3 px-6 text-base font-medium text-[#6B7280]
                                    outline-none focus:border-[#6A64F1]
                                    focus:shadow-md" />
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                            Email Address
                        </label>
                        <input type="email" name="email" id="email" placeholder="{{ Auth::user()->email ?? ' ' }}" value="{{ Auth::user()->email ?? ' ' }}"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div class="mb-5">
                        <label for="profile_details" class="mb-3 block text-base font-medium text-[#07074D]">
                            Bio Data
                        </label>
                        <textarea rows="4" name="profile_details" id="profile_details"
                        placeholder="{{ Auth::user()->profile->profile_details ?? 'N/A' }}"
                        value="{{ Auth::user()->profile->profile_details ?? 'Add Bio text .... ' }}"
                            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                    </div>
                    <div>
                        <button
                            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>


</x-app-layout>
