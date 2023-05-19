<script type="text/javascript">
$(function(){
    my_chart_vacination_status();
    my_chart_voters_status();
});

const my_chart_vacination_status =()=>{
        $.ajax({
            url:'../../process/admin/processor.php',
            type:'POST',
            data:{
                method: 'vacination_status'
            },success:function(data){
            $('#vacination_status').html(data);

            var vaccinated = [];
            $('.vaccinated').each(function(){
                vaccinated.push($(this).html());
            });

            var not_vaccinated = [];
            $('.not_vaccinated').each(function(){
                not_vaccinated.push($(this).html());
            });
            chart_vacination_status(vaccinated,not_vaccinated);
            }
        });
}

const chart_vacination_status =(vaccinated,not_vaccinated)=>{
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
            labels: ['Vaccinated','Not Vaccinated'],
            datasets: [{
            label: 'total count',
            data: [vaccinated,not_vaccinated],
            backgroundColor: [
                'rgb(0, 99, 71)',
                'rgb(0, 55, 71)',
                'rgb(255, 205, 86)'
            ],
            borderColor: [
                'rgb(0, 99, 71)',
                'rgb(0, 55, 71)',
                'rgb(255, 205, 86)'
            ],
            borderWidth: 1
            }],
            hoverOffset: 4
        }
    });
}

const my_chart_voters_status =()=>{
        $.ajax({
            url:'../../process/admin/processor.php',
            type:'POST',
            data:{
                method: 'voters_status'
            },success:function(data){
            $('#voters_status').html(data);

            var registered_voter = [];
            $('.registered_voter').each(function(){
                registered_voter.push($(this).html());
            });

            var not_registered_voter = [];
            $('.not_registered_voter').each(function(){
                not_registered_voter.push($(this).html());
            });
            chart_voters_status(registered_voter,not_registered_voter);
            }
        });
}

const chart_voters_status =(registered_voter,not_registered_voter)=>{
            var ctx = document.getElementById('myChart2');
            var myChart = new Chart(ctx, {
                // type: 'bar',
                data: {
                    labels: registered_voter,
                    datasets: [{
                        type: 'bar',
                        label: 'Registered Voters',
                        data: registered_voter,
                        backgroundColor: [
                            'rgb(112, 128, 144)',
                            'rgb(0, 55, 71)',
                            'rgb(255, 205, 86)'
                        ],
                        borderWidth: 1
                    },
                    {
                    type: 'bar',
                    label: 'Not Registered Voters',
                        data: not_registered_voter,
                        backgroundColor: [
                            'rgb(19, 127, 182)',
                            'rgb(0, 55, 71)',
                            'rgb(255, 205, 86)'
                        ],
                        borderColor: [
                            'rgb(255, 205, 86)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    indexAxis: 'x' //180 degrees data
                }
            });
        }
</script>