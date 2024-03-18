<link rel="stylesheet" href="../../vendor/css/profile.css">
<link rel="stylesheet" href="../../vendor/css/popup.css">
<link rel="stylesheet" href="../../vendor/css/reset_pass.css">
<div class="profile">
    <div class="d-none">
        <div class="bg-primary border-bottom p-3 d-flex align-items-center">
            <a class="toggle toggle toggle-2" href="#"><span></span></a>
            <h4 class="font-weight-bold m-0 text-white">Profile</h4>
        </div>
    </div>

    <div class="container position-relative">
        <div class="py-5 profile row">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                    <div class="d-flex align-items-center p-3">
                        <div class="left mr-3">


                            <div class="upload" id="upload">
                                <img class="user-profile" src="<?php print_r('assets/images/user/' . $img[7]) ?>" width="100" height="100" title="Change Profile">
                            </div>
                        </div>
                        <div class="right">
                            <h6 class="mb-1 font-weight-bold">
                                <?php print_r($img[1]) ?><i class="feather-check-circle text-success"></i>
                            </h6>
                            <p class="text-muted m-0 small"><span class="email-form">
                                    <?php print_r($img[2]) ?>
                                </span>
                            </p>
                        </div>
                    </div>
                    </a>
                    <div class="credits d-flex align-items-center p-3 bg-light">
                        <p class="m-0">Accounts Credits</p>
                        <h5 class="m-0 ml-auto text-primary">$52.25</h5>
                    </div>

                    <div class="bg-white profile-details">
                        <a data-toggle="modal" data-target="#paycard" class="d-flex w-100 align-items-center border-bottom p-3">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1 text-dark">Payment Cards</h6>
                                <p class="small text-muted m-0">Add a credit or debit card</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a data-toggle="modal" data-target="#changepass" class="d-flex w-100 align-items-center border-bottom p-3">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1 text-dark">Address</h6>
                                <p class="small text-muted m-0">Add or remove a delivery address</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a class="d-flex align-items-center border-bottom p-3" data-toggle="modal" data-target="#inviteModal">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1">Refer Friends</h6>
                                <p class="small text-primary m-0">Get $10.00 FREE</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="faq.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-truck bg-danger text-white p-2 rounded-circle mr-2"></i>
                                    Delivery Support</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="contact-us.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-phone bg-primary text-white p-2 rounded-circle mr-2"></i>
                                    Contact</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="terms.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-info bg-success text-white p-2 rounded-circle mr-2"></i> Term
                                    of use</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="privacy.html" class="d-flex w-100 align-items-center px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-lock bg-warning text-white p-2 rounded-circle mr-2"></i>
                                    Privacy policy</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <div class="rounded shadow-sm p-4 bg-white">
                    <h5 class="mb-4">My account</h5>
                    <div id="edit_profile">
                        <div>
                            <form action="controllers/profiles/change.account.info.controller.php" method="post">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" value="<?php print_r($img[1]) ?>" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="number">Mobile Number</label>
                                    <input type="number" class="form-control" id="number" value="<?php print_r($img[6]) ?>" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" value="<?php print_r($img[2]) ?>" name="email">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block ">Save Changes</button>
                                </div>
                            </form>
                        </div>




                        <div class="additional" id="close-form-resetpass">
                            <div class="change_password my-3">
                                <a href="#" class="p-3 border rounded  btn d-flex align-items-center">
                                    <button id="changePasswordButton" type="button" class="btn mx-0 p-0 shadow-none" style="border-color:transparent !important;">
                                        Change Password
                                    </button>


                                    <div class="deactivate_account">
                                        <a href="forgot_password.html" class="p-3 border rounded bg-white btn d-flex align-items-center">Deactivate Account
                                            <i class="feather-arrow-right ml-auto"></i>
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-footer fixed-bottom bg-white px-3 py-2 text-center d-none">
            <div class="row">
                <div class="col">
                    <a href="home.html" class="text-dark small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-home text-dark"></i></p>
                        Home
                    </a>
                </div>
                <div class="col">
                    <a href="most_popular.html" class="text-dark small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-map-pin"></i></p>
                        Trending
                    </a>
                </div>
                <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
                    <div class="bg-danger rounded-circle mt-n0 shadow">
                        <a href="checkout.html" class="text-white small font-weight-bold text-decoration-none">
                            <i class="feather-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <a href="favorites.html" class="text-dark small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-heart"></i></p>
                        Favorites
                    </a>
                </div>
                <div class="col selected">
                    <a href="profile.html" class="text-danger small font-weight-bold text-decoration-none">
                        <p class="h4 m-0"><i class="feather-user"></i></p>
                        Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Upload Profile Form -->
    <div id="contact-popup" style="display: none;">
        <form class="contact-form" id="" enctype="multipart/form-data" action="../../controllers/profiles/upload.php" method="post">
            <h1>Upload Profile</h1>
            <div style="margin-top: 10px; margin-bottom: 10px;">
                <div>
                    <input type="file" name="my_image" id="image" class='btn bg-primary text-white'>
                </div>
            </div>
            <div>
                <input type="submit" id="send" name="send" value="Upload" />
            </div>
        </form>
    </div>
    <!-- Upload Profile Form -->


    <!-- Change Password Form -->
    <div class="modal fade" id="changepass" tabindex="-1" style="background-color: transparent;" aria-labelledby="changepassLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="background-color: transparent; width:600px;">

            <div class="modal-content col-12">
                <div class="modal-body">

                    <div class="container-2 col-12">

                        <div class="d-flex justify-content-between mt-3">
                            <h1 class="pass-reset-title">Change Password</h1>
                            <button type="button" class="btn btn-outline-danger border-2 shadow-none btn-close close" aria-label="Close" style="width:32px; height:32px;" onmouseover="this.classList.remove('text-dark-subtle'); this.classList.add('text-danger');" onmouseout="this.classList.remove('text-danger'); this.classList.add('text-dark-subtle');">
                                <i class="feather-x"></i>
                            </button>
                        </div>
                        <?php if (isset($successMessage)) : ?>
                            <div class="success">
                                <?php echo $successMessage; ?>
                            </div>
                        <?php else : ?>
                            <form class="form-resetpassword" action="controllers/reset/change_password.controller.php" method="post">
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-3 col-form-label">Email:</label>
                                    <div class="col-sm-9">
                                        <input type="email" id="email" name="email">
                                        <span class="error">
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="current_password" class="col-sm-3 col-form-label">Current
                                        Password:</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="current_password" name="current_password">
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="new_password" class="col-sm-3 col-form-label">New
                                        Password:</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="new_password" name="new_password">
                                        <span class="error">
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="confirm_password" class="col-sm-3 col-form-label">Confirm
                                        Password:</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="confirm_password" name="confirm_password">
                                        <span class="error">
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="button-submit-change">
                                        <input type="submit" value="Change Password">
                                    </div>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <i class="feather-arrow-right ml-auto"></i>
    </a>

    <!-- Change Password Form -->
    <?php

    echo "<script>

let pop = document.querySelector('#contact-popup');
let upload = document.querySelector('#upload');
let send = document.querySelector('#send');

upload.addEventListener('click', ()=>{
    pop.style.display = 'block';
});

send.addEventListener('click', ()=>{
    pop.style.display = 'none';
});




</script>"

    ?>

    <!-- Change Password Popup -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const changePasswordButton = document.querySelector("#changePasswordButton");
            const modal = new bootstrap.Modal(document.getElementById('changepass'));

            changePasswordButton.addEventListener("click", function() {
                modal.show();
            });

            const closeButton = document.querySelector("#changepass .btn-close");
            closeButton.addEventListener("click", function() {
                modal.hide();
            });
        });
    </script>
</div>
</div>

<!-- Change Password Popup -->