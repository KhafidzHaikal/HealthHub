@extends('layout.index')

@section('body')

   <header>
        <div class="container payment" id="order-text">
            <h2> <span class="material-icons">
                keyboard_arrow_left
                </span> Your Order </h2>
        </div>
    </header>

    <main>
        <section class="section-information mb-4" id="section-info">
           <div class="container">
               <div class="text-head-obat">
                   <div class="loc-obat">
                       <p>Location Home</p>
                   </div>
                   <div class="user-obat">
                       <p>Username (+6281200033xxxx)</p>
                   </div>
                   <div class="pos-obat">
                       <p>Tembalang, Kota Semarang, Jawa Tengah</p>
                   </div>
               </div>
           </div> 
        </section>

        <section class="section-price " id="price">
            <div class="container">
                <div class="partpay">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="Frontend/img/lot-blisters-with-white-pills-gray-background 3.png" alt="obat-paracetamol">
                        </div>
                        <div class="col-lg-6">
                            <h2>Paracetamol</h2>
                            <h5>Description medicine</h5>
                            <p style="font-weight: 300;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque consectetur nisi eget id accumsan. Quis sed mauris
                                , sollicitudin platea nisi lacus tempor porttitor felis. <a href="#">Read More...</a></p>
                            <div class="place d-flex">
                                <span class="material-icons" style="margin-right: 10px;">
                                    shopping_basket
                                    </span>
                                    <h4>Apotek Kimia Farma</h4> 
                            </div>
                            <div class="star d-flex">
                                <span class="material-icons" style="color: gold;">
                                    star
                                    </span>
                                    <span class="material-icons" style="color: gold;">
                                        star
                                        </span>
                                        <span class="material-icons" style="color: gold;">
                                            star
                                            </span>
                                            <span class="material-icons" style="color: gold;">
                                                star
                                                </span>
                                                <span class="material-icons" style="color: gold;">
                                                    star
                                                    </span>
                            </div>
                        </div>
                        <div class="col-lg-3 makeb ">
                            <div class="row">
                                <div class="col-lg-7">
                                    <h5>Price</4>
                                </div>
                                <div class="col-lg-5 text-center">
                                    <h4>RP. 5000</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-7">
                                    <h5>Stock</h4>
                                </div>
                                <div class="col-lg-5">
                                    <center>
                                    <div class="count-satuan ">
                                        <label for="quantity"></label>
                                        <input class="text-center count" type="number" id="quantity" name="quantity" min="1" max="8">
                                      </div>
                                    </center>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="section-bottomprice " id="btprice">
            <div class="container">
                <div class="partpay">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h3>price</h3>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <h4>RP. 5000</h4>
                                    <center>
                                    <button type="button" class="btn btn-success">Next</button>
                                    </center>
                                </div>
                                <!-- <div class="col-lg-3">
                                    <button type="button" class="btn btn-success">Buy</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    
@endsection