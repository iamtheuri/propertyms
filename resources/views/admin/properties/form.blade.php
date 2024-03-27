@extends('twill::layouts.form')

@section('contentFields')

@formField('input', [
'name' => 'name',
'label' => 'Name',
'note' => 'First name and last name',
'maxlength' => 30,
])
@formField('input', [
'name' => 'owner',
'label' => 'Property Owner',
'note' => 'First name and last name',
'maxlength' => 30,
])
@formField('input', [
'name' => 'units',
'label' => 'Number of Units',
])
@formField('wysiwyg', [
'name' => 'description',
'label' => 'Property Description',
'clean', 'bold', 'link', 'italic', 'list-ordered' 'list-unordered',
['indent'=>'-1'], ['indent' => '+1'],
'editSource' => true,
])
@formField('input', [
'name' => 'location',
'label' => 'Property Location',
'note' => 'City, Town',
'maxlength' => 30,
])
@formField('input', [
'name' => 'till',
'label' => 'Rent Till Number',
'maxlength' => 10,
])
@formField('tags', [
'label' => 'Tags',
])


@stop