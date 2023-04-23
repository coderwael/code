<?php
session_start();
include_once('include/config.php');
$title = 'be school academy';
include_once('include/header.php');
?>
<style>
    .programHeroSection {
        padding-top: 95px;
        padding-bottom: 95px;
        background-color: #ff7733;
        color: #fff;
    }

    .programPage .container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .programHeroSection .heroContent {
        max-width: 450px;
    }

    .textLabel {
        text-transform: uppercase;
        border-radius: 4px;
        padding: 3px 6px;
        font-size: 12px;
        font-weight: 700;
        line-height: 17px;
        background-color: rgb(245 242 239);
        color: #ff5500;
    }

    .heroTitle {
        font-size: 40px;
        font-weight: 800;
        line-height: 54px;
        color: #FFF;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .heroDescription {
        color: #FFF;
        font-size: 15px;
        line-height: 25px;
    }

    .sectionsTabs {
        position: sticky;
        top: 85px;
        background-color: #fff;
        z-index: 500;
        padding-left: 20px;
    }



    .tabs {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: start;
        justify-content: flex-start;
        border-bottom: 1px solid #EDF1F5;
        width: -webkit-fill-available;
        position: sticky;
        background: #fff;
        top: 72px;
    }

    .sectionsTab {
        font-size: 14px;
        font-weight: 400;
        border-bottom: 1px solid #EDF1F5;
        padding: 14px 0;
        cursor: pointer;
        position: relative;
        top: 1px;
        margin: 0 10px;
        transition: border-bottom 0.2s;
    }

    .sectionsTab:hover {
        border-bottom: 1px solid #fc5c00;
    }

    .boxprogramSection {
        width: 50%;
    }

    .sectionTitle {
        color: #24343F;
        font-size: 24px;
        font-weight: 700;
        line-height: 35px;
    }

    .boxprogramSection {
        padding: 15px 20px;
    }

    .overlay {
        height: 40px;
        background: linear-gradient(to top, #fafbfc, transparent);
        position: absolute;
        bottom: 70px;
        left: 0;
        right: 0;
    }

    .descriptionParagraph {
        font-size: 18px;
        font-weight: 400;
        line-height: 29px;
        color: #4C6373;
        line-height: 29px;
    }

    .btn-read-more {
        color: #fd7633;
        border: 1px solid #f97432;
        padding: 10px 20px;
        background: white;
        border-radius: 80px;
        font-weight: 700;
        line-height: 25px;
        cursor: pointer;
        margin-top: 11px;
        transition: color, background .1s linear;
    }

    .btn-read-more:hover {
        color: #ffffff;
        background: #f97432;
    }


    .boxprogram {
        display: flex;
    }




































    .boxprogramDetailsCard {
        width: 50%;
        position: relative;
        margin-top: -340px;
    }

    .programDetailsCard {
        display: flex;
        flex-direction: column;
        box-sizing: border-box;
        border-bottom: 1px solid #EDF1F5;
        position: sticky;
        top: 130px;
        width: 100%;
        background-color: #fff;
        box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.05);
        margin-bottom: 25px;
        overflow: hidden;
        border-radius: 10px;
        width: 460px;
        float: right;
    }

    .programImg {
        width: -webkit-fill-available;
        height: 170px;
        object-fit: cover;
    }

    .detailsContainer {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 100%;
        padding: 25px;
    }

    .programPace {
        color: #a0a0a0;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .programDifficulty {
        display: flex;
        flex-direction: column;
    }

    .difficultyTitle {
        font-size: 16px;
        color: #a0a0a0;
        margin-bottom: 10px;
    }

    .difficulties {
        display: flex;
        flex-wrap: nowrap;
        justify-content: center;
        margin-bottom: 10px;
    }



    .difficultyLabel {
        padding: 5px 10px;
        border-radius: 50px;
        font-size: 14px;
        margin-right: 10px;
    }

    .textLabel {
        display: flex;
        align-items: center;
    }

    .labelIcon {
        width: 12px;
        height: 12px;
        margin-right: 5px;
    }

    .programDetailsBullets {
        margin-top: 10px;
    }

    .bulletItem {
        color: #a0a0a0;
        font-size: 16px;
        margin-bottom: 10px;
        list-style: outside;
        margin-left: 15px;
    }

    .applyBtn {
        margin-top: 20px;
        background-color: #fc5c00;
        border: none;
        border-radius: 50px;
        color: #fff;
        font-size: 18px;
        padding: 15px;
        cursor: pointer;
        width: 100%;
        float: right;
        transition: background-color 0.2s;
        letter-spacing: -.02rem;
        font-weight: 700;
    }

    .applyBtn:hover {
        background-color: #da5000;
    }

    .footerText {
        margin-top: 10px;
        color: #a0a0a0;
        font-size: 14px;
        text-align: center;
    }

    @media only screen and (max-width: 768px) {}

    li.bulletItem::marker {
        color: #fc5c00;
    }








    .price {
        font-size: 24px;
        font-weight: bold;
        color: #2f2f2f;
        font-family: Arial, sans-serif;
        margin-bottom: 3px;
    }






    .buy-box {
        display: flex;
    }

    .add-to-cart-btn {
        background-color: #fc5c00;
        width: 100%;
        color: #fff;
        height: 2.8rem;
        font-weight: 700;
        line-height: 1.2;
        letter-spacing: -.02rem;
        font-size: 1.0rem;
        margin-right: 15px;
        border: 0;
        border-radius: 25px;
        cursor: pointer;
    }

    .add-to-wishlist-btn {
        color: #1c1d1f;
        background-color: transparent;
        border: 1px solid #1c1d1f;
        min-width: auto;
        height: 2.8rem;
        align-items: center;
        cursor: pointer;
        display: inline-flex;
        justify-content: center;
        -webkit-user-select: none;
        vertical-align: bottom;
        white-space: nowrap;
        width: 4.8rem;
        border-radius: 5px;
        position: sticky;
    }


    #loading-msg {
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        background: #ffffff;
        border-radius: 13px;
    }

    .preloader-gif {
        position: absolute;
        z-index: 1;
        background: none;
        background-position: center center;
        background-repeat: no-repeat;
        background-image: url(images/icons/preloader.svg);
        background-size: 30px;
        width: 100%;
        height: 100%;
        transition: 0.5s linear;
    }

    .img-wishlist {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -40%);
        position: absolute;
    }
</style>

<?php

// Get user ID and username from session variables
$user_id = $_SESSION['id'];
$username = $_SESSION['username'];
// $course_id = 9988; // ID of the course to add/remove from wishlist

if (isset($_GET['course_url'])) {
    $course_url = filter_input(INPUT_GET, 'course_url', FILTER_SANITIZE_STRING);
    $stmt = mysqli_prepare($conn, "SELECT * FROM `courses` WHERE `course_url` = ?");
    mysqli_stmt_bind_param($stmt, "s", $course_url);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $coursedata = mysqli_fetch_assoc($result);
    } else {
        include_once('404.php');
        exit;
    }
} else {
    include_once('404.php');
    exit;
}

// // Select user data from database based on username
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username = ?");
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user_data = mysqli_fetch_assoc($result);

// Check if user submitted form with name "addwishlist"
if (isset($_POST['addwishlist'])) {
    $course_id = $coursedata['id_course']; // ID of the course to add/remove from wishlist

    // Check if course is already saved in user's wishlist
    $stmt = mysqli_prepare($conn, "SELECT * FROM saveplaylist WHERE id_user = ? AND id_course = ?");
    mysqli_stmt_bind_param($stmt, "ii", $user_data['id'], $course_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        // Course already saved, remove from wishlist
        $stmt = mysqli_prepare($conn, "DELETE FROM saveplaylist WHERE id_user = ? AND id_course = ?");
        mysqli_stmt_bind_param($stmt, "ii", $user_data['id'], $course_id);
        mysqli_stmt_execute($stmt);
        echo "Course removed from wishlist.";
    } else {
        // Course not saved, add to wishlist
        $stmt = mysqli_prepare($conn, "INSERT INTO saveplaylist (id_user, id_course) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ii", $user_data['id'], $course_id);
        mysqli_stmt_execute($stmt);
        echo "Course added to wishlist.";
    }


}
    // Prepare SQL statement to check if course is saved for user
    $stmt = mysqli_prepare($conn, "SELECT * FROM `saveplaylist` WHERE `id_user` = ? AND `id_course` = ?");
    mysqli_stmt_bind_param($stmt, "ii", $user_data['id'], $coursedata['id_course']);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    $status = (mysqli_num_rows($result) > 0) ? "active" : "no active";
    

?>
<div class="contact">
    <div class="programPage">
        <div class="programHeroSection">
            <div class="container">
                <span class="textLabel">Specialization</span>
                <div class="heroContent">
                    <h1 class="heroTitle"><?php echo $coursedata['course_name']; ?></h1>
                    <p class="heroDescription">we will take you through a comprehensive journey in which we start from introducing the basics and terms of user interaction and user experience</p>
                </div>
            </div>
        </div>
        <div class="contentContainer">
            <div class="sectionsTabs">
                <div class="container">
                    <div class="tabs">
                        <div class="sectionsTab">Description</div>
                        <div class="sectionsTab">What you'll learn</div>
                        <div class="sectionsTab">Instructors</div>
                    </div>
                    <div class="boxprogram">
                        <div class="boxprogramSection">
                            <div class="programSection descriptionSection">
                                <h2 class="sectionTitle ">Description</h2>
                                <div class="programSectionContent">
                                    <div class="collapseContainer">
                                        <div class="collapseContent">
                                            <div class="overlay"></div>
                                            <p class="descriptionParagraph">This course is focusing on a contemporary educational philosophy, known as STEAM education. STEAM is the integration of five main disciplines: **Science, Technology, Engineering, Arts and Mathematics**. The core idea of STEAM philosophy is to provide meaningful experiences by **linking education to the real-world**.STEAM education is also intended to develop various skills needed for the work force such as problem solving and critical thinking. The course presents suggestions and recommendations for infusing STEAM into the educational systems in the Arab region by focusing on the school culture, how teachers work and interact, and how students learn with an emphasis on **quality**. Whether you are a **teacher, student or parent** this course can be of interest to you.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="boxprogramDetailsCard">
                            <div class="programDetailsCard"><img class="programImg" src="image/business-data.jpg" alt="program image">

                                <div class="detailsContainer">
                                    <div class="price">$<?php echo $coursedata['course_price']; ?></div>
                                    <span class="programPace">Self-paced course - you can start learning now</span>
                                    <div class="programDifficulty">
                                        <h5 class="difficultyTitle">Difficulty:</h5>
                                        <div class="difficulties"><span class="textLabel difficultyLabel" style="background-color: rgb(203, 255, 235); color: rgb(17, 194, 125);"><img class="labelIcon" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOSIgaGVpZ2h0PSI4IiB2aWV3Qm94PSIwIDAgOSA4IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNNC44IDBMOC45NTY5MiA3LjJIMC42NDMwNzhMNC44IDBaIiBmaWxsPSIjQjRDM0NGIi8+Cjwvc3ZnPgo=" alt="icon">Beginner</span><span class="textLabel difficultyLabel" style="background-color: rgb(233, 246, 251);"><img class="labelIcon" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxMiAxMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTYgMEwxMiA2TDYgMTJMMCA2TDYgMFoiIGZpbGw9IiNCNEMzQ0YiLz4KPC9zdmc+Cg==" alt="icon">Intermediate</span><span class="textLabel difficultyLabel" style="background-color: rgb(233, 246, 251);"><img class="labelIcon" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxMiAxMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTYgMEwxMS4xOTYyIDNWOUw2IDEyTDAuODAzODQ4IDlWM0w2IDBaIiBmaWxsPSIjQjRDM0NGIi8+Cjwvc3ZnPgo=" alt="icon">Advanced</span></div>
                                    </div>
                                    <div class="programDetailsBullets">
                                        <ul>
                                            <li class="bulletItem">Lifetime access</li>
                                            <li class="bulletItem">Graded exams</li>
                                            <li class="bulletItem">Certificate of completion</li>
                                            <li class="bulletItem">Start Date 01/01/2023</li>
                                        </ul>
                                    </div>

                                    <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="wishlist-form">

                                        <div class="buy-box">
                                            <button class="add-to-cart-btn">Add to Cart</button>
                                            <button class="add-to-wishlist-btn" name="addwishlist" id="addwishlist">
                                                <div id="loading-msg" style="display: none;">
                                                    <div class="preloader-gif"></div>
                                                </div>
                                                <div class="img-wishlist">
                                                    <?php
                                                    // Display message based on status
                                                    if ($status == "active") {
                                                        echo '<svg id="wishlist" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"></path></svg>';
                                                    } else {
                                                        echo '<svg id="wishlist" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 21.593c-5.63-5.539-11-10.297-11-14.402 0-3.791 3.068-5.191 5.281-5.191 1.312 0 4.151.501 5.719 4.457 1.59-3.968 4.464-4.447 5.726-4.447 2.54 0 5.274 1.621 5.274 5.181 0 4.069-5.136 8.625-11 14.402m5.726-20.583c-2.203 0-4.446 1.042-5.726 3.238-1.285-2.206-3.522-3.248-5.719-3.248-3.183 0-6.281 2.187-6.281 6.191 0 4.661 5.571 9.429 12 15.809 6.43-6.38 12-11.148 12-15.809 0-4.011-3.095-6.181-6.274-6.181" /></svg>';
                                                    }
                                                    ?>
                                                </div>
                                            </button>
                                        </div>
                                        <button name="enrollnow" type="submit" class="btn edraakBtn btn-primary btn-rounded btn-lg btn-block applyBtn">Enroll now</button>
                                    </form>
                                    <span class="footerText">Join thousands of happy learners</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<script>
    let description = document.querySelector('.descriptionParagraph').textContent;
    let overlay = document.querySelector('.overlay');

    let isShortDescription = description.length <= 365;

    if (!isShortDescription) {
        // If the text is longer than 365 characters, add a "Read more" button
        let limitedDescription = description.substring(0, 365);
        document.querySelector('.descriptionParagraph').textContent = limitedDescription + ' ...';

        let readMoreBtn = document.createElement('button');
        readMoreBtn.classList.add('btn-read-more');
        readMoreBtn.textContent = 'Read more';

        // Find the element with class "collapseContent" and add the button as a child element
        let collapseContent = document.querySelector('.collapseContent');
        collapseContent.appendChild(readMoreBtn);

        readMoreBtn.addEventListener('click', function() {
            if (readMoreBtn.textContent === 'Read more') {
                // If the button says "Read more", show the full text and change the button text to "Read less"
                document.querySelector('.descriptionParagraph').textContent = description;
                readMoreBtn.textContent = 'Read less';
                overlay.style.display = 'none';
            } else {
                // If the button says "Read less", hide the full text and change the button text to "Read more"
                document.querySelector('.descriptionParagraph').textContent = limitedDescription + '...';
                readMoreBtn.textContent = 'Read more';
                overlay.style.display = 'block';
            }
        });
    } else {
        // If the text is shorter than 365 characters, hide the "Read more" button (if it exists) and the overlay
        let readMoreBtn = document.querySelector('.btn-read-more');
        if (readMoreBtn !== null) {
            readMoreBtn.style.display = 'none';
            overlay.style.display = 'none';
        }
    }
</script>
<?php
include_once('include/footer.php');
?>
