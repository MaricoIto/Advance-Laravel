@extends('layouts.default')
<style>
    th {
        background-color: #289adc;
        color: white;
        padding: 5px 40px;
    }

    tr:nth-child(odd) td {
        background-color: #FFFFFF;
    }

    td {
        padding: 25px 40px;
        background-color: #EEEEEE;
        text-align: center;
    }

    button {
        padding: 10px 20px;
        background-color: #289adc;
        border: none;
        color: white;
    }
</style>
@section('title', 'edit.blade.php')

@section('content')
@if (count($errors) > 0)
<p>入力に問題があります</p>
@endif
<form action="/edit" method="post">
    <table>
        @csrf
        <tr>
            <th>id</th>
            <td><input type="text" name="id" value="{{$form->id}}"></td>
        </tr>
        @error('name')
        <tr>
            <th style="background-color: red;">ERROR</th>
            <td>{{$errors->first('name')}}</td>
        </tr>
        @enderror
        <tr>
            <th>name</th>
            <td><input type="text" name="name" value="{{$form->name}}"></td>
        </tr>
        @error('age')
        <tr>
            <th style="background-color: red;">ERROR</th>
            <td>{{$errors->first('age')}}</td>
        </tr>
        @enderror
        <tr>
            <th>age</th>
            <td><input type="text" name="age" value="{{$form->age}}"></td>
        </tr>
        @error('nationality')
        <tr>
            <th style="background-color: red;">ERROR</th>
            <td>{{$errors->first('nationality')}}</td>
        </tr>
        @enderror
        <tr>
            <th>nationality</th>
            <td><input type="text" name="nationality" value="{{$form->nationality}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><button>送信</button></td>
        </tr>
    </table>
</form>
@endsection