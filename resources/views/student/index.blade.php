@extends('layouts.app')

@section('content')
    <h1>CRUD Example</h1>

    @if (session('status'))
        <div class="alert  alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
   

    <a class="btn btn-success float-end mb-2" type="button" href="{{ route('screate') }}"><i class="fa fa-plus"></i> Create
        Student</a>

    <table class="table table-bordered">
        <tr>
            <th>{{ 'id' }} </th>
            <th>{{ 'nom' }} </th>
            <th>{{ 'email' }} </th>
            <th>{{ 'year' }} </th>
            <th>{{ 'password' }} </th>
            <th>{{ 'action' }} </th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td> {{ $student->id }} </td>
                <td> {{ $student->name }} </td>
                <td> {{ $student->email }} </td>
                <td> {{ $student->year }} </td>
                <td> {{ $student->password }} </td>
                <td>
                    <a href="{{ route('supdate', ['id' => $student->id]) }}">
                        <i class="fa-solid fa-pen" style="color: #8080ff;margin-right:10px"></i>
                    </a>
                    <a href="{{ route('sdelete', ['id' => $student->id]) }}">
                        <i class="fa-solid fa-trash" style="color: #ff0000;"></i>
                    </a>
                </td>
            </tr>mùù
        @endforeach
    </table>
    {{ $students->links() }}
@endsection
