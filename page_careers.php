<?php

/*
Template Name: Careers
*/
?>


<?php get_header(); ?>

    <section class="row">
        <div class="twelve columns postVerbiage">
<!-- BEGIN PAGE PHP -->
            <p class="bold1"><span class="bold">Job Title: </span>
            <?php
                $jobtitle = get_field( "job_title" );
                if( $jobtitle ) { echo $jobtitle ; }
            ?>
            </p>

            <p><span class="bold">Date Posted: <span>
            <?php
                $dateposted = get_field( "date_posted" );
                if( dateposted ) { echo $dateposted  ; }
            ?>
            </p>

            <p><span class="bold">Reports To: </span>
            <?php
                $reportsto = get_field( "reports_to" );
                if( $reportsto ) { echo $reportsto ; }
            ?>
            </p>

            <p><span class="bold">Location: </span>
            <?php
                $location = get_field( "location" );
                if( $location ) { echo $location ; }
            ?>
            </p>

            <p><span class="bold">Employee Type: </span>
            <?php
                $employeetype = get_field( "employee_type" );
                if( $employeetype ) { echo $employeetype ; }
            ?>
            </p>

            <p><span class="bold">Manages Others? </span>
            <?php
                $managesothers = get_field( "manages_others" );
                if( $managesothers ) { echo $managesothers ; }
            ?>
            </p>

            <p><span class="bold">Position Description: </span>
            <ul>
            <?php
                $positiondescription = get_field( "position_description" );
                if( $positiondescription ) { echo $positiondescription ; }
            ?>
            </ul>
            </p>

            <p><span class="bold">Primary Responsibilities: </span>
            <ul>
            <?php
                $primaryresponsibilities = get_field( "primary_responsibilities" );
                if( $primaryresponsibilities ) { echo $primaryresponsibilities ; }
            ?>
            </ul>
            </p>

            <p><span class="bold">Education and Experience: </span>
            <ul>
            <?php
                $educationandexperience = get_field( "education_and_experience" );
                if( $educationandexperience ) { echo $educationandexperience ; }
            ?>
            </ul>
            </p>

            <p><span class="bold">Physical Demands: </span>
            <ul>
            <?php
                $physicaldemands = get_field( "physical_demands" );
                if( $physicaldemands ) { echo $physicaldemands ; }
            ?>
            </ul>
            </p>


<!-- END PAGE PHP -->
        </div>
    </section>

<?php get_footer(); ?>