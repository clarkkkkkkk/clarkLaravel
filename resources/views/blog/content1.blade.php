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
                <p>{{ $itemz['name']}}</p>
                <a href="/blog/{{ $itemz['id'] }}">{{ $itemz['skill'] }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>