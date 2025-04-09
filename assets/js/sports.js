document.addEventListener('DOMContentLoaded', function() {
    const messageContainer = document.getElementById('message-container');

    document.querySelectorAll('form[method="POST"]').forEach(form => {
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            
            messageContainer.innerHTML = `
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <div class="spinner-border spinner-border-sm me-2" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    Processing...
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            `;
            
            const formData = new FormData(this);
            
            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                
                // Replace the loading indicator with the result
                const alertType = result.status === 'success' ? 'alert-success' : 'alert-danger';
                messageContainer.innerHTML = `
                    <div class="alert ${alertType} alert-dismissible fade show" role="alert">
                        ${result.message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                `;

            } catch (error) {
                // In case of network error
                messageContainer.innerHTML = `
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Server communication error
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                `;
            }
        });
    });
});
