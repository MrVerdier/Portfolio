<?php
$sTitle = 'Verdier - Web Development And Design';
require_once 'top.php';
?>
<!------------------ HOME ------------------->
<!-- <div id="loader"></div> -->

<div id="fullpage">
    <section id="home" class="page section" data-anchor="page1">
        <div class="section-wrapper">
                <div id="introText">
                    <div class="scroll-hide">
                        <div>Hygger.</div>
                        <div>Anders.</div>
                        <div>Frontender.</div>
                        <div>Designer.</div>
                        <div>Musician.</div>
                        <div>Coder.</div>
                        <div>Verdier.</div>
                        <div>Frontender.</div>
                        <div>Musician.</div>
                        <div>Danish.</div>
                        <div>Anders.</div>
                        <div>Designer.</div>
                        <div>Coffeedrinker.</div>
                        <div>Designer.</div>
                        <div>Frontender.</div>
                        <div>Musician.</div>
                        <div>Gamer.</div>
                        <div>Designer.</div>
                        <div>Frontender.</div>
                        <div>Hygger.</div>
                        <div>Anders.</div>
                    </div>
                </div>
        </div>
    </section>
    
    <!------------------ MORE ------------------->
    
    <section id="about" class="page section" data-anchor="page2">
        <div class="section-wrapper">
                <div class="about-content">1</div>
                <div class="about-content">2</div>
        </section>

    <!------------------ PROJECTS ------------------->

    <section id="projects" class="page section" data-anchor="page3">
        <div class="section-wrapper">
            <div class="section-description">
                <h1>Projects</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Integer sed libero in nunc mollis fringilla a ac nulla.
                    Maecenas sit amet lorem ut tortor tristique tempor. </p>
                </div>
                    <div id="projectScroll">
                        <div class="project-container">1</div>
                        <div class="project-container">2</div>
                        <div class="project-container">3</div>
                        <div class="project-container">4</div>
                        <div class="project-container">4</div>
                        <div class="project-container">4</div>
                        <div class="project-container">4</div>
                    </div>
        
        </div>
    </section>

<!------------------ CONTACT ------------------->

    <section id="contact" class="page section" data-anchor="page4">
        <div class="section-wrapper">
                <h1>Contact</h1>
                <form id="frmContact">    
                    <div>Can I help?</div>
                    <input type="text" name="mail" placeholder="Your email">
                    <textarea name="message" rows="10" placeholder="Your message"></textarea>
                    <button>Send</button>
                </form>
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
<style>
    #fp-nav {
        top: 10%;
    }
    
    #fp-nav ul li {
        margin: 12px 7px;
        width: 80px;
        text-transform: uppercase;

    }

    #fp-nav ul li .fp-tooltip {
        font-family: 'Montserrat', sans-serif!important;
    }

    #fp-nav ul li a span {
        background: none;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent; 
        border-left:10px solid #fff; 
        border-radius: 0;
        margin: -6px 5px;
        left: 10%;
        top: 20%
    }

    #fp-nav ul li a.active span {
        border-radius: 0;
    }

    #fp-nav ul li:hover a.active span {
        border-radius: 0;
    }
    


</style>

<?php
require_once 'bottom.php';
?>