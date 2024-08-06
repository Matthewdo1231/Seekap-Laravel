<x-layout>
  <x-navbar/>
  <x-searchbar/>
  <x-joblistings :joblistings="$joblistings" :joblistingFullDesc="$joblistingFullDesc"/>
  <div class="mt-6 p-4">
    {{ ((!empty(request('search'))) ||(!empty(request('page')))) ? $joblistings->links('vendor.pagination.tailwind') : null}}
   </div>
</x-layout>

