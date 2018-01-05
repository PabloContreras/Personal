@extends('tweet.create')

@section('deleteId',$item->id)

@section('deleteBody',$item->body)

@section('deleteMethod')
  {{method_field('DELETE')}}
@endsection