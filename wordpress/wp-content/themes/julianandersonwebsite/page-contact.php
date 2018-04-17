<?php

/**
 * Template Name: Contact Page
 */

	// Message Vars
$msg = '';
$msgClass = '';
    
        // Check For Submit
if (filter_has_var(INPUT_POST, 'submit')) {
            // Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    
            // Check Required Fields
    if (!empty($email) && !empty($name) && !empty($message) && !empty($telepon)) {
                // Passed
                // Check Email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                    // Failed
            $msg = 'Please use a valid email';
            $msgClass = 'alert-danger';
        } else {
                    // Passed
            $toEmail = 'julianjca11@gmail.com';
            $subject = 'Contact Request From ' . $name;
            $body = '<h2>Contact Request</h2>
                        <h4>Name</h4><p>' . $name . '</p>
                        <h4>Email</h4><p>' . $email . '</p>
                        <h4>Message</h4><p>' . $message . '</p>
                    ';
    
                    // Email Headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
    
                    // Additional Headers
            $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

            if (mail($toEmail, $subject, $body, $headers)) {
                        // Email Sent
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            } else {
                        // Failed
                $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
            }
        }
    } else {
                // Failed
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
}
get_header();
?>

<section class="section-about">
    <div class="discover">
            <h2>Hit me up through my email.</h2>
        </div>
        <div class="letscreate ">
            <h1>LET'S TALK</h1>
        </div>
    </section>
    <?php
    while (have_posts()) :
        the_post();

    get_template_part('template-parts/content', 'page');

			// If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;

    endwhile; // End of the loop.
    ?>

	

<?php
get_footer();
?>