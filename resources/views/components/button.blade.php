<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-10 py-2 bg-input rounded-md border-none text-white text-center font-bold shadow-inners']) }}>
    {{ $slot }}
</button>
