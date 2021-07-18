<button {{ $attributes->merge(['class' => 'px-6 py-2 font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md ext-base focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800']) }}>
    {{ $slot }}
</button>
