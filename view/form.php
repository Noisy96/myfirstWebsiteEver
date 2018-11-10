		<!-- For displaying whether the message was sent or not -->
		<script type="text/javascript">
			<?php
				if($_GET['test'])?>
					alert("message sent");
		</script>


		<div class="form-div">
			<form action="../model/sendMail.php" method="post">
				<div class="form-header">
					<p>Formulaire de contact</p>
				</div>
				<div class="form-content">
					<p><label for="name">Nom et Prénom</label><input type="text" name="name" id="name" placeholder="Ex: John Doe" maxlength="30" required></p>
					<p><label for="email">E-Mail</label><input type="email" name="email" id="email" placeholder="exemple@gmail.com" maxlength="30" required></p>
					<p><label for="nmr-telephone">№ Téléphone</label><input type="number" name="nmr-telephone" id="nmr-telephone" placeholder="Optionel"></p>
					<p><label for="niveau-etude">Niveau</label>
						<select name="niveau-etude" id="niveau-etude">
							<option disabled selected hidden value="non-etudiant">Si vous êtes un étudiant(e)</option>
							<option value="L1">L1</option>
							<option value="L2">L2</option>
							<option value="L3">L3</option>
							<option value="M1">M1</option>
							<option value="M2">M2</option>
							<option value="D">D</option>
						</select>
					</p>
					<p><label for="objet">Objet</label><input type="text" name="objet" id="objet" placeholder="Ex: Demande 	attestation" maxlength="30" required></p>
					<p><label for="message">Message</label><br><textarea placeholder="Votre bref et claire message ici" name="message" id="message" required></textarea></p>
					<button type="submit" id="form-submit">Envoyer</button>
				</div>
			</form>
		</div>