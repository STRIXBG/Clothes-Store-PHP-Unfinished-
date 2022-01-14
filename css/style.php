<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<style>
    *{
        box-sizing: border-box;
        padding: 0px;
        margin: 0px;
    }
    body{
        
    }
    body,h1,h2,h3,h4,h5 {
        font-family: 'Rubik', sans-serif;
    }
    .tag{
        background-color: black;
        padding:8px;
        color: whitesmoke;
    }
    .bg-white{
        background-color: white;
    }
    .black-blue-link{
        color: #333333;
    }
    .hover-blue-effect:hover{
        color: cornflowerblue;
        cursor: pointer;
    }
    .black-blue-link:hover{
        color: cornflowerblue;
    }
    .hover-brown:hover{
        background-color: #797979;
        transition-duration: 0.8s;
    }
    .cursor-pointer{
        cursor: pointer;
    }
    .country-flag:hover {
        border-color: cornflowerblue;
    }
    .country-flag {
        width: 28px;
        height: 22px;
        border-radius:23px;
    }
    .social-payment{
        margin: 0 auto;
        max-width: 880px;
    }
    .close-overlay{
        cursor: pointer;
    }
    .overlay{
        position: fixed;
        width: 100%;
        height: 100%; 
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.5); 
        z-index: 2; 
    }
    .short-text-3{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3; /* number of lines to show */
        -webkit-box-orient: vertical;
    }
    .overlay-body{
        background-color: whitesmoke;
        padding:20px;
        position: absolute;
        top: 50%;
        left: 50%;
        width: 356px;
        font-size: 20px;
        color: black;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
    }
    .product{
        width: calc(100% / 2.24);
    }
    #men-main .wrapper{
        margin: 0 auto;
        max-width: 1400px;
    }
    #brands-main .wrapper{
        margin: 0 auto;
        max-width: 1400px;
    }
    #brands-main .product-commercial-big{
        
    }
    #index-main .social-payment .social, .payment{
        display: inline-block;
        
    }
    #changeLanguageMenu{
        
    }
    #navbar-dropdown-item:hover #navbar-dropdown{
        display: block;
    }
    #navbar-dropdown{
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
    }
    #freeCodeText:hover + #freeCodeMsg{
        display: block;
    }
    #freeCodeMsg{
        display: none;
        
    }
    @media only screen and (max-width: 300px) {
        
    }
    @media only screen and (max-width: 1200px) {
        
    }
    </style>