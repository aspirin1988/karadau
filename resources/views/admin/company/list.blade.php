@extends('admin.layouts.app')

@section('title')
    Karada - Company list
@endsection

@section('content')
    @php $user_type = Auth::user()->type; @endphp
    <company_list-component :user_type="'{{$user_type}}'" :current_page="0"></company_list-component>
@endsection
