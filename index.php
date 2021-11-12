<?php 
include_once("inc/User.php");
$user = new User();
include 'header.php'; 
?>
<div class="row justify-content-center">
 
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Login</div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" action="#">
                                    <div class="mb-3">
										  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email">
									</div>
                                    <div class="mb-3">
										  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Your Password">
									</div>
									 <div class="col-auto">
										    <button type="submit" class="btn btn-primary mb-3">Login</button>
										  </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>
</html>