
@if (!empty($data))
                <h4>Select question types<h4>
                @foreach($data['links'] as $link)
                <ul>
                <li onclick="window.location='{{ route("addForm",['name' => $link['value']]) }}'">Add{{$link['value']}}</li>
                </ul>
                @endforeach
@endif