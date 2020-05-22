
    <x-app>

        <div>

            @foreach($users as $user)

                <a href="{{ $user->path() }}" class="flex items-center mb-5">

                    <img
                        src="{{ $user->avatar }}"
                        alt="{{ $user->name }}'s avatar"
                        width="60"
                        class="mr-4 rounded"
                    >

                    <div>

                        <h4 class="font-bold">{{ '@' . $user->name }}</h4>

                    </div>

                </a>

            @endforeach

            {{ $users->links() }}

        </div>

    </x-app>
