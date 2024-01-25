<!-- Blade Component -->
<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <div x-data="{ data: null }">
        <button @click="show_vue()" class="border-2 border-primary p-2 bg-slate-500 text-white">Toutes les vues</button>
     
        <div x-show="data">
            <ul>
                <template x-for="item in data" :key="item.id">
                    <li x-text="item.name"></li>
                </template>
            </ul>
        </div>
    </div>
</div>
