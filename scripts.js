/**
 * Created by session2 on 2/1/16.
 */
function changeSignUp(){
    document.getElementById('content').style.display = 'none';
    document.getElementById('signUp').style.display = 'block';
    document.getElementById('login').style.display = 'none';
    document.getElementById('shop').style.display = 'none';
    document.getElementById('contactUs').style.display = 'none';
    document.getElementById('cart').style.display = 'none';
}

function changeHome(){
    document.getElementById('content').style.display = 'block';
    document.getElementById('signUp').style.display = 'none';
    document.getElementById('login').style.display = 'none';
    document.getElementById('shop').style.display = 'none';
    document.getElementById('contactUs').style.display = 'none';
    document.getElementById('cart').style.display = 'none';
}

function changeLogin(){
    document.getElementById('content').style.display = 'none';
    document.getElementById('signUp').style.display = 'none';
    document.getElementById('login').style.display = 'block';
    document.getElementById('shop').style.display = 'none';
    document.getElementById('contactUs').style.display = 'none';
    document.getElementById('cart').style.display = 'none';
}
function changeShop(){
    document.getElementById('content').style.display = 'none';
    document.getElementById('signUp').style.display = 'none';
    document.getElementById('login').style.display = 'none';
    document.getElementById('shop').style.display = 'block';
    document.getElementById('contactUs').style.display = 'none';
    document.getElementById('cart').style.display = 'none';
}

function changeContactUs(){
    document.getElementById('content').style.display = 'none';
    document.getElementById('signUp').style.display = 'none';
    document.getElementById('login').style.display = 'none';
    document.getElementById('shop').style.display = 'none';
    document.getElementById('contactUs').style.display = 'block';
    document.getElementById('cart').style.display = 'none';
}

function changeCart() {
    document.getElementById('content').style.display = 'none';
    document.getElementById('signUp').style.display = 'none';
    document.getElementById('login').style.display = 'none';
    document.getElementById('shop').style.display = 'none';
    document.getElementById('contactUs').style.display = 'none';
    document.getElementById('cart').style.display = 'block';
}