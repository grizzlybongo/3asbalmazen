
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const displayBtn = document.querySelectorAll('button')[1];


    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const nom = document.getElementById('nom').value;
        const prenom = document.getElementById('prenom').value;
        alert(`Inscription confirmée pour ${prenom} ${nom}!`);
    });


    displayBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const nom = document.getElementById('nom').value;
        const prenom = document.getElementById('prenom').value;
        const email = document.getElementById('email').value;
        const telephone = document.getElementById('telephone').value;
        const type = document.getElementById('type').value;
        const messageDiv = document.querySelector('.form-message');
        
        messageDiv.innerHTML = `
            <strong>Informations:</strong><br>
            Nom: ${nom}<br>
            Prénom: ${prenom}<br>
            Email: ${email}<br>
            Téléphone: ${telephone}<br>
            Type: ${type}
        `;
    });
});
