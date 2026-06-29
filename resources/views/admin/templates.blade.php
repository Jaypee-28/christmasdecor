<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Templates</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-950 text-gray-200 antialiased font-sans min-h-screen">
    <header class="sticky top-0 z-50 bg-gray-900 border-b border-gray-800 flex justify-between items-center px-6 py-4">
        <div>
            <h1 class="text-xl font-bold text-white tracking-tight">ChristmasDecoratingService <span class="text-blue-500 font-medium">Templates</span></h1>
        </div>
        <div>
            <a href="{{ route('admin.dashboard') }}" class="text-blue-400 hover:text-blue-300">Back to Dashboard</a>
        </div>
    </header>

    <main class="p-4 sm:p-6 space-y-6 max-w-4xl mx-auto">
        @if(session('success'))
            <div class="bg-green-600 text-white p-4 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif

        <h2 class="text-2xl font-bold text-white mb-4">Edit Pitch Templates</h2>

        <form action="{{ route('admin.templates.save') }}" method="POST" class="space-y-6">
            @csrf
            @foreach($templates as $index => $template)
                <div class="bg-gray-900 border border-gray-800 rounded-xl p-4 shadow">
                    <label class="block text-sm font-medium text-gray-300 mb-2">Template {{ $template->key }}</label>
                    <input type="hidden" name="templates[{{ $index }}][key]" value="{{ $template->key }}">
                    <textarea name="templates[{{ $index }}][body]" rows="6" class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 text-white focus:ring-blue-500 focus:border-blue-500" required>{{ $template->body }}</textarea>
                </div>
            @endforeach

            <div class="flex justify-end">
                <button type="submit" class="px-6 py-3 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-lg shadow transition">
                    Save All Templates
                </button>
            </div>
        </form>
    </main>
</body>
</html>

