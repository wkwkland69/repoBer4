<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../include/meta.php" ?>
    <title>
        Dashboard
    </title>
    <?php include "../include/css.php" ?>
</head>
<body class="g-sidenav-show bg-gray-100">
<?php include "../include/sidebar.php" ?>
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
            <div class="container-fluid py-1">
                <nav aria-label="breadcrumb">
                    <h6 class="text-white font-weight-bolder ms-2">Profile</h6>
                </nav>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm" id="profileImage">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                <span id="h_name"></span>
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                <span id="headline"></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                                <li class="nav-item">
                                    <a href="javascript:;" data-toggle="modal" data-target="#userModel" id="profileModel">
                                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile" aria-hidden="true"></i><span class="sr-only">Edit Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" data-toggle="modal" data-target="#uploadPictureModel" id="uploadPictureModel">
                                        <i class="fas fa-camera text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Change Picture" aria-hidden="true"></i><span class="sr-only">Change Picture</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12 col-xl-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Platform Settings</h6>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                            <ul class="list-group">
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox" id="email_follow_me">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="email_follow_me">Email me when someone follows me</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox" id="email_answers_my_post">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="email_answers_my_post">Email me when someone answers on my post</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox" id="email_someone_mentions_me">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="email_someone_mentions_me">Email me when someone mentions me</label>
                                    </div>
                                </li>
                            </ul>
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                            <ul class="list-group">
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox" id="new_launches_projects">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="new_launches_projects">New launches and projects</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox" id="monthly_product_updates">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="monthly_product_updates">Monthly product updates</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0 pb-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox" id="subscribe_to_newsletter">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="subscribe_to_newsletter">Subscribe to newsletter</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-8">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Profile Information</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="javascript:;" data-toggle="modal" data-target="#userInfoModel" id="getUserInfo">
                                        <i class="fas fa-user-edit text-secondary text-sm" title="Edit Profile"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <p class="text-sm" id="description"></p>
                            <hr class="horizontal gray-light my-4">
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; <span id="name"></span></li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; <span id="mobile"></span></li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; <span id="email"></span></li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; <span id="location"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Update Profile -->
        <div class="modal fade" id="userModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="updateUser">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="fname">Enter Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="fname">
                            </div>
                            <div class="mb-3">
                                <label for="ftitle">Enter headline</label>
                                <input type="text" class="form-control" placeholder="title" name="title" id="ftitle">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_1">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Update Profile Information -->
        <div class="modal fade" id="userInfoModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Profile Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="updateUserInfo">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="infoName">Enter Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="infoName">
                            </div>
                            <div class="mb-3">
                                <label for="infoDescription">Enter Description</label>
                                <textarea name="description" id="infoDescription" class="form-control" placeholder="Description" cols="30" rows="10"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="infoMobile">Enter Mobile</label>
                                <input type="text" class="form-control" placeholder="Mobile" name="mobile" id="infoMobile">
                            </div>
                            <div class="mb-3">
                                <label for="infoEmail">Enter Email</label>
                                <input type="text" class="form-control" placeholder="email" name="email" id="infoEmail">
                            </div>
                            <div class="mb-3">
                                <label for="infoLocation">Enter Location</label>
                                <input type="text" class="form-control" placeholder="location" name="location" id="infoLocation">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_2">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Upload Picture -->
        <div class="modal fade" id="uploadPictureModel" tabindex="-1" role="dialog" aria-labelledby="uploadPictureModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="uploadPictureModalLabel">Upload Profile Picture</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="uploadProfilePicture" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="profilePicture">Choose Picture</label>
                                <input type="file" class="form-control" name="profile_picture" id="profilePicture" accept="image/*">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Upload Picture</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "../include/js.php" ?>
<script src="../assets/js/custom/profile.js"></script>
<script>
    document.getElementById('uploadProfilePicture').addEventListener('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        fetch('/api/v1/update/profile/picture', {
            method: 'POST',
            body: formData,
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                document.getElementById('profileImage').src = '/storage/' + data.path;
                alert('Profile picture updated successfully');
                document.getElementById('close_upload_modal').click();
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    });
</script>
</body>
</html>
