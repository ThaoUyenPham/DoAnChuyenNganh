<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $context = Context::getContext();
    //luu css va add vao nhu nay, khong goi truc tiep link css hay js tu he thong khac > viec nay tranh viec tan cong tu he thong thu 3 > luu y
    $context->prependStylesheet([
        'public/libs/ionicons/2.0.0/css/ionicons.min' => ['cache' => true],
        'public/libs/font-awesome-4.7.0/css/font-awesome.min' => ['cache' => true],
        'public/libs/bootstrap-3.3.7-dist/css/bootstrap.min' => ['cache' => true],
        'public/css/cssHeaderFooter' => ['cache' => true]
        
    ]);
    echo $context->getEmbedStylesheet();
    $context->prependJavascript([
        'public/libs/bootstrap-3.3.7-dist/js/bootstrap.min' => ['cache' => true],
        'public/libs/jquery/jquery-3.6.min' => ['cache' => true]
    ]);
    echo $context->getEmbedJavascript();
    ?> 
</head>
<body>
<div class="header">
    <div class="mainHeader">
        <div class="topHeader">
            <!-- <div class="RowHeader hollow"></div> -->
            <div class="container">
                <div class="top-wrap">
                    <div class="header-top-logo"><img src="<?php echo SITE_ROOT_IMG;?>tttl/img/logo.webp" alt="" width="50%" height="90%"></div>
                    <div class="header-top-search">
                        <form action="" name="">
                            <div class="form-search">
                                <input type="text" class="search-input" placeholder="NHẬP TỪ KHÓA MUỐN TÌM KIẾM">
                                <button type="submit" class="btn">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.72626 1.76055C2.83949 0.625242 4.31959 0 5.89391 0C7.46823 0 8.94833 0.625242 10.0615 1.76055C11.1747 2.89584 11.7878 4.4053 11.7878 6.01081C11.7878 7.47871 11.2751 8.86607 10.3365 9.96084L13.6097 13.2991C13.767 13.4594 13.767 13.7194 13.6097 13.8797C13.5311 13.9599 13.4281 14 13.3251 14C13.2221 14 13.119 13.9599 13.0404 13.8797L9.76711 10.5415C8.69364 11.4987 7.33326 12.0217 5.89391 12.0217C4.31957 12.0217 2.83952 11.3964 1.72629 10.2611C0.613085 9.12584 3.8147e-06 7.61638 3.8147e-06 6.01084C3.8147e-06 4.4053 0.613058 2.89584 1.72626 1.76055ZM2.29564 9.68048C4.27975 11.7039 7.50804 11.7039 9.49215 9.68048C11.4762 7.65704 11.4762 4.36466 9.49215 2.34123C8.5 1.3294 7.19716 0.823648 5.89388 0.823648C4.59093 0.823648 3.28755 1.32964 2.29561 2.34123C0.311584 4.36464 0.311584 7.65702 2.29564 9.68048Z" fill="#212121"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <div class="header-top-keywords marquee">
                            <div class="owl-stage">
                                <div class="owl-item">
                                    <a href="">mặt nạ</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">son môi</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">má hồng</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">nước tẩy trang</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">sữa rửa mặt</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">kem chống nắng</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">serum</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">cushion</a></a>
                                </div>
                                <div class="owl-item">
                                    <a href="">kem nền</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">phấn phủ</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">toner</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">sữa tắm</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">mascara</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">merzy</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">romand</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">3ce</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">cocoon</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">má hồng</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">black rouge</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">bbia</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">zeeesa</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">dầu gội</a>
                                </div><div class="owl-item">
                                    <a href="">periera</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">M.O.I</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">tẩy tế bào chết</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">dưỡng ẩm</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">mặt nạ</a>
                                </div>
                                <div class="owl-item">
                                    <a href="">son tobboki</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-top-tools">
                        <div class="header-top-info">Hot line: 19054254</div>
                        <div class="header-top-icon">
                            <a href=""><svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11 13.125C14.3827 13.125 17.125 10.3827 17.125 7C17.125 3.61726 14.3827 0.875 11 0.875C7.61723 0.875 4.87497 3.61726 4.87497 7C4.87497 10.3827 7.61723 13.125 11 13.125ZM11 14C14.866 14 18 10.866 18 7C18 3.13401 14.866 0 11 0C7.13398 0 3.99997 3.13401 3.99997 7C3.99997 10.866 7.13398 14 11 14Z" fill="#212121"></path>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0.859157 20.9996C0.859202 20.9994 0.859254 20.9991 0.429561 20.8972C-0.000131505 20.7952 -6.79857e-05 20.7949 1.77457e-06 20.7946L0.000172552 20.7938L0.000627901 20.7917L0.00200095 20.7855L0.00665644 20.7651C0.0106313 20.748 0.0163807 20.724 0.0240861 20.6937C0.0394944 20.6329 0.0627409 20.5464 0.0952824 20.4378C0.160337 20.2207 0.262719 19.9148 0.414187 19.5496C0.716819 18.82 1.21751 17.8489 2.01193 16.8775C3.61168 14.9212 6.37431 13 11 13C15.6257 13 18.3883 14.9212 19.9881 16.8775C20.7825 17.8489 21.2832 18.82 21.5858 19.5496C21.7373 19.9148 21.8397 20.2207 21.9047 20.4378C21.9373 20.5464 21.9605 20.6329 21.9759 20.6937C21.9836 20.724 21.9894 20.748 21.9933 20.7651L21.998 20.7855L21.9994 20.7917L21.9998 20.7938L22 20.7946C22.0001 20.7949 22.0001 20.7952 21.5704 20.8972C21.1407 20.9991 21.1408 20.9994 21.1408 20.9996L21.1405 20.9981L21.1379 20.9866C21.1353 20.9756 21.1311 20.9578 21.125 20.9337C21.1128 20.8856 21.0932 20.8124 21.0648 20.7178C21.008 20.5284 20.9164 20.2537 20.7788 19.922C20.5034 19.258 20.0461 18.3709 19.321 17.4843C17.8818 15.7242 15.3592 13.9291 11 13.9291C6.64081 13.9291 4.11823 15.7242 2.67897 17.4843C1.9539 18.3709 1.49664 19.258 1.2212 19.922C1.08363 20.2537 0.99195 20.5284 0.935197 20.7178C0.906834 20.8124 0.887241 20.8856 0.875037 20.9337C0.868935 20.9578 0.864685 20.9756 0.862111 20.9866L0.859488 20.9981L0.859157 20.9996ZM21.1409 20.9999C21.1409 21 21.1409 21 21.1409 20.9999L21.1409 20.9999Z" fill="#212121"></path>
							</svg></a>
                            <a href=""><svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11.5322 4.01538C11.6056 4.21005 11.7919 4.33889 12 4.33889C12.2081 4.33889 12.3944 4.21005 12.4678 4.01538C13.2238 2.01148 15.5765 0.5 18 0.5C21.0434 0.5 23.5 2.88657 23.5 5.75833C23.5 8.09972 22.4687 10.4862 20.4637 12.9268C18.5068 15.3087 15.6467 17.7114 12 20.1309C8.35334 17.7114 5.49323 15.3087 3.53634 12.9268C1.53131 10.4862 0.5 8.09972 0.5 5.75833C0.5 2.86737 2.93657 0.5 6 0.5C8.42355 0.5 10.7762 2.01148 11.5322 4.01538Z" stroke="#222222" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg></a>
                            <a href=""><svg width="17" height="23" viewBox="0 0 17 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M16.4591 6.78643C16.4536 6.78643 16.4536 6.78643 16.4481 6.78643H13.2468V4.44242C13.2468 1.99161 11.1714 0 8.63799 0C6.10455 0 4.02922 1.99161 4.02922 4.44242V6.78643H0.551948C0.253896 6.78109 0.00551948 7.01069 0 7.29902C0 7.30436 0 7.30436 0 7.30969V19.772C0 21.2456 1.23636 22.4363 2.75974 22.4363H14.2403C15.7636 22.4363 17 21.2456 17 19.772V7.30969C17 7.02136 16.7571 6.78643 16.4591 6.78643ZM5.13312 4.44242C5.13312 2.57895 6.71169 1.06789 8.63799 1.06789C10.5643 1.06789 12.1429 2.57895 12.1429 4.44242V6.78643H5.13312V4.44242ZM15.8961 19.7666C15.8961 20.6476 15.1565 21.3631 14.2403 21.3631H2.75974C1.84903 21.3631 1.1039 20.653 1.1039 19.772V7.85432H4.02922V10.9565C4.02922 11.2502 4.2776 11.4905 4.58117 11.4905C4.88474 11.4905 5.13312 11.2502 5.13312 10.9565V7.85432H12.1429V10.9565C12.1429 11.2502 12.3912 11.4905 12.6948 11.4905C12.9984 11.4905 13.2468 11.2502 13.2468 10.9565V7.85432H15.8961V19.7666Z" fill="#212121"></path>
							</svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="RowHeader hollow"></div> -->
        </div>
        <div class="bottomHeader">
            <div class="container">
                <div class="bottom-wrap">
                    <div class="containerBottom">
			            <div class="f-menu-wrap">
				            <div class="f-menu">
					            <ul class="info_menu">
                                    <li class="home"><a href="#">HOME</a>
                                        <div class="menu_box">
                                            <div class="index-slider-nav">
                                                <ul>
                                                    <li>
                                                        <div class="sticker">
                                                            <img class="img-fluid" alt="Trang điểm" src="//theme.hstatic.net/1000006063/1000748098/14/vertical_menu_icon_1.png?v=16638">
                                                        </div>
                                                        <div class="tittle">
                                                            <a href=""><span>Trang điểm</span></a>
                                                        </div> 
                                                    </li>	
                                                    <li>
                                                        <div class="sticker">
                                                            <img class="img-fluid" alt="Chăm sóc da mặt" src="//theme.hstatic.net/1000006063/1000748098/14/vertical_menu_icon_2.png?v=16659">
                                                        </div>
                                                        <div class="tittle">
                                                            <a href=""><span>Chăm sóc da mặt</span></a>
                                                        </div>
                                                    <li>
                                                    <li>
                                                        <div class="sticker">
                                                            <img class="img-fluid" alt="Chăm sóc cơ thể" src="//theme.hstatic.net/1000006063/1000748098/14/vertical_menu_icon_3.png?v=16659">
                                                        </div>
                                                        <div class="tittle">
                                                            <a href=""><span>Chăm sóc cơ thể</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sticker">
                                                            <img class="img-fluid" alt="Chăm sóc tóc và da đầu" src="//theme.hstatic.net/1000006063/1000748098/14/vertical_menu_icon_4.png?v=16659">
                                                        </div>
                                                        <div class="tittle">
                                                            <a href=""><span>Chăm sóc tóc và da đầu</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sticker">
                                                            <img class="img-fluid" alt="Chăm sóc cá nhân" src="//theme.hstatic.net/1000006063/1000748098/14/vertical_menu_icon_5.png?v=16659">
                                                        </div>
                                                        <div class="tittle">
                                                            <a href=""><span>Chăm sóc cá nhân</span> </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sticker">
                                                            <img class="img-fluid" alt="Nước hoa" src="//theme.hstatic.net/1000006063/1000748098/14/vertical_menu_icon_6.png?v=16659">
                                                        </div>
                                                        <div class="tittle">
                                                            <a href=""> <span>Nước hoa</span> </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sticker">
                                                        <img class="img-fluid" alt="Thiết bị làm đẹp" src="//theme.hstatic.net/1000006063/1000748098/14/vertical_menu_icon_7.png?v=16855">
                                                        </div>
                                                        <div class="tittle">
                                                            <a href=""><span>Thiết bị làm đẹp</span> </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>                                            
                                            
                                        </div>                                        
                                    </li>
                                    <li>SALE</li>
                                    <li>BÁN CHẠY</li>
                                    <li>NEW</li>
                                    <li>CHĂM SÓC DA
                                        <span><svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 6L9 1" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></span>
                                        <div class="menu-list">
                                            <div class="menu-list-sub">
                                                <div class="container">
                                                    <div class="menu-list-tittle"><span><b>CHĂM SÓC PHỤ KHOA</b></span>
                                                        <div>
                                                            <ul>
                                                                <li>Băng vệ sinh</li>
                                                                <li>Dung dịch vệ sinh</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="menu-list-tittle"><span><b>QUY TRÌNH DƯỠNG DA</b></span>
                                                        <div>
                                                            <ul>
                                                                <li>Tẩy Trang</li>
                                                                <li>Sửa Rửa Mặt</li>
                                                                <li>Mặt Nạ Rửa Mặt</li>
                                                                <li>Tẩy Da Chết</li>
                                                                <li>Nước Hoa Hồng</li>
                                                                <li>Tinh Chất Dưỡng</li>
                                                                <li>Sữa Dưỡng</li>
                                                                <li>Dưỡng Mắt/Mí</li>
                                                                <li>Kem Dưỡng/Gel/Tinh Dầu</li>
                                                                <li>Kem Tone Up</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="menu-list-tittle"><span><b>GIẢI PHÁP LÀN DA</b></span>
                                                        <div>
                                                            <ul>
                                                                <li>Mụn Đầu Đen</li>
                                                                <li>Mụn Đỏ - Kích Ứng</li>
                                                                <li>Dưỡng Trắng - Trị Thâm</li>
                                                                <li>Mờ Nám Da</li>
                                                                <li>Cấp Nước</li>
                                                                <li>Tái Tạo - Chống Nắng</li>
                                                                <li>Dưỡng Ẩm Da</li>
                                                                <li>Trị Rạn Da</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="menu-list-tittle"><span><b>CHĂM SÓC CÁ NHÂN</b></span>
                                                        <div>
                                                            <ul>
                                                                <li>Khẩu Trang/ Rửa Tay</li>
                                                                <li>Sơn Móng Tay</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="menu-list-tittle"><span><b>THIẾT BỊ LÀM ĐẸP</b></span>
                                                        <div>
                                                            <ul>
                                                                <li>Máy Chăm Sóc Da</li>
                                                                <li>Máy rửa mặt</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>TRANG ĐIỂM
                                        <span>
                                            <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 6L9 1" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        <div class="menu-list">
                                            <div class="menu-list-sub">
                                                <div class="container">
                                                    <div class="menu-list-tittle"><span><b>MẶT</b></span>
                                                        <div>
                                                            <ul>
                                                                <li>Kem Lót</li>
                                                                <li>Che Khuyết Điểm</li>
                                                                <li>Bb Cream/ Kem Nền</li>
                                                                <li>Phấn Nước</li>
                                                                <li>Má Hồng</li>
                                                                <li>Tạo Khối</li>
                                                                <li>Phần Nền/Phấn Phủ</li>
                                                                <li>Xịt Cố Định MakeUp</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="menu-list-tittle"><span><b>MẮT</b></span>
                                                        <div>
                                                            <ul>
                                                                <li>Kem Lót</li>
                                                                <li>Kẻ Chân Mày</li>
                                                                <li>Phấn Mắt/Nhũ Mắt</li>
                                                                <li>Kẻ Viền Mắt</li>
                                                                <li>Mascara</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="menu-list-tittle"><span><b>MÔI</b></span>
                                                        <div>
                                                            <ul>
                                                                <li>Son Lót</li>
                                                                <li>Son Thỏi</li>
                                                                <li>Son Kem</li>
                                                                <li>Son Bóng/Son Tint</li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="menu-list-tittle"><span><b>DỤNG CỤ TRANG ĐIỂM</b></span>
                                                        <div>
                                                            <ul>
                                                                <li>Bông Tẩy Trang</li>
                                                                <li>Cọ Trang Điểm</li>
                                                                <li>Mút Trang Điểm</li>
                                                                <li>Mi Giả/Dán M_1_PI</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="menu-list-tittle"><span><b>THIẾT BỊ LÀM ĐẸP</b></span>
                                                        <div>
                                                            <ul>
                                                                <li>Máy Chăm Sóc Da</li>
                                                                <li>Máy rửa mặt</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </li>
                                    <li>THƯƠNG HIỆU</li>
                                </ul>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>