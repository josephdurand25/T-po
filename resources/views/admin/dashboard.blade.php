<x-Admin.app-layout>
    @include('admin.layout.dash')
    <div class="mt-4  md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5">
        {{-- <x-alert type='success'> ok</x-alert> --}}
        {{-- <x-my-button>ko</x-my-button> --}}
        {{-- <button class="border-2 border-primary p-2 bg-slate-500 text-white" x-data="{ open: true }" @click="open = false" x-show="open">
            Hide Me
        </button>
        <span x-data="{ enabled: false }">
            <button @click.prevent="enabled = !enabled">Toggle</button>
        
            <template x-if="enabled">
                <span x-data="timer" x-text="counter"></span>
            </template>
        </span> --}}
        <div x-data="{ number: 3 }">
            <div x-data="{ count: 4 }" x-modelable="count" x-model="number">
                <button @click="count++" class="border-2 border-primary p-2 bg-slate-500 text-white">Increment</button>
                Count: <span x-text="count"></span>
            </div>
            Number: <span x-text="number"></span>
        </div>
        <div x-data="{ label: 'Hello' }" x-effect="console.log(label)">
            <button @click="label += ' World!'">Change Message</button>
        </div> 
    </div>
</x-Admin.app-layout>