   const horas = ['06h', '07h', '08h', '09h', '10h', '11h', '12h', '13h', '14h', '15h', '16h', '17h', '18h'];

        // Números fixos de exemplo. Depois eles virão do banco.
        const entradas = [12, 43, 105, 88, 29, 20, 53, 38, 25, 33, 46, 33, 15];
        const saidas   = [5, 12, 17, 23, 34, 38, 46, 48, 19, 17, 29, 100, 85];

        new Chart(document.getElementById('graficoHorario'), {
            type: 'bar',
            data: {
                labels: horas,
                datasets: [
                    { label: 'Entradas', data: entradas, backgroundColor: '#2fc65b' },
                    { label: 'Saídas',   data: saidas,   backgroundColor: '#ff3b3b' }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: { y: { beginAtZero: true, max: 120 } },
                plugins: { legend: { position: 'bottom' } }
            }
        });