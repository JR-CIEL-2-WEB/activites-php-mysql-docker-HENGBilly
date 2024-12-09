<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tri des Nombres</title>
    <script>
        document.addEventListener('DOMContentLoaded', async () => {
            const numbers = [];

            // Demander à l'utilisateur de saisir 5 entiers via des prompts
            for (let i = 1; i <= 5; i++) {
                let input = prompt(`Entrez le nombre ${i} :`);
                let num = parseInt(input);

                // Vérification de la saisie pour s'assurer que c'est un entier
                if (!isNaN(num)) {
                    numbers.push(num);
                } else {
                    alert(`Veuillez entrer un entier valide pour le nombre ${i}.`);
                    i--; // Redemander la saisie si l'utilisateur n'entre pas un entier valide
                }
            }

            // Afficher les nombres saisis dans la console pour debug
            console.log("Nombres saisis : ", numbers);

            try {
                // Créer l'URL avec le paramètre list en JSON
                const url = `https://84cc97ac-615d-49c2-805c-2b6b63df2429.mock.pstmn.io/?list=${JSON.stringify(numbers)}`;
                
                console.log("URL envoyée :", url);

                // Envoi de la requête GET vers le serveur mock avec les nombres dans l'URL
                const response = await fetch(url);

                // Vérification si la réponse du serveur est correcte
                if (!response.ok) {
                    throw new Error('Erreur serveur');
                }

                // Lire la réponse JSON
                const result = await response.json();

                // Affichage de la réponse brute pour debug
                console.log("Réponse brute du serveur : ", result);

                // Si la réponse contient un tableau trié, afficher les résultats
                if (result.sorted) {
                    document.getElementById('result').textContent = "Nombres triés : " + result.sorted.join(', ');
                } else {
                    document.getElementById('result').textContent = "Erreur : " + result.error || 'Réponse invalide du serveur';
                }
            } catch (error) {
                // En cas d'erreur (réseau, serveur, etc.)
                document.getElementById('result').textContent = "Une erreur est survenue : " + error.message;
            }
        });
    </script>
</head>
<body>
    <h1>Tri des Nombres</h1>

    <div id="result" style="margin-top: 20px; font-weight: bold;"></div>
</body>
</html>
