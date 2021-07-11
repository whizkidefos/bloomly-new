<?php get_header(); ?>

<section class="about-header">
    <div class="uk-container uk-text-center">
        <h1>Who are we?</h1>
        <p>
        Bloomly is an all-in-one home health testing company for everyone. We empower our customers all over the UK to take control of their own health. Founded in 2017, and headquartered in Manchester, Bloomly is 100% founder owned. Our blood tests and health checks are quick, accurate, and confidential, providing you with the information you need to improve your health and wellbeing.
        </p>
    </div>
</section>

<section class="about-showcase">
    <div class="uk-container">
        <div class="uk-child-width-1-3@m" uk-grid>
            <div class="">
                <div class="about-showcase-icon"><i class="fad fa-flask"></i></div>
                <h4>NHS Certified Laboratories</h4>
                <p>All of our tests are carried out to the highest standards in an NHS accredited laboratory. Our Lab and the tests we offer are the same as used by GP's and medical specialists within both the private sector and the NHS.</p>
            </div>
            <div class="">
                <div class="about-showcase-icon"><i class="fas fa-users-medical"></i></div>
                <h4>Experienced medical team </h4>
                <p>Our experienced medical team, of qualified doctors and nurses, are with you for every step of the testing process</p>
            </div>
            <div class="">
                <div class="about-showcase-icon"><i class="fas fa-vials"></i></div>
                <h4>Clinically validated tests</h4>
                <p>Performing all work to the highest possible level of quality and compliance. Clinical Pathology Accreditation (CPA) and Good Clinical Practice (GCP) are the minimum foundations upon which our standards of work are based.</p>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('components/thoughts'); ?>

<section class="about-data-protection">
    <div class="uk-container uk-text-center">
        <h3>Consumer Data Protection</h3>
        <p>
        Your data belongs to you and we take it very seriously to ensure you have complete control of it. We never sell our clients' information, and we protect their information with cutting-edge, bank-grade encryption. Only the labs and clinicians who are involved in our testing procedure have access to customer information. In any published study we produce, we will always anonymize, de-identify, and aggregate data. For more information, see our complete privacy policy.
        </p>
        <strong>Take control of your health</strong>
        <a href="<?php get_site_url() ?>/tests" class="bloomly-btn-blue">View health tests</a>
    </div>
</section>

<?php get_template_part('components/ssl-data-protection'); ?>

<?php get_footer(); ?>