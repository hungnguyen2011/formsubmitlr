<h1>List User</h1>

<h3><a href="{{route('add')}}">Add</a></h3>
	<table border="1px" cellspacing="0" cellpadding="10">
		<tr>
			<th>Stt</th>
			<th>Username</th>
			<th>Email</th>
			<th>Address</th>
			<th>...</th>
		</tr>
		@foreach($user as $us)
		<tr>
			<td>{{$us->id}}</td>
			<td>{{$us->username}}</td>
			<td>{{$us->email}}</td>
			<td>{{$us->address}}</td>
			<td><a href="{{route('Update', $us->id)}}">Update</a> / <a href="{{route('Delete',$us->id)}}">Delete</a></td>
		</tr>
		@endforeach()
	</table>


