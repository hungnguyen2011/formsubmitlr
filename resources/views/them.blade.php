<h1>Form submit</h1>

@if(count($errors) > 0)

	@foreach($errors->all() as $err)
		{{$err}}<br>
	@endforeach

@endif


<form action="them" method="POST">
	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
	<table>
		<tr>
			<td>Username :</td>
			<td><input type="text" name="txt_username">
				
			</td>

		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" name="txt_email">
				
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" name="txt_address"></td>
		</tr>
		<tr>
				<td></td>
				<td><input type="submit" name="btn_add" value="Submit"></td>
		</tr>
	</table>
</form>