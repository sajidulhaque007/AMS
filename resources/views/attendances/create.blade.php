@extends('dashboard2')
@section('main')
<div class="row">
 <div class="w-full max-w-xs">
    <h1 class="display-3">Add a Department</h1>
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