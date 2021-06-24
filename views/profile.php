<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('menubar.php'); ?>

<h1 style="font-family: cheddar; text-align: center; margin-top: 20pt;"> Profile Page </h1>

    <div class="card outter">
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <!-- below is the profile picture (left) -->
                            <div class="col-6 col-md-3 pfp-area">
                                <h1 class="pageHeader">FirstName</h1>
                                <img src="../images/profile2.jpg" class="pfp img-thumbnail">
                                <h1 class="pageHeader">LastName</h1>
                            </div>
                            <!-- below contains the stamps (right) -->
                            <div class="col-12 col-md-9"> 
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6 col-md-4"> 
                                            
                                            <div class="card bg-light mb-3" style="max-width: 100pt; margin-top: 35pt;">
                                                <div class="card-header" style="font-size: 20pt;">Team</div>
                                                <div class="card-body">
                                                    <h5 class="card-title" style="font-size: 20pt;">Peaches</h5>
                                                </div>
                                            </div>

                                        </div> 
                                        
                                        <div class="col-12 col-md-8">
                                            <div class="col">
                                                Water Needed:
                                                <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>    
                                            </div>
                                            <div class="col">
                                                Sunlight Needed:
                                                <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                Ease of Care:
                                                <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Insturctions Section -->
            <div class="card instructions">
                <div class="card-header">
                Your Workshops
                </div>
                <div class="card-body">

                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Section</th>
                        <th scope="col">Title</th>
                        <th scope="col">Panelist</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">Saturday, 2:00PM</th>
                        <td>Workshop Title1</td>
                        <td>Panelist1</td>
                        </tr>
                        <tr>
                        <th scope="row">Sunday, 12:00PM</th>
                        <td>Workshop Title2</td>
                        <td>Panelist2</td>
                        </tr>
                        <tr>
                        <th scope="row">Sunday, 1:00PM</th>
                        <td>Workshop Title3</td>
                        <td>Panelist3</td>
                        </tr>
                    </tbody>
                    </table>

                </div>
            </div>

            <div class="container">
            <div class="row">
                <div class="col-sm" style="font-size: 25pt;">
                Saturday, June 26th @ 2:00PM - 3:00PM
                <br><p>- Penguyen & I: Business From Scratch
                <br>- How to Live Life at Half Price
                <br>- Indigenous cultures in Vietnam
                <br>- Find Your Asian Drama Match
                </p>
                </div>
                <div class="col-sm" style="font-size: 25pt;">
                Sunday, June 27th @ 12:00PM - 1:00PM
                <br><p>- How to Cultivate a Productive Space
                <br>- The Vietnamese Wedding
                <br>- A Hidden Enemy: Microaggressions
                <br>- Black Lives Matter
                </p>
                </div>
                <div class="col-sm" style="font-size: 25pt;">
                Sunday, June 27th @ 1:00PM -2:00PM
                <br><p>- Professionalism: SWAG
                <br>- How to Get a Job: Starter Pack
                <br>- Improv Comedy
                <br>- Dismantling the AAPI Girlboss
                </p>
                </div>
            </div>
            </div>
           
        </div>
     </div>
</body>
</html>