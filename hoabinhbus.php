<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="css/flipbook.min.css">

        <script
            src="https://code.jquery.com/jquery-3.6.3.js"
            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
            crossorigin="anonymous"
        ></script>

        <script src="js/flipbook.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery('#container').flipBook({
                    // pdfUrl: 'pdf/hoabinhbus.pdf',
                    pages: [
                        {src: "hoabinhbus/hoabinhbus-images-0.jpg" , thumb: 'hoabinhbus/hoabinhbus-images-0.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-1.jpg",  thumb: 'hoabinhbus/hoabinhbus-images-1.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-2.jpg" , thumb: 'hoabinhbus/hoabinhbus-images-2.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-3.jpg",  thumb: 'hoabinhbus/hoabinhbus-images-3.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-4.jpg" , thumb: 'hoabinhbus/hoabinhbus-images-4.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-5.jpg",  thumb: 'hoabinhbus/hoabinhbus-images-5.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-6.jpg" , thumb: 'hoabinhbus/hoabinhbus-images-6.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-7.jpg",  thumb: 'hoabinhbus/hoabinhbus-images-7.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-8.jpg" , thumb: 'hoabinhbus/hoabinhbus-images-8.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-9.jpg",  thumb: 'hoabinhbus/hoabinhbus-images-9.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-10.jpg" , thumb: 'hoabinhbus/hoabinhbus-images-10.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-11.jpg",  thumb: 'hoabinhbus/hoabinhbus-images-11.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-12.jpg" , thumb: 'hoabinhbus/hoabinhbus-images-12.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-13.jpg",  thumb: 'hoabinhbus/hoabinhbus-images-13.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-14.jpg" , thumb: 'hoabinhbus/hoabinhbus-images-14.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-15.jpg",  thumb: 'hoabinhbus/hoabinhbus-images-15.jpg'},
                        {src: "hoabinhbus/hoabinhbus-images-16.jpg",  thumb: 'hoabinhbus/hoabinhbus-images-16.jpg'},
                        
                    ],
                    backgroundColor: '#063970',
                    backgroundImage: 'images/background.png',
                });
            });
        </script>
        <style>
            .flipbook-menuBottom{
                background: #04245d !important;
            }
            .flipbook-color-light{
                fill:white !important;
            }

        </style>
    </head>

    <body>
    <div id="container"></div>
    </body>
</html>
