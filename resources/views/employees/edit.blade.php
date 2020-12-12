@extends('dashboard2') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update an Employee</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('employees.update', $employee->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="emp_name">Employee Name:</label>
                <input type="text" class="form-control" name="emp_name" value={{ $employee->emp_name }} />
            </div> 
            <div class="form-group">
                <label for="emp_role">Employee Role:</label>
                <input type="text" class="form-control" name="emp_role" value={{ $employee->emp_role }} />
            </div> 
            <div class="form-group">
                <label for="badge_no">Badge No:</label>
                <input type="text" class="form-control" name="badge_no" value={{ $employee->badge_no }} />
            </div>            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection