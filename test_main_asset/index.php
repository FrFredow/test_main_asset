<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de Contact</title>
  <!-- Lien vers le fichier CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="contact-form">
    <h2>Contactez-nous</h2>
    <form action="submit_contact.php" method="POST">
      <label for="name">Nom :</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message :</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit">Envoyer</button>
    </form>
  </div>

</body>
</html>