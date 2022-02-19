@extends('layouts.main')
@section('pageCss')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection
@section('content')
<div>
    <table border="1" id="DynamicAddRowCols">
        <thead>
            <tr>
                <td>Checklist</td>
                <td>Name</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><input type="checkbox"></td>
            </tr>
        </tbody>
    </table>
    <input id="row" /><br />
    <button id="AddRows">Insert Row</button><br /><br />
    <input id="col" /><br />
    <button id="AddCol">Insert Row</button>
</div>
@endsection