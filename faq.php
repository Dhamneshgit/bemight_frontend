<?php include 'header.php'; ?>
<link rel="stylesheet" href="assets/css/style.css" />

<section class="faqSection  ">
    <div class="container">
        <h3><span>Frequently</span> Asked Questions</h3>
        <div class="accordionFaq">
            <div class="accordion__item">
                <div class="accordion__header" data-toggle="#faq1">
                How To Download The application
                </div>
                <div class="accordion__content" id="faq1">
                    <p>
                    First, go to Play Store and search Bemight app click on the install button, and install the application	
                    </p>
                </div>
            </div>

 
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const togglers = document.querySelectorAll("[data-toggle]");

        togglers.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                const selector = e.currentTarget.dataset.toggle;
                const block = document.querySelector(`${selector}`);
                if (e.currentTarget.classList.contains("active")) {
                    block.style.maxHeight = "";
                } else {
                    block.style.maxHeight = block.scrollHeight + "px";
                }

                e.currentTarget.classList.toggle("active");
            });
        });
    });
</script>