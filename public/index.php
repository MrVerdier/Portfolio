<?php
$sTitle = 'Verdier - Web Development And Design';
require_once 'top.php';
?>
<!------------------ HOME ------------------->
<!-- <div id="loader"></div> -->

<div id="fullpage">
    <section id="home" class="page section" data-anchor="page1">
    <div id="top-of-site-pixel-anchor"></div>
        <div class="section-wrapper">
            <div>
                <h1>Home</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Integer sed libero in nunc mollis fringilla a ac nulla.
                    Maecenas sit amet lorem ut tortor tristique tempor. </p>
            </div>
        </div>
    </section>
    
    <!------------------ MORE ------------------->
    
    <section id="about" class="page section" data-anchor="page2">

        <div class="section-wrapper">
            <div>
                <h1>About</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Integer sed libero in nunc mollis fringilla a ac nulla.
                    Maecenas sit amet lorem ut tortor tristique tempor. </p>
                </div>
            </div>
        </section>

    
    
    <!------------------ EVEN MORE ------------------->

    <section id="projects" class="page section" data-anchor="page3">
        <!-- <div id="top-of-site-anchorTwo"></div> -->
        <div class="section-wrapper">
            <div>
                <h1>Projects</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Integer sed libero in nunc mollis fringilla a ac nulla.
                    Maecenas sit amet lorem ut tortor tristique tempor. </p>
            </div>
        </div>
    </section>


<!------------------ CONTACT ------------------->

    <section id="contact" class="page section" data-anchor="page4">
        <!-- <div id="top-of-site-anchorThree"></div> -->
        <div class="section-wrapper">
            <div>
                <h1>Contact</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Integer sed libero in nunc mollis fringilla a ac nulla.
                    Maecenas sit amet lorem ut tortor tristique tempor. </p>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript" src="../node_modules/fullpage.js/dist/fullpage.extensions.min.js"></script>
<script> 
    new fullpage("#fullpage", {

        anchors:['page1', 'page2', 'page3', 'page4'],
        section: '.section',

        navigation: true,
        navigationPosition: 'left', 
        navigationTooltips: ['Home', 'About', "Projects", "Contact"],
	    showActiveTooltip: true,

        animationDuration: 200,
        animationTiming: 'ease',
        animationTransform: 'transform',
        
        pagination: true,
        keyboard: true,
        touchLimit: 100,
        loop: false,
        onLeave: null,
        afterLoad: null,
        dragAndMove: true
    })

</script>

<?php
$sLinkToScript = '<script src="../scripts/one-page.js"></script>';
require_once 'bottom.php';
?>