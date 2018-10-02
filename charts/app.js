$(document).ready(function(){
	$.ajax({
		url: "http://localhost/charts/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var year = [];
			var achievements = [];

			for(var i in data) {
				year.push("Year " + data[i].year);
				achievements.push(data[i].achievements);
			}

			var chartdata = {
				labels: year,
				datasets : [
					{
						label: 'year',
						backgroundColor: ' #55a3cc ',
						borderColor: 'black',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: achievements
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
