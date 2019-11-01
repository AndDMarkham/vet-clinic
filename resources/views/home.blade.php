@extends('layout')

@section('content')


    <h1>List of People</h1>

    @foreach($person as $person)
        <div> 
            <h3>
                {{$person->first_name}} {{$person->surname}}
            </h3>
            <div>
                <p>
                    {{$person->address}}
                </p>
                <p>
                    {{$person->phone}}
                </p>
                <p>
                    {{$person->email}}
                </p>
            </div>
            <div>
                @foreach($person->pets as $pet)
                    <div>
                        <h4>
                            {{$pet->name}}
                        </h4>
                        <img src="{{$pet->photo->file_path}}" alt="">
                        <p>
                            {{$pet->breed}}
                        </p>
                        <p>
                            {{$pet->weight}}
                        </p>
                        <p>
                            {{$pet->age}}
                        </p>
                    </div>
                  @endforeach  
            </div>
        </div>
    @endforeach
        




@endsection