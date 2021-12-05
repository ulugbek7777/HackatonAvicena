<div class="container">
    <div class="header">
        <div class="image">
            <p>patient photo</p>
        </div>
        <div class="malumotlar">
            <div class="">
                <div class="YozuvBlock">
                    <div class="leftYozuv">F.I.SH:</div>
                    
                </div>
                <div class="YozuvBlock">
                    <div class="leftYozuv">Passport:</div>
                    
                </div>
                <div class="YozuvBlock">
                    <div class="leftYozuv">JSh ShIR:</div>
                    
                </div>
                <div class="YozuvBlock">
                    <div class="leftYozuv">Tug'ilgan sana:</div>
                    
                </div>
                <div class="YozuvBlock">
                    <div class="leftYozuv">Jinsi:</div>
                    
                </div>
            </div>
        </div>
        <div class="malumotlar mlmt">
            <div class="">
                <div class="YozuvBlock">
                    
                    <div class="rightYozuv">Jamoliddinov Ulug'bek Umid O'gli</div>
                </div>
                <div class="YozuvBlock">
                    
                    <div class="rightYozuv">AC 2741620</div>
                </div>
                <div class="YozuvBlock">
                    
                    <div class="rightYozuv">5100215465484854</div>
                </div>
                <div class="YozuvBlock">
                    
                    <div class="rightYozuv">10.07.2003</div>
                </div>
                <div class="YozuvBlock">
                    
                    <div class="rightYozuv">Erkak</div>
                </div>
            </div>
        </div>
        <div class="group">
            <div class="qon">Qon Guruxi</div>
            <div class="guruxi">+2</div>
        </div>
    </div>
    <div class="leftSidebar">
        <div class="info big">Bemor malumotlari</div>
        <div>
            <div class="info laber gl">To'liq ismi:</div>
            <div class="info">Jamoliddinov Ulug'bek</div>
        </div>
        <div>
            <div class="info gl">Telefon raqami:</div>
            <div class="info">+998 99 8416432</div>
        </div>
        <div>
            <div class="info gl">Jinsi:</div>
            <div class="info">Erkak</div>
        </div>
    </div>
    <div class="reghtSidebar">
        @yield('content')
    </div>
</div>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    .header {
        height: 20vh;
        width: 100%;
        position: relative;
    }
    .image {
        width: 140px;
        height: 20vh;
        background: rgb(179, 130, 130);
        display: inline-block;
    }
    .image p {
        color: white;
        font-size: 24px;
        padding-top: 50px;
        position: absolute
    }
    .container {
        width: 70%;
        margin: 0 auto;
    }
    .leftSidebar {
        background: #ebe9e9;
        height: 80vh;
        width: 30%;
        float: left
    }
    .reghtSidebar {
        background: rgb(255, 255, 255);
        height: 80vh;
        width: 70%;
        float: right;
    }
    .malumotlar {
        position: absolute;
        top: 0;
        left: 200px;
    }
    .mlmt {
        left: 380px
    }
    .leftYozuv {
        display: inline-block;
    }
    .rightYozuv {
        display: inline-block;
        
    }
    .YozuvBlock {
        /* margin-left: 80px; */
        padding-top: 10px
    }
    .group {
        position: absolute;
        top: 10px;
        right: 100px;
    }
    .qon {
        font-size: 32px
    }
    .guruxi {
        font-size: 36px  
    }
    .big {
        font-size: 24px;
        margin-top: 20px 
    }
    .info {
        margin-left: 15px
    }
    .gl {
        margin-top: 20px;
        color: grey;
    }
</style>