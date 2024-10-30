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
                    pages: [
                        {src: "hoabinhairlines/hoabinhairlines-images-0.jpg" , thumb: 'hoabinhairlines/hoabinhairlines-images-0.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-1.jpg",  thumb: 'hoabinhairlines/hoabinhairlines-images-1.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-2.jpg" , thumb: 'hoabinhairlines/hoabinhairlines-images-2.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-3.jpg",  thumb: 'hoabinhairlines/hoabinhairlines-images-3.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-4.jpg" , thumb: 'hoabinhairlines/hoabinhairlines-images-4.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-5.jpg",  thumb: 'hoabinhairlines/hoabinhairlines-images-5.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-6.jpg" , thumb: 'hoabinhairlines/hoabinhairlines-images-6.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-7.jpg",  thumb: 'hoabinhairlines/hoabinhairlines-images-7.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-8.jpg" , thumb: 'hoabinhairlines/hoabinhairlines-images-8.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-9.jpg",  thumb: 'hoabinhairlines/hoabinhairlines-images-9.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-10.jpg" , thumb: 'hoabinhairlines/hoabinhairlines-images-10.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-11.jpg",  thumb: 'hoabinhairlines/hoabinhairlines-images-11.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-12.jpg" , thumb: 'hoabinhairlines/hoabinhairlines-images-12.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-13.jpg",  thumb: 'hoabinhairlines/hoabinhairlines-images-13.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-14.jpg" , thumb: 'hoabinhairlines/hoabinhairlines-images-14.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-15.jpg",  thumb: 'hoabinhairlines/hoabinhairlines-images-15.jpg'},
                        {src: "hoabinhairlines/hoabinhairlines-images-16.jpg",  thumb: 'hoabinhairlines/hoabinhairlines-images-16.jpg'},
                        
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
