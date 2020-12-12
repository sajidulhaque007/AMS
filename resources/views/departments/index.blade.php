@extends('dashboard2')
@section('department')
active-nav-link
@endsection
@section('main')
<div class="row"> 
<div class="col-sm-12">
    <h1 class="text-5xl font-normal leading-normal mt-0 mb-2 text-blue-800">All Departments</h1> 
    {{-- <nav class="text-black font-bold my-8" aria-label="Breadcrumb">
      <ol class="list-none p-0 inline-flex">
        <li class="flex items-center">
          <a href="{{ url('/dashboard') }}">Home</a>
          <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
        </li>
        <li>
          <a href="{{ url('/departments') }}" class="text-gray-500" aria-current="page">Departments</a>
        </li>
      </ol>
    </nav>      --}}
  <table class="table-fixed">
    <thead>
        <tr class="bg-gray-700 text-gray-200 border border-b-0">
          <td class="w-1/2 px-4 py-3">Dept_ID</td>
          <td class="w-1/2 px-4 py-3">Name</td>          
          <td class="w-1/2 px-4 py-3" colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($departments as $department)
        <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
            <td class="w-1/2 px-4 py-2">{{$department->id}}</td>
            <td class="w-1/2 px-4 py-2">{{$department->dept_name}}</td>                     
            <td>
                <a href="{{ route('departments.edit',$department->id)}}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold 
                  py-2 px-4 border border-gray-400 rounded shadow">Edit</a>
            </td>
            <td>
                <form action="{{ route('departments.destroy', $department->id)}}" method="post">
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
    <a  href="{{ route('departments.create')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 
    font-semibold hover:text-white py-2 px-4 border-blue-500 hover:border-transparent rounded">New Department</a>
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