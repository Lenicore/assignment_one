<h1>Airplanes Information ({role})</h1>
<table>
	<tr>
		<th>VehicleID</th>
		<th>Model</th>
		<th>Seats</th>
		<th>Reach</th>
		<th>Cruise</th>
		<th>Takeoff</th>
		<th>Hourly</th>
	</tr>
    {vehicles}

		<tr>
			<td><a href="/fleet/show/{key}">{vehicleID}</a></td>
			<td>{model}</td>
			<td>{seats}</td>
			<td>{reach}</td>
			<td>{cruise}</td>
			<td>{takeoff}</td>
			<td>{hourly}</td>
		</tr>

    {/vehicles}
</table>