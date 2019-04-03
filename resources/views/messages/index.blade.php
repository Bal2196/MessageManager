@extends('messages/layout')

@section('content')
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
  </tr>
  @foreach ($messages as $message)
  <tr>
    <td>{{ $message->name }}</td>
    <td>{{ $message->email }}</td>
    <td>{{ $message->message }}</td>
    <td>
      <form method="post" action="/{{ $message->id }}">
        @method('delete')
        @csrf
        <input type="submit" value="Delete">
      </form>
  </td>
  </tr>
  @endforeach
</table>
@endsection