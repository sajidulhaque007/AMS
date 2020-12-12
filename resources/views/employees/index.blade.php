@extends('dashboard2')
@section('employee')
active-nav-link
@endsection
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="text-5xl font-normal leading-normal mt-0 mb-2 text-blue-800">All Employee</h1>    
  <table class="table-fixed">
    <thead>
        <tr class="bg-gray-700 text-gray-200 border border-b-0">
          <td  class="w-1/2 px-4 py-2" >ID</td>
          <td  class="w-1/2 px-4 py-2" >Name</td>
          <td  class="w-1/2 px-4 py-2" >Role</td> 
          <td  class="w-1/2 px-4 py-2" >Badge</td>         
          <td class="w-1/2 px-4 py-3" colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr class="w-full font-light text-black-700 bg-gray-100 whitespace-no-wrap border border-b-0">
            <td  class="w-1/2 px-4 py-2" >{{$employee->id}}</td>
            <td  class="w-1/2 px-4 py-2" >{{$employee->emp_name}}</td>
            <td  class="w-1/2 px-4 py-2" >{{$employee->emp_role}}</td>
            <td  class="w-1/2 px-4 py-2" >{{$employee->badge_no}}</td>
                               
            <td>
                <a href="{{ route('employees.edit',$employee->id)}}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold 
                  py-2 px-4 border border-gray-400 rounded shadow">Edit</a>
            </td>
            <td>
                <form action="{{ route('employees.destroy', $employee->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button onclick="return confirm('Are you sure you want to Delete?');" 
                  id="btnDelete" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white 
                  py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">Delete</button>
                  
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
  </table>
  <div>
    <a  href="{{ route('employees.create')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 
    font-semibold hover:text-white py-2 px-4 border-blue-500 hover:border-transparent rounded">New Employee</a>
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