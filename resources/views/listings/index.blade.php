<x-layout>
@include('partial._hero')
@include('partial._search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@if (count($listings) == 0)
<p>  No listing is found</p>
</div>
@endif 
@foreach($listings as $listing)
<!-- Item 1 -->
<x-listing-card :listing="$listing"/>
@endforeach


</div>
</x-layout>
