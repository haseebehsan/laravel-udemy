@extends('layouts.master')

@section('content')
<div class="centered">
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <ul>
        @for($i = 0; $i < 5 ; $i++)
        
            @if($i % 2 == 0)  
            <li></li>Iteration {{ $i+1 }}</li>
            @endif
        
        @endfor
    </ul>
    
    <form action="{{ route('benice') }}" method="post">
        
        
        <input type="text" name="name"/>
        <button type="submit">Submit</button>
        <input type="hidden" value="{{ Session::token() }}" name="_token">
    </form>
</div>
@endsection