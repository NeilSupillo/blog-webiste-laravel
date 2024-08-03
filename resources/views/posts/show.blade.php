<x-layout>
    <h1>Show</h1>
    <section class="mt-4">
        <div class="flex justify-end">
            <div class="flex justify-between">
                <a href="{{ route('posts.edit', $post->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                <form action="{{ route('posts.destroy', $post->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Delete</button></form>
                
            </div>
            
        </div>
    </section>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-8 bg-slate-50 rounded-lg dark:bg-slate-700">
        <h1 class="text-3xl text-center text-indigo-600 font-bold">{{$post->title}}</h1>
        <main class="mt-4">
            <p class="text-2xl text-center text-gray-700 dark:text-gray-400">{{$post->content}}</p>
        </main>
    </div>
</x-layout>