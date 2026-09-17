</main><!-- #content -->

<footer id="footer" class="container" role="contentinfo">
<p>ANEPA Tremplin • 13 rue des Augustins 69001 Lyon • Tél. 04 72 07 02 02 • <a href="mentionslegales.php">Mentions légales</a> • <a href="contact.php">Contact</a></p>
</footer>

<button onclick="topFunction()" id="btBackTop" title="Haut de la page"> </button>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script type="text/javascript">
    // Get the button:
    let mybutton = document.getElementById("btBackTop");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    // <!-- BACK TO TOP -->
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }

    // $(document).ready(function() {
    //     $('.carousel').carousel()
    // });


</script>

</body>
</html>
