<!DOC<?php include 'header.php'; ?>
<div class="row justify-content-center">
 
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Register</div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" action="#">

                                    <div class="mb-3">
										  <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Your Name">
									</div>
                                    <div class="mb-3">
										  <input type="text" class="form-control" name="mobile" id="exampleFormControlInput1" placeholder="Your Mobile">
									</div>
									<div class="mb-3">
  								<label class="form-label">Gender</label><br>
									<div class="form-check  form-check-inline">
										  <input class="form-check-input" type="radio" name="gender" value="Male" id="flexRadioDefault1">
										  <label class="form-check-label" for="flexRadioDefault1">
										    Male
										  </label>
										</div>
										<div class="form-check  form-check-inline">
										  <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault2">
										  <label class="form-check-label" for="flexRadioDefault2">
										    Female
										  </label>
										</div>
									</div>
									<div class="mb-3">
										  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
										  <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
										</div>
                                    <div class="mb-3">
										  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email">
									</div>
                                    <div class="mb-3">
										  <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Your Password">
									</div>
                                    <div class="mb-3">
										  <input type="password" name="confirm_password" class="form-control" id="exampleFormControlInput1" placeholder="Confirm Password">
									</div>
									 <div class="col-auto">
										    <button type="submit" class="btn btn-primary mb-3">Register</button>
										  </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>


	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>
</html>