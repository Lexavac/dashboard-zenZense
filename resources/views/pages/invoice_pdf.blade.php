<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Silkscreen:wght@400;700&display=swap');

    *{
        padding: 0;
        margin: 0;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
    .container{
        /* background-color: aqua; */
        width: 794px;
        height: 1123px;
        border: 2px solid black;

    }
    .content{
        /* background-color: rgb(126, 184, 235); */
        width: 95%;
        height: 95%;
        box-sizing: border-box;
        margin: auto;
        margin-top: 2.5%;
        padding-top: 10px;
        margin-left: -25px;
    }
    .inv table, tr, td {
    /* border:1px solid black; */
        box-sizing: border-box;
    }
    .inv tr, td{
        width: 500px;
        box-sizing: border-box;
    }
    .inv-tag h3{
        background-color: #f7b15d;
        width: 100px;
        height: 30px;
        box-sizing: border-box;
        padding-top: 10px;
        padding-left: 25px;
        border-radius: 10px;
    }
    .no-inv{
        margin-top: -10px;
        font-weight: 400;
    }
    .tanggal{
        margin-top: -10px;
        font-weight: 400;
    }
    .desc{
    /* border:1px solid black; */
    }
    .desc{
        box-sizing: border-box;
        margin-top: 50px;
    }
    .desc-1{
        width: 500px;
    }
    .desc-2{
        width: 150px;
    }
    .desc-1 p, h2, h5{
        margin-left: 50px;
    }
    .desc-1  p{
        margin-bottom: 25px;
    }
    .desc-1 h2, h5{
        margin-top: -15px;
    }
    .desc-2{
        padding-left: 300px;
        text-align: right;
    }
    .product{
        /* border:1px solid black; */
    }
    .product{
        box-sizing: border-box;
        margin-top: 50px;
        text-align: center;
    }
    .products{
        box-sizing: border-box;
        margin-top: -20px;
        text-align: center;
    }
    .pro-1{
        width: 489px;
    }
    .pro-2, .pro-3, .pro-4{
        width: 150px;
    }
    .payment{
        border:1px solid black;
        margin-top: 50px;
    }
    .payment1{
        width: 500px;
        box-sizing: border-box;
        padding-left: 50px;
    }
    .payment2{
        width: 439px;
    }
</style>
<body>
    <div class="content">
        <table class="inv">
            <tr>
                <td class="td1" style="padding-left:50px;">
                    <div class="inv-tag">
                        <h3>INVOICE</h3>
                    </div>
                    <h3 class="no-inv">No: INV/5435/MLI/2441</h3>
                    <h4 class="tanggal">3 Mei 2022</h2>
                </td>

                <td class="td2"> 
                    <div style="margin: auto; margin-left:250px; background-color:rgb(75, 75, 75); width:150px; height: 80px;">
                        {{-- <img alt="ZENIT" src="{{ asset('build/assets/images/logo1.png') }}"> --}}
                    </div>
                </td>
            </tr>
        </table>

        <table class="desc">
            <tr>
                <td class="desc-1">
                    <p>Customer Detail</p>
                    <h2>Kiagus Farhan Abbas</h2>
                    <h5>kgs.frhn.abs123@gmail.com</h5>
                    <h5>Jl. Gunung Tidar No 4. Rt 11 Rw 007, kel sukatani, kec tapos</h5>
                </td>
                <td class="desc-2">
                    <h1>Order Id</h1>
                    <h3 style="margin-top:-20px;">0987654678</h3>
                </td>
            </tr>
        </table>

        <table class="product">
            <tr>
                <td class="pro-1">Nama</td>
                <td class="pro-2">Qty</td>
                <td class="pro-3">Price</td>
                <td class="pro-4">Subtotal</td>
            </tr>
        </table>
        <div style="width:900px; height:2px; background-color: #a8a8a89e; margin-top:10px; margin-left:55px;"></div>
        
        <table class="products">
            <tr>
                <td class="pro-1">
                    <h4>Template Uhuy Ashoy</h4>
                    <p style="margin-left:-90px; margin-top: -10px;">Software</p>
                </td>
                <td class="pro-2">4</td>
                <td class="pro-3">Rp. 40.000</td>
                <td class="pro-4">Rp. 200.000</td>
            </tr>
        </table>
        <div style="width:900px; height:2px; background-color: #a8a8a89e; margin-top:10px; margin-left:55px;"></div>

        <table class="products">
            <tr>
                <td class="pro-1">
                    <h4>Flashdisk Haram</h4>
                    <p style="margin-left:-50px; margin-top: -10px;">Hardware</p>
                </td>
                <td class="pro-2">4</td>
                <td class="pro-3">Rp. 40.000</td>
                <td class="pro-4">Rp. 200.000</td>
            </tr>
        </table>
        <div style="width:900px; height:2px; background-color: #a8a8a89e; margin-top:10px; margin-left:55px;"></div>


        <table class="payment">
            <tr>
                <td class="payment1">
                    <p>Bank Transfer</p>
                    <h3>Agus Farhan Azis</h3>
                </td>
                <td class="payment2">alo</td>
            </tr>
        </table>
    </div>
</body>
</html>