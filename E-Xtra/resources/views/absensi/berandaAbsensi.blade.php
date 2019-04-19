<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>

</head>

	@if(session('success'))
	<div class="alert alert-success">
		{{ session('success') }}
	</div>
	@endif
	@if(session('error'))
	<div class="alert alert-error">
		{{ session('error') }}
	</div>
	@endif

	@php
		use Carbon\Carbon;

		$today = Carbon::today();
	@endphp




</body>
</html>
