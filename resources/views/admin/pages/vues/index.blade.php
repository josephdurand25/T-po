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
    <div class="md:flex justify-around items-center gap-2 ">
        <x-form-view route='admin.vues.add' ></x-form-view>
        <div class="w-1/2 rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
            <div class="max-w-full overflow-x-auto">
                <h2 class="my-1">Toutes les vues</h2>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-2 text-left dark:bg-meta-4">
                        <th class="min-w-[220px] py-4 px-4 font-medium text-black xl:pl-11">
                            Intitulé
                        </th>
                        <th class="py-4 px-4 font-medium text-black ">
                            Actions
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $vues as $vue )
                        <tr>
                            <td class="border-b border-[#eee] py-5 px-4 pl-9 dark:border-strokedark xl:pl-11">
                                <h5 class="font-medium text-black ">{{ $vue->name_view }}</h5>
                            </td>
                            <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                <div class="flex items-center space-x-3.5">
                                {{-- <button class="hover:text-primary">
                                    <i class="fa-solid fa-edit"></i>
                                </button> --}}
                                <a type="button" href="{{route('admin.vues.delete',$vue)}}" class="text-black hover:text-primary">
                                    <i class="fa-solid fa-trash "></i>
                                </a>
                                {{-- <button class="hover:text-primary">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button> --}}
                                </div>
                            </td>
                        </tr>
                        @empty
                            <h2> Aucune vue trouvée !</h2>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-Admin.app-layout>