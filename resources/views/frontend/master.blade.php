<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DI_BEAUTY</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
    
    <!-- HEADER -->
    <input type="checkbox" name="" id="toggle">
    <div class="header">
        <div id="store">DI_BEAUTY</div>
        <div class="cen">
            <div><a href="index.html" id="home">Home</a></div>
            <div><a href="products.html" id="products">Products</a></div>
            <div><a href="index.html#map" id="about_us">About us</a></div> 
            <div><a href="login.html" id="login">Log In</a></div>
        </div>
        <div class="nav">
            <label for="toggle">&#9776;</label>
        </div>
    </div>
    
    <!-- HOME PAGE -->
    <section>
        <div class="main">
            <div class="text">
                <h1 id="text1">"DI_BEAUTY"</h1>
                <h2 id="text3">korean skin care cosmetics store</h2>
                <p id="text2">More than 30 Brands in Stock! Convenient payment. Low price. Advice on Selection. 24/7 support service. Guarantee of freshness. Organic food. Free and fast delivery.</p>
            </div>
        </div>
    </section>


   
    <div class="diagrams" style="background-color: white">

        <div style="width:700px; height:400px;">
            <canvas id="myChart" width="400" height="200"></canvas>
            <script type="text/javascript">
            var ctx=document.getElementById("myChart");
            var myChart = new Chart(ctx,{
            type:'bar',
            data :{
                labels: ["2017","2018","2019","2020"],
                datasets: [
                {label:'Revenue from sales',
                data:[40,50,65,90],
                backgroundColor:['rgba(255,129,102,1)',
                'rgba(234,162,235,1)',
                'rgba(255,206,36,1)',
                'rgba(75,192,192,1)'], }
                ]
            },
            options:{
                scales:{
                yAxes:[{
                    ticks:{
                    beginAtZero:true
                    }
                }]
                }
            }
            });
            </script>
        </div>

        <div style="margin-top:-400px; margin-left:750px; width:700px; height:350px;">
        <canvas id="myChart1" width="400" height="200"></canvas>
        <script type="text/javascript">
            var ctx=document.getElementById("myChart1");
            var myChart1 = new Chart(ctx,{
            type:'pie',
            data : {
                labels: ["Dr.Jart+","Lador","Medi-Peel", "The History of Whoo"],
                datasets: [
                {label:'Best-selling products',
                data:[25,20,35,20],
                backgroundColor:['rgba(255,129,102,1)', 'rgba(234,162,235,1)', 'rgba(255,206,36,1)', 'rgba(75,192,192,1)'], }
                ]
            },
            options:{
                scales:{
                yAxes:[{
                    ticks:{
                    beginAtZero:true
                    }
                }]
            }
        }
     });
        </script>
        </div>


        <div style="margin-left:400px; width:700px; height:400px;">
        <canvas id="polar-chart" width="800" height="450"></canvas>
        <script>
            new Chart(document.getElementById("polar-chart"), {
                type: 'polarArea',
                data: {
                labels: ["Almaty", "Nur-Sultan", "Shymkent", "Aktobe", "Taraz"],
                datasets: [
                    {
                    label: "Revenue of our branches per year",
                    backgroundColor: ['rgba(234,162,235,1)', 'rgba(255,206,36,1)','rgba(75,192,192,1)',"#FDB5DE","#9AD4F3"],
                    data: [10,30,20,15,25,]
                    }
                    ]
                },
                options: {
                title: {
                display: true,
                text: 'Revenue of our branches per year'
                }
                }
            });
        </script>
        </div>
    </div>

    <hr>

    <div id="upload" style="background-color: white;">
        <h1>Upload FIle</h1>
        <form action="upload" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file"> <br> <br>
            <button type="submit">Upload File</button>
        </form>
    </div>

    <hr>
    <section>
        <div class="end">
            <div class="shipment">
                <div id="ii">
                    <i class='fas fa-truck' style='font-size:36px'></i>
                </div>
                <div id="txt_shpmnt">
                    <h2>FREE SHIPPING</h2>
                    <h3>throughout Kazakhstan</h3>
                </div>
            </div>

            <div class="time">
                <div id="ii">
                    <i class='fas fa-briefcase' style='font-size:36px'></i>
                </div>
                <div id="txt_time">
                    <h2>OPERATING TIME</h2>
                    <h3>FROM 09: 00 TO 21: 00</h3>
                    <h3>WITHOUT DAYS</h3>
                </div>
            </div>

            <div class="write">
                <div id="ii">
                    <i class='fas fa-phone' style='font-size:36px'></i>
                </div>
                <div id="txt_write">
                    <h2>Write to us or call</h2>
                    <h3>INFO@DI-BEAUTY.KZ</h3>
                    <h3>+7 727 222 22 22</h3>
                </div>
            </div>

            <div class="social">
                <div id="ii">
                    <i class='fas fa-globe' style='font-size:36px'></i>
                </div>
                <div id="txt_social">
                    <h2>We are in social networks</h2>
                    <h3><a href="https://api.whatsapp.com/send/?phone=77788767228&text&app_absent=0">WhatsApp</a></h3>
                    <h3><a href="https://vk.com/omts_kz">VKontakte</a></h3>
                    <h3><a href="#">Instagram</a></h3>
                </div>
            </div>

        </div>

    </section> 
    <script src="script.js"></script>
</body>
</html>