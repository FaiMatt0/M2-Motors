// This file contains JavaScript related to the services offered by the mechanic, handling dynamic content or interactions on the services page.

document.addEventListener('DOMContentLoaded', function() {
    const servicesList = document.getElementById('services-list');

    const services = [
        { name: 'Cambio Olio', description: 'Cambi olio regolari per mantenere il tuo motore in perfette condizioni.' },
        { name: 'Controllo Freni', description: 'Ispezione accurata dei sistemi frenanti per la tua sicurezza.' },
        { name: 'Rotazione Pneumatici', description: 'Prolungamento della vita dei tuoi pneumatici con rotazioni regolari.' },
        { name: 'Controllo Batteria', description: 'Verifica dello stato della batteria per partenze affidabili.' },
        { name: 'Diagnostica Motore', description: 'Utilizzo di strumenti avanzati per diagnosticare problemi al motore.' }
    ];

    if(servicesList) {
        services.forEach(service => {
            const listItem = document.createElement('li');
            listItem.innerHTML = `<strong>${service.name}</strong>: ${service.description}`;
            servicesList.appendChild(listItem);
        });
    }
});