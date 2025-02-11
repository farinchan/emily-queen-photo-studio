@extends('back.app')
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid ">
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
                <div class="col-xl-12">
                    <div class="card card-flush h-lg-100">
                        <div class="card-header pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Statistik Pengunjung berita sebulan terakhir</span>
                            </h3>
                        </div>
                        <div class="card-body pt-0 px-0">
                            {{-- INI TEMPAT STAT NYA --}}
                            <div id="chart_1" class="px-5"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
                <div class="col-xl-6">
                    <div class="card card-flush h-lg-100">
                        <div class="card-header pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Statistik Pengunjung Berdasarkan Platform OS</span>
                            </h3>
                        </div>
                        <div class="card-body pt-0 px-0">
                            {{-- INI TEMPAT STAT NYA --}}
                            <div id="chart_2" class="px-5"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card card-flush h-lg-100">
                        <div class="card-header pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Statistik Pengunjung Berdasarkan Browser</span>
                            </h3>
                        </div>
                        <div class="card-body pt-0 px-0">
                            {{-- INI TEMPAT STAT NYA --}}
                            <div id="chart_3" class="px-5"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('scripts')
    <script>
        var chart_1 = new ApexCharts(document.querySelector("#chart_1"), {

            series: [{
                name: 'Pengunjung',
                data: [10]
            }],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: true
            },
            stroke: {
                curve: 'straight'
            },
            title: {
                text: 'Pengunjung',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'],
                    opacity: 0.5
                },
            },
            xaxis: {
                categories: ['x'],
            }
        });
        chart_1.render();



        var chart_2 = new ApexCharts(document.querySelector("#chart_2"), {
            series: [{
                data: []
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    borderRadiusApplication: 'end',
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: true
            },
            xaxis: {
                categories: [],
            },
            legend: {
				show: true,
			}
        });
        chart_2.render();

        var chart_3 = new ApexCharts(document.querySelector("#chart_3"), {
            series: [{
                data: []
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    borderRadiusApplication: 'end',
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: true
            },
            xaxis: {
                categories: [],
            },
            legend: {
				show: true,
			}
        });
        chart_3.render();

        $.ajax({
            url: "{{ route('back.visitor.stat') }}",
            type: "GET",
            success: function(response) {
                console.log(response);

                chart_1.updateSeries([{
                    data: response.visitor_monthly.map(function(item) {
                        return item.total;
                    }).reverse()
                }]);
                chart_1.updateOptions({
                    xaxis: {
                        categories: response.visitor_monthly.map(function(item) {
                            return item.date;
                        }).reverse()
                    }
                });

                chart_2.updateOptions({
                    xaxis: {
                        categories: response.visitor_platfrom.map(function(item) {
                            if (item.platform == '0') {
                                return 'Unknown';
                            } else{
                                return item.platform;
                            }
                        })
                    },
                    series: [{
                        name: 'Jumlah',
                        data: response.visitor_platfrom.map(function(item) {
                            return item.total;
                        })
                    }]
                });

                chart_3.updateOptions({
                    xaxis: {
                        categories: response.visitor_browser.map(function(item) {
                            if (item.browser == '0') {
                                return 'Unknown';
                            } else{
                                return item.browser;
                            }
                        })
                    },
                    series: [{
                        name: 'Jumlah',
                        data: response.visitor_browser.map(function(item) {
                            return item.total;
                        })
                    }]
                });
            }
        });
    </script>
@endsection
