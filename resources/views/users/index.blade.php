@include('layouts.head')

<body tabindex="-1">
    <div class="bg-base-100 drawer drawer-mobile"><input id="drawer" type="checkbox" class="drawer-toggle">
        <div class="drawer-content" style="scroll-behavior: smooth; scroll-padding-top: 5rem;">
            @include('layouts.topbar')
            <div class="p-6 pb-16">
                <x-app-data />
                <!-- component -->

                <div class="flex items-center justify-center min-h-screen bg-base">
                    <div class="w-full">
                        <!-- The button to open modal -->


                        <div class="overflow-auto lg:overflow-visible ">
                            <table class="table text-gray-400 border-separate space-y-6 text-sm w-full h-full">
                                <thead class="bg-gray-100 text-gray-500">
                                    <tr>
                                        <th class="p-3">User</th>
                                        <th class="p-3 text-left">Telephone</th>
                                        <th class="p-3 text-left">Last Login</th>
                                        <th class="p-3 text-left">Status</th>
                                        <th class="p-3 text-left">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                        <tr class="bg-gray-100">
                                            <td class="p-3">
                                                <div class="flex items-center">
                                                    <img class="rounded-full h-12 w-12  object-cover"
                                                        src="{{ $user->profile->profile_image ?? asset('../images/profile.png') }}"
                                                        alt="Profile Image">
                                                    <div class="ml-3">
                                                        <div class="italic">{{ $user->firstName }} {{ $user->lastName }}
                                                        </div>
                                                        <div class="text-gray-500">{{ $user->email }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-3">
                                                {{ $user->profile->telephone ?? 'N/A ' }}
                                            </td>
                                            <td class="p-3 font-bold">
                                                {{ $user->profile->last_login_at ?? '' }}
                                            </td>
                                            <td class="p-3">
                                                <span
                                                    class="{{ $user->isAdmin ? 'bg-green-500 px-3 py-0' : 'bg-red-500 px-3 py-0' }}  text-gray-50 rounded-md px-2">
                                                    {{ $user->isAdmin ? 'true' : 'false' }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="space-x-2 flex justify-between items-stretch">

                                                    <a href="{{ route('users.edit', ['user' => $user->id] ) }}" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            onclick="toggleModal()" class="w-5 h-5 cursor-pointer">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M7.5 3.75H6A2.25 2.25 0 003.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0120.25 6v1.5m0 9V18A2.25 2.25 0 0118 20.25h-1.5m-9 0H6A2.25 2.25 0 013.75 18v-1.5M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                    </a>



                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5 cursor-pointer">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                    </svg>

                                                    <form method="POST"  action="{{ route('users.destroy', $user) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <svg  xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5 cursor-pointer"
                                                        :href="route('users.destroy', $user)"
                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg>
                                                    </form>


                                                </div>




                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="py-2  my-4"> {{ $users->links() }}</div>
                        </div>
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

</body>

</html>
