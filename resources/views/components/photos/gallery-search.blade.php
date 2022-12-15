<div x-data="{ open: false }">
    <div class="flex flex-wrap justify-center p-1 md:justify-end">
        <div class="relative w-96 mb-2">
            <div class="absolute flex items-center ml-2 h-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-5 h-5 text-gray-500">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </div>

            <x-text-input type="text" placeholder="Rechercher par titre ou légende"
                wire:model="searchTerm" class="px-8 py-3 w-full text-sm text-gray-500 xs:rounded-r-none xs:rounded-l-md" />
        </div>
        <x-secondary-button class="mb-2 focus:ring-offset-0 xs:rounded-r-md xs:rounded-l-none" ::class="{'ring-2': open}" @click="open = ! open">
            <div class="flex space-x-1 justify-between items-center text-gray-500">
                <span>Filtrer</span>
                <span class="text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-5 h-5">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                    </svg>
                </span>
            </div>
        </x-secondary-button>

        <x-select-input wire:model="sortTerm" class="mb-2 ml-2 text-gray-500">
            <option value="created_desc">Date (décroissant)</option>
            <option value="created_asc">Date (croissant)</option>
            <option value="title_desc">Titre (décroissant)</option>
            <option value="title_asc">Titre (croissant)</option>
            <option value="most_comments">Commentaires</option>
        </x-select-input>
    </div>
    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95" class="mb-2">
        <x-photos.gallery-search-filters />
    </div>
</div>
