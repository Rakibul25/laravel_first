<x-rakib>
    <div class="max-w-md w-full mx-4 p-8 bg-gray-800 border border-gray-700 rounded-2xl shadow-xl">
        <h1 class="text-3xl font-bold text-center mb-6">Teas 🍵</h1>

        <ul class="space-y-3">
            @foreach ($teas as $tea)
                <li>
                    <a href="/teas/{{ $tea['id'] }}"
                       class="flex items-center justify-between px-4 py-3 bg-gray-700 hover:bg-blue-600 rounded-lg transition">
                        <span class="font-medium">{{ $tea['name'] }}</span>
                        <span class="text-gray-400 text-sm">#{{ $tea['id'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="mt-6 text-center">
            <a href="/" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Back to Home
            </a>
        </div>
    </div>
</x-rakib>
