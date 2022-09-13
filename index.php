<!doctype html>
<html lang="en">
<head>
    <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <title>ASE 230 - class of Fall 2022</title>
    <?php 
        $team = [
            [
                'name' => 'Andrew Woll',
                'title' => 'Software Engineer',
                'prof' => 'Video Game Developer',
                'company' => 'Hypixel',
                'email' => 'wolla2@nku.edu',
                'intro' => 'Welcome to my information page. A little to know about me is that I am a senior at NKU studying Applied Software Engineering. In 2018, I received my Communication Studies degree so I am a returning student. Artificial Intelligence and machine learning are two areas of expertise I would like to learn more about in the future.',
                'blurb' => "Life is like a box of chocolates. You never know what you're gonna get.",
                'skill1' => 'Object-Oriented Programming',
                'skill1_perc' => '85',
                'skill2' => 'Full-Stack Development',
                'skill2_perc' => '70',
                'skill3' => 'Software Design',
                'skill3_perc' => '77',
                'funfact' => 'I am an Eagle Scout so I love being outdoors. I love to go to music festivals and travel in general. My dream as a software engineer is to produce and develop my own roleplaying game.',
                'year' => 4
            ],
            [
                'name' => 'Ben Davis',
                'title' => 'Businessman',
                'prof' => 'CEO',
                'company' => 'Real Good Business',
                'email' => 'davisb@rgb.com',
                'intro' => 'I am an extrodinary businessman.',
                'blurb' => "YOU CAN'T HANDLE THE TRUTH!",
                'skill1' => 'Business',
                'skill1_perc' => '100',
                'skill2' => 'Maniging Business',
                'skill2_perc' => '100',
                'skill3' => 'Advising Business',
                'skill3_perc' => '100',
                'funfact' => 'Taxbrokers love me and business people wanna be me.',
                'year' => 3
            ],
            [
                'name' => 'Jeff Coolsberry',
                'title' => 'Cool Guy',
                'prof' => 'Professor of Coolness',
                'company' => 'University of Cool',
                'email' => 'coolsberryj@uoc.edu',
                'intro' => "Don't be wickity wack, maaan. We're cool around here.",
                'blurb' => 'Far out, maaan.',
                'skill1' => 'Being Cool',
                'skill1_perc' => '99',
                'skill2' => 'Looking Cool',
                'skill2_perc' => '100',
                'skill3' => 'Staying Cool',
                'skill3_perc' => '90',
                'funfact' => "Don't forget that I'm the coolest!",
                'year' => 2
            ]
        ];
    ?>
</head>
<body>
    <div class="container text-center">
        <h1>This is ASE 230 - class of Fall 2022</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <h3>Our Creative <span> Team</span></h3>
                <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
            <div class="line"></div>
            </div>
        </div>
    </div>
    <div class="row">
    <?php 
        for($i=0;$i<count($team);$i++){
        ?>
        <!-- Single Advisor-->
        <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb"><a href="detail.php?index=<?= $i ?>"><img src="https://bootdey.com/img/Content/avatar/avatar<?= $i + 1 ?>.png" alt=""></a>
                    <!-- Social Info-->
                    <div class="social-info"><a href="detail.php?index=<?= $i ?>"><i class="fa fa-facebook"></i></a><a href="detail.php?index=<?= $i ?>"><i class="fa fa-twitter"></i></a><a href="detail.php?index=<?= $i ?>"><i class="fa fa-linkedin"></i></a></div>
                </div>
                <!-- Team Details-->
                    <div class="single_advisor_details_info">
                        <h6><?= $team[$i]['name'] ?></h6>
                        <p class="designation"><?= $team[$i]['title'] ?></p>
                        <?php
                            for($k=0;$k<$team[$i]['year'];$k++) {
                                ?>
                                    <img style="width:25px; height:25px" src="assets/images/collegecap.png">
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php 
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>