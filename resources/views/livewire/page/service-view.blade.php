<div class="max-w-5xl mx-auto px-6 py-12">
    <h1 class="text-4xl md:text-5xl font-extrabold text-orange-400 uppercase tracking-wide">{{ $title }}</h1>
    <div class="w-24 border-t-2 border-dotted border-gray-300 mt-4 mb-6"></div>

    <p class="text-gray-700 mb-6">{{ $description }}</p>

    @if(!empty($service) && !empty($service->service_details))
        <ul class="list-disc pl-6 space-y-3 text-gray-700">
            @foreach($service->service_details as $point)
                <li>{{ $point }}</li>
            @endforeach
        </ul>
    @else
        <div class="text-gray-600">No detailed points available for this service.</div>
    @endif
</div>

