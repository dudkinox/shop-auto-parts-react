<header class="section-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="?pages=Homepage"><img width='auto' height='auto' class="logo" src="Template/user/images/logos/Logo.png " alt="TK Auto Parts Shop" title=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTop">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown"><a href="?pages=Shop" class="nav-item nav-link"> Shop </a>

                    </li>
                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> Services </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Trade Assurance </a></li>
                            <li><a class="dropdown-item" href="#">Logistics Service </a></li>
                            <li><a class="dropdown-item" href="#">Membership Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> Community </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Help Center</a></li>
                            <li><a class="dropdown-item" href="#">Submit a Dispute </a></li>
                            <li><a class="dropdown-item" href="#">For Suppliers </a></li>
                        </ul>
                    </li>

            </div>
        </div>
    </nav>

    <section class="header-main shadow-sm">
        <div class="container">
            <div class="row-sm align-items-center">
                <div class="col-lg-4-24 col-sm-3">
                    <div class="category-wrap dropdown py-1">
                        <button type="button" class="btn btn-light  dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Categories</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?pages=Shop"> View All Product </a>
                            <a class="dropdown-item" href="?type=Car Shock Absorber&pages=Shop"> Car Shock Absorber </a>
                            <a class="dropdown-item" href="?type=Brake pads&pages=Shop">Brake pads</a>
                            <a class="dropdown-item" href="?type=Front and Rear Bumbers and Bumber Frame&pages=Shop">Front and Rear Bumbers and Bumber Frame</a>
                            <a class="dropdown-item" href="?type=Filter&pages=Shop">Filter</a>
                            <a class="dropdown-item" href="?type=Bearings,Ball Bearings,Ball Bearings&pages=Shop">Bearings,Ball Bearings,Ball Bearings</a>
                            <a class="dropdown-item" href="?type=Side Mirror&pages=Shop">Side Mirror</a>
                            <a class="dropdown-item" href="?type=Head linght&pages=Shop"> Head linght</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-11-24 col-sm-8">
                    <form action="#" class="py-1">
                        <div class="input-group w-100">
                            <select class="custom-select" name="category_name">
                                <option value="">All type</option>
                                <option value="">Special</option>
                                <option value="">Only best</option>
                                <option value="">Latest</option>
                            </select>
                            <input type="text" class="form-control" style="width:50%;" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-warning" type="submit">
                                    <i class="fa fa-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-9-24 col-sm-12">
                    <div class="widgets-wrap float-right row no-gutters py-1">
                        <div class="col-auto">
                            <?php if ($EmailUser == "") { ?>
                                <div class="widget-header dropdown">
                                    <a href="#" data-toggle="dropdown" data-offset="20,10">
                                        <div class="icontext">
                                            <div class="icon-wrap"><i class="text-warning icon-sm fa fa-user"></i></div>
                                            <div class="text-wrap text-dark">
                                                Sign in <br>
                                                My account <i class="fa fa-caret-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <form action="services/account.service.php?request=login" method="POST" class="px-4 py-3">
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" name="email-login" class="form-control" placeholder="email@example.com">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password-login" class="form-control" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        </form>
                                        <hr class="dropdown-divider">
                                        <a class="dropdown-item" href="?pages=Register">Have account? Sign up</a>
                                        <a class="dropdown-item" href="#">Forgot password?</a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="widget-header dropdown">
                                    <a href="#" data-toggle="dropdown" data-offset="20,10">
                                        <div class="icontext">
                                            <div class="icon-wrap"><i class="text-warning icon-sm fa fa-user"></i></div>
                                            <div class="text-wrap text-dark">
                                                <?php echo $EmailUser; ?> <i class="fa fa-caret-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="?pages=Profile">My account</a>
                                        <a class="dropdown-item" href="?pages=Logout">Logout</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <?php if(isset($_SESSION["no"])){ ?>
                        <div class="col-auto">
                            <a href="?pages=Pay" class="widget-header">
                                <div class="icontext">
                                    <div class="icon-wrap"><i class="text-warning icon-sm fa fa-shopping-cart"></i><p class="h5" id="item-cart"></p>
                                    </div>
                                    <div class="text-wrap text-dark">
                                        Order <br> Protection
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                        <?php if(isset($_SESSION["no"])){ ?>
                        <div class="col-auto">
                            <a href="#" class="widget-header">
                                <div class="icontext">
                                    <div class="icon-wrap"><i class="text-warning icon-sm fab fa-wpforms"></i><p class="h5" id="item-cart"></p>
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>