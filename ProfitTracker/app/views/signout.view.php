<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- PAGE TITLE HERE -->
	<title>Admin</title>
	
	<link href="<?=ROOT?>/assets/Dashboard/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=ROOT?>/assets/Dashboard/vendor/nouislider/nouislider.min.css">
	<!-- Style css -->
    <link href="<?=ROOT?>/assets/Dashboard/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">  

    <style>
        .gb-icon{
            box-shadow: 4px 4px 8px rgb(189 200 213), -4px -4px 8px rgb(255 255 255) !important;
            border-radius: 50%;
        }
    </style>

</head>
<body>

    <div id="preloader">
        <div class="waviy">
		   <span style="--i:1">L</span>
		   <span style="--i:2">o</span>
		   <span style="--i:3">a</span>
		   <span style="--i:4">d</span>
		   <span style="--i:5">i</span>
		   <span style="--i:6">n</span>
		   <span style="--i:7">g</span>
		   <span style="--i:8">.</span>
		   <span style="--i:9">.</span>
		   <span style="--i:10">.</span>
		</div>
    </div>
    
    <div class="modal fade" id="signoutModal" tabindex="-1" aria-labelledby="signoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <h5 class="modal-title" id="logoutModalLabel"><i class="fas fa-sign-out-alt"></i>
                    <span>Signed Out</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body my-2 text-center text-dark">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-smile-beam fa-4x gb-icon"></i>
                    </div>
                    Thank you for your exceptional dedication, Admin! Have an inspiring day ahead!
                </div>
                <div class="modal-footer d-flex justify-content-center" style="border: none;">
                    <form name="signout" method="post">
                        <button type="submit" class="btn btn-rounded btn-md btn-primary" name="gotit">
                        <i class="fas fa-check-circle"></i> <span>Got It!</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?=ROOT?>/assets/Dashboard/vendor/global/global.min.js"></script>
    <script src="<?=ROOT?>/assets/Dashboard/js/custom.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#signoutModal').modal('show');
        });
    </script>
</body>
</html>
