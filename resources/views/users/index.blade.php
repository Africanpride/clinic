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
                        <div class="overflow-auto lg:overflow-visible ">
                            <table class="table text-gray-400 border-separate space-y-6 text-sm w-full">
                                <thead class="bg-gray-800 text-gray-500">
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
                                        <tr class="bg-gray-800">
                                            <td class="p-3">
                                                <div class="flex items-center">
                                                    <img class="rounded-full h-12 w-12  object-cover"
                                                        src="{{ $user->profile->profile_image ?? asset('../images/profile.png') }}"
                                                        alt="Profile Image">
                                                    <div class="ml-3">
                                                        <div class="">{{ $user->firstName }} {{ $user->lastName }}
                                                        </div>
                                                        <div class="text-gray-500">{{ $user->email }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-3">
                                                {{ $user->profile->telephone ?? 'N/A ' }}
                                            </td>
                                            <td class="p-3 font-bold">
                                                {{ $user->updated_at ?? '' }}
                                            </td>
                                            <td class="p-3">
                                                <span
                                                    class="@if ($user->isAdmin == true) bg-green-500 @else bg-red-500 @endif  text-gray-50 rounded-md px-2">
                                                    {{ $user->isAdmin ? 'true' : 'false' }}
                                                </span>
                                            </td>
                                            <td class="p-3">
                                                <a href="#" class="text-gray-400 hover:text-gray-100  mr-2">
                                                    <i class="material-icons-outlined text-base">visibility</i>
                                                </a>
                                                <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                                                    <i class="material-icons-outlined text-base">edit</i>
                                                </a>
                                                <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
                                                    <i class="material-icons-round text-base">delete_outline</i>
                                                </a>
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
        </label></label> <input type="checkbox" id="my-modal-5" class="modal-toggle" aria-label="Open or close modal">
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
