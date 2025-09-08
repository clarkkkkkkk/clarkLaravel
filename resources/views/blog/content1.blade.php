<x-layout>
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