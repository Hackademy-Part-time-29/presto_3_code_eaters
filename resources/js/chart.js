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

        myLabels = myData
            .map((count, i) => (count > 0 ? `prezzo${i + 1}` : null))
            .filter(label => label !== null);
        myData = myData.filter(count => count > 0);
        // console.log(`Intervallo: ${interval}`);
        // console.log(`myLabels: ${myLabels}`);
        // console.log(`myData: ${myData}`);
    } else {
        
    }
    
    // let myLabels = ["prezzo1", "prezzo2", "prezzo3", "prezzo4", "prezzo5", "prezzo6", "prezzo6", "prezzo6", "prezzo6", "prezzo6"];
    // let myData = [1, 1, 1, 1, 1, 1, 3, 4, 5, 7];

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
