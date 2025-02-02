<x-layout>
    <div class="container mx-auto px-4">
        <x-heading-title>Más populares</x-heading-title>

        <div
            class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <x-card-game-v/>
            <x-card-game-v/>
            <x-card-game-v/>
            <x-card-game-v/>
            <x-card-game-v/>
            <x-card-game-v/>
        </div>

        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <x-heading-title>Últimos reseñados</x-heading-title>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <x-card-game-h/>
                    <x-card-game-h/>
                    <x-card-game-h/>
                    <x-card-game-h/>
                    <x-card-game-h/>
                    <x-card-game-h/>
                </div>
            </div>

            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <x-heading-title>Más esperados</x-heading-title>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <x-most-anticipated/>
                    <x-most-anticipated/>
                    <x-most-anticipated/>
                    <x-most-anticipated/>
                    <x-most-anticipated/>
                    <x-most-anticipated/>
                </div>
            </div>
        </div>
    </div>
</x-layout>
