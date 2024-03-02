@props(['user'])

<div>
    <article class=" rounded-lg">
        <img
            alt=""
            src="{{ $user->profile_avatar_url }}"
            class="object-cover rounded-full w-48 h-48 mx-auto mt-4"
        />


        <div class="bg-white dark:bg-gray-800 p-4 sm:p-6">
            <div class="flex justify-between">
                <time datetime="{{ $user->created_at }}"
                      class="block dark:text-gray-500 text-xs text-gray-500">Created at: {{ $user->created_at }}</time>
                <span
                    class="block dark:text-gray-500 text-xs text-gray-500">@if($user->is_admin)
                        Admin
                    @else
                        User
                    @endif</span>
            </div>


            <h3 class="mt-0.5 font-bold text-lg text-gray-900 dark:text-white">{{ $user->name }}</h3>


            <p class="mt-2 line-clamp-3  text-sm/relaxed text-gray-500 dark:text-gray-200">
                Email: {{ $user->email }}
                <br>
                Date of Birth: {{ $user->date_of_birth ?? 'Not provided' }}
            </p>
        </div>
        @if(\Illuminate\Support\Facades\Auth::user()->id == $user->id)
            <div class="flex justify-start items-center">
                <a href="{{ route('profile.edit') }}"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
            </div>
        @else
            <div class="flex justify-between items-center">

                {{--        Promote to admin button--}}
                <div class="bg-white dark:bg-gray-800 ">
                    <form action="{{ route('users.promote', $user) }}" method="POST">
                        @csrf
                        <button type=" submit
                "
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">@if($user->is_admin)
                                Demote
                            @else
                                Promote
                            @endif
                        </button>
                    </form>
                </div>
                {{--        delete button--}}
                @if($user->is_admin == 0)
                    <div class="bg-white dark:bg-gray-800 ">
                        <form action="{{ route('users.delete', $user) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type=" submit
                "
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete
                            </button>
                        </form>
                    </div>
                @endif
            </div>
        @endif
    </article>
</div>
