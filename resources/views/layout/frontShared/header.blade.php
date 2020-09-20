<?php use App\Enumeration\Role; ?>

<header class="header_area">
        <div class="main_header cm_header fixed-top show_desktop">
            <div class="logo">
               <a href="{{ route('home') }}"><img src="{{$logo ? $logo : null}}" alt=""></a> 
            </div>
            <div class="header_nav">
                <ul>
                    <li data-toggle="collapse_slide" data-target="#doctors"><a href="">Doctor's</a>
                    </li>
                    <div class="submenu" id="doctors">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-3">
                                    <div class="submenu_list">
                                        <h2>Cardiologist</h2>
                                        <ul>
                                            <li><a href="doctorslist.html">Cardiologist</a></li>  
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="submenu_list">
                                        <h2>Endocrinologist</h2>
                                        <ul>
                                            <li><a href="doctorslist.html">Endocrinologist1</a></li>
                                            <li><a href="doctorslist.html">Endocrinologist2</a></li> 
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="submenu_list">
                                        <h2>Neurologist</h2>
                                        <ul> 
                                            <li><a href="doctorslist.html">Neurologist1</a></li>
                                            <li><a href="doctorslist.html">Neurologist2</a></li> 
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="submenu_list">
                                        <h2>Oncologist</h2>
                                        <ul>
                                            <li><a href="doctorslist.html">Oncologist1</a></li> 
                                            <li><a href="doctorslist.html">Oncologist2</a></li> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <li data-toggle="collapse_slide" data-target="#Men"><a href="#">Services</a></li>
                    <div class="submenu" id="Men" >
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-3">
                                    <div class="submenu_list">
                                        <h2>Top</h2>
                                        <ul>
                                            <li><a href="#">All Clothing</a></li>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Lingerie</a></li>
                                            <li><a href="#">Tees & Tops</a></li>
                                            <li><a href="#">Pants</a></li>
                                            <li><a href="#">Sustainable Tees & Tops</a></li>
                                            <li><a href="#">Jeans</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="submenu_list">
                                        <h2>Bottom</h2>
                                        <ul>
                                            <li><a href="#">All Jewellery and Accessories</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Earrings</a></li>
                                            <li><a href="#">Necklaces</a></li>
                                            <li><a href="#">Rings</a></li>
                                            <li><a href="#">Bracelets</a></li>
                                            <li><a href="#">Eyewear</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="submenu_list">
                                        <h2>Footwear</h2>
                                        <ul>
                                            <li><a href="#">All Shoes</a></li>
                                            
                                            <li><a href="#">Sneakers</a></li>
                                            <li><a href="#">Sandals</a></li>
                                            <li><a href="#">Vegan Shoes</a></li>
                                            <li><a href="#">Boots</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-3"></div>
                            </div>
                        </div>
                    </div>
                    <li><a href="#">Members</a></li>
                    <li><a href="#">Providers</a></li>
                    <li><a href="#">contact us</a></li>
                </ul>
            </div>
            <div class="header_others">
                <ul>
                    <li data-toggle="collapse_noslide" data-target="#search"><i class="fas fa-search"></i></li>
                    <div class="header_search h_o_dropdown" id="search">
                        <div class="header_search_form">
                            <div class="header_search_form_inner">
                                <input type="text" class="form-control">
                                <button class="btn"><i class="fas fa-search"></i></button>
                                <span>close</span>
                            </div>
                            
                        </div>
                        <p class="search_text">PLEASE TYPE AT LEAST 4 CHARACTERS FOR SEARCH SUGGESTIONS.</p> 
                    </div>
                    
                    <div class="header_account h_o_dropdown profile_dropdown" id="xxxx">
                        <div class="header_account_inner">
                            <ul>
                                <li><a href="#">My Profile</a></li>
                                <li><a href="#">My Profile</a></li>
                            </ul>       
                        </div>
                    </div> 
                    
                    <li data-toggle="collapse_noslide" data-target="#user"><i class="far fa-user"></i></li>
                    <div class="header_account h_o_dropdown" id="user">
                        <div class="header_account_inner">
                            <div class="form_inline">
                                <label class="required">Email</label>
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form_inline">
                                <label for="staticEmail">Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <button class="btn_common">login</button>
                            <div class="d_flex_center mt_10 mb_10">
                                <a href="#" class="text-center td_underline tt_u">Forgot Password</a>
                            </div>
                            <p  class="text-center tt_u mb_10">or</p> 
                            <div class="create_acc_btn">
                                <button class="btn_transparent">create an account</button>
                            </div>
                        </div>
                    </div> 

                </ul>
            </div>
        </div>
        <div class="main_header_mobile show_mobile  fixed-top">
            <div class="h_m_left">
                <ul>
                    <li data-toggle="collapse_l_r" data-target="#menu">
                        <div class="menu btn1">
                            <div class="icon-left"></div>
                            <div class="icon-right"></div>
                        </div>
                    </li>
                    <li data-toggle="collapse_l_r" data-target="#msearch">
                        <div class="h_m_search">
                            <span><i class="fas fa-search"></i></span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="h_m_logo">
                <a href="home.html"><img src="{{$logo ? $logo : null}}" alt=""></a> 
            </div>
            <div class="h_m_cart">
                <ul>
                    <li data-toggle="collapse_l_r" data-target="#muser"><span><i class="far fa-user"></i></span></li> 
                </ul>
            </div>
        </div>
        <div class="ct_margin"></div>

        <div class="show_from_left" id="menu">
            <div class="header_menu_inner mobile_nav">
                <ul>
                    <li class="has_child" data-toggle="collapse_m_nav" data-target="#Doctor's">
                        Doctor's
                    </li>
                    <div class="show_from_left" id="Doctor's">
                        <ul class="mobile_submenu">
                            <li><a href="#"> TOPS</a> <span class="back">Back</span></li>
                            <li><a href="#"> BODYSUITS</a></li>
                            <li><a href="#"> DRESSES</a></li>
                            <li><a href="#"> BOTTOMS</a></li>
                            <li><a href="#"> SETS</a></li>
                            <li><a href="#"> ROMPERS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                        </ul>
                    </div>
                    <li class="has_child" data-toggle="collapse_m_nav" data-target="#services">
                        Services
                    </li>
                    <div class="show_from_left" id="services">
                        <ul class="mobile_submenu">
                            <li><a href="#"> XL BODYSUITS</a> <span class="back">Back</span></li>
                            <li><a href="#"> XL TOPS</a></li>
                            <li><a href="#"> XL BOTTOMS</a></li>
                            <li><a href="#"> XL DRESSES</a></li>
                            <li><a href="#"> XL OUTERWEARS</a></li>
                            <li><a href="#"> XL ROMPERS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                        </ul>
                    </div>
                    <li class="has_child" data-toggle="collapse_m_nav" data-target="#members">
                        members
                    </li>
                    <div class="show_from_left" id="members">
                        <ul class="mobile_submenu">
                            <li><a href="#"> XL BODYSUITS</a> <span class="back">Back</span></li>
                            <li><a href="#"> XL TOPS</a></li>
                            <li><a href="#"> XL BOTTOMS</a></li>
                            <li><a href="#"> XL DRESSES</a></li>
                            <li><a href="#"> XL OUTERWEARS</a></li>
                            <li><a href="#"> XL ROMPERS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                        </ul>
                    </div>
                    <li class="has_child" data-toggle="collapse_m_nav" data-target="#Values">
                        Values
                    </li>
                    <div class="show_from_left" id="Values">
                        <ul class="mobile_submenu">
                            <li><a href="#"> XL BODYSUITS</a> <span class="back">Back</span></li>
                            <li><a href="#"> XL TOPS</a></li>
                            <li><a href="#"> XL BOTTOMS</a></li>
                            <li><a href="#"> XL DRESSES</a></li>
                            <li><a href="#"> XL OUTERWEARS</a></li>
                            <li><a href="#"> XL ROMPERS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                        </ul>
                    </div>
                    <li><a href="#"> SALE</a></li>
                    <li class="has_child" data-toggle="collapse_m_nav" data-target="#provider">
                        provider
                    </li>
                    <div class="show_from_left" id="provider">
                        <ul class="mobile_submenu">
                            <li><a href="#"> XL BODYSUITS</a> <span class="back">Back</span></li>
                            <li><a href="#"> XL BODYSUITS</a></li>
                            <li><a href="#"> XL TOPS</a></li>
                            <li><a href="#"> XL BOTTOMS</a></li>
                            <li><a href="#"> XL DRESSES</a></li>
                            <li><a href="#"> XL OUTERWEARS</a></li>
                            <li><a href="#"> XL ROMPERS</a></li>
                            <li><a href="#"> OUTERWEARS</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
            <div class="close_h_menu">
                <span>Close</span>
            </div>
        </div>
        <div class="show_from_left" id="msearch">
            <div class="header_menu_inner">
                <div class="header_search">
                    <div class="header_search_form">
                        <div class="header_search_form_inner">
                            <input type="text" class="form-control">
                            <button class="btn"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <p class="search_text">PLEASE TYPE AT LEAST 4 CHARACTERS FOR SEARCH SUGGESTIONS.</p>
                </div>
            </div>
            <div class="close_h_menu">
                <span>Close</span>
            </div>
        </div>

        <div class="show_from_right" id="muser">
            <div class="header_menu_inner">
                <div class="header_account">
                    <div class="header_account_inner">
                        <div class="form_inline">
                            <label class="required">Email</label>
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form_inline">
                            <label for="staticEmail">Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <button class="btn_common">login</button>
                        <div class="d_flex_center mt_10 mb_10">
                            <a href="#" class="text-center td_underline tt_u">Forgot Password</a>
                        </div>
                        <p  class="text-center tt_u mb_10">or</p>
                         
                        <div class="create_acc_btn">
                            <button class="btn_transparent">create an account</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="close_h_menu">
                <span>Close</span>
            </div>
        </div> 
    </header>
  