document.querySelectorAll('.annuler-btn').forEach(btn => {
    btn.addEventListener('click', async function() {
        const reservationId = this.dataset.id;
        
        if (confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')) {
            try {
                const response = await fetch(`/SPORTIFY/includes/cancel_reservation.php`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ 
                        _method: 'DELETE', 
                        id: reservationId 
                    })
                });
                
                const result = await response.json();
                
                if (result.status === 'success') {
                    this.closest('tr').remove();
                    alert('Réservation annulée avec succès');
                } else {
                    alert('Erreur : ' + result.message);
                }
                
            } catch (error) {
                alert('Erreur de communication avec le serveur');
            }
        }
    });
});