let chart = document.getElementById('result_chart').getContext('2d');
let labels = ['النجاح','الفشل'];
let colorHex =['#2b56ba','#2e2c2eaf']

let res_chart = new Chart(chart,{
	type: 'pie',
	data: {
		datasets:[{
			data: [70,30],
			backgroundColor: colorHex 
		}],
		labels: labels
	},
	options: {
		responsive: true,
		legend: {
			position: 'bottom'
		},
		plugins:{
			datalabels: {
				color: '#fff',
				font: {
					weight: 'bold',
					size: '18'
				},
				formatter:(value) =>{
					return value + ' %'
				}
			}

		}
	}
})