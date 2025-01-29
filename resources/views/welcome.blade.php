<x-layout>
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Más populares</h2>

        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://upload.wikimedia.org/wikipedia/en/c/ce/FFVIIRemake.png" alt="Final Fantasy VII Remake"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>

                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy VII Remake
                </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
        </div>

        <div class="flex my-10">
            <div class="recently-reviewed w-3/4 mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Últimos lanzamientos</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="https://upload.wikimedia.org/wikipedia/en/c/ce/FFVIIRemake.png" alt="Final Fantasy VII Remake"
                                    class="w-20 lg:w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>

                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                                style="right: -20px; bottom: -20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>

                        <div class="ml-6 lg:ml-12">
                            <a href="#"
                                class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Final Fantasy VII Remake
                            </a>
                            <div class="text-gray-400 mt-1">Playstation 4</div>
                            <p class="mt-6 text-gray-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto eius expedita quod
                                sequi quis ad suscipit labore ullam repudiandae modi error, deleniti voluptatum illo
                                temporibus, facere eligendi non dolore corrupti?
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="most-anticipated w-1/4">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Los más esperados</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="https://image.api.playstation.com/vulcan/ap/rnd/202008/0416/6Bo40lnWU0BhgrOUm7Cb6by3.png" alt="Cyberpunk 2077"
                                class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>

                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400">Septiembre 16, 2020</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout>
