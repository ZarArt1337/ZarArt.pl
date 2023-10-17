<?php ;?>

<section id="contact" class="mail-form my-2 py-5 t-color">
    <div class="col-12 contact text-center">
        <p class="display-3 text-center font-2nd pb-5">Kontakt</p>
        <form method="post" action="send.php" class="px-5">
            <div class="text-center form-group">
                <div class="mb-3">
                <label for="name" class="py-3">Imię:</label>
                <input class="p-4 form-control" type="text" name="name" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="py-3">Email:</label>
                    <input class="p-4 form-control" type="email" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="py-3">Wiadomość:</label>
                    <textarea class="p-4 form-control" rows="7" name="message" id="message" required></textarea>
                </div>
                <div class="mb-3 py-3">
                    <input type="submit" name="submit" value="Wyślij" class="btn-offert px-4 py-2 submit-btn">
                </div>
            </div>
        </form>
    </div> 
</section>

<?php ;?>