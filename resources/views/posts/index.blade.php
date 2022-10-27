<x-app-layout>
    <x-app-data />
    <!-- component -->

    @if (session('flash_message'))
        <div
            class="relative flex flex-col sm:flex-row sm:items-center bg-slate-200 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6">
            <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                <div class="text-green-500">
                    <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="text-sm font-medium ml-3">Success.</div>
            </div>
            <div class="text-sm tracking-wide text-gray-500 mt-4 sm:mt-0 sm:ml-4">
                {{ session('flash_message') }}
            </div>
            <div
                class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
        </div>
    @endif



    <div class="flex justify-between items-center my-3">
        <a href="{{ route('posts.create') }}"><button
                class="btn btn-outline  btn-sm">{{ __('Add New Post/Article') }}</button></a>
    </div>

<div class="space-y-3">

    @forelse ($posts as $post)
    <div class=" bg-white border-2 border-gray-300 p-2 rounded-md tracking-wide shadow-lg">
        <div id="header" class="flex">
            <img alt="mountain" class="aspect-square w-48 h-36 rounded-md border-2 border-gray-300"
            src="{{ $post->image ?? " " }}" />
            <div id="body" class="flex flex-col ml-5">
                <div class="flex justify-between">
                    <h4 id="name" class="text-xl font-semibold mb-2">
                     <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                    </h4>
                    <div>
                        <button class="btn btn-square btn-xs">
                        {{ $post->id }}
                      </button>
                    </div>
                </div>
                <p id="" class="text-gray-800  line-clamp-3">{{ $post->content }}</p>
                <div class="flex mt-2">
                    <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300"
                    src="https://picsum.photos/seed/picsum/200" />
                    <p class="ml-3">{{ $post->user?->full_name }}</p>
                </div>
            </div>
        </div>
    </div>


    @empty

    {{ __('No Posts/Articles Available') }}
    @endforelse
</div>

<div class="my-5">
   {{ $posts?->links() }}
</div>
</x-app-layout>
