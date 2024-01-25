<x-Admin.app-layout>
    <div class="flex">
        @if(Session::get('echec'))
        <x-alert type='error'>{{ Session::get('echec') }}</x-alert>
            <script>
                window.onload = function() {
                    var element = document.getElementById('success-message');
                    setTimeout(() => {
                        element.remove();
                    }, 4000);
                }
            </script>
        @endif
        @if(Session::get('success'))
        <x-alert type='success'>{{ Session::get('success') }}</x-alert>
            <script>
                window.onload = function() {
                    var element = document.getElementById('success-message');
                    setTimeout(() => {
                        element.remove();
                    }, 4000);
                }
            </script>
        @endif
    </div>
    <div class="container mx-auto">
        <div class="flex justify-center items-center p-3 my-1">
            <h2 class="font-bold text-2xl capitalize space-x-1">alimentation</h2>
        </div>
        <div x-data="{name1:'titi', name2 :'toto'}">
            <span x-text="name1" class="line-through"></span>
        </div>
        {{-- {{ dd($aliments) }} --}}
        <div class="flex justify-between items-center">
            <div class="cardBox ">
                <div class="card">
                    <div>
                        <div class="numbers">{{ $demarage }}<span class="text-[11px]"><span class="capitalize">sac</span>(s)</span></div>
                        <div class="cardName capitalize">démarage</div>
                        <span class="capitalize absolute bottom-0 right-0 text-xs px-2">20 000 <span class=" text-[10px]">FCFA</span></span>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div >
                        <div class="numbers">{{ $croissance }} <span class="text-[11px]"><span class="capitalize">sac</span>(s)</span>  </div>
                        <div class="cardName capitalize">croissance</div>
                        <span class="capitalize absolute bottom-0 right-0 text-xs px-2">19 500 <span class=" text-[10px]">FCFA</span></span>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">{{ $finition }} <span class="text-[11px]"><span class="capitalize">sac</span>(s)</span></div>
                        <div class="cardName capitalize">finition</div>
                        <span class="capitalize absolute bottom-0 right-0 text-xs px-2">19 000 <span class=" text-[10px]">FCFA</span></span>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                {{-- <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div> --}}
            </div>
            <div class="flex justify-center mt-3 py-2 w-2/3 ">
                <form class="w-1/2 p-3 rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark" action="{{route('admin.alimentation.add')}}" method="POST" >
                    @csrf
                    <h2 class="text-xl font-bold mb-1">Nouvel Aliment</h2>
                    <div class="mb-4.5">
                        <x-label class="text-black/90">Type d'aliment</x-label>
                        <div class="relative z-20 bg-transparent dark:bg-form-input">
                            <select name="type_aliment" class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-5 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                <option >Type d'aliment</option>
                                <option value="démarage" class="capitalze">démarage</option>
                                <option value="croissance" class="capitalze">croissance</option>
                                <option value="finition" class="capitalze">finition</option>
                            </select>
                            <x-error-field input='type_aliment'></x-error-field>
                            <span class="absolute top-1/2 right-4 z-30 -translate-y-1/2">
                                <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.8">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                            fill=""></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="my-2">
                        <x-label>Nombre de sacs</x-label>
                        <x-field type='number' name="nbr_sac" placeholder="Nombre de sac"></x-field>
                        <x-error-field input='nbr_sac'></x-error-field>
                    </div>
                    <div class="my-2">
                        <x-label>Prix unitaire</x-label>
                        <x-field type='number' name="prix_unit" placeholder="Nombre de sac"></x-field>
                        <x-error-field input='prix_unit'></x-error-field>
                    </div>
                    <x-my-button>enregistrer</x-my-button>
                </form>
            </div>
        </div>
        
    </div>
                    
</x-Admin.app-layout>