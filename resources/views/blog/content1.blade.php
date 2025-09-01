{{-- //SLOT --}}
<x-layout>

    <h1>We're here in blog1</h1>

    @if ($notSunday == $notSunday)
        <p> {{ $notSunday }}</p>
    @endif
    {{-- this (@) at symbol use when you use only IF STATEMENT --}}


    <ul>
        @foreach ($blog as $itemz)
            <li>
                <x-card href="/blog/{{ $itemz['id'] }}" :highlight="$itemz['skill'] > 76">
                    <h3>{{ $itemz['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>