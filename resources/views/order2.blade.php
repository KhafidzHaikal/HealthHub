@extends('layout.index')

@section('body')
<header>
    <div class="container payment" id="payment-text">
        <h2> Payment </h2>
    </div>
</header>

<main>
    <section class="section-choose " id="section-CD">
       <div class="container">
           <div class="part-delivery">
                <div class="text-head-part">
                    <h5>Choose Delivery</h5>
            </div>

                <div class="dropdown">
                    <button class="dropbtn">
                        select delivery
                    </button>
                    
                    <div class="dropdown-content text-center">
                        <a href="#">
                            <img src=
        "/img/image 4.png"
                            height="26"></a>
        
                        <a href="#">
                            <img src=
        "/img/image 5.png"
                            height="26"></a>
                        <a href="#">
                            <img src=
        "/img/image 6.png"
                            height="26"></a>
                    </div>
                </div>
           </div>
           <div class="part-payment">
                <div class="text-head-part">
                    <h5>Payment Method</h5>
            </div>

                <div class="dropdown">
                    <button class="dropbtn">
                        select payment
                    </button>
                    
                    <div class="dropdown-content text-center">
                        <a href="#">
                            <img src=
        "/img/Group 65.png"
                            height="26"></a>
        
                        <a href="#">
                            <img src=
        "/img/image 7.png"
                            height="26"></a>
                        <a href="#">
                            <img src=
        "/img/image 8.png"
                            height="26"></a>
                    </div>
                </div>
           </div>
       </div> 
    </section>
    <section class="section-price " id="price">
        <div class="container">
            <div class="partpay">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-5">
                                <h3>price</h3>
                            </div>
                            <div class="col-lg-4">
                                <h4>RP. 5000</h4>
                            </div>
                            <div class="col-lg-3">
                                <button type="button" class="btn btn-success">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>
@endsection