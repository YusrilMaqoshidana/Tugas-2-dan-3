<?php

namespace Yusril\Belajar\PHP\MVC\Controller;

use Yusril\Belajar\PHP\MVC\App\View;

class HomeController
{
    
    function adminDashboard(): void 
    {
        $model = [
            "title" => "Dashboard",
            "content" => "Kamu sekarang berada di dashboard admin"
        ];

        require __DIR__. "/../View/admin-panel/admin-dashboard.php";
    }

    function adminLogin(): void 
    {
        $model = [
            "title" => "Admin",
            "content" => "Kamu sekarang berada di Admin"
        ];

        require __DIR__. "/../View/admin-panel/admin-login.php";
    }

    function customerLogin(): void 
    {
        $model = [
            "title" => "Login",
            "content" => "Kamu sekarang berada di login"
        ];

        require __DIR__. "/../View/forms/customer-login.php";
    }

    function customerRegister(): void 
    {
        $model = [
            "title" => "Register",
            "content" => "Kamu sekarang berada di Register"
        ];

        require __DIR__. "/../View/forms/customer-register.php";
    }

    function customerProfil(): void 
    {
        $model = [
            "title" => "Profile",
            "content" => "Kamu sekarang berada di Profil"
        ];

        require __DIR__. "/../View/forms/customer-profil.php";
    }

    function cart(): void 
    {
        $model = [
            "title" => "Cart",
            "content" => "Kamu sekarang berada di Cart"
        ];

        require __DIR__. "/../View/shop/cart.php";
    }

    function contact(): void 
    {
        $model = [
            "title" => "Contact",
            "content" => "Kamu sekarang berada di Contact"
        ];

        require __DIR__. "/../View/shop/contact.php";
    }

    function home(): void 
    {
        $model = [
            "title" => "Home",
            "content" => "Kamu sekarang berada di Home"
        ];

        require __DIR__. "/../View/shop/home.php";
    }

    function item(): void 
    {
        $model = [
            "title" => "Item",
            "content" => "Kamu sekarang berada di Item"
        ];

        require __DIR__. "/../View/shop/item.php";
    }

    function order(): void 
    {
        $model = [
            "title" => "Order",
            "content" => "Kamu sekarang berada di Order"
        ];

        require __DIR__. "/../View/shop/order.php";
    }
}