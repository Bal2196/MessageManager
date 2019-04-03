@extends('messages/layout')

@section('content')
<table>
  <form method="post" action="/">
    @csrf
  <tr>
    <td><input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required></td>
    <td><input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required></td>
  </tr>
  <tr>
    <td><textarea name="message" placeholder="What would you like to say..." required>{{ old('message') }}</textarea></td>
    <td><input type="submit" value="Send"></td>
  </tr>
  </form>
</table>

@if ($errors->any())
<ul>
  @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
</ul>
@endif
@endsection