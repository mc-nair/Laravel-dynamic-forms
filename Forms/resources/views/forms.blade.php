@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} 
                </div>
               
                
                @if (!empty($data))
                @foreach($data['links'] as $link)
                <ul>
                <li onclick="window.location='{{ route("addForm",['name' => $link['value']]) }}'">Add{{$link['value']}}</li>
                </ul>
                @endforeach
                @endif
               
                <form  action="{{ route('submit') }}" method="POST">
                @csrf
                <label>FormName</label>
                <input type="text" name="formName">
                @if (isset($data['builder']))
                @foreach($data['builder'] as $builder)
                <label>{{$builder['label']}} : <label>
                <input type="hidden" name="labelvalue" value="{{$builder['label']}}">
                @if ($builder['name'] !='select')
                <input type="{{$builder['name']}}" name="builderTextName">
                @endif
                @if ($builder['name']=='select')
                <select name="gender">
                <option value="m">male</option>
                <option value="f">female</option>
                <option value="o">other</option>
                <select>
                @endif
                @endforeach
                <input type="submit" class="btn btn-success" value="save">
                </form>
                
                <input type="submit" onclick="window.location='{{ route("removeform") }}'" class="btn btn-primary" value="remove">
                @endif
                
                
               
            </div>
        </div>
    </div>
</div>
@endsection
