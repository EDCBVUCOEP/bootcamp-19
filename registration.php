<?php
   include 'config.php';
   include 'registration_process.php'
   ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <link href="images/flavcon.png" rel="icon">

    <body>


        <div class="container">
<!--             <div class="img-responsive text-center mt-4">
                <img src="edcpng.png" alt="logo" width="25%" height="20%" class="center">
            </div> -->
            <form class="form-horizontal needs-validation" role="form" enctype="multipart/form-data" method="POST">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h2 class="mt-3 text-center" style="padding:30px;"> Register Now
                            <hr> </h2>

                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3 field-label-responsive">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                        <!-- Put name validation error messages here -->
                     </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 field-label-responsive">
                        <label for="branch">College / Organisation Name</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-university"></i></div>
                                <input type="text" name="branch" class="form-control" id="email" placeholder="College/Organisation" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                        <!-- Put e-mail validation error messages here -->
                     </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 field-label-responsive">
                        <label for="c_no">Contact Number</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-mobile"></i></div>
                                <input type="text" name="c_no" class="form-control" maxlength=10 placeholder="Contact Number" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                        <!-- Put e-mail validation error messages here -->
                     </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 field-label-responsive">
                        <label for="w_no">WhatsApp Number</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-whatsapp"></i></div>
                                <input type="text" name="w_no" class="form-control" maxlength=10 placeholder="WhatsApp Number" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                        <!-- Put e-mail validation error messages here -->
                     </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 field-label-responsive">
                        <label for="email">E-Mail Address</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                                <input type="text" name="email" class="form-control" id="email" placeholder="you@example.com" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                        <!-- Put e-mail validation error messages here -->
                     </span>
                        </div>
                    </div>
                </div>
                <!--            <p class="text-secondary">Please watch this video before choosing any domain</p>-->
                <!--            <div class="embed-responsive embed-responsive-16by9">-->
                <!--               <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/ErB5lQZXpSQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
                <!--            </div>-->
                <div class="row">
                    <div class="col-md-3 field-label-responsive">
                        <label for="domain">How would you rate yourself as an Entrepreneur</label>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <div class="form-group  autofocus">
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0 ">
                                <div class="form-check mt-2 mt-2">
                                    <input class="form-check-input move-left" type="radio" name="domain" value="compbeg" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        <strong>  Complete Beginner  </strong>                                                
                           </label>
                                </div>
                                <div class="form-check mt-2 mt-2">
                                    <input class="form-check-input move-left" type="radio" name="domain" value="beg" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        <strong>   Beginner  </strong>                                                
                           </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input move-left" type="radio" value="Intermediate" name="domain" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        <strong>  Intermediate  </strong>                                                 
                           </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input move-left" type="radio" value="Advance" name="domain" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        <strong> Advance </strong>
                           </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input move-left" type="radio" value="Pro" name="domain" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        <strong> Pro  </strong>
                           </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                        <!-- Put e-mail validation error messages here -->
                     </span>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3 field-label-responsive">
                        <label for="ques1">
                  What is the idea you want to work upon in this event?
                  </label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ques1">Answer:</label>
                            <textarea class="form-control" rows="5" name="ques1" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                        <!-- Put name validation error messages here -->
                     </span>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3 field-label-responsive">
                        <label for="ques2">
                        Have you ever worked on your idea ?
                        If yes, then how ?
                  </label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ques2">Answer:</label>
                            <textarea class="form-control" rows="5" name="ques2" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                        <!-- Put name validation error messages here -->
                     </span>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3 field-label-responsive">
                        <label for="ques3">
                  Work Sample ( Blog link/Github Link/Portfolio)
                  </label>
                    </div>
                    <div class="col-md-6">
                        <label for="ques3">Answer:</label>
                        <div class="input-group">
                            <textarea class="form-control" name="ques5"></textarea>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                        <!-- Put name validation error messages here -->
                     </span>
                        </div>
                    </div>
                </div>
                
                
                
             <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Payment Options</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <button type="button" class="btn btn-dark mr-2" data-toggle="modal" data-target="#paytm">Paytm</button>
                        <button type="button" class="btn btn-warning mr-2" data-toggle="modal" data-target="#upi">UPI</button>
                        <!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#cash">Cash</button> -->
                        
                    </div>
                    <br>
                    <p>: <b>Registration Fees: Rs 300/-</b>
                        <br>
                        <p>: In case you have already paid by cash and recieved the reciept please enter reciept number in case of transaction ID</p>
            
                        
                        <p>: In case you want to pay by cash or on spot and not recieved the reciept,then please mention your name in place of transaction ID</p>
                    <input type="text" name="txnid" class="form-control mt-2" placeholder="Transcation Id" required autofocus>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>

                <div class="row mt-4">
                    <div class="col-md-3 mb-4"></div>
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-primary mb-4" name="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>
        
        
        <!-- Modal -->
                <div class="modal fade" id="paytm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">Paytm QR</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <img src="images/paytm.jpeg" width="90%" height="90%" alt="Paytm QR">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2-->
                <div class="modal fade" id="upi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">UPI QR</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                            </div>
                            <div class="modal-body">
                                <img src="images/upi.jpeg" height="65%" width="100%" alt="UPI QR">
                                <h6 align="center" style="color:black;">OR</h6>
                                <h3 class="text-center" style="color:black;">8563028795@ybl</h3>
                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
    </body>

    </html>
