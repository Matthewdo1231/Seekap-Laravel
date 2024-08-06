<x-layout>
  <x-navbar/>
  <x-searchbar/>
  @if(!empty($joblistings))
  <x-joblistings :joblistings="$joblistings" :joblistingFullDesc="$joblistingFullDesc"/>
    <div class="mt-6 p-4">
      {{$joblistings->links('vendor.pagination.tailwind')}}
     </div>
   @else
     <div>No listing found</div>
   @endif
</x-layout>

