<footer>
    <div class="container-lg">
        <div class="text-center">
            <!--<img src="./assets/img/YESBABA.png" alt="">-->
            <a href="./index.php">
                <h1 class="text-white text-capitalize font-weight-bolder">YesBaba</h1>
            </a>
        </div>
        <div class="row">
            <div class="col-sm">
                <h5 class="text-left text-secondary">MANAGE:</h5>
                <ul class="text-left font-weight-bolder">
                    <li><a href="./myaccount.php">My Account</a></li>
                    <li><a href="./orders.php">Order</a></li>
                    <li><a href="./favorites.php">Favorites</a></li>
                    <li><a href="./return_product.php">Return Policy</a></li>
                    <li><a href="./admin">Sell on YesBaba</a></li>
                    <!-- <li><a href="./owner">Master-Admin</a></li> -->
                </ul>
            </div>
            <div class="col-sm">
                <h5 class="text-left text-secondary">HELP:</h5>
                <ul class="text-left font-weight-bolder">
                    <li><a href="./faq.php">FAQ</a></li>
                    <li><a href="./terms.php">Terms & Conditions</a></li>
                    <li><a href="./privacy.php">Privacy policy</a></li>
                    <li><a href="./support.php">Support</a></li>
                    <li><a href="./customer_service.php">Customer Service</a></li>
                    <li><a href="./about.php">About Us</a></li>
                </ul>
            </div>
            <div class="col-sm">
                <h5 class="text-left text-secondary">SOCIAL:</h5>
                <div class="text-left social-icons">
                    <div class="social-icon">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="social-icon">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="social-icon">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="social-icon">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <h5 class="text-left text-secondary">Mail Us:</h5>
                <p class="font-weight-bolder">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu neque nec quam venenatis vehicula et at metus. Proin sed quam ornare, efficitur m
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./assets/js/jquery-3.4.1.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/index.js"></script>
<script src="./assets/js/scroll.js"></script>

<script>
    $('#navToggler').on('click', function() {
        $('#navToggler i').toggleClass('active');
    })

    // Navbar toggler
    $('#navbarSupportedContent li.nav-item a').on('mouseenter', function() {
        $(this).dropdown('toggle')
    })
    
    $('#navbarSupportedContent li.nav-item .dropdown > a').on('mouseenter', function() {
        $('#navbarSupportedContent li.nav-item .dropdown > a').removeClass('active')
        if($(this).parent().hasClass('show')){
            $(this).addClass('active')
        }
    })
    
    $('#navbarSupportedContent li.nav-item .dropdown-menu a').on('click', function() {
        var goToLink = $(this).attr('href');
        console.log(goToLink);
        window.location.href = goToLink

    })
    $('#navbarSupportedContent li.nav-item .dropdown-menu').on('mouseout', function() {
        $(this).dropdown('hide')
    })
</script>