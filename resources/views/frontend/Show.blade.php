
@extends('admin.layout')
    @section('content')
    <div class="container">
        {{-- <button class="btn btn-dark"><a href="{{route('new')}}">Add Todo</a></button> --}}


        <table class="table">
            <thead>
              <tr>
                <th scope="col">Sn</th>
                <th scope="col">Todo</th>
        
     
              </tr>
            </thead>
            <tbody>
                @foreach ($todo as $t)
              <tr>
                
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$t->todo}}</td>
               </tr>
               @endforeach
            </tbody>
          </table>
    
    </div>
    

    @endsection