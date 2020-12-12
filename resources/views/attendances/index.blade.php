@extends('dashboard2')
@section('attendance')
active-nav-link
@endsection
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="text-5xl font-normal leading-normal mt-0 mb-2 text-blue-800">All Attendance</h1>    
  <table class="table-fixed">
    <thead class="bg-gray-700 text-gray-200 border border-b-0">
        <tr>
          <td class="w-1/2 px-4 py-2">ID</td>
          <td class="w-1/2 px-4 py-2">Checkin Time</td>
          <td class="w-1/2 px-4 py-2">Checkout Time</td>          
          <td class="w-1/2 px-4 py-2" colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($attendances as $attendance)
        <tr>
            <td class="w-1/2 px-4 py-2">{{$attendance->id}}</td>
            <td class="w-1/2 px-4 py-2">{{$attendance->checkin_time}}</td>
            <td class="w-1/2 px-4 py-2">{{$attendance->checkout_time}}</td>
                                 
            <td>
                <a href="{{ route('departments.edit',$department->id)}}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold 
                  py-2 px-4 border border-gray-400 rounded shadow">Edit</a>
            </td>
            <td>
                <form action="{{ route('departments.destroy', $department->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white 
                  py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">Delete</button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{ route('departments.create')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 
    font-semibold hover:text-white py-2 px-4 border-blue-500 hover:border-transparent rounded">New Attendance</a>
    </div>
<div>
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
</div>
@endsection