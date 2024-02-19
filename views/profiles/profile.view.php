<div class="osahan-profile">
    <div class="d-none">
        <div class="bg-primary border-bottom p-3 d-flex align-items-center">
            <a class="toggle togglew toggle-2" href="#"><span></span></a>
            <h4 class="font-weight-bold m-0 text-white">Profile</h4>
        </div>
    </div>
    <div class="container position-relative">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                    <a href="#" class>
                        <form class="form" id="form" action="" enctype="multipart/form-data" method="post">
                            <div class="upload d-flex align-items-center">
                                <?php
                                    session_start();
                                    $sessionId = 1; // User's session
                                    $userStmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
                                    $userStmt->execute([$sessionId]);
                                    $user = $userStmt->fetch(); 

                                    $id = $user["id"];
                                    $name = $user["name"];
                                    $image = $user["image"];
                                    ?>
                                <div class="left mr-3">
                                    <img src="../../assets/images/user1.jpg" width="80" height="80"
                                        title="<?php echo $image; ?>" id="profileImage">
                                </div>
                                <div class="round" onclick="document.getElementById('image').click();">
                                    <i class="fa fa-camera" style="color: #fff;"></i>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="hidden" name="name" value="<?php echo $name; ?>">
                                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png"
                                    style="display: none;">
                                <div class="right d-flex flex-column">
                                    <h6 class="mb-1 font-weight-bold" style="width: 300px;">Gurdeep Singh<i
                                            class="feather-check-circle text-success ml-2"></i></h6>
                                    <p class="text-muted m-0 small"><span class="__cf_email__"
                                            data-cfemail="fd949c90928e9c959c93bd9a909c9491d39e9290">[email&#160;protected]</span>
                                    </p>
                                </div>
                                <script type="text/javascript">
                                document.getElementById("image").onchange = function() {
                                    document.getElementById("form").submit();
                                };
                                </script>
                                <?php
                                if (isset($_FILES["image"]["name"])) {
                                    $id = $_POST["id"];
                                    $name = $_POST["name"];
                                    $imageName = $_FILES["image"]["name"];
                                    $imageSize = $_FILES["image"]["size"];
                                    $tmpName = $_FILES["image"]["tmp_name"];

                                    $validImageExtension = ['jpg', 'jpeg', 'png'];
                                    $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);
                                    if (!in_array($imageExtension, $validImageExtension)) {
                                        echo "<script>alert('Invalid Image Extension'); document.location.href = '../updateimageprofile';</script>";
                                    } elseif ($imageSize > 1200000) {
                                        echo "<script>alert('Image Size Is Too Large'); document.location.href = '../updateimageprofile';</script>";
                                    } else {
                                        $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
                                        $newImageName .= '.' . $imageExtension;
                                        $query = "UPDATE tb_user SET image = ? WHERE id = ?";
                                        $stmt = $conn->prepare($query);
                                        $stmt->execute([$newImageName, $id]);
                                        move_uploaded_file($tmpName, 'img/' . $newImageName);
                                        echo "<script>document.location.href = '../updateimageprofile';</script>";
                                    }
                                };
                                ?>
                            </div>
                        </form>
                        <style>
                        .upload {
                            width: 72px;
                            position: relative;
                            padding: 5px;
                        }

                        .upload img {
                            border-radius: 50%;
                            border: 8px solid #DCDCDC;
                            cursor: pointer;
                        }

                        .upload .round {
                            position: absolute;
                            top: 65px;
                            bottom: 0;
                            right: 0;
                            background: #00B4FF;
                            width: 20px;
                            height: 20px;
                            line-height: 22px;
                            text-align: center;
                            border-radius: 50%;
                            overflow: hidden;
                            cursor: pointer;
                        }

                        input[type=file]::-webkit-file-upload-button {
                            cursor: pointer;
                        }
                        </style>
                        <script type="text/javascript">
                        let profileImage = document.getElementById('profileImage');

                        function showPopup() {
                            alert("Pop-up message!");
                        }

                        profileImage.addEventListener('click', showPopup);
                        </script>
                    </a>
                    <div class="osahan-credits d-flex align-items-center p-3 bg-light">
                        <p class="m-0">Accounts Credits</p>
                        <h5 class="m-0 ml-auto text-primary">$52.25</h5>
                    </div>

                    <div class="bg-white profile-details">
                        <a data-toggle="modal" data-target="#paycard"
                            class="d-flex w-100 align-items-center border-bottom p-3">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1 text-dark">Payment Cards</h6>
                                <p class="small text-muted m-0">Add a credit or debit card</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a data-toggle="modal" data-target="#exampleModal"
                            class="d-flex w-100 align-items-center border-bottom p-3">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1 text-dark">Address</h6>
                                <p class="small text-muted m-0">Add or remove a delivery address</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a class="d-flex align-items-center border-bottom p-3" data-toggle="modal"
                            data-target="#inviteModal">
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
                                <h6 class="font-weight-bold m-0 text-dark"><i
                                        class="feather-truck bg-danger text-white p-2 rounded-circle mr-2"></i>
                                    Delivery Support</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="contact-us.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i
                                        class="feather-phone bg-primary text-white p-2 rounded-circle mr-2"></i>
                                    Contact</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="terms.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i
                                        class="feather-info bg-success text-white p-2 rounded-circle mr-2"></i> Term
                                    of use</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="privacy.html" class="d-flex w-100 align-items-center px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i
                                        class="feather-lock bg-warning text-white p-2 rounded-circle mr-2"></i>
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
                            <form action="my_account.html">
                                <div class="form-group">
                                    <label for="exampleInputName1">First Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1d" value="Gurdeep">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" value="Singh">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNumber1">Mobile Number</label>
                                    <input type="number" class="form-control" id="exampleInputNumber1"
                                        value="1234567890">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        value="iamosahan@gmail.com">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                </div>
                            </form>
                        </div>
                        <div class="additional">
                            <div class="change_password my-3">
                                <a href="forgot_password.html"
                                    class="p-3 border rounded bg-white btn d-flex align-items-center">Change
                                    Password
                                    <i class="feather-arrow-right ml-auto"></i></a>
                            </div>
                            <div class="deactivate_account">
                                <a href="forgot_password.html"
                                    class="p-3 border rounded bg-white btn d-flex align-items-center">Deactivate
                                    Account
                                    <i class="feather-arrow-right ml-auto"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
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