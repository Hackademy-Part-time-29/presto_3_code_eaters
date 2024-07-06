import { Chart, registerables } from 'chart.js';

Chart.register(...registerables);

document.addEventListener('DOMContentLoaded', () => {
    
    const { price, articles } = data;
    const ctx = document.getElementById('myChart').getContext('2d');

    let myLabels = [];
    let myData = [];
    
    if (articles.length>0) {
        const numLabels = Math.min(articles.length, 10);
        const interval = price / numLabels;

        myData = new Array(numLabels).fill(0);

        articles.forEach(article => {
            for (let i = 0; i < numLabels; i++) {
                const min = i * interval;
                const max = (i + 1) * interval;

                if (article.price > min && article.price <= max) {
                    myData[i]++;
                    break;
                }
            }
           
        });

        const formatPrice = (value) => {
            return new Intl.NumberFormat('it-IT', { minimumFractionDigits: 2, maximumFractionDigits: 2 }).format(value);
        };

        myLabels = myData
            .map((count, i) => (count > 0 ? `< ${formatPrice((i + 1) * interval)} €` : null))
            .filter(label => label !== null);
        myData = myData.filter(count => count > 0);
    } else {
        
    }

    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: myLabels,
            datasets: [{
                data: myData,
                backgroundColor: '#e6e6e6',
                borderColor: '#737373',
                borderWidth: 1,
                label: '',
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            // Mostra solo l'etichetta e il valore, rimuovendo il quadratino del colore
                            return `${context.label}: ${context.raw}`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    display: false,
                    beginAtZero: true
                },
                x: {
                    display: false
                }
            }
        }
    });
    // console.log(price);
    // console.log(articles);
});
