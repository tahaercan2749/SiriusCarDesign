@extends("cms.partial.layout")
@section("extraCss")

@endsection
@section("content")
    <div class="dashboard ">
        <div class="card bg-light">
            <div class="card-header">
                <div class="filters">
                    Kullanıcı Sayıları
                    <select name="userCounts" id="kullaniciSayilari" onchange="kullaniciSayilari()">
                        <option value="7">Son 7 Gün</option>
                        <option value="30">Son 1 Ay</option>
                        <option value="60">Son 3 Ay</option>
                        <option value="180">Son 6 Ay</option>
                        <option value="210">Son 9 Ay</option>
                        <option value="365">Son 1 Yıl</option>
                    </select>
                </div>
            </div>
            <div class="card-body">
                <div id="kullaniciSayilariChart" style="width: 100%; min-height: 300px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; padding: 10px 0"></div>
            </div>
        </div>
        <div class="card bg-light">
            <div class="card-header">
                <div class="filters">
                    Kullanıcı Arama ve Mesajları
                    <select name="userCounts" id="kullaniciAramaMesajSayilari" onchange="kullaniciAramaMesajSayilari()">
                        <option value="7">Son 7 Gün</option>
                        <option value="30">Son 1 Ay</option>
                        <option value="60">Son 3 Ay</option>
                        <option value="180">Son 6 Ay</option>
                        <option value="210">Son 9 Ay</option>
                        <option value="365">Son 1 Yıl</option>
                    </select>
                </div>
            </div>
            <div class="card-body">
                <div id="kullaniciAramaveMesajlariChart" style="width: 100%; min-height: 300px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; padding: 10px 0"></div>
            </div>
        </div>
    </div>

@endsection
@section("extraJs")
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        window.ApexCharts = ApexCharts; // global tanım (gerekirse)

        document.addEventListener("DOMContentLoaded", function () {
            kullaniciSayilari(); // Sayfa yüklenince çağır
            kullaniciAramaMesajSayilari();
        });

        function kullaniciSayilari() {
            const userCountsSelect = document.getElementById("kullaniciSayilari");
            let days = userCountsSelect.value;
            let route = '{{ route("cms.visitedUsers") }}';

            axios.post(route, {
                days: days
            }, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
                .then(response => {
                    if (response.data.status === "success") {
                        const data = response.data.visitors;
                        const labels = data.map(item => item.visited_date);
                        const seriesData = data.map(item => parseInt(item.total));

                        // Grafik başında boşluk için
                        labels.unshift("");
                        seriesData.unshift(0);

                        // Önceki grafik varsa yok et
                        if (window.visitorChart) {
                            window.visitorChart.destroy();
                        }

                        const options = {
                            chart: {
                                type: 'line',
                                height: 300,
                                width:'100%',

                                zoom: {
                                    enabled: false
                                }
                            },
                            series: [{
                                name: 'Ziyaretçi Sayısı',
                                data: seriesData
                            }],
                            xaxis: {
                                categories: labels,
                                labels: {
                                    style: {
                                        // colors: '#ffffff', // Tarih etiketlerini beyaz yap
                                        fontSize: '13px'
                                    }
                                }
                            },
                            yaxis: {
                                labels: {
                                    style: {
                                        // colors: '#ffffff',
                                        fontSize: '13px'
                                    },
                                    formatter: val => Number.isInteger(val) ? val : ''
                                }
                            },
                            tooltip: {
                                y: {
                                    formatter: val => parseInt(val)
                                }
                            },
                            title: {
                                text: 'Ziyaretçi İstatistikleri',
                                style: {
                                    // color: '#ffffff' // Grafik başlığı beyaz
                                    fontSize:'12px',
                                    fontWeight: 'regular',

                                }
                            }
                        };

                        window.visitorChart = new ApexCharts(document.querySelector("#kullaniciSayilariChart"), options);
                        window.visitorChart.render();
                    } else {
                        notyf.error("Veri alınamadı.");
                    }
                })
                .catch(error => {
                    notyf.error("Bir hata oluştu.");
                });
        }

        let userCallsChart = null;

        function kullaniciAramaMesajSayilari() {
            const userCountsSelect = document.getElementById("kullaniciAramaMesajSayilari");
            let days = userCountsSelect.value;
            let route = '{{ route("cms.visitedUsersCalls") }}';

            axios.post(route, {
                days: days
            }, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
                .then(response => {
                    if(response.data.status === 'success') {
                        // Veriyi işle ve grafiği çiz
                        renderUserCallsChart(response.data.calls);
                    } else {
                        notyf.error(response.data.message);
                    }
                })
                .catch(error => {
                    notyf.error("Bir hata oluştu.");
                    console.error(error);
                });
        }


        function renderUserCallsChart(apiData) {
            // Veriyi ApexCharts formatına dönüştür
            const result = prepareChartData(apiData);

            // Grafik seçenekleri
            const options = {
                series: result.series,
                chart: {
                    type: 'bar',
                    height: 350,
                    stacked: true, // İsteğe bağlı: gruplanmış veya yığılmış sütunlar
                    toolbar: {
                        show: true
                    },
                    zoom: {
                        enabled: true
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '70%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: result.categories,
                    labels: {
                        formatter: function(value) {
                            return new Date(value).toLocaleDateString('tr-TR');
                        }
                    }
                },
                yaxis: {
                    title: {
                        text: 'Adet'
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val + " adet"
                        }
                    }
                },
                colors: ['#3a57e8', '#85F4FA', '#08d9d6'], // Özel renk paleti
                legend: {
                    position: 'top'
                }
            };

            // Grafik container'ı
            const chartElement = document.querySelector("#kullaniciAramaveMesajlariChart");

            // Eğer grafik zaten varsa güncelle, yoksa yenisini oluştur
            if (userCallsChart) {
                userCallsChart.updateOptions(options);
            } else {
                userCallsChart = new ApexCharts(chartElement, options);
                userCallsChart.render();
            }
        }

        // API verisini ApexCharts formatına dönüştürme fonksiyonu
        function prepareChartData(apiData) {
            // Tüm benzersiz tip'leri bul
            const types = [...new Set(
                Object.values(apiData).flatMap(dateData =>
                    dateData.map(item => item.type)
                )
            )];

            // Kategoriler (tarihler)
            const categories = Object.keys(apiData).sort();

            // Seri verilerini oluştur
            const series = types.map(type => {
                return {
                    name: type === 'phone' ? 'Telefon' :
                        type === 'message' ? 'Mesaj' :
                            type.charAt(0).toUpperCase() + type.slice(1), // Türkçe etiketler
                    data: categories.map(date => {
                        const dateData = apiData[date].find(item => item.type === type);
                        return dateData ? dateData.total : 0;
                    })
                };
            });

            return { categories, series };
        }

    </script>

@endsection
