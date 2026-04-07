<!DOCTYPE html>
<html>
<head>
<title>Maison Bloom - Keranjang</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<style>
body {
    margin:0;
    font-family:'Poppins',sans-serif;
    background:#E9E4D8;
}

/* Header */
header{
    text-align:center;
    padding:30px;
    font-family:'Playfair Display',serif;
    font-size:45px;
    color:#7B2E2F;
    letter-spacing:2px;
}

.cart-container{
    width:90%;
    max-width:1100px;
    margin:0 auto 50px auto;
    display:flex;
    gap:40px;
}

.cart-items{
    flex:2;
}

.cart-card{
    background:white;
    border-radius:20px;
    padding:20px;
    margin-bottom:25px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    box-shadow:0 10px 25px rgba(0,0,0,0.05);
}

.cart-card img{
    width:120px;
    height:120px;
    object-fit:cover;
    border-radius:15px;
    border:4px solid #C6A24A;
}

.product-info h3{
    margin:0;
    font-family:'Playfair Display',serif;
    color:#7B2E2F;
}

.product-info p{
    margin:8px 0;
    color:#6D6D6D;
}

.qty-btn{
    background:#AEB7A2;
    border:none;
    color:white;
    padding:6px 12px;
    border-radius:8px;
    cursor:pointer;
    font-weight:bold;
}

.qty{
    margin:0 10px;
    color:#6D6D6D;
    font-weight:500;
}

.remove-btn{
    background:#7B2E2F;
    border:none;
    color:white;
    padding:6px 12px;
    border-radius:8px;
    cursor:pointer;
}

.remove-btn:hover{
    opacity:0.9;
}

.summary{
    flex:1;
    background:white;
    padding:30px;
    border-radius:20px;
    height:fit-content;
    box-shadow:0 10px 25px rgba(0,0,0,0.05);
}

.summary h3{
    font-family:'Playfair Display',serif;
    color:#7B2E2F;
}

.summary p{
    display:flex;
    justify-content:space-between;
    color:#6D6D6D;
}

.total{
    font-weight:bold;
    margin-top:10px;
    border-top:1px solid #ddd;
    padding-top:10px;
}

.checkout-btn{
    width:100%;
    margin-top:20px;
    padding:12px;
    border:none;
    border-radius:25px;
    background:#C6A24A;
    color:white;
    font-weight:500;
    cursor:pointer;
}

.checkout-btn:hover{
    opacity:0.9;
}
</style>
</head>

<body>

<header>SHOPPING CART</header>

<div class="cart-container">

<div class="cart-items">

<div class="cart-card" data-price="350000">
    <img src="violet.jpeg">
    <div class="product-info">
        <h3>Violet</h3>
        <p>Rp 350.000</p>
    </div>
    <div>
        <button class="qty-btn minus">-</button>
        <span class="qty">1</span>
        <button class="qty-btn plus">+</button>
        <br><br>
        <button class="remove-btn">Hapus</button>
    </div>
</div>

<div class="cart-card" data-price="250000">
    <img src="nude.jpeg">
    <div class="product-info">
        <h3>Nude Flower</h3>
        <p>Rp 250.000</p>
    </div>
    <div>
        <button class="qty-btn minus">-</button>
        <span class="qty">1</span>
        <button class="qty-btn plus">+</button>
        <br><br>
        <button class="remove-btn">Hapus</button>
    </div>
</div>

<div class="cart-card" data-price="450000">
    <img src="magenta.jpeg">
    <div class="product-info">
        <h3>Magenta Lili</h3>
        <p>Rp 450.000</p>
    </div>
    <div>
        <button class="qty-btn minus">-</button>
        <span class="qty">1</span>
        <button class="qty-btn plus">+</button>
        <br><br>
        <button class="remove-btn">Hapus</button>
    </div>
</div>

</div>

<div class="summary">
    <h3>Ringkasan Belanja</h3>
    <p><span>Subtotal</span><span id="subtotal"></span></p>
    <p><span>Ongkir</span><span>Rp 50.000</span></p>
    <p class="total"><span>Total</span><span id="total"></span></p>
    <button class="checkout-btn" onclick="checkout()">Checkout</button>
</div>

</div>

<script>
function updateTotal(){
    let subtotal=0;
    document.querySelectorAll('.cart-card').forEach(card=>{
        let price=parseInt(card.dataset.price);
        let qty=parseInt(card.querySelector('.qty').innerText);
        subtotal+=price*qty;
    });

    document.getElementById('subtotal').innerText=
        "Rp "+subtotal.toLocaleString("id-ID");

    document.getElementById('total').innerText=
        "Rp "+(subtotal+50000).toLocaleString("id-ID");
}

document.querySelectorAll(".plus").forEach(btn=>{
    btn.addEventListener("click",function(){
        let qty=this.parentElement.querySelector(".qty");
        qty.innerText=parseInt(qty.innerText)+1;
        updateTotal();
    });
});

document.querySelectorAll(".minus").forEach(btn=>{
    btn.addEventListener("click",function(){
        let qty=this.parentElement.querySelector(".qty");
        if(parseInt(qty.innerText)>1){
            qty.innerText=parseInt(qty.innerText)-1;
            updateTotal();
        }
    });
});

document.querySelectorAll(".remove-btn").forEach(btn=>{
    btn.addEventListener("click",function(){
        this.closest(".cart-card").remove();
        updateTotal();
    });
});

function checkout(){
    alert("Terima kasih telah berbelanja di Maison Bloom 🌿");
}

updateTotal();
</script>

</body>
</html>