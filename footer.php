<footer class="footer">
    <div class="container">
        <div class="contact-form">
            <form action="process_contact.php" method="post">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="sujet">Sujet :</label>
                <input type="text" id="sujet" name="sujet" required>

                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <!-- inclure un champ caché pour l'ID de l'utilisateur connecté si nécessaire -->
                <input type="hidden" name="id_utilisateur" value="ID_UTILISATEUR">

                <button type="submit">Envoyer</button>
            </form>
        </div>
        <p>&copy; 2023 DBMD 974 - Tous droits réservés</p>
    </div>
</footer>
