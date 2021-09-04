<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF poc</title>
    <style>
    /*======================
    404 page
=======================*/


    .page_404 {
        padding: 40px 0;
        background: #fff;
        font-family: 'Arvo', serif;
        text-align: center;
    }

    .page_404 img {
        width: 100%;
    }

    .four_zero_four_bg {

        background-image: url('./img1.png');
        background-repeat: no-repeat;
        height: 400px;
        background-position: center;
    }


    .four_zero_four_bg h1 {
        font-size: 80px;
    }

    .four_zero_four_bg h3 {
        font-size: 80px;
    }

    .link_404 {
        color: #fff !important;
        padding: 10px 20px;
        background: #39ac31;
        margin: 20px 0;
        display: inline-block;
    }

    .contant_box_404 {
        margin-top: -50px;
    }
    </style>
</head>

<body>


    <div class="invoice-box">
        <section class="page_404">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="col-sm-10 col-sm-offset-1  text-center">
                            <div class="four_zero_four_bg">
                                <h1 class="text-center ">404</h1>


                            </div>

                            <div class="contant_box_404">
                                <h3 class="h2">
                                    Look like you're lost
                                </h3>

                                <p>the page you are looking for not avaible!</p>

                                <a href="/" class="link_404">Go to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script type="text/javascript">
    window.html2canvas = html2canvas;
    window.jsPDF = window.jspdf.jsPDF;

    function makePDF() {
        html2canvas(document.querySelector(".invoice-box"), {
            allowTaint: true,
            useCORS: true,
            scale: 1,
            quality: 4,
        }).then(canvas => {
            // document.body.appendChild(canvas)
            var img = canvas.toDataURL("image/png");
            var doc = new jsPDF('a7');
            doc.setFont('Arial');
            doc.getFontSize(11);
            doc.addImage(img, 'PNG', 7, 13, 195, 105);
            doc.save('invoice.pdf');
        });
    }

    makePDF();
    </script>
</body>

</html>