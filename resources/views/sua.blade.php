<h1>Update</h1>

@if(count($errors) > 0)

	@foreach($errors->all() as $err)
		{{$err}}<br>
	@endforeach

@endif


<form action="{{-- sua/{{$user->id}} --}}" method="POST">
	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
	<table>
		<tr>
			<td>Username :</td>
			<td><input type="text" name="txt_username" value="{{$user->username}}">
				
			</td>

		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" name="txt_email" value="{{$user->email}}">
				
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" name="txt_address" value="{{$user->address}}"></td>
		</tr>
		<tr>
				<td></td>
				<td><input type="submit" name="btn_update" value="update"></td>
		</tr>
	</table>
</form>