<?php 
                if(isset($_GET['bettaku'])){
                    $page = $_GET['bettaku'];
            
                    switch ($page) {
                        case 'home':
                            include "user/layout/home.php";
                            break;
                        case 'profile':
                            include "user/layout/profile.php";
                            break;
                        case 'diagnosa':
                            include "user/layout/diagnosa.php";
                            break;
                        case 'shop':
                            include "user/layout/shop.php";
                            break;	
                        case 'cart':
                            include "user/layout/cart.php";
                            break;
                        case 'checkout':
                            include "user/layout/checkout.php";
                            break;
                        case 'faq':
                            include "user/layout/faq.php";
                            break;	
                        case 'logout':
                            include "user/proses/logout.php";
                            break;
                        case 'buy':
                            include "user/proses/buy.php";
                            break;
                        case 'addcart':
                            include "user/proses/addcart.php";
                            break;
                        case 'deletecart':
                            include "user/proses/deletecart.php";
                            break;
                        case 'nota':
                            include "user/layout/nota.php";
                            break;
                        case 'addcarthome':
                            include "user/proses/addcarthome.php";
                            break;
                        case 'history':
                            include "user/layout/history.php";
                            break;
                        case 'ongkir':
                            include "user/layout/ongkir.php";
                            break;
                        case 'cek_kabupaten':
                            include "user/layout/cek_kabupaten.php";
                            break;
                        case 'cek_ongkir':
                            include "user/layout/cek_ongkir.php";
                            break;
                        case 'cartlogin':
                            include "user/proses/cartlogin.php";
                            break;  
                        case 'payment':
                            include "user/layout/payment.php";
                            break;  
                        case 'editprofile':
                            include "user/layout/editprofile.php";
                            break;
                        default:
                            include "user/layout/404.php";
                            break;
                    }
                }else{
                    include "user/layout/home.php";
                }
?>