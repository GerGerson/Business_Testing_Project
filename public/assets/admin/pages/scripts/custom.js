/**
Custom module for you to write your own javascript functions
**/
var Custom = function () {

    // private functions & variables

    var myFunc = function(text) {
        alert(text);
    }
	
	function showTooltip(x, y, contents) {
		$('<div id="tooltip">' + contents + '</div>').css({
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 15,
				border: '1px solid #333',
				padding: '4px',
				color: '#fff',
				'border-radius': '3px',
				'background-color': '#333',
				opacity: 0.80
			}).appendTo("body").fadeIn(200);
	}

    // public functions
    return {

        //main function
        chart: function (gas_value) {
             if ($('#site_activities').size() != 0) {
                //site activities
                var previousPoint2 = null;
                $('#site_activities_loading').hide();
                $('#site_activities_content').show();


				data1 = gas_value;
				/*
				data1= [
					['位置#1讀數', 10],
					['位置#2讀數', 9],
					['位置#3讀數', 7],
					['位置#4讀數', 8],
					['位置#5讀數', 5],
					['位置#6讀數', 1]
				];
				*/
				data2 = [
					['標準', 2]
				];
				
				var data = [
					{
						label: "Read Value",
						data: data1,
						bars: {
							show: true,
							barWidth: 0.8,
							fill: true,
							order: 1,
							align: 'left'
						},
						color: ['#BAD9F5']
					},
					{
						label: "Standard",
						data: data2,
						bars: {
							show: true,
							barWidth: 0.8,
							fill: true,
							order: 2,
							align: 'left'
						},
						color: ['#baf5d6']
					}
				];
                        
                var plot_statistics = $.plot($("#site_activities"), data,{
						xaxis: {
							min: 0,
							max: 7,
                            tickLength: 0,
							tickSize: 1,
                            tickDecimals: 5,
                            mode: "categories",
							axisLabelPadding: 5,
                            font: {
                                lineHeight: 18,
                                style: "normal",
                                variant: "small-caps",
                                color: "#6F7B8A"
                            }
                        },
                        yaxis: {
                            ticks: 5,
                            tickDecimals: 0,
                            tickColor: "#eee",
                            font: {
                                lineHeight: 14,
                                style: "normal",
                                variant: "small-caps",
                                color: "#6F7B8A",
                            }
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#eee",
                            borderColor: "#eee",
                            borderWidth: 1
                        },
						series: {
							shadowSize: 1
						},
						legend: {
							show: true
						}
                    });
					
				
                $("#site_activities").bind("plothover", function (event, pos, item) {
                    $("#x").text(pos.x.toFixed(2));
                    $("#y").text(pos.y.toFixed(2));
                    if (item) {
                        if (previousPoint2 != item.dataIndex) {
                            previousPoint2 = item.dataIndex;
                            $("#tooltip").remove();
                            var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);
                            showTooltip(item.pageX, item.pageY, y);
                        }
                    }
                });

                $('#site_activities').bind("mouseleave", function () {
                    $("#tooltip").remove();
                });
				
				
      
            }       
        }

    };

}();

/***
Usage
***/
//Custom.init();
//Custom.doSomeStuff();