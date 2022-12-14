<?php include ('header.php') ?>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1.png)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Donate now</li>
                    </ul>
                    <h2>Donate now</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Donate Now Start-->
        <section class="donate-now">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="donate-now__left">
                            <div class="donate-now__enter-donation">
                                <h3 class="donate-now__title">Enter your donation</h3>
                                <div class="donate-now__enter-donation-input">
                                    <select class="selectpicker">
                                        <option>$</option>
                                        <option>₤</option>
                                        <option>¥</option>
                                    </select>
                                    <input type="text" name="donation-money" value=".00">
                                </div>
                            </div>
                            <div class="donate-now__personal-info-box">
                                <h3 class="donate-now__title">Personal info</h3>
                                <form class="donate-now__personal-info-form">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="First name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="Last name" name="last-name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="Phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="Address" name="Address">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <select class="selectpicker" aria-label="Default select example">
                                                    <option selected>Country</option>
                                                    <option value="1">USA</option>
                                                    <option value="2">England</option>
                                                    <option value="3">Australia</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div
                                                class="donate-now__personal-info-input donate-now__personal-info-message-box">
                                                <textarea name="message" placeholder="Write message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="donate-now__payment-info">
                                <h3 class="donate-now__title">Payment info</h3>
                                <form class="donate-now__payment-info-form">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="donate-now__payment-info-input">
                                                <input type="text" placeholder="Card number" name="number">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__payment-info-input">
                                                <input type="text" placeholder="MM / YY" name="date" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__payment-info-input">
                                                <input type="text" placeholder="Card code ( CVC )" name="code">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__payment-info-input">
                                                <input type="text" placeholder="Billing address" name="Billing">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__payment-info-input">
                                                <input type="text" placeholder="City" name="City">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__payment-info-input">
                                                <select class="selectpicker" aria-label="Default select example">
                                                    <option selected>Country</option>
                                                    <option value="1">Pakistan</option>
                                                    <option value="2">England</option>
                                                    <option value="3">USA</option>
                                                    <option value="3">UAE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="donate-now__payment-info-btn-box">
                                        <button type="submit" class="thm-btn donate-now__payment-info-btn">Donate
                                            now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="donate-now__right">
                            <div class="causes-one__single">
                                <div class="causes-one__img">
                                    <img src="assets/images/resources/134-111.jpg" alt="">
                                    <div class="causes-one__cat">
                                        <p>Education</p>
                                    </div>
                                </div>
                                <div class="causes-one__content">
                                    <h3 class="causes-one__title"><a href="donation-details.php">Let’s education for
                                            children get good
                                            life</a>
                                    </h3>
                                    <p class="causes-one__text">There are many childrens who are waiting for your help to get education</p>
                                </div>
                            </div>
                            <div class="donation-details__organizer">
                                <div class="sidebar-shape-1"
                                    style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                                <div class="donation-details__organizer-img">
                                    <img src="assets/images/resources/shazia-khan.jpg" alt="">
                                </div>
                                <div class="donation-details__organizer-content">
                                    <p class="donation-details__organizer-date">Created 20 Nov, 2022</p>
                                    <p class="donation-details__organizer-title">Organizer:</p>
                                    <p class="donation-details__organizer-name">Shazia Khan (CEO)</p>
                                    <ul class="list-unstyled donation-details__organizer-list">
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-tag"></span>
                                            </div>
                                            <div class="text">
                                                <p>Education</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-map-marker-alt"></span>
                                            </div>
                                            <div class="text">
                                                <p>Lahore,Pakistan</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Donate Now End-->

        <?php include ('footer.php') ?>