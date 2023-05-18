<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.P.L.A</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- ... tus otras etiquetas meta y enlaces a CSS ... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-... tu código de integridad ... " crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/cabecera.css">

</head>

<body>
    <!-- <iframe src="../cabecera.html" frameborder="0" scrolling="no" width="100%" height="100"></iframe> -->
    <?php include 'menu.html'; ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1><strong> Contact us </strong></h1>
                <form id="contact-form" action="https://formspree.io/f/xdovjjvl" method="POST">
                    <div class="form-group">
                        <label for="email">Your email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your message:</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <!-- your other form fields go here -->
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
            <div class="col-lg-2 text-xl-center">
                <h4><strong>Follow Us </strong></h4>
                <ul class="list-unstyled">
                <li><a href="https://www.facebook.com/groups/1294488344756687" target="_blank"><i class="fab fa-facebook fa-lg"></i></a></li><br>
                    <li><a href="#"><i class="fab fa-twitter fa-lg"></i></a></li><br>
                    <li><a href="#"><i class="fab fa-instagram fa-lg"></i></a></li><br>
                    <li><a href="https://wa.link/nn3p85"  target="_blank"><i class="fab fa-whatsapp fa-lg"></i></a></li><br>
                </ul>
            </div>
        </div>
    </div>

    <script>
        // Obtener el formulario por su ID
        var form = document.getElementById("contact-form");

        // Agregar un evento "submit" al formulario
        form.addEventListener("submit", function(event) {
            // Obtener los valores de los campos de entrada
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;

            // Enviar el formulario
            form.submit();

            // Borrar los valores de los campos de entrada después de enviar el formulario
            document.getElementById("email").value = "";
            document.getElementById("message").value = "";

            // Prevenir que el formulario se envíe normalmente
            event.preventDefault();
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>