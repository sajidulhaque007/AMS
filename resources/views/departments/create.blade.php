@extends('dashboard2')
@section('main')
<div class="row">
 <div class="w-full max-w-xs">
    <h1 class="text-3xl font-normal leading-normal mt-0 mb-2 text-blue-800"">Add a Department</h1>
    <nav class="text-black font-bold my-8" aria-label="Breadcrumb">
      <ol class="list-none p-0 inline-flex">
        <li class="flex items-center">
        <li class="flex items-center">
          <a href="{{ url('/departments') }}">Departments</a>
          <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
        </li>
        <li>
          <a href="{{ url('/departments/create') }}" class="text-gray-500" aria-current="page">Create</a>
        </li>
      </ol>
    </nav>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"  method="post" action="{{ route('departments.store') }}">
          @csrf
          <div class="mb-4" class="form-group" class="flex items-center border-b border-teal-500 py-2">    
              <label class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" for="dept_name">Department Name:</label>
              <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="dept_name" />
          </div>                               
          <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 
    font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Add department</button>
      </form>
  </div>
</div>
</div>
@endsection