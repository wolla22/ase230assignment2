<head>
    <html lang="en">
    <!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
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
                'funfact' => 'I am an Eagle Scout so I love being outdoors. I love to go to music festivals and travel in general. My dream as a software engineer is to produce and develop my own roleplaying game.'
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
                'funfact' => 'Taxbrokers love me and business people wanna be me.'
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
                'funfact' => "Don't forget that I'm the coolest!"
            ]
        ];
    ?>	
</head>
<body>
    <link rel="stylesheet" href="assets/css/detail.css" />
    <title><?= $team[$_GET['index']]['name'] ?></title>
        <div class="container text-center mb-5">
            <h1>This is ASE 230 - <?= $team[$_GET['index']]['name'] ?></h1>
            <a href="index.php">Go Back</a>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="mb-2">
                    <img class="w-100" src="https://bootdey.com/img/Content/avatar/avatar<?= $_GET['index'] + 1 ?>.png" alt="">
                </div>
                <div class="mb-2 d-flex">
                    <h4 class="font-weight-normal"><?= $team[$_GET['index']]['name'] ?></h4>
                    <div class="social d-flex ml-auto">
                        <p class="pr-2 font-weight-normal">Follow on:</p>
                        <a href="#" class="text-muted mr-1">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-muted mr-1">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-muted mr-1">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-muted">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div class="mb-2">
                    <ul class="list-unstyled">
                        <li class="media">
                            <span class="w-25 text-black font-weight-normal">Dream profession: </span>
                            <label class="media-body"><?= $team[$_GET['index']]['prof'] ?></label>
                        </li>
                        <li class="media">
                            <span class="w-25 text-black font-weight-normal">Dream company: </span>
                            <label class="media-body"><?= $team[$_GET['index']]['company'] ?></label>
                        </li>
                        <li class="media">
                            <span class="w-25 text-black font-weight-normal">Email: </span>
                            <label class="media-body"><?= $team[$_GET['index']]['email'] ?></label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 pl-xl-3">
                <h5 class="font-weight-normal">Short intro</h5>
                <p><?= $team[$_GET['index']]['intro'] ?></p>
                <div class="my-2 bg-light p-2">
                    <p class="font-italic mb-0"><?= $team[$_GET['index']]['blurb'] ?></p>
                </div>
                <div class="mb-2 mt-2 pt-1">
                    <h5 class="font-weight-normal">Top skills</h5>
                </div>
                <div class="py-1">
                    <div class="progress">
                        <div id="skill1" class="progress-bar" role="progressbar" style="width:<?= $team[$_GET['index']]['skill1_perc'] ?>%" aria-valuenow="<?= $team[$_GET['index']]['skill1_perc'] ?>" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar-title"><?= $team[$_GET['index']]['skill1'] ?></div>
                            <span class="progress-bar-number"><?= $team[$_GET['index']]['skill1_perc'] ?></span>
                        </div>
                    </div>
                </div>
                <div class="py-1">
                    <div class="progress">
                        <div id="skill2" class="progress-bar" role="progressbar" style="width:<?= $team[$_GET['index']]['skill2_perc'] ?>%" aria-valuenow="<?= $team[$_GET['index']]['skill2_perc'] ?>" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar-title"><?= $team[$_GET['index']]['skill2'] ?></div>
                            <span class="progress-bar-number"><?= $team[$_GET['index']]['skill2_perc'] ?></span>
                        </div>
                    </div>
                </div>
                <div class="py-1">
                    <div class="progress">
                        <div id="skill3" class="progress-bar" role="progressbar" style="width:<?= $team[$_GET['index']]['skill3_perc'] ?>%" aria-valuenow="<?= $team[$_GET['index']]['skill3_perc'] ?>" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar-title"><?= $team[$_GET['index']]['skill3'] ?></div>
                            <span class="progress-bar-number"><?= $team[$_GET['index']]['skill3_perc'] ?></span>
                        </div>
                    </div>
                </div>
                <h5 class="font-weight-normal">Fun fact</h5>
                <p><?= $team[$_GET['index']]['funfact'] ?></p>
            </div>
        </div>
    </div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>